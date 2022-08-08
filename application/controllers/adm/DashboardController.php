<?php

class DashboardController extends CI_Controller{
    public function __construct(){
        parent::__construct();
        if($this->session->userdata('role') != "0"){
            redirect('/');
        }
        $this->load->model('Admin');
        $this->load->model('Dashboard');
    }
    public function index(){
        $data['title']      = 'Dashboard';
        $data['sidebar']    = 'dashboard';

        $data['participantVerif']       = $this->Dashboard->getParticipantVerif()->TOTAL;
        // $data['participantUnVerif']     = $this->Dashboard->getParticipantUnVerif()->TOTAL;
        $data['participantSubmited']    = $this->Dashboard->getParticipantSubmited()->TOTAL;
        $data['participantChecked']     = $this->Dashboard->getParticipantChecked()->TOTAL;
        $data['participantAll']         = $this->Dashboard->getParticipantAll()->TOTAL;
        $data['registrationChart']      = $this->Dashboard->getRegistrationChart();
        $data['ageChart']               = $this->Dashboard->getAgeChart();
        $data['ambassadorChart']        = $this->Dashboard->getAmbassadorChart();

        $this->template->admin('adm/dashboard/index', $data);
    }
}