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
        $this->load->model('Ambassador');
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
                break;
            }
        }

        $data['statStepProgram'] = true;
        foreach ($statusSteps['program'] as $items => $item) {
            if($item == NULL || $item == ''){
                $data['statStepProgram'] = false;
                $this->ParticipantDetail->update(['id_user' => $this->session->userdata('id_user'), 'step' => '3', 'is_submited' => '0']);
                break;
            }
        }

        $data['statStepEssay'] = true;
        foreach ($statusSteps['essay'] as $items => $item) {
            if($item == NULL || $item == ''){
                $data['statStepEssay'] = false;
                $this->ParticipantDetail->update(['id_user' => $this->session->userdata('id_user'), 'step' => '2', 'is_submited' => '0']);
                break;
            }
        }

        $data['statStepOther'] = true;
        foreach ($statusSteps['other'] as $items => $item) {
            if($item == NULL || $item == ''){
                $data['statStepOther'] = false;
                $this->ParticipantDetail->update(['id_user' => $this->session->userdata('id_user'), 'step' => '1', 'is_submited' => '0']);
                break;
            }
        }

        $data['statStepBasic'] = true;
        foreach ($statusSteps['basic'] as $items => $item) {
            if($item == NULL || $item == ''){
                $data['statStepBasic'] = false;
                $this->ParticipantDetail->update(['id_user' => $this->session->userdata('id_user'), 'step' => '0', 'is_submited' => '0']);
                break;
            }
        }
        $data['detail']     = $this->ParticipantDetail->getById($this->session->userdata('id_user'));

        $this->template->user('usr/participant-detail/index', $data);
    }
    public function checkRC(){
        $ambassador = $this->Ambassador->get(['referral_code' => $_POST['referral'], 'status' => '1']);
        if($ambassador != null){
           echo json_encode(['status' => true, 'name' => $ambassador[0]->name]);
        }else{
            echo json_encode(['status' => false]);
        }
    }
    public function update(){
        $this->ParticipantDetail->update(['id_user' => $this->session->userdata('id_user'), 'is_update' => 1]);
        redirect('personal-info');
    }
    public function updateSave(){
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
        $formData['birth_date']             = date_format(date_create_from_format('F d, Y', $_POST['birthday']), 'Y-m-d');
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
        $formData['province']               = $_POST['province'];
        $formData['city']                   = $_POST['city'];
        $formData['postal_code']            = $_POST['postalCode'];
        $formData['detail_address']         = $_POST['detailAddress'];
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
        $formData['termsncondition']        = '1';
        $formData['is_submited']            = '1';
        $formData['is_update']              = '0';
        $this->ParticipantDetail->update($formData);

        redirect('personal-info');
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

        $ambassador     = $this->Ambassador->get(['referral_code' => $_POST['referral'], 'status' => '1']);
        if($ambassador != null){
            $referral_code  = $_POST['referral'];
        }else{
            $referral_code  = "-";
        }

        $formData['id_user']                = $this->session->userdata('id_user');
        $formData['fullname']               = $_POST['fullName'];
        $formData['gender']                 = $_POST['gender'];
        $formData['birth_date']             = date_format(date_create_from_format('F d, Y', $_POST['birthday']), 'Y-m-d');
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
        $formData['province']               = $_POST['province'];
        $formData['city']                   = $_POST['city'];
        $formData['postal_code']            = $_POST['postalCode'];
        $formData['detail_address']         = $_POST['detailAddress'];
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
        $formData['referral_code']          = $referral_code;
        $formData['qr']                     = $this->generateQR($this->session->userdata('id_user'));
        $formData['termsncondition']        = '1';
        $formData['is_submited']            = '1';
        

        $this->ParticipantDetail->update($formData);

        $this->ParticipantDetail->update(['id_user' => $this->session->userdata('id_user'), 'step' => '5']);

        if($ambassador != null){
            $this->Ambassador->update(['id_ambassador' => $ambassador[0]->id_ambassador, 'total_redeem' => (int)$ambassador->total_redeem + 1]);
        }
        $this->session->set_userdata(['is_submit' => "1"]);
        $this->mail->send($this->session->userdata('email'), 'REGISTRATION FORM COMPLETION NOTICE', $this->load->view('email/personal_submit', $formData, true));
        redirect('personal-info-completed');
    }
    public function ajxPostBasic(){
        $step = $this->ParticipantDetail->getById($this->session->userdata('id_user'))->step;
        if($step == '0') $this->ParticipantDetail->update(['id_user' => $this->session->userdata('id_user'), 'step' => '1']);

        $this->User->update(['id_user' => $this->session->userdata('id_user'), 'name' => $_POST['fullName']]);
        $this->session->set_userdata('name', $_POST['fullName']);

        $formData['id_user']                = $this->session->userdata('id_user');
        $formData['fullname']               = $_POST['fullName'];
        $formData['gender']                 = $_POST['gender'];
        $formData['birth_date']             = date_format(date_create_from_format('F d, Y', $_POST['birthday']), 'Y-m-d');
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
        $formData['province']               = $_POST['province'];
        $formData['city']                   = $_POST['city'];
        $formData['postal_code']            = $_POST['postalCode'];
        $formData['detail_address']         = $_POST['detailAddress'];
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
    public function downloadQR(){
        $this->load->helper('download');
        $qr = $this->ParticipantDetail->getById($this->session->userdata('id_user'))->qr;
        force_download('./'.str_replace(site_url(), '', $qr), NULL);
        print_r(str_replace(site_url(), '', $qr));
    }
    public function generateQR($idUser){
        $this->load->library('ciqrcode'); //pemanggilan library QR CODE
 
        $config['cacheable']    = true; //boolean, the default is true
        $config['cachedir']     = './uploads/'; //string, the default is application/cache/
        $config['errorlog']     = './uploads/'; //string, the default is application/logs/
        $config['imagedir']     = './uploads/qr/'; //direktori penyimpanan qr code
        $config['quality']      = true; //boolean, the default is true
        $config['size']         = '1024'; //interger, the default is 1024
        $config['black']        = array(224,255,255); // array, default is array(255,255,255)
        $config['white']        = array(70,130,180); // array, default is array(0,0,0)
        $this->ciqrcode->initialize($config);
 
        $image_name="QR_".time().'.png'; //buat name dari qr code sesuai dengan nim
 
        $params['data'] = $idUser; //data yang akan di jadikan QR CODE
        $params['level'] = 'H'; //H=High
        $params['size'] = 10;
        $params['savename'] = FCPATH.$config['imagedir'].$image_name; //simpan image QR CODE ke folder assets/images/
        $this->ciqrcode->generate($params); // fungsi untuk generate QR CODE

        return site_url('uploads/qr/'.$image_name);
    }
    public function afterSubmit(){
        $data['title']      = "Personal Info";
        $data['sidebar']    = "personal-info";
        $data['countries']  = $this->db->get('countries')->result();
        $statusSteps        = $this->ParticipantDetail->getStatusStep($this->session->userdata('id_user'));

        $data['statStepSelfPhoto'] = true;
        foreach ($statusSteps['selfPhoto'] as $items => $item) {
            if($item == NULL || $item == '' || $item == '0'){
                $data['statStepSelfPhoto'] = false;
                $this->ParticipantDetail->update(['id_user' => $this->session->userdata('id_user'), 'step' => '4', 'is_submited' => '0']);
                break;
            }
        }

        $data['statStepProgram'] = true;
        foreach ($statusSteps['program'] as $items => $item) {
            if($item == NULL || $item == ''){
                $data['statStepProgram'] = false;
                $this->ParticipantDetail->update(['id_user' => $this->session->userdata('id_user'), 'step' => '3', 'is_submited' => '0']);
                break;
            }
        }

        $data['statStepEssay'] = true;
        foreach ($statusSteps['essay'] as $items => $item) {
            if($item == NULL || $item == ''){
                $data['statStepEssay'] = false;
                $this->ParticipantDetail->update(['id_user' => $this->session->userdata('id_user'), 'step' => '2', 'is_submited' => '0']);
                break;
            }
        }

        $data['statStepOther'] = true;
        foreach ($statusSteps['other'] as $items => $item) {
            if($item == NULL || $item == ''){
                $data['statStepOther'] = false;
                $this->ParticipantDetail->update(['id_user' => $this->session->userdata('id_user'), 'step' => '1', 'is_submited' => '0']);
                break;
            }
        }

        $data['statStepBasic'] = true;
        foreach ($statusSteps['basic'] as $items => $item) {
            if($item == NULL || $item == ''){
                $data['statStepBasic'] = false;
                $this->ParticipantDetail->update(['id_user' => $this->session->userdata('id_user'), 'step' => '0', 'is_submited' => '0']);
                break;
            }
        }
        $data['detail']     = $this->ParticipantDetail->getById($this->session->userdata('id_user'));

        $this->template->user('usr/participant-detail/form_aftersubmit', $data);
    }
}