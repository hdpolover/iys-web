<?php

class AuthController extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('Admin');
    }
    public function index(){
        redirect('admin/sign-in');
    }
    public function signIn(){
        $this->load->view('adm/auth/sign_in');
    }
    public function login(){
        $admin = $this->Admin->get(['username' => $_POST['username'], 'password' => hash('sha256', md5($_POST['password']))]);
        if($admin == null){
            $this->session->set_flashdata('err_msg', 'Your username or password is wrong');
            redirect('admin/sign-in');
        }

        $this->setSession($admin[0]->id_admin, $admin[0]->username, $admin[0]->role);

        if($admin[0]->role == '6'){
            redirect('admin/announcement-public');
        }
        redirect('admin/dashboard');
    }
    public function logout(){
        $this->session->sess_destroy();
        redirect('/');
    }
    public function setSession($idAdmin, $username, $role){
        $formSession['id_admin']    = $idAdmin;
        $formSession['username']    = $username;
        $formSession['role']        = $role;
        $formSession['is_logged']   = true;
        $this->session->set_userdata($formSession);
    }
}