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
    }
    public function generatePayment(){
        $idUser         = $this->session->userdata('id_user');
        $nameUser       = $this->session->userdata('name');
        $paymentType    = $this->PaymentType->getById($_POST['id_payment_type']);
        $paymentTrans   = $this->PaymentTransaction->get(['id_payment_type' => $_POST['id_payment_type'], 'id_user' => $idUser, 'status' => '6']);

        $assetPath  = "";
        $uploadPath = "";
        $fileName   = md5($idUser.$_POST['id_payment_type']).".png";
        if($_POST['id_payment_type'] == '8'){
            $assetPath  = "assets/img/documents/invoice/registration.jpg";
            $uploadPath = "uploads/invoice/registration/".$fileName;
        }else if($_POST['id_payment_type'] == '9'){
            $assetPath  = "assets/img/documents/invoice/batch_1.jpg";
            $uploadPath = "uploads/invoice/batch_1/".$fileName;
        }else if($_POST['id_payment_type'] == '10'){
            $assetPath  = "assets/img/documents/invoice/batch_2.jpg";
            $uploadPath = "uploads/invoice/batch_2/".$fileName;
        }

        $documents = $this->Document->get(['name' => $paymentType->description, 'id_user' => $idUser]);
        if($documents == null){
            $this->Document->insert([
                'name'          => $paymentType->description,
                'id_user'       => $idUser,
                'document_no'   => '1',
                'path'          => $uploadPath,
                'created_at'    => date('Y-m-d H:i:s')
            ]);
        }

        

        try {
            // Create a new SimpleImage object
            $image = new \claviska\SimpleImage();

            $image
                ->fromFile($assetPath)
                ->autoOrient()
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
                ->toFile($uploadPath);
            
            
        } catch (Exception $err) {
            // Handle errors
            echo $err->getMessage();
        }
    }
}