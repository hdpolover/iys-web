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
    public function changePassword(){
        $this->User->update(['id_user' => $_POST['id'], 'password' => hash('sha256', md5($_POST['pass']))]);
        $this->session->set_flashdata('succ_msg', 'Successfully change password!');
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