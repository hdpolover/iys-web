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
    }
    public function index(){
        $data['title']          = 'Payment';
        $data['sidebar']        = 'payment';
        $data['payments']       = $this->User->get(['id_user_role' => '1']);
        
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
        $payStatus = $this->PaymentStatus->get(['id_user' => $this->session->userdata('id_user'), 'is_active' => '0']);
        if($payStatus != null){
            $this->PaymentStatus->update(['id_payment_status' => $payStatus[0]->id_payment_status, 'is_active' => '1']);
        }
        $this->session->set_flashdata('succ_msg', 'Successfully update payment!');
        redirect('admin/payment');
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