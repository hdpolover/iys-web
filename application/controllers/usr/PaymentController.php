<?php

class PaymentController extends CI_Controller{
    public function __construct(){
        parent::__construct();
        if($this->session->userdata('role') != '1'){
            redirect('/');
        }
        
        $this->load->model('User');
        $this->load->model('Announcement');
        $this->load->model('ParticipantDetail');
        $this->load->model('PaymentType');
        $this->load->model('PaymentStatus');
        $this->load->model('PaymentTransaction');

        $this->load->library('Paymentconf');

        // $params = array('server_key' => 'Mid-server-gXaK3X0M-oZhY4RPL0g2Mt_z', 'production' => true);
        $params = array('server_key' => 'SB-Mid-server-qC8YfWnkcF_fjPrZmuNEwb8P', 'production' => false);
		$this->load->library('Midtrans');
		$this->midtrans->config($params);
        
        // $params = array('server_key' => 'Mid-server-gXaK3X0M-oZhY4RPL0g2Mt_z', 'production' => true);
        $params = array('server_key' => 'SB-Mid-server-qC8YfWnkcF_fjPrZmuNEwb8P', 'production' => false);
		$this->load->library('veritrans');
		$this->veritrans->config($params);
    }
    public function index(){
        $data['title']          = "Payment";
        $data['sidebar']        = "payment";

        $paymentTypes = $this->PaymentType->getAll();
        $index        = 0;
        foreach ($paymentTypes as $paymentType) {
            $paymentStatus = $this->PaymentStatus->get(['id_payment_type' => $paymentType->id_payment_type, 'id_user' => $this->session->userdata('id_user')]);
            if($paymentStatus == null){
                $formData['id_user']            = $this->session->userdata('id_user');
                $formData['id_payment_type']    = $paymentType->id_payment_type;
                $formData['status']             = 1;
                $formData['is_active']          = $index == 0 ? '1' : '0';
                $this->PaymentStatus->insert($formData);
            }
            $index++;
        }

        $data['paymentStatuses'] = $this->getQueryStatus($this->session->userdata('id_user'));
        
        $this->template->user('usr/payment/index', $data);
        $this->ParticipantDetail->resetAnnouncement(['id_user' => $this->session->userdata('id_user'), 'id_summit' => '1']);
    }
    public function detail($id){
        $data['title']          = "Announcement";
        $data['sidebar']        = "announcement";
        $data['announcements']  = $this->Announcement->get(['id_summit' => '1', 'is_registered' => '1', 'orderBy' => 'date DESC']);
        $data['announcement']   = $this->Announcement->getById($id);
        
        $this->template->user('usr/announcement/detail', $data);
    }
    public function choosePayment(){
        $data['title']          = "Choose Payment Method";
        $data['sidebar']        = "payment";
        
        $this->template->user('usr/payment/method_payment', $data);
    }
    public function history($id){
        $data['title']          = "Payment History";
        $data['sidebar']        = "payment";
        $data['historys']       = $this->getQueryHistory($this->session->userdata('id_user'), $id);
        
        $this->template->user('usr/payment/history', $data);
    }
    public function token(){
        $idUser         = $this->session->userdata('id_user');
        $user           = $this->User->getById($idUser);
        $userDetail     = $this->ParticipantDetail->getById($idUser);
        $name           = explode(' ', $user->name);

        $transaction_details = array(
            'order_id' => rand(),
            'gross_amount' => $_POST['total'], // no decimal allowed for creditcard
        );        
        $item1_details = array(
            'id' => 'a1',
            'price' => $_POST['total'],
            'quantity' => 1,
            'name' => $_POST['item']
        );

        $customer_details = array(
            'first_name'    => $name[0],
            'last_name'     => end($name),
            'email'         => $user->email,
            'phone'         => $userDetail->whatsapp_number
        );

        $credit_card['secure'] = true;

        $time = time();
        $custom_expiry = array(
            'start_time' => date("Y-m-d H:i:s O",$time),
            'unit' => 'hour', 
            'duration'  => 24
        );
        
        $transaction_data = array(
            'transaction_details'=> $transaction_details,
            'item_details'       => array($item1_details),
            'customer_details'   => $customer_details,
            'credit_card'        => $credit_card,
            'expiry'             => $custom_expiry
        );

        error_log(json_encode($transaction_data));
        $snapToken = $this->midtrans->getSnapToken($transaction_data);
        error_log($snapToken);
        echo $snapToken;
    }
    public function finish(){
        $result         = json_decode($this->input->post('result_data'));
        $idUser         = $this->session->userdata('id_user');
        $paymentType    = $this->PaymentType->getById($this->input->post('payment_type'));

        $formData['id_payment_transaction'] = "TRANS".$result->order_id.explode('_', $idUser)[1];
        $formData['id_user']                = $idUser;
        $formData['id_payment_type']        = $paymentType->id_payment_type;
        $formData['order_id']               = $result->order_id;
        $formData['item']                   = $paymentType->description;
        $formData['total']                  = $result->gross_amount;
        $formData['date']                   = $result->transaction_time;
        $formData['date_expired']           = date("Y-m-d H:i:s", strtotime($result->transaction_time.'+1 days'));
        $formData['status']                 = $this->paymentconf->convertStatus($result->transaction_status);
        $formData['status_title']           = $result->transaction_status;

        $this->db->where(['id_user' => $idUser, 'id_payment_type' => $paymentType->id_payment_type])->update('payment_status', ['status' => '2']); 

        $methodDetails = $this->paymentconf->methodDetail($result, site_url());
        foreach ($methodDetails as $methodDetail) {
            $formData[$methodDetail['column']] = $methodDetail['value'];
        }
        $this->PaymentTransaction->insert($formData);
        redirect('payment/status/'.$formData['id_payment_transaction']);
    }
    public function status($id){
        $data['title']          = "Payment Status";
        $data['sidebar']        = "payment";

        $paymentDetail = $this->PaymentTransaction->getById($id);
        $status = $this->veritrans->status($paymentDetail->order_id);
        $this->PaymentTransaction->update(['id_payment_transaction' => $id, 'status' => $this->paymentconf->convertStatus($status->transaction_status)]);

        $data['paymentDetail']  = $this->PaymentTransaction->getById($id);
        

        $this->template->user('usr/payment/trans_payment', $data);
    }
    public function checkStatus(){
        $trans = $this->PaymentTransaction->getById($_POST['idTrans']);
        $status = $this->veritrans->status($trans->order_id);

        $data['statCode']   = $this->paymentconf->convertStatus($status->transaction_status);

        if($data['statCode'] != $trans->status){
            $this->PaymentTransaction->update(['id_payment_transaction' => $_POST['idTrans'], 'status' => $data['statCode']]);
            $this->db->where(['id_user' => $trans->id_user, 'id_payment_type' => $trans->id_payment_type])->update('payment_status', ['status' => $data['statCode']]);
        }
        
        echo json_encode($data);
    }
    public function getQueryStatus($idUser){
        return $this->db->query("
            SELECT ps.*, pt.*
            FROM payment_status ps , payment_types pt 
            WHERE 
                ps.id_user = '".$idUser."'
                AND ps.is_active = '1'
            	AND ps.id_payment_type = pt.id_payment_type
            ORDER BY ps.status ASC, ps.id_payment_type ASC
        ")->result();
    }
    public function getQueryHistory($id, $idPayment){
        return $this->db->query("
            SELECT 
                pt2.*, pt.*
            FROM 
                payment_transaction pt , 
                payment_types pt2 
            WHERE 
                pt.id_user = '".$id."'
                AND pt.id_payment_type = '".$idPayment."'
                AND pt.id_payment_type = pt2.id_payment_type
            ORDER BY date DESC
        ")->result();
    }
}