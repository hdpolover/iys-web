<?php
class ParticipantDetailController extends CI_Controller{
    public function __construct(){
        parent::__construct();
        if($this->session->userdata('role') != '1'){
            redirect('/');
        }
        $this->load->library('upload');
        $this->load->model('User');
        $this->load->model('ParticipantDetail');
    }
    public function index(){
        $data['title']      = "Personal Info";
        $data['sidebar']    = "personal-info";
        $data['countries']  = $this->db->get('countries')->result();
        $statusSteps        = $this->ParticipantDetail->getStatusStep($this->session->userdata('id_user'));

        $data['statStepSelfPhoto'] = true;
        foreach ($statusSteps['selfPhoto'] as $items => $item) {
            if($item == NULL || $item == '' || $item == '0'){
                $data['statStepSelfPhoto'] = false;
                $this->ParticipantDetail->update(['id_user' => $this->session->userdata('id_user'), 'step' => '4', 'is_submited' => '0']);
                $this->session->set_flashdata('err_msg', 'There is an invalid form at the self photo step!');
                break;
            }
        }

        $data['statStepProgram'] = true;
        foreach ($statusSteps['program'] as $items => $item) {
            if($item == NULL || $item == ''){
                $data['statStepProgram'] = false;
                $this->ParticipantDetail->update(['id_user' => $this->session->userdata('id_user'), 'step' => '3', 'is_submited' => '0']);
                $this->session->set_flashdata('err_msg', 'There is an invalid form at the program step!');
                break;
            }
        }

        $data['statStepEssay'] = true;
        foreach ($statusSteps['essay'] as $items => $item) {
            if($item == NULL || $item == ''){
                $data['statStepEssay'] = false;
                $this->ParticipantDetail->update(['id_user' => $this->session->userdata('id_user'), 'step' => '2', 'is_submited' => '0']);
                $this->session->set_flashdata('err_msg', 'There is an invalid form at the essay step!');
                break;
            }
        }

        $data['statStepOther'] = true;
        foreach ($statusSteps['other'] as $items => $item) {
            if($item == NULL || $item == ''){
                $data['statStepOther'] = false;
                $this->ParticipantDetail->update(['id_user' => $this->session->userdata('id_user'), 'step' => '1', 'is_submited' => '0']);
                $this->session->set_flashdata('err_msg', 'There is an invalid form at the other step!');
                break;
            }
        }

        $data['statStepBasic'] = true;
        foreach ($statusSteps['basic'] as $items => $item) {
            if($item == NULL || $item == ''){
                $data['statStepBasic'] = false;
                $this->ParticipantDetail->update(['id_user' => $this->session->userdata('id_user'), 'step' => '0', 'is_submited' => '0']);
                $this->session->set_flashdata('err_msg', 'There is an invalid form at the basic step!');
                break;
            }
        }
        $data['detail']     = $this->ParticipantDetail->getById($this->session->userdata('id_user'));

        $this->template->user('usr/participant-detail/index', $data);
    }
    public function submit(){
        $participantDetail = $this->ParticipantDetail->getById($this->session->userdata('id_user'));

        if(empty($_FILES['poster']['name'])){
            if($participantDetail->photo == NULL || $participantDetail->photo == ''){
                $this->session->set_flashdata('err_msg', "You haven't uploaded a photo yet");
            }
        }else{
            $uploadPhoto = $this->uploadImage();
            if($uploadPhoto['status'] == false){
                $this->session->set_flashdata('err_msg', $uploadPhoto['msg']);
                redirect('personal-info');
            }else{
                $formData['photo']  = $uploadPhoto['link'];
                $this->session->set_userdata('photo', $uploadPhoto['link']);
            }
        }
        

        $this->User->update(['id_user' => $this->session->userdata('id_user'), 'name' => $_POST['fullName']]);
        $this->session->set_userdata('name', $_POST['fullName']);

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
        $formData['achievements']           = $_POST['achievements'];
        $formData['experience']             = $_POST['experience'];
        $formData['social_projects']        = $_POST['socialProjects'];
        $formData['talents']                = $_POST['talents'];
        $formData['essay_type']             = $_POST['essayType'];
        $formData['essay']                  = $_POST['essay'];
        $formData['source']                 = $_POST['source'];
        $formData['source_account']         = $_POST['sourceAccount'];
        $formData['motivation_link']        = $_POST['motivation'];
        $formData['share_proof_link']       = $_POST['shareRequirement'];
        $formData['referral_code']          = $_POST['referral'];
        $formData['termsncondition']        = '1';
        $formData['is_submited']            = '1';
        $this->ParticipantDetail->update($formData);

        $step = $participantDetail->step;
        $this->ParticipantDetail->update(['id_user' => $this->session->userdata('id_user'), 'step' => '5']);

        redirect('personal-info');
    }
    public function ajxPostBasic(){
        $step = $this->ParticipantDetail->getById($this->session->userdata('id_user'))->step;
        if($step == '0') $this->ParticipantDetail->update(['id_user' => $this->session->userdata('id_user'), 'step' => '1']);

        $this->User->update(['id_user' => $this->session->userdata('id_user'), 'name' => $_POST['fullName']]);
        $this->session->set_userdata('name', $_POST['fullName']);

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
        $step = $this->ParticipantDetail->getById($this->session->userdata('id_user'))->step;
        if($step == '1') $this->ParticipantDetail->update(['id_user' => $this->session->userdata('id_user'), 'step' => '2']);

        $formData['id_user']            = $this->session->userdata('id_user');
        $formData['achievements']       = $_POST['achievements'];
        $formData['experience']         = $_POST['experience'];
        $formData['social_projects']    = $_POST['socialProjects'];
        $formData['talents']            = $_POST['talents'];
        $this->ParticipantDetail->update($formData);
        echo json_encode('sukses');
    }
    public function ajxPostEssay(){
        $step = $this->ParticipantDetail->getById($this->session->userdata('id_user'))->step;
        if($step == '2') $this->ParticipantDetail->update(['id_user' => $this->session->userdata('id_user'), 'step' => '3']);

        $formData['id_user']        = $this->session->userdata('id_user');
        $formData['essay_type']     = $_POST['essayType'];
        $formData['essay']          = $_POST['essay'];
        $this->ParticipantDetail->update($formData);
        echo json_encode('sukses');
    }
    public function ajxPostProgram(){
        $step = $this->ParticipantDetail->getById($this->session->userdata('id_user'))->step;
        if($step == '3') $this->ParticipantDetail->update(['id_user' => $this->session->userdata('id_user'), 'step' => '4']);

        $formData['id_user']            = $this->session->userdata('id_user');
        $formData['source']             = $_POST['source'];
        $formData['source_account']     = $_POST['sourceAccount'];
        $formData['motivation_link']    = $_POST['motivation'];
        $formData['share_proof_link']   = $_POST['shareRequirement'];
        $formData['referral_code']      = $_POST['referral'];
        $this->ParticipantDetail->update($formData);
        echo json_encode('sukses');
    }
    public function uploadImage(){
        $path = "uploads/self-photo";
        $conf['upload_path']    = $path;
        $conf['allowed_types']  = 'jpg|jpeg|png';
        $conf['max_size']       = 1024;
        $conf['file_name']      = time();
        $conf['encrypt_name']   = true;
        $this->upload->initialize($conf);

        if ($this->upload->do_upload('poster')) {
            $img = $this->upload->data();
            return [
                'status' => true,
                'msg'   => 'Data berhasil terupload',
                'link'  => base_url($path . '/' . $img['file_name'])
            ];
        } else {
            return [
                'status' => false,
                'msg'   => $this->upload->display_errors(),
            ];
        }
    }
}