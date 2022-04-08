<?php

class ParticipantDetailController extends CI_Controller{
    public function __construct(){
        parent::__construct();
        if($this->session->userdata('role') != '1'){
            redirect('/');
        }
        
        $this->load->model('User');
    }
    public function index(){
        $data['title']      = "Personal Info";
        $data['sidebar']    = "personal-info";
        $data['countries']  = $this->db->get('countries')->result();
        $this->template->user('usr/participant-detail/index', $data);
    }
}