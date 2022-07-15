<?php

class FrontController extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('Announcement');
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