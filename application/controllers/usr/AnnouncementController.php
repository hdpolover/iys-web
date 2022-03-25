<?php

class AnnouncementController extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('User');
    }
    public function index(){
        $this->load->view('usr/announcement/index');
    }
}