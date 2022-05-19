<?php

class PaymentController extends CI_Controller{
    public function __construct(){
        parent::__construct();
        if($this->session->userdata('role') != '1'){
            redirect('/');
        }
        
        $this->load->model('User');
        $this->load->model('Announcement');
        $this->load->model('ParticipantDetail');
    }
    public function index(){
        $data['title']          = "Payment";
        $data['sidebar']        = "payment";
        
        $this->template->user('usr/payment/index', $data);
        $this->ParticipantDetail->resetAnnouncement(['id_user' => $this->session->userdata('id_user'), 'id_summit' => '1']);
    }
    public function detail($id){
        $data['title']          = "Announcement";
        $data['sidebar']        = "announcement";
        $data['announcements']  = $this->Announcement->get(['id_summit' => '1', 'is_registered' => '1', 'orderBy' => 'date DESC']);
        $data['announcement']   = $this->Announcement->getById($id);
        
        $this->template->user('usr/announcement/detail', $data);
    }
}