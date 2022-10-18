<?php

class FrontController extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('Announcement');
        $this->load->model('User');
        $this->load->model('Ambassador');
        $this->load->library('encryption');
    }
    public function signIn(){
        if($this->session->userdata('role') == '1'){
            redirect('personal-info');
        }

        $data['title']      = 'Sign In';
        
        $this->template->frontWithoutTopBar('sign_in', $data);
    }
    public function signUp(){
        if($this->session->userdata('role') == '1'){
            redirect('announcement');
        }

        $affiliateCodeUrl = $this->input->get('affiliate_code');
        if($affiliateCodeUrl != null || $this->session->userdata('affiliate')){
            $affiliateCode = "";
            if($affiliateCodeUrl != null){
                $affiliateCode = strtoupper($affiliateCodeUrl);
            }else if($this->session->userdata('affiliate')){
                $affiliateCode = strtoupper($this->session->userdata('affiliate'));
            }
            
            $this->session->set_userdata('affiliate', $affiliateCode);
            $ambassador = $this->Ambassador->get(['referral_code' => $affiliateCode]);
            if($ambassador != null){
                $this->session->set_flashdata('succ_msg', 'You register using <b>'.$ambassador[0]->name.'\'s</b> affiliate code!');
            }else if($affiliateCodeUrl != null){
                $this->session->set_flashdata('err_msg', 'The affiliate code you entered is wrong!');
                $this->session->unset_userdata('affiliate');
                $affiliateCode = "";
            }
        }else{
            $affiliateCode = "";
        }

        $dateExpired  = "October 30, 2022 23:59:59";
        $dateNow      = date("Y-m-d H:i:s");

        if(strtotime($dateNow) > strtotime($dateExpired)){
            $this->session->set_flashdata('err_msg', 'Oops, registration time has passed, try next year :)');
            redirect('sign-in');
        }
        
        $data['title']          = 'Sign Up';
        $data['affiliateCode']  = $affiliateCode;
        
        $this->template->frontWithoutTopBar('sign_up', $data);
    }
    public function verifEmail($token){
        $this->load->library('encryption');
        $token = str_replace('-', '+', $token);
        $token = str_replace('_', '/', $token);
        $token = $this->encryption->decrypt($token);

        $data     = explode(';', $token);
        $currDate = date('Y-m-d H:i');
        
        $user = $this->User->getById($data[0]);
        if($user->is_verif == "1") redirect('sign-in');

        if($user->id_user != $data[0]) redirect('sign-in');
        if($currDate > date_format(date_create($data[1]), 'Y-m-d H:i')) $this->load->view('email/verif', ['id' => $data[0]]);

        $this->User->update(['id_user' => $data[0], 'is_verif' => 1]);
        $this->session->set_userdata('is_verif', 1);
        $this->session->set_flashdata('succ_msg', 'Congratulations! Your email has been verified.');
        $this->session->set_flashdata('succ_alert', 'Congratulations! Your email has been verified.');
        redirect('sign-in');        
    }
    public function resendEmail($idUser){
        $this->User->update(['id_user' => $idUser, 'token_regis' => $this->encryption->encrypt($idUser.';'.date('Y-m-d H:i', strtotime("+1 day")))]);

        $user = $this->User->getById($idUser);
        $usr['email']       = $user->email;
        $usr['name']        = $user->name;
        $usr['token_regis'] = $user->token_regis;

        $this->session->set_flashdata('succ_msg', 'Please verify your email to continue. Check your inbox or spam folder.');
        $this->mail->send($usr['email'], 'EMAIL VERIFICATION', $this->load->view('email/register', $usr, true));
        redirect('personal-info');
    }
    public function about(){
        $data['title']      = 'About IYS';
        $data['topBar']     = 'about';
        $data['isBgDark']   = true;
        
        $this->template->front('about', $data);
    }
    public function partnerSponsor(){
        $data['title']      = 'Partnership & Sponsorship';
        $data['topBar']     = 'partner-sponsor';
        $data['isBgDark']   = true;
        
        $this->template->front('partner_sponsor', $data);
    }
    public function ourTeam(){
        $data['title']      = 'Our Team';
        $data['topBar']     = 'team';
        $data['isBgDark']   = true;
        
        $this->template->front('team', $data);
    }
    public function faq(){
        $data['title']      = 'FAQ';
        $data['topBar']     = 'faq';
        $data['isBgDark']   = true;
        
        $this->template->front('faq', $data);
    }
    public function privacyPolicy(){
        $data['title']      = 'Privacy & Policy';
        $data['topBar']     = '';
        $data['isBgDark']   = true;
        
        $this->template->front('privacy_policy', $data);
    }
    public function announcementGeneral(){
        $data['title']      = 'Announcement';
        $data['topBar']     = 'announcement-general';
        $data['isBgDark']   = true;
        $data['announcements'] = $this->Announcement->get(['is_registered' => 0, 'orderBy' => 'date DESC']);
        
        $this->template->front('announcement_general', $data);
    }
    public function announcementGeneralDetail($id){
        $data['title']          = 'Announcement Detail';
        $data['topBar']         = 'announcement-general';
        $data['isBgDark']       = true;
        $data['announcement']   = $this->Announcement->getById($id);
        
        $this->template->front('announcement_general_detail', $data);
    }
    public function forgotPassowordEmail(){
        $data['title']      = 'Forgot Password';
        
        $this->template->frontWithoutTopBar('forgot_password_send_email', $data);
    }
    public function forgotPassowordSendEmail(){
        $user = $this->User->get(['email' => $_POST['email']]);

        if($user == null){
            $this->session->set_flashdata('err_msg', 'This email is not registered');
        }else{
            $this->User->update(['id_user' => $user[0]->id_user, 'token_forgot' => $this->encryption->encrypt($user[0]->id_user.';'.date('Y-m-d H:i', strtotime("+1 day")))]);

            $user = $this->User->getById($user[0]->id_user);
            $usr['email']           = $user->email;
            $usr['name']            = $user->name;
            $usr['token_forgot']    = $user->token_forgot;

            $this->session->set_flashdata('succ_msg', 'Please check your email to change password. Check your inbox or spam folder.');
            $this->mail->send($usr['email'], 'CHANGE PASSWORD', $this->load->view('email/change_password', $usr, true));
        }

        redirect('forgot-password/email');
    }
    public function forgotPasswordChangePassword($token){
        try {
            $this->load->library('encryption');
            $token = str_replace('-', '+', $token);
            $token = str_replace('_', '/', $token);
            $token = $this->encryption->decrypt($token);

            $data     = explode(';', $token);
            $currDate = date('Y-m-d H:i');
            
            $user = $this->User->getById($data[0]);

            if($user->id_user != $data[0]) redirect('sign-in');
            if($currDate > date_format(date_create($data[1]), 'Y-m-d H:i')){
                $this->session->set_flashdata('err_msg', 'Opps, The link has expired');
                redirect('sign-in');
            }

            $dataa = [];
            $dataa['title']  = 'Change Password';
            $dataa['idUser'] = $data[0];
            $this->template->frontWithoutTopBar('forgot_password_change_password', $dataa);
        } catch (\Throwable $th) {
            $this->session->set_flashdata('err_msg', 'Opps, The link not found');
            redirect('sign-in');
        }
        
    }
    public function forgotPasswordNewPassword(){
        $this->User->update(['id_user' => $_POST['id_user'], 'password' => hash('sha256', md5($this->db->escape_str(htmlentities($_POST['password'])))), 'token_forgot' => NULL]);
        $this->session->set_flashdata('succ_msg', 'Congratulations, you have successfully changed your password!');
        redirect('sign-in');
    }
    public function ajxGetUserSubmit(){
        $user = $this->db->query("
            SELECT u.name , pd.nationality, (
                SELECT COUNT(pd.id_user)
                FROM participant_details pd 
                WHERE pd.is_submited = '1'
            ) AS total_submited
            FROM participant_details pd , users u 
            WHERE pd.is_submited = '1' AND pd.id_user = u.id_user 
            ORDER BY RAND()
            LIMIT 1
        ")->row();
        echo json_encode($user);
    }
}