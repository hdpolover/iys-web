<?php

class AnnouncementController extends CI_Controller{
    public function __construct(){
        parent::__construct();
        if($this->session->userdata('role') != "0"){
            redirect('/');
        }
        $this->load->model('Admin');
    }
    public function index(){
        $data['title']      = 'Announcement';
        $data['sidebar']    = 'announcement';

        $this->template->admin('adm/announcement/index', $data);
    }
}