<?php

class FrontController extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('Announcement');
        $this->load->model('User');
    }
    public function signIn(){
        if($this->session->userdata('role') == '1'){
            redirect('announcement');
        }

        $data['title']      = 'Sign In';
        
        $this->template->frontWithoutTopBar('sign_in', $data);
    }
    public function signUp(){
        if($this->session->userdata('role') == '1'){
            redirect('announcement');
        }

        $dateExpired  = "August 31, 2022 23:59:59";
        $dateNow      = date("Y-m-d H:i:s");

        if(strtotime($dateNow) > strtotime($dateExpired)){
            $this->session->set_flashdata('err_msg', 'Oops, registration time has passed, try next year :)');
            redirect('sign-in');
        }
        
        $data['title']      = 'Sign Up';
        
        $this->template->frontWithoutTopBar('sign_up', $data);
    }
    public function verifEmail($token){
        
        $this->load->library('encryption');
        $token = str_replace('-', '+', $token);
        $token = str_replace('_', '/', $token);
        $token = $this->encryption->decrypt($token);

        $data     = explode(';', $token);
        $currDate = date('Y-m-d H:i');
        
        $user = $this->User->getById($data[0]);
        if($user->is_verif == "1") redirect('sign-in');

        if($user->id_user != $data[0]) redirect('sign-in');
        if($currDate > date_format(date_create($data[1]), 'Y-m-d H:i')) $this->load->view('email/verif', ['id' => $data[0]]);

        $this->User->update(['id_user' => $data[0], 'is_verif' => 1]);
        $this->session->set_userdata('is_verif', 1);
        $this->session->set_flashdata('succ_msg', 'Congratulations your email has been verified');
        $this->session->set_flashdata('succ_alert', 'Congratulations your email has been verified');
        redirect('sign-in');        
    }
    public function resendEmail($idUser){
        $this->User->update(['id_user' => $idUser, 'token_regis' => $this->encryption->encrypt($idUser.';'.date('Y-m-d H:i', strtotime("+1 day")))]);

        $user = $this->User->getById($idUser);
        $usr['email']       = $user->email;
        $usr['name']        = $user->name;
        $usr['token_regis'] = $user->token_regis;

        $this->mail->send($usr['email'], 'Email Verification', $this->load->view('email/register', $usr, true));
        redirect('announcement');
    }
    public function about(){
        $data['title']      = 'About IYS';
        $data['topBar']     = 'about';
        $data['isBgDark']   = true;
        
        $this->template->front('about', $data);
    }
    public function partnerSponsor(){
        $data['title']      = 'Partnership & Sponsorship';
        $data['topBar']     = 'partner-sponsor';
        $data['isBgDark']   = true;
        
        $this->template->front('partner_sponsor', $data);
    }
    public function ourTeam(){
        $data['title']      = 'Our Team';
        $data['topBar']     = 'team';
        $data['isBgDark']   = true;
        
        $this->template->front('team', $data);
    }
    public function faq(){
        $data['title']      = 'FAQ';
        $data['topBar']     = 'faq';
        $data['isBgDark']   = true;
        
        $this->template->front('faq', $data);
    }
    public function privacyPolicy(){
        $data['title']      = 'Privacy & Policy';
        $data['topBar']     = '';
        $data['isBgDark']   = true;
        
        $this->template->front('privacy_policy', $data);
    }
    public function announcementGeneral(){
        $data['title']      = 'Announcement';
        $data['topBar']     = 'announcement-general';
        $data['isBgDark']   = true;
        $data['announcements'] = $this->Announcement->get(['is_registered' => 0, 'orderBy' => 'date DESC']);
        
        $this->template->front('announcement_general', $data);
    }
    public function announcementGeneralDetail($id){
        $data['title']          = 'Announcement Detail';
        $data['topBar']         = 'announcement-general';
        $data['isBgDark']       = true;
        $data['announcement']   = $this->Announcement->getById($id);
        
        $this->template->front('announcement_general_detail', $data);
    }
}