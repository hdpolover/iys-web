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
        $this->load->library('upload');

        $params = array('server_key' => 'Mid-server-gXaK3X0M-oZhY4RPL0g2Mt_z', 'production' => true);
        // $params = array('server_key' => 'SB-Mid-server-qC8YfWnkcF_fjPrZmuNEwb8P', 'production' => false);
		$this->load->library('Midtrans');
		$this->midtrans->config($params);
        
        $params = array('server_key' => 'Mid-server-gXaK3X0M-oZhY4RPL0g2Mt_z', 'production' => true);
        // $params = array('server_key' => 'SB-Mid-server-qC8YfWnkcF_fjPrZmuNEwb8P', 'production' => false);
		$this->load->library('veritrans');
		$this->veritrans->config($params);
    }
    public function index(){
        $data['title']          = "Payment";
        $data['sidebar']        = "payment";

        $paymentTypes = $this->PaymentType->get(['is_extended' => $this->session->userdata('is_extended')]);
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

        $paymentActive = $this->PaymentStatus->get([
            'id_user'       => $this->session->userdata('id_user'), 
            'is_active '    => '1', 
            'orderBy'       => 'id_payment_status DESC', 
            'limit'         => '1'
        ]);

        if($paymentActive != null){
            $paymentTrans = $this->PaymentTransaction->get([
                'id_user'           => $paymentActive[0]->id_user,
                'id_payment_type'   => $paymentActive[0]->id_payment_type,
                'orderBy'           => 'date DESC',
                'limit'             => '1'
            ]);
            // print_r($paymentTrans[0]);
            if($paymentTrans != null){
                if($paymentTrans[0]->method_type != 'paypal' && $paymentTrans[0]->method_type != 'manual_transfer'){
                    $status         = $this->veritrans->status($paymentTrans[0]->order_id);
                    $status         = $this->paymentconf->convertStatus($status->transaction_status);
                    $statusTitle    = $this->paymentconf->convertStatusTitle($status);

                    if($status != $paymentTrans[0]->status){
                        $this->PaymentTransaction->update([
                            'id_payment_transaction'    => $paymentTrans[0]->id_payment_transaction, 
                            'status'                    => $status,
                            'status_title'              => $statusTitle
                        ]);
    
                        $this->PaymentStatus->update(['id_payment_status' => $paymentActive[0]->id_payment_status, 'status' => $status]);
                        if($status == '6'){
                            $payStatus = $this->PaymentStatus->get(['id_user' => $paymentActive[0]->id_user, 'is_active' => '0']);
                            if($payStatus != null){
                                $this->PaymentStatus->update(['id_payment_status' => $payStatus[0]->id_payment_status, 'is_active' => '1']);
                            }
                        }
                    }
                }
            }
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
            'unit' => 'minute', 
            'duration'  => 15
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
        $formData['date_expired']           = date("Y-m-d H:i:s", strtotime($result->transaction_time.'+15 minutes'));
        $formData['status']                 = $this->paymentconf->convertStatus($result->transaction_status);
        $formData['status_title']           = $this->paymentconf->convertStatusTitle($formData['status']);

        $this->db->where(['id_user' => $idUser, 'id_payment_type' => $paymentType->id_payment_type])->update('payment_status', ['status' => '2']); 

        if($this->paymentconf->convertStatus($result->transaction_status) == '6'){
            $this->db->where(['id_user' => $idUser, 'id_payment_type' => $paymentType->id_payment_type])->update('payment_status', ['status' => '6']);
            $payStatus = $this->PaymentStatus->get(['id_user' => $idUser, 'is_active' => '0']);
            if($payStatus != null){
                $this->PaymentStatus->update(['id_payment_status' => $payStatus[0]->id_payment_status, 'is_active' => '1']);
            }
        }

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
    public function statusPaypal($id){
        $data['title']          = "Payment Status";
        $data['sidebar']        = "payment";
        $data['paymentDetail']  = $this->PaymentTransaction->getById($id);

        $this->template->user('usr/payment/trans_paypal', $data);
    }
    public function statusManual($id){
        $data['title']          = "Payment Status";
        $data['sidebar']        = "payment";
        $data['paymentDetail']  = $this->PaymentTransaction->getById($id);

        $this->template->user('usr/payment/trans_manual', $data);
    }
    public function checkStatus(){
        $trans = $this->PaymentTransaction->getById($_POST['idTrans']);
        $status = $this->veritrans->status($trans->order_id);

        $data['statCode']   = $this->paymentconf->convertStatus($status->transaction_status);

        if($data['statCode'] != $trans->status){
            $this->PaymentTransaction->update(['id_payment_transaction' => $_POST['idTrans'], 'status' => $data['statCode'], 'status_title' => $this->paymentconf->convertStatusTitle($data['statCode'])]);
            $this->db->where(['id_user' => $trans->id_user, 'id_payment_type' => $trans->id_payment_type])->update('payment_status', ['status' => $data['statCode']]);

            if($data['statCode'] == '6'){
                $payStatus = $this->PaymentStatus->get(['id_user' => $trans->id_user, 'is_active' => '0']);
                if($payStatus != null){
                    $this->PaymentStatus->update(['id_payment_status' => $payStatus[0]->id_payment_status, 'is_active' => '1']);
                }
            }
        }
        
        echo json_encode($data);
    }
    public function paypalTransaction(){
        $idPaymentType = $_POST['id_payment_type'];
        $idUser         = $this->session->userdata('id_user');
        $orderId        = rand();
        $paymentType    = $this->PaymentType->getById($idPaymentType);
        $idTrans        = "TRANS".rand().explode('_', $idUser)[1];
        $currDate       = date('Y-m-d H:i:s');

        $this->db->where(['id_user' => $idUser, 'id_payment_type' => $idPaymentType])->update('payment_status', ['status' => 2]);

        $formData['id_payment_transaction'] = $idTrans;
        $formData['id_user']                = $idUser;
        $formData['id_payment_type']        = $idPaymentType;
        $formData['order_id']               = $orderId;
        $formData['item']                   = $paymentType->description;
        $formData['total']                  = $paymentType->amount;
        $formData['method_img']             = site_url('assets/img/payment/paypal.png');
        $formData['method_type']            = 'paypal';
        $formData['method_name']            = 'paypal';
        $formData['date']                   = $currDate;
        $formData['date_expired']           = date("Y-m-d H:i:s", strtotime($currDate.'+15 minutes'));
        $formData['status']                 = 2;
        $formData['status_title']           = 'pending';

        print_r($formData);
        $this->PaymentTransaction->insert($formData);

        redirect('payment/status-paypal/'.$idTrans);
    }
    public function manualTransaction(){
        $idPaymentType = $_POST['id_payment_type'];
        $idUser         = $this->session->userdata('id_user');
        $orderId        = rand();
        $paymentType    = $this->PaymentType->getById($idPaymentType);
        $idTrans        = "TRANS".rand().explode('_', $idUser)[1];
        $currDate       = date('Y-m-d H:i:s');

        $uploadEvidence = $this->uploadImage($idUser);
        if($uploadEvidence['status'] == false){
            $this->session->set_flashdata('err_msg', $uploadEvidence['msg']);
            redirect('payment');
        }

        $this->db->where(['id_user' => $idUser, 'id_payment_type' => $idPaymentType])->update('payment_status', ['status' => 2]);

        $formData['id_payment_transaction'] = $idTrans;
        $formData['id_user']                = $idUser;
        $formData['id_payment_type']        = $idPaymentType;
        $formData['order_id']               = $orderId;
        $formData['item']                   = $paymentType->description;
        $formData['total']                  = $paymentType->amount;
        $formData['method_img']             = site_url('assets/img/payment/'.$_POST['method_payment'].'.png');
        $formData['method_type']            = 'manual_transfer';
        $formData['method_name']            = $_POST['method_payment'];
        $formData['date']                   = $currDate;
        $formData['date_expired']           = date("Y-m-d H:i:s", strtotime($currDate.'+15 minutes'));
        $formData['status']                 = 2;
        $formData['status_title']           = 'pending';
        $formData['evidence']               = $uploadEvidence['link'];
        $formData['remarks']                = $_POST['remarks'];

        $this->PaymentTransaction->insert($formData);

        redirect('payment/status-manual/'.$idTrans);
    }
    public function cancel(){
        $paymentTrans = $this->PaymentTransaction->getById($_POST['id']);
        $this->veritrans->cancel($paymentTrans->order_id);
        $this->PaymentTransaction->update(['id_payment_transaction' => $_POST['id'], 'status' => '3', 'status_title' => 'cancel']);
        $this->db->query("UPDATE payment_status SET status = '3' WHERE id_user = '".$paymentTrans->id_user."' AND id_payment_type = '".$paymentTrans->id_payment_type."'");
        redirect('payment/status-paypal/'.$_POST['id']);
    }
    public function paypalCancel(){
        $paymentTrans = $this->PaymentTransaction->getById($_POST['id']);
        $this->PaymentTransaction->update(['id_payment_transaction' => $_POST['id'], 'status' => '3', 'status_title' => 'cancel']);
        $this->db->query("UPDATE payment_status SET status = '3' WHERE id_user = '".$paymentTrans->id_user."' AND id_payment_type = '".$paymentTrans->id_payment_type."'");
        redirect('payment/status-paypal/'.$_POST['id']);
    }
    public function manualCancel(){
        $paymentTrans = $this->PaymentTransaction->getById($_POST['id']);
        $this->PaymentTransaction->update(['id_payment_transaction' => $_POST['id'], 'status' => '3', 'status_title' => 'cancel']);
        $this->db->query("UPDATE payment_status SET status = '3' WHERE id_user = '".$paymentTrans->id_user."' AND id_payment_type = '".$paymentTrans->id_payment_type."'");
        redirect('payment/status-manual/'.$_POST['id']);
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
    public function uploadImage($idUser){
        $path = "uploads/evidence";
        $conf['upload_path']    = $path;
        $conf['allowed_types']  = 'jpg|jpeg|png';
        $conf['max_size']       = 1024;
        $conf['file_name']      = time().$idUser;
        $conf['encrypt_name']   = true;
        $this->upload->initialize($conf);

        if ($this->upload->do_upload('evidence')) {
            $img = $this->upload->data();
            return [
                'status' => true,
                'msg'   => 'Data berhasil terupload',
                'link'  => base_url($path . '/' . $img['file_name'])
            ];
        } else {
            return [
                'status' => false,
                'msg'   => $this->upload->display_errors(),
            ];
        }
    }
}