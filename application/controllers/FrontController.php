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
        $data['title']      = 'About';
        $data['topBar']     = 'about';
        $data['isBgDark']   = true;
        
        $this->template->front('about', $data);
    }
    public function contact(){
        $data['title']      = 'Contact';
        $data['topBar']     = 'contact';
        $data['isBgDark']   = true;
        
        $this->template->front('contact', $data);
    }
}