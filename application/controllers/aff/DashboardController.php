<?php

class DashboardController extends CI_Controller{
    public function __construct(){
        parent::__construct();
        if($this->session->userdata('role') != "5"){
            redirect('/');
        }
        $this->load->model('Ambassador');
        $this->load->model('ParticipantDetail');
    }
    public function index(){
        $data['title']      = 'Dashboard';
        $data['sidebar']    = 'dashboard';

        $ambassador = $this->Ambassador->get(['referral_code' => $this->session->userdata('referral_code')]);
        $data['totalRegis']     = $this->getRegis($ambassador[0]->referral_code);
        $data['totalSubmit']    = $this->getSubmit($ambassador[0]->referral_code);
        $data['ambassador']     = $ambassador;
       
        $this->template->affiliate('aff/dashboard/index', $data);
    }
    public function getTotalRegis(){
        return $this->db->query()->result();
    }
    public function getRegis($referralCode){
        return $this->db->query("
            SELECT  u.email , u.name , pd.nationality  
            FROM participant_details pd , users u 
            WHERE pd.referral_code = '".$referralCode."' AND pd.id_user = u.id_user 
        ")->result();
    }
    public function getSubmit($referralCode){
        return $this->db->query("
            SELECT  u.email , u.name , pd.nationality  
            FROM participant_details pd , users u 
            WHERE pd.register_affiliate = '".$referralCode."' AND pd.id_user = u.id_user 
        ")->result();
    }
}