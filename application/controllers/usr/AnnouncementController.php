<?php

class AnnouncementController extends CI_Controller{
    public function __construct(){
        parent::__construct();
        if($this->session->userdata('role') != '1'){
            redirect('/');
        }
        
        $this->load->model('User');
    }
    public function index(){
        $data['title']      = "Announcement";
        $data['sidebar']    = "announcement";
        $this->template->user('usr/announcement/index', $data);
    }
}