<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class EmailController extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->library('mail');
    }
    public function tes(){

    }
    public function register(){
        $this->mail->send('ilham.sagitaputra@gmail.com', 'Testing Email', $this->load->view('email/register','',true));
        // $mail = new PHPMailer(true);
        // try {
        //     $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        //     $mail->isSMTP();
        //     $mail->Host       = 'smtp.googlemail.com';
        //     $mail->SMTPAuth   = true;
        //     $mail->Username   = 'ilhaja94@gmail.com';
        //     $mail->Password   = '!ilham12345!';
        //     $mail->SMTPSecure = 'ssl';
        //     $mail->Port       = 465;
 
        //     $mail->setFrom('ilhaja94@gmail.com', 'Devisap Management');
        //     $mail->addAddress("ilham.sagitaputra@gmail.com");
        //     // $mail->addReplyTo('alamatemailanda@gmail.com', 'Niagahoster Tutorial');
 
        //     // Isi Email
        //     $mail->isHTML(true);
        //     $mail->Subject = "Tesgting";
        //     $mail->Body    = "<h1>TESS</h1>";
 
        //     $mail->send();
 
        //  // Pesan Berhasil Kirim Email/Pesan Error
 
        //     $this->session->set_flashdata('success', 'Selamat, email berhasil terkirim!');
        //     // return redirect()('/email');
        // } catch (Exception $e) {
        //     $this->session->set_flashdata('error', "Gagal mengirim email. Error: " . $mail->ErrorInfo);
        //     // return redirect()->to('/email');
        // }
    }
}