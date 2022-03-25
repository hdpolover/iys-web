<?php

class FrontController extends CI_Controller{
    public function __construct(){
        parent::__construct();
    }
    public function signIn(){
        $data['title']      = 'Sign In';
        
        $this->template->frontWithoutTopBar('sign_in', $data);
    }
    public function signUp(){
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
}