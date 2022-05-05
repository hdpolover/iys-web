<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
class Mail {
    public function __construct(){
      log_message('Debug', 'PHPMailer class is loaded.');
      $this->_ci = &get_instance();
      $this->_ci->load->database();
    }
    public function getConfig(){
        return $this->_ci->db->select('mailer_username, mailer_password')->get('config')->row();
    }
    public function send($to, $sub, $msg){
        $config = $this->getConfig();

        $mail = new PHPMailer(true);
        $mail->SMTPDebug = 0;
        $mail->isSMTP();
        $mail->Host       = 'smtp.googlemail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = $config->mailer_username;
        $mail->Password   = $config->mailer_password;
        $mail->SMTPSecure = 'ssl';
        $mail->Port       = 465;

        $mail->setFrom($config->mailer_username, 'Istanbul Youth Summit');
        $mail->addAddress($to);
        // $mail->addReplyTo('alamatemailanda@gmail.com', 'Niagahoster Tutorial');

        // Isi Email
        $mail->isHTML(true);
        $mail->Subject = $sub;
        $mail->Body    = $msg;

        if (!$mail->send()) {
            echo 'Message could not be sent. <br>';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
            echo '<br>Contact ADMIN ';
            die();
            return false;
        } else {
            return true;
        }
        
    }
}