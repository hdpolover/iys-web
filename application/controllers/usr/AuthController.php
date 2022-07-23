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

        do {
            $newKey = rand(10000, 99999);
            $key    = $this->User->get(['key' => $newKey]);
        }while($key != null);
        
        $formData['id_user']        = $newId;
        $formData['key']            = $newKey;
        $formData['email']          = $this->db->escape_str(htmlentities($_POST['email']));
        $formData['name']           = $this->db->escape_str(htmlentities($_POST['fullName']));
        $formData['password']       = hash('sha256', md5($this->db->escape_str(htmlentities($_POST['password']))));
        $formData['id_user_role']   = 1;
        $formData['token_regis']    = $this->encryption->encrypt($newId.';'.date('Y-m-d H:i', strtotime("+1 day")));
        $this->User->insert($formData);

        $this->ParticipantDetail->insert(['id_user' => $newId, 'id_summit' => '1']);
        // $this->setSession($formData['id_user'], $formData['email'], $formData['name'], null, $formData['id_user_role'], 0, 0);

        $this->mail->send($formData['email'], 'EMAIL VERIFICATION', $this->load->view('email/register', $formData, true));
        $this->session->set_flashdata('succ_msg', 'Please verify your email to continue. Check your inbox or spam folder.');
        redirect('sign-in');
    }
    public function login(){
        $user       = $this->User->get(['email' => $_POST['email'], 'password' => hash('sha256', md5($_POST['password']))]);
        if($user == null){
            $this->session->set_flashdata('err_msg', 'Your email or password is wrong');
            redirect('sign-in');
        }
        $userDetail = $this->ParticipantDetail->getById($user->id_user);

        $photo = $this->ParticipantDetail->getById($user[0]->id_user)->photo;

        $this->setSession($user[0]->id_user, $user[0]->email, $user[0]->name, $photo, $user[0]->id_user_role, $user[0]->is_verif, $userDetail->is_submited);
        redirect('announcement');
    }
    
    public function logout(){
        $this->session->sess_destroy();
        redirect('/');
    }
    public function setSession($idUser, $email, $name, $photo,  $role, $isVerif, $isSubmit){
        $formSession['id_user']     = $idUser;
        $formSession['email']       = $email;
        $formSession['name']        = $name;
        $formSession['photo']       = $photo;
        $formSession['role']        = $role;
        $formSession['is_logged']   = true;
        $formSession['is_verif']    = $isVerif;
        $formSession['is_submit']    = $isSubmit;
        $this->session->set_userdata($formSession);
    }
}