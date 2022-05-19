<?php

class PaymentTypeController extends CI_Controller{
    public function __construct(){
        parent::__construct();
        if($this->session->userdata('role') != "0"){
            redirect('/');
        }
        $this->load->library('upload');
        $this->load->model('PaymentType');
    }
    public function index(){
        $data['title']          = 'Payment Type';
        $data['sidebar']        = 'master';
        $data['subSidebar']     = 'payment';
        $data['payments']    = $this->PaymentType->getAll();

        $this->template->admin('adm/master/payment/index', $data);
    }
    public function add(){
        $data['title']          = 'Add New Payment Type';
        $data['sidebar']        = 'master';
        $data['subSidebar']     = 'payment';

        $this->template->admin('adm/master/payment/add', $data);
    }
    public function edit($id){
        $data['title']          = 'Edit Payment Type';
        $data['sidebar']        = 'master';
        $data['subSidebar']     = 'payment';
        $data['payment']     = $this->PaymentType->getById($id);

        $this->template->admin('adm/master/payment/edit', $data);
    }
    public function store(){
        $formData['description']    = $_POST['description'];
        $formData['id_summit']      = "1";
        $formData['amount']         = str_replace(',', '', $_POST['amount']);
        $formData['start_date']     = date_format(date_create($_POST['startDate']), 'Y-m-d H:i:s');
        $formData['end_date']       = date_format(date_create($_POST['endDate']), 'Y-m-d H:i:s');

        $this->PaymentType->insert($formData);
        $this->session->set_flashdata('succ_msg', 'Successfully added a new payment type!');
        redirect('admin/master/payment-type');
    }
    public function change(){
        $formData['id_payment_type']  = $_POST['id'];
        $formData['description']    = $_POST['description'];
        $formData['amount']         = str_replace(',', '', $_POST['amount']);
        $formData['start_date']     = date_format(date_create($_POST['startDate']), 'Y-m-d H:i:s');
        $formData['end_date']       = date_format(date_create($_POST['endDate']), 'Y-m-d H:i:s');

        $this->PaymentType->update($formData);
        $this->session->set_flashdata('succ_msg', 'Successfully edit payment type!');
        redirect('admin/master/payment-type');
    }
    public function destroy(){
        $this->PaymentType->delete(['id_payment_type' => $_POST['id']]);
        $this->session->set_flashdata('succ_msg', 'Successfully delete payment type!');
        redirect('admin/master/payment-type');
    }
}