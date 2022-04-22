<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
class Mail {
    public function send($to, $sub, $msg){
        $mail = new PHPMailer(true);
        try {
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;
            $mail->isSMTP();
            $mail->Host       = 'smtp.googlemail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'ilhaja94@gmail.com';
            $mail->Password   = '!ilham12345!';
            $mail->SMTPSecure = 'ssl';
            $mail->Port       = 465;
 
            $mail->setFrom('ilhaja94@gmail.com', 'Istanbul Youth Summit');
            $mail->addAddress($to);
            // $mail->addReplyTo('alamatemailanda@gmail.com', 'Niagahoster Tutorial');
 
            // Isi Email
            $mail->isHTML(true);
            $mail->Subject = $sub;
            $mail->Body    = $msg;
 
            $mail->send();
 
         // Pesan Berhasil Kirim Email/Pesan Error
 
            $this->session->set_flashdata('success', 'Selamat, email berhasil terkirim!');
            // return redirect()('/email');
        } catch (Exception $e) {
            $this->session->set_flashdata('error', "Gagal mengirim email. Error: " . $mail->ErrorInfo);
            // return redirect()->to('/email');
        }
    }
}