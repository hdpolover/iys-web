<?php

class AuthController extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('Ambassador');
    }
    public function index(){
        redirect('affiliate/sign-in');
    }
    public function signIn(){
        $this->load->view('aff/auth/sign_in');
    }
    public function login(){
        $ambassador = $this->Ambassador->get(['referral_code' => $_POST['referral']]);
        if($ambassador == null){
            $this->session->set_flashdata('err_msg', 'Your affliate code is wrong');
            redirect('affiliate/sign-in');
        }

        $this->setSession($ambassador[0]->referral_code);
        redirect('affiliate/dashboard');
    }
    public function logout(){
        $this->session->sess_destroy();
        redirect('/');
    }
    public function setSession($referralCode){
        $formSession['referral_code']   = $referralCode;
        $formSession['role']            = '5';
        $this->session->set_userdata($formSession);
    }
}