<?php

class DashboardController extends CI_Controller{
    public function __construct(){
        parent::__construct();
        if($this->session->userdata('role') != "5"){
            redirect('/');
        }
        $this->load->model('Ambassador');
        $this->load->model('ParticipantDetail');
        $this->load->model('Dashboard');
        $this->load->model('PaymentStatus');
    }
    public function index(){
        $data['title']      = 'Dashboard';
        $data['sidebar']    = 'dashboard';

        $ambassador = $this->Ambassador->get(['referral_code' => $this->session->userdata('referral_code')]);
        $data['totalRegis']     = $this->getRegis($ambassador[0]->referral_code);
        $data['totalSubmit']    = $this->getSubmit($ambassador[0]->referral_code);
        $data['totalPayment']   = $this->getTotalPayment($ambassador[0]->referral_code);
        $data['payments']       = $this->getDetailPayment($ambassador[0]->referral_code);
        $data['ambassador']     = $ambassador;
       
        $data['regisSuccess']   = $this->Dashboard->getPaymentSuccessAff('8', $ambassador[0]->referral_code)->TOTAL;
        $data['regisPending']   = $this->Dashboard->getPaymentPendingAff('8', $ambassador[0]->referral_code)->TOTAL;
        $data['regisCancel']    = $this->Dashboard->getPaymentCancelAff('8', $ambassador[0]->referral_code)->TOTAL;
        $data['regisExpired']   = $this->Dashboard->getPaymentExpiredAff('8', $ambassador[0]->referral_code)->TOTAL;
        
        $data['batch1Success']  = $this->Dashboard->getPaymentSuccessAff('9', $ambassador[0]->referral_code)->TOTAL;
        $data['batch1Pending']  = $this->Dashboard->getPaymentPendingAff('9', $ambassador[0]->referral_code)->TOTAL;
        $data['batch1Cancel']   = $this->Dashboard->getPaymentCancelAff('9', $ambassador[0]->referral_code)->TOTAL;
        $data['batch1Expired']  = $this->Dashboard->getPaymentExpiredAff('9', $ambassador[0]->referral_code)->TOTAL;

        $data['batch2Success']  = $this->Dashboard->getPaymentSuccessAff('10', $ambassador[0]->referral_code)->TOTAL;
        $data['batch2Pending']  = $this->Dashboard->getPaymentPendingAff('10', $ambassador[0]->referral_code)->TOTAL;
        $data['batch2Cancel']   = $this->Dashboard->getPaymentCancelAff('10', $ambassador[0]->referral_code)->TOTAL;
        $data['batch2Expired']  = $this->Dashboard->getPaymentExpiredAff('10', $ambassador[0]->referral_code)->TOTAL;
        
        $data['sfregisSuccess']   = $this->Dashboard->getPaymentSuccessAff('11', $ambassador[0]->referral_code)->TOTAL;
        $data['sfregisPending']   = $this->Dashboard->getPaymentPendingAff('11', $ambassador[0]->referral_code)->TOTAL;
        $data['sfregisCancel']    = $this->Dashboard->getPaymentCancelAff('11', $ambassador[0]->referral_code)->TOTAL;
        $data['sfregisExpired']   = $this->Dashboard->getPaymentExpiredAff('11', $ambassador[0]->referral_code)->TOTAL;
        
        $data['sfbatch1Success']  = $this->Dashboard->getPaymentSuccessAff('12', $ambassador[0]->referral_code)->TOTAL;
        $data['sfbatch1Pending']  = $this->Dashboard->getPaymentPendingAff('12', $ambassador[0]->referral_code)->TOTAL;
        $data['sfbatch1Cancel']   = $this->Dashboard->getPaymentCancelAff('12', $ambassador[0]->referral_code)->TOTAL;
        $data['sfbatch1Expired']  = $this->Dashboard->getPaymentExpiredAff('12', $ambassador[0]->referral_code)->TOTAL;

        $data['sfbatch2Success']  = $this->Dashboard->getPaymentSuccessAff('13', $ambassador[0]->referral_code)->TOTAL;
        $data['sfbatch2Pending']  = $this->Dashboard->getPaymentPendingAff('13', $ambassador[0]->referral_code)->TOTAL;
        $data['sfbatch2Cancel']   = $this->Dashboard->getPaymentCancelAff('13', $ambassador[0]->referral_code)->TOTAL;
        $data['sfbatch2Expired']  = $this->Dashboard->getPaymentExpiredAff('13', $ambassador[0]->referral_code)->TOTAL;

        $this->template->affiliate('aff/dashboard/index', $data);
    }
    public function ajxPayGet(){
        $draw   = $_POST['draw'];
        $offset = $_POST['start'];
        $limit  = $_POST['length']; // Rows display per page
        $search = $_POST['search']['value'];

        $filter1 = array();
        if($_POST['filterPayState'] == 'Succ'){
            if($_POST['filterPayState'] != null || $_POST['filterPayState'] != '') $filter1[] = "ps2.id_payment_type = '10'";
            if($_POST['filterPayStatus'] != null || $_POST['filterPayStatus'] != '') $filter1[] = "ps2.status = '6'";
        }else if($_POST['filterPayState'] == 'SuccSF'){
            if($_POST['filterPayState'] != null || $_POST['filterPayState'] != '') $filter1[] = "ps2.id_payment_type = '13'";
            if($_POST['filterPayStatus'] != null || $_POST['filterPayStatus'] != '') $filter1[] = "ps2.status = '6'";
        }else{
            if($_POST['filterPayState'] != null || $_POST['filterPayState'] != '') $filter1[] = "ps2.id_payment_type = '".$_POST['filterPayState']."'";
            if($_POST['filterPayStatus'] != null || $_POST['filterPayStatus'] != '') $filter1[] = "ps2.status = '".$_POST['filterPayStatus']."'";
        }
        
        $filter2 = array();
        if($_POST['filterEmail'] != null || $_POST['filterEmail'] != '') $filter2[] = "u.email like '%".$_POST['filterEmail']."%'";
        if($_POST['filterName'] != null || $_POST['filterName'] != '') $filter2[] = "u.name like '%".$_POST['filterName']."%'";
        if($_POST['filterNumber'] != null || $_POST['filterNumber'] != '') $filter2[] = "pd.whatsapp_number like '%".$_POST['filterNumber']."%'";
        if($_POST['filterInstitution'] != null || $_POST['filterInstitution'] != '') $filter2[] = "pd.institution_workplace like '%".$_POST['filterInstitution']."%'";

        $payments = $this->PaymentStatus->getDataTableAff(['filter1' => $filter1, 'filter2' => $filter2, 'offset' => $offset, 'limit' => $limit, 'aff' => $this->session->userdata('referral_code')]);
        $no = 1;
        $datas = [];
        foreach ($payments['records'] as $payment) {
            $isPayStatus = '';
            if($payment->status == NULL){
                $isPayStatus = '
                    <span class="badge bg-soft-secondary text-secondary">Haven\'t make payment</span>
                ';
            }else if($payment->status == '1'){
                $isPayStatus = '
                    <span class="badge bg-soft-secondary text-secondary">NEW</span>
                ';
            }else if($payment->status == '2'){
                $isPayStatus = '
                    <span class="badge bg-soft-warning text-warning">PENDING</span>
                ';
            }else if($payment->status == '3'){
                $isPayStatus = '
                    <span class="badge bg-soft-danger text-danger">CANCEL</span>
                ';
            }else if($payment->status == '4'){
                $isPayStatus = '
                    <span class="badge bg-soft-danger text-danger">EXPIRED</span>
                ';
            }else if($payment->status == '5'){
                $isPayStatus = '
                    <span class="badge bg-soft-danger text-danger">DENY</span>
                ';
            }else if($payment->status == '6'){
                $isPayStatus = '
                    <span class="badge bg-soft-success text-success">SUCCESS</span>
                ';
            }

            $datas[] = array( 
                "no"            => $no++,
                "name"          => $payment->name,
                "email"         => $payment->email,
                "institution"   => $payment->institution_workplace,
                "nationality"   => $payment->nationality,
                "payState"      => $payment->payment_type,
                "payStatus"     => $isPayStatus
            );
        }

        $response = array(
            "draw" => intval($draw),
            "recordsTotal" => $payments['totalRecords'],
            "recordsFiltered" => ($search != "" ? $payments['totalDisplayRecords'] : $payments['totalRecords']),
            "aaData" => $datas,
        );

        echo json_encode($response);
    }
    public function getTotalRegis(){
        return $this->db->query()->result();
    }
    public function getRegis($referralCode){
        return $this->db->query("
            SELECT  u.email , u.name , pd.nationality  
            FROM participant_details pd , users u 
            WHERE pd.register_affiliate = '".$referralCode."' AND pd.id_user = u.id_user 
        ")->result();
    }
    public function getSubmit($referralCode){
        return $this->db->query("
            SELECT  u.email , u.name , pd.nationality  
            FROM participant_details pd , users u 
            WHERE 
                pd.referral_code = '".$referralCode."' 
                AND pd.is_submited = '1'
                AND pd.id_user = u.id_user 
        ")->result();
    }
    public function getTotalPayment($referralCode){
        return $this->db->query("
            SELECT 
                COUNT(*) as TOTAL
            FROM 
                payment_status ps , 
                participant_details pd
            WHERE 
                ps.id_payment_type IN(8, 11)
                AND ps.status = 6
                AND ps.id_user = pd.id_user
                AND pd.referral_code = '".$referralCode."'
        ")->row();
    }
    public function getDetailPayment($referralCode){
        return $this->db->query("
            SELECT
                u.email ,
                u.name , 
                pd.nationality,
                (
                    SELECT pt.description 
                    FROM payment_status ps, payment_types pt 
                    WHERE ps.id_user = pd.id_user AND ps.is_active = 1 AND ps.id_payment_type = pt.id_payment_type
                    ORDER BY ps.id_payment_status DESC LIMIT 1
                ) as payment,
                (
                    SELECT ps.status
                    FROM payment_status ps
                    WHERE ps.id_user = pd.id_user AND ps.is_active = 1
                    ORDER BY ps.id_payment_status DESC LIMIT 1
                ) as status_payment
            FROM 
                participant_details pd ,
                users u 
            WHERE 
                pd.referral_code = '".$referralCode."' 
                AND pd.is_submited = 1
                AND pd.id_user = u.id_user 
        ")->result();
    }
}