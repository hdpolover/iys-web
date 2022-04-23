<?php

class AuthController extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('User');
        $this->load->model('ParticipantDetail');
        $this->load->library('encryption');
    }
    public function register(){
        $user = $this->User->get(['email' => $_POST['email']]);
        if($user != null){
            $this->session->set_flashdata('err_msg', 'Opps email has been registered!');
            redirect('sign-up');
        }

        do{
            $newId = 'USRP_'.substr(md5(time()), 10, 8);
            $user = $this->User->getById($newId);
        }while(!empty($user->id_user));
        
        $formData['id_user']        = $newId;
        $formData['email']          = $this->db->escape_str(htmlentities($_POST['email']));
        $formData['name']           = $this->db->escape_str(htmlentities($_POST['fullName']));
        $formData['password']       = hash('sha256', md5($this->db->escape_str(htmlentities($_POST['password']))));
        $formData['id_user_role']   = 1;
        $formData['token_regis']    = $this->encryption->encrypt($newId.';'.date('Y-m-d H:i', strtotime("+1 day")));
        $this->User->insert($formData);

        $this->ParticipantDetail->insert(['id_user' => $newId, 'id_summit' => '1']);
        $this->setSession($formData['id_user'], $formData['email'], $formData['name'], null, $formData['id_user_role'], 0);

        $this->mail->send($formData['email'], 'Email Verification', $this->load->view('email/register', $formData, true));
        redirect('announcement');
    }
    public function login(){
        $user = $this->User->get(['email' => $_POST['email'], 'password' => hash('sha256', md5($_POST['password']))]);
        if($user == null){
            $this->session->set_flashdata('err_msg', 'Your email or password is wrong');
            redirect('sign-in');
        }

        $photo = $this->ParticipantDetail->getById($user[0]->id_user)->photo;

        $this->setSession($user[0]->id_user, $user[0]->email, $user[0]->name, $photo, $user[0]->id_user_role, $user[0]->is_verif);
        redirect('announcement');
    }
    public function verifEmail($token){
        if($this->session->userdata('is_verif') == 1) redirect('announcement');

        $this->load->library('encryption');
        $token = str_replace('--', '+', $token);
        $token = str_replace('_', '/', $token);
        $token = $this->encryption->decrypt($token);

        $data     = explode(';', $token);
        $currDate = date('Y-m-d H:i');

        if($this->session->userdata('id_user') != $data[0]) redirect('announcement');
        if($currDate > date_format(date_create($data[1]), 'Y-m-d H:i')) $this->load->view('email/verif', ['id' => $data[0]]);

        $this->User->update(['id_user' => $data[0], 'is_verif' => 1]);
        // print_r($token);
        $this->session->set_userdata('is_verif', 1);
        redirect('announcement');
        
    }
    public function resendEmail($idUser){
        $this->User->update(['id_user' => $idUser, 'token_regis' => $this->encryption->encrypt($idUser.';'.date('Y-m-d H:i', strtotime("+1 day")))]);

        $user = $this->User->getById($idUser);
        $usr['email']       = $user->email;
        $usr['name']        = $user->name;
        $usr['token_regis'] = $user->token_regis;

        $this->mail->send($usr['email'], 'Email Verification', $this->load->view('email/register', $usr, true));
        redirect('announcement');
    }
    public function logout(){
        $this->session->sess_destroy();
        redirect('/');
    }
    public function setSession($idUser, $email, $name, $photo,  $role, $isVerif){
        $formSession['id_user']     = $idUser;
        $formSession['email']       = $email;
        $formSession['name']        = $name;
        $formSession['photo']       = $photo;
        $formSession['role']        = $role;
        $formSession['is_logged']   = true;
        $formSession['is_verif']    = $isVerif;
        $this->session->set_userdata($formSession);
    }
}