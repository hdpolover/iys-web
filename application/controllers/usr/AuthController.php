<?php

class AuthController extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('User');
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
        $this->User->insert($formData);

        $this->setSession($formData['id_user'], $formData['email'], $formData['name'], $formData['id_user_role']);
        redirect('announcement');
    }
    public function login(){
        $user = $this->User->get(['email' => $_POST['email'], 'password' => hash('sha256', md5($_POST['password']))]);
        if($user == null){
            $this->session->set_flashdata('err_msg', 'Your email or password is wrong');
            redirect('sign-in');
        }

        $this->setSession($user[0]->id_user, $user[0]->email, $user[0]->name, $user[0]->id_user_role);
        redirect('announcement');
    }
    public function logout(){
        $this->session->sess_destroy();
        redirect('/');
    }
    public function setSession($idUser, $email, $name, $role){
        $formSession['id_user']     = $idUser;
        $formSession['email']       = $email;
        $formSession['name']        = $name;
        $formSession['role']        = $role;
        $formSession['is_logged']   = true;
        $this->session->set_userdata($formSession);
    }
}