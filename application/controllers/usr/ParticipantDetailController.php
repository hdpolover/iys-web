<?php

class ParticipantDetailController extends CI_Controller{
    public function __construct(){
        parent::__construct();
        if($this->session->userdata('role') != '1'){
            redirect('/');
        }
        
        $this->load->model('User');
        $this->load->model('ParticipantDetail');
    }
    public function index(){
        $data['title']      = "Personal Info";
        $data['sidebar']    = "personal-info";
        $data['countries']  = $this->db->get('countries')->result();
        $data['detail']     = $this->ParticipantDetail->getById($this->session->userdata('id_user'));
        $this->template->user('usr/participant-detail/index', $data);
    }
    public function ajxPostBasic(){
        $formData['id_user']                = $this->session->userdata('id_user');
        $formData['fullname']               = $_POST['fullName'];
        $formData['gender']                 = $_POST['gender'];
        $formData['birth_date']             = date_format(date_create_from_format('j F Y', $_POST['birthday']), 'Y-m-d');
        $formData['nationality']            = $_POST['nationality'];
        $formData['occupation']             = $_POST['occupation'];
        $formData['field_of_study']         = $_POST['fullOfStudy'];
        $formData['institution_workplace']  = $_POST['instWork'];
        $formData['whatsapp_number']        = $_POST['whatsAppNumber'];
        $formData['instagram']              = $_POST['instagram'];
        $formData['emergency_contact']      = $_POST['emergency'];
        $formData['contact_relation']       = $_POST['contactRelation'];
        $formData['disease_history']        = $_POST['disease'];
        $formData['tshirt_size']            = $_POST['tshirt'];
        $formData['is_vegetarian']          = $_POST['vegetarian'];
        $formData['address']                = $_POST['address'];
        $this->ParticipantDetail->update($formData);
        echo json_encode('sukses');
    }
    public function ajxPostOther(){
        $formData['id_user']            = $this->session->userdata('id_user');
        $formData['achievements']       = $_POST['achievements'];
        $formData['experience']         = $_POST['experience'];
        $formData['social_projects']    = $_POST['socialProjects'];
        $formData['talents']            = $_POST['talents'];
        $this->ParticipantDetail->update($formData);
        echo json_encode('sukses');
    }
    public function ajxPostEssay(){
        $formData['id_user']        = $this->session->userdata('id_user');
        $formData['essay_type']     = $_POST['essayType'];
        $formData['essay']          = $_POST['essay'];
        $this->ParticipantDetail->update($formData);
        echo json_encode('sukses');
    }
    public function ajxPostProgram(){
        $formData['id_user']            = $this->session->userdata('id_user');
        $formData['source']             = $_POST['source'];
        $formData['source_account']     = $_POST['sourceAccount'];
        $formData['motivation_link']    = $_POST['motivation'];
        $formData['share_proof_link']   = $_POST['shareRequirement'];
        $formData['referral_code']      = $_POST['referral'];
        $this->ParticipantDetail->update($formData);
        echo json_encode('sukses');
    }
}