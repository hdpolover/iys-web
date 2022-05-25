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

        $params = array('server_key' => 'SB-Mid-server-IgrJW0Rn59m14rGnA30QyPL5', 'production' => false);
		$this->load->library('Midtrans');
		$this->midtrans->config($params);
        
        $params = array('server_key' => 'SB-Mid-server-IgrJW0Rn59m14rGnA30QyPL5', 'production' => false);
		$this->load->library('Veritrans');
		$this->veritrans->config($params);
    }
    public function index(){
        $data['title']          = "Payment";
        $data['sidebar']        = "payment";
        
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
        $result = json_decode($this->input->post('result_data'));
        $order  = $this->veritrans->status($result->order_id);
    }
    public function status(){
        $data['title']          = "Payment Status";
        $data['sidebar']        = "payment";

        $this->load->view('usr/payment/trans_payment', $data);
    }
}