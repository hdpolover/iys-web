<?php

class ParticipantController extends CI_Controller{
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
        $data['title']          = 'Participant';
        $data['sidebar']        = 'participant';
        $data['participants']   = $this->User->get(['id_user_role' => '1']);
        
        $this->template->admin('adm/participant/index', $data);
    }
    public function detail($id){
        $data['title']      = 'Detail Participant';
        $data['sidebar']    = 'participant';
        $data['pDetail']    = $this->ParticipantDetail->getById($id);

        $this->template->admin('adm/participant/detail', $data);
    }
    public function add(){
        print_r("sjd");
    }
    public function edit($id){
        $data['title']      = 'Edit Participant';
        $data['sidebar']    = 'participant';
        $data['pDetail']    = $this->ParticipantDetail->getById($id);

        $this->template->admin('adm/participant/detail', $data);
    }
    public function changePassword(){
        $this->User->update(['id_user' => $_POST['id'], 'password' => hash('sha256', md5($_POST['pass']))]);
        $this->session->set_flashdata('succ_msg', 'Successfully change password!');
        redirect('admin/participant');
    }
}