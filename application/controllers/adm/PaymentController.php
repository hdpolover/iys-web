<?php

class PaymentController extends CI_Controller{
    public function __construct(){
        parent::__construct();
        if($this->session->userdata('role') != "0"){
            redirect('/');
        }
        $this->load->model('Admin');
        $this->load->model('User');
        $this->load->model('ParticipantDetail');
        $this->load->model('PaymentStatus');
        $this->load->model('PaymentTransaction');

        $this->load->library('Paymentconf');

        $params = array('server_key' => 'Mid-server-gXaK3X0M-oZhY4RPL0g2Mt_z', 'production' => true);
        // $params = array('server_key' => 'SB-Mid-server-qC8YfWnkcF_fjPrZmuNEwb8P', 'production' => false);
		$this->load->library('veritrans');
		$this->veritrans->config($params);
    }
    public function index(){
        $data['title']          = 'Payment';
        $data['sidebar']        = 'payment';
        $data['payments']       = $this->User->get(['id_user_role' => '1', 'orderBy' => 'name ASC']);
        
        $this->template->admin('adm/payment/index', $data);
    }
    public function history($id){
        $data['title']      = 'Payment History';
        $data['sidebar']    = 'payment';
        $data['user']       = $this->User->getById($id);
        $data['historys']   = $this->getQueryHistory($id);

        $this->template->admin('adm/payment/history', $data);
    }
    public function add(){
        $data['title']          = 'Add Payment';
        $data['sidebar']        = 'payment';
        
        $this->template->admin('adm/payment/add', $data);
    }
    public function validation(){
        $paymentStatus = $this->PaymentStatus->get(['id_payment_type' => $_POST['id_payment_type'], 'id_user' => $_POST['id_user']])[0];

        if($_POST['status'] == '3' && ($_POST['method_type'] != 'paypal' && $_POST['method_type'] != 'manual_transfer')){
            $paymentTransaction = $this->PaymentTransaction->getById($_POST['id_payment_transaction']);
            $this->veritrans->cancel($paymentTransaction->order_id);
        }

        $this->PaymentTransaction->update(['id_payment_transaction' => $_POST['id_payment_transaction'], 'status' => $_POST['status'], 'status_title' => $this->paymentconf->convertStatusTitle($_POST['status'])]);
        $this->PaymentStatus->update(['id_payment_status' => $paymentStatus->id_payment_status, 'status' => $_POST['status']]);
        
        if($_POST['status'] == '6'){
            $payStatus = $this->PaymentStatus->get(['id_user' => $_POST['id_user'], 'is_active' => '0']);
            if($payStatus != null){
                $this->PaymentStatus->update(['id_payment_status' => $payStatus[0]->id_payment_status, 'is_active' => '1']);
            }
        }

        $this->session->set_flashdata('succ_msg', 'Successfully update payment!');
        redirect('admin/payment/history/'.$_POST['id_user']);
    }
    public function getQueryHistory($id){
        return $this->db->query("
            SELECT 
                pt2.*, pt.*
            FROM 
                payment_transaction pt , 
                payment_types pt2 
            WHERE 
                pt.id_user = '".$id."'
                AND pt.id_payment_type = pt2.id_payment_type 
            ORDER BY date DESC
        ")->result();
    }
}