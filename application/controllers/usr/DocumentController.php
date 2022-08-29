<?php

class DocumentController extends CI_Controller{
    public function __construct(){
        parent::__construct();
        if($this->session->userdata('role') != '1'){
            redirect('/');
        }
        
        $this->load->model('User');
        $this->load->model('Document');
        $this->load->model('PaymentTransaction');
        $this->load->model('PaymentType');
        $this->load->helper('download');
    }
    public function generatePayment(){
        $idUser         = $this->session->userdata('id_user');
        $nameUser       = $this->session->userdata('name');
        $paymentType    = $this->PaymentType->getById($_POST['id_payment_type']);
        $paymentTrans   = $this->PaymentTransaction->get(['id_payment_type' => $_POST['id_payment_type'], 'id_user' => $idUser, 'status' => '6']);
        $paymentMonth   = date_format(date_create($paymentTrans[0]->date), 'n');

        $lastNo         = $this->Document->get(['name' => $paymentType->description, 'MONTH(date)' => $paymentMonth, 'orderBy' => 'id_document DESC', 'limit' => '1']);
        if($lastNo == null){
            $noInvoice = '001';
        }else{
            $noInvoice = (int)$lastNo + 1;
            $noInvoice = sprintf('%03d', $noInvoice);
        }

        $assetPath      = "";
        $uploadPath     = "";
        if($_POST['id_payment_type'] == '8'){
            if($paymentMonth == '8'){
                $assetPath  = "assets/img/documents/invoice/registration_viii.jpg";
            }else if(($paymentMonth == '9')){
                $assetPath  = "assets/img/documents/invoice/registration_ix.jpg";
            }else{
                $this->session->set_flashdata('err_msg', 'An error occurred while downloading the registration invoice, please ask the admin');
                redirect('payment');
            }

            $uploadPath = "uploads/invoice/registration/";
        }else if($_POST['id_payment_type'] == '9'){
            if($paymentMonth == '10'){
                $assetPath  = "assets/img/documents/invoice/batch_1_x.jpg";
            }else{
                $this->session->set_flashdata('err_msg', 'An error occurred while downloading the batch 1 invoice, please ask the admin');
                redirect('payment');
            }

            $uploadPath = "uploads/invoice/batch_1/";
        }else if($_POST['id_payment_type'] == '10'){
            if($paymentMonth == '11'){
                $assetPath  = "assets/img/documents/invoice/batch_2_xi.jpg";
            }else{
                $this->session->set_flashdata('err_msg', 'An error occurred while downloading the batch 2 invoice, please ask the admin');
                redirect('payment');
            }

            $uploadPath = "uploads/invoice/batch_2/";
        }

        $documents = $this->Document->get(['name' => $paymentType->description, 'id_user' => $idUser]);
        if($documents == null){
            $fileName = $paymentType->description." - ".$noInvoice." - ".$nameUser.".jpg";
            $this->Document->insert([
                'name'          => $paymentType->description,
                'id_user'       => $idUser,
                'document_no'   => $noInvoice,
                'path'          => site_url($uploadPath.$fileName),
                'date'          => $paymentTrans[0]->date,
                'created_at'    => date('Y-m-d H:i:s')
            ]);
        }else{
            $noInvoice  = $documents[0]->document_no;
            $fileName   = $paymentType->description." - ".$documents[0]->document_no." - ".$nameUser.".jpg";
        }

        try {
            // Create a new SimpleImage object
            $image = new \claviska\SimpleImage();

            $image
                ->fromFile($assetPath)
                ->autoOrient()
                ->text(
                    $noInvoice,
                    array(
                        'fontFile' => realpath('font.ttf'),
                        'size' => 20,
                        'anchor' => 'left',
                        'xOffset' => 305,
                        'yOffset' => -308,
                    )
                )
                ->text(
                    $nameUser,
                    array(
                        'fontFile' => realpath('font.ttf'),
                        'size' => 20,
                        'anchor' => 'left',
                        'xOffset' => 260,
                        'yOffset' => -210,
                    )
                )
                ->text(
                    date_format(date_create($paymentTrans[0]->date), 'F d, Y'),
                    array(
                        'fontFile' => realpath('font.ttf'),
                        'size' => 20,
                        'anchor' => 'left',
                        'xOffset' => 600,
                        'yOffset' => -85,
                    )
                )
                //->toScreen();                               // output to the screen
                ->toFile($uploadPath.$fileName);
                        
                force_download($uploadPath.$fileName, NULL);
        } catch (Exception $err) {
            // Handle errors
            echo $err->getMessage();
        }
    }
}