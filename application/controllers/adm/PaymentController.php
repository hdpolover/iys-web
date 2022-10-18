<?php

class PaymentController extends CI_Controller{
    public function __construct(){
        parent::__construct();
        if($this->session->userdata('role') != "0"){
            redirect('/');
        }
        $this->load->model('Admin');
        $this->load->model('User');
        $this->load->model('ParticipantDetail');
        $this->load->model('PaymentStatus');
        $this->load->model('PaymentTransaction');

        $this->load->library('Paymentconf');

        $params = array('server_key' => 'Mid-server-gXaK3X0M-oZhY4RPL0g2Mt_z', 'production' => true);
        // $params = array('server_key' => 'SB-Mid-server-qC8YfWnkcF_fjPrZmuNEwb8P', 'production' => false);
		$this->load->library('veritrans');
		$this->veritrans->config($params);
    }
    public function index(){
        $data['title']          = 'Payment';
        $data['sidebar']        = 'payment';
        // $data['payments']       = $this->User->get(['id_user_role' => '1', 'orderBy' => 'name ASC']);
        
        $this->template->admin('adm/payment/index', $data);
    }
    public function history($id){
        $data['title']      = 'Payment History';
        $data['sidebar']    = 'payment';
        $data['user']       = $this->User->getById($id);
        $data['historys']   = $this->getQueryHistory($id);

        $this->template->admin('adm/payment/history', $data);
    }
    public function add(){
        $data['title']          = 'Add Payment';
        $data['sidebar']        = 'payment';
        
        $this->template->admin('adm/payment/add', $data);
    }
    public function validation(){
        $paymentStatus = $this->PaymentStatus->get(['id_payment_type' => $_POST['id_payment_type'], 'id_user' => $_POST['id_user']])[0];

        if($_POST['status'] == '3' && ($_POST['method_type'] != 'paypal' && $_POST['method_type'] != 'manual_transfer')){
            $paymentTransaction = $this->PaymentTransaction->getById($_POST['id_payment_transaction']);
            $this->veritrans->cancel($paymentTransaction->order_id);
        }

        $this->PaymentTransaction->update(['id_payment_transaction' => $_POST['id_payment_transaction'], 'status' => $_POST['status'], 'status_title' => $this->paymentconf->convertStatusTitle($_POST['status'])]);
        $this->PaymentStatus->update(['id_payment_status' => $paymentStatus->id_payment_status, 'status' => $_POST['status']]);
        
        if($_POST['status'] == '6'){
            $payStatus = $this->PaymentStatus->get(['id_user' => $_POST['id_user'], 'is_active' => '0']);
            if($payStatus != null){
                $this->PaymentStatus->update(['id_payment_status' => $payStatus[0]->id_payment_status, 'is_active' => '1']);
            }
        }

        $this->session->set_flashdata('succ_msg', 'Successfully update payment!');
        redirect('admin/payment/history/'.$_POST['id_user']);
    }
    public function ajxGet(){
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

        $payments = $this->PaymentStatus->getDataTable(['filter1' => $filter1, 'filter2' => $filter2, 'offset' => $offset, 'limit' => $limit]);
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
                "payState"      => $payment->payment_type,
                "payStatus"     => $isPayStatus,
                "action"        => '    
                    <a target="_blank" href="'.site_url('admin/payment/history/'.$payment->id_user).'" class="btn btn-soft-primary btn-icon btn-sm"><i class="bi-list"></i></a>
                '
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
    public function getQueryHistory($id){
        return $this->db->query("
            SELECT 
                pt2.*, pt.*
            FROM 
                payment_transaction pt , 
                payment_types pt2 
            WHERE 
                pt.id_user = '".$id."'
                AND pt.id_payment_type = pt2.id_payment_type 
            ORDER BY date DESC
        ")->result();
    }
}