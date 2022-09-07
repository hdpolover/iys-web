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

        $data['regisSuccess']   = $this->Dashboard->getPaymentSuccess('8')->TOTAL;
        $data['regisPending']   = $this->Dashboard->getPaymentPending('8')->TOTAL;
        $data['regisCancel']    = $this->Dashboard->getPaymentCancel('8')->TOTAL;
        $data['regisExpired']   = $this->Dashboard->getPaymentExpired('8')->TOTAL;
        
        $data['batch1Success']  = $this->Dashboard->getPaymentSuccess('9')->TOTAL;
        $data['batch1Pending']  = $this->Dashboard->getPaymentPending('9')->TOTAL;
        $data['batch1Cancel']   = $this->Dashboard->getPaymentCancel('9')->TOTAL;
        $data['batch1Expired']  = $this->Dashboard->getPaymentExpired('9')->TOTAL;

        $data['batch2Success']  = $this->Dashboard->getPaymentSuccess('10')->TOTAL;
        $data['batch2Pending']  = $this->Dashboard->getPaymentPending('10')->TOTAL;
        $data['batch2Cancel']   = $this->Dashboard->getPaymentCancel('10')->TOTAL;
        $data['batch2Expired']  = $this->Dashboard->getPaymentExpired('10')->TOTAL;

        $data['totSuccess']     = (int)$data['regisSuccess'] + (int)$data['batch1Success'] + (int)$data['batch2Success'];
        $data['totPending']     = (int)$data['regisPending'] + (int)$data['batch1Pending'] + (int)$data['batch2Pending'];
        $data['totCancel']      = (int)$data['regisCancel'] + (int)$data['batch1Cancel'] + (int)$data['batch2Cancel'];
        $data['totExpired']     = (int)$data['regisExpired'] + (int)$data['batch1Expired'] + (int)$data['batch2Expired'];

        $data['midIncome']  = $this->Dashboard->getIncomeMidtrans()->TOTAL;
        $data['payIncome']  = $this->Dashboard->getIncomePaypal()->TOTAL;
        $data['manIncome']  = $this->Dashboard->getIncomeManual()->TOTAL;
        $data['totIncome']  = (int)$data['midIncome'] + (int)$data['payIncome'];

        $data['pendings']           = $this->Dashboard->getPendingPayment();
        $data['pendingsManual']     = $this->Dashboard->getPendingManualPayment();

        $data['popularMethods'] = $this->Dashboard->getPopularMethod();
        $data['succMethods']    = $this->Dashboard->getSuccessMethod();
        $data['failMethods']    = $this->Dashboard->getFailedMethod();

        $this->template->admin('adm/dashboard/index', $data);
    }
}