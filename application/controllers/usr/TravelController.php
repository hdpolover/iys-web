<?php

class TravelController extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('ParticipantDetail');
        $this->load->library('upload');


        $payment = $this->db->get_where('payment_status', ['id_user' => $this->session->userdata('id_user')])->result();
        if($payment == null || $payment[1]->status != '6'){
            $this->session->set_flashdata('err_msg', 'Your batch 1 payment has not been successful!');
            redirect('personal-info');
        }
    }

    public function index(){
        $data['title']      = 'Travel Information';
        $data['sidebar']    = 'travel';
        $data['passport']   = $this->db->get_where('travel_passport', ['id_user' => $this->session->userdata('id_user')])->result();
        $data['flight']     = $this->db->get_where('travel_flight', ['id_user' => $this->session->userdata('id_user')])->result();
        $data['residence']  = $this->db->get_where('travel_residence', ['id_user' => $this->session->userdata('id_user')])->result();
        $data['visa']       = $this->db->get_where('travel_visa', ['id_user' => $this->session->userdata('id_user')])->result();

        $this->template->user('usr/travel/index', $data);
        $this->ParticipantDetail->resetAnnouncement(['id_user' => $this->session->userdata('id_user'), 'id_summit' => '1']);
    }
    public function passport(){
        if(!empty($_FILES['passportFile']['name'])){
            $uploadImage = $this->uploadImage(['path' => 'passport', 'file' => 'passportFile']);
            if($uploadImage['status'] == false){
                $this->session->set_flashdata('err_msg', $uploadImage['msg']);
                redirect('admin/announcement-public/edit/'.$_POST['id']);
            }
            $formData['file'] = $uploadImage['link'];
        }
        
        $formData['id_user']    = $this->session->userdata('id_user');
        $formData['number']     = $_POST['passportNumber'];
        $formData['full_name']  = $_POST['fullname'];

        if($_POST['id'] == ''){
            $this->db->insert('travel_passport', $formData);
            $this->session->set_flashdata('succ_msg', 'Successfully upload passport information!');
        }else{
            $this->db->where('id_passport', $_POST['id'])->update('travel_passport', $formData);
            $this->session->set_flashdata('succ_msg', 'Successfully edit passport information!');
        }

        redirect('travel');
    }
    public function flight(){
        if($_POST['depDate'] == '' || $_POST['depTime'] == ''){
            $this->session->set_flashdata('err_msg', 'Opps! please input departure date or time!');
            redirect('travel');
        }

        if($_POST['depDate'] == '' || $_POST['depTime'] == ''){
            $this->session->set_flashdata('err_msg', 'Opps! please input return date or time!');
            redirect('travel');
        }

        $formData['id_user']                = $this->session->userdata('id_user');
        $formData['departure_airport']      = $_POST['depAirport'];
        $formData['departure_date']         = date_format(date_create($_POST['depDate']), 'Y-m-d');
        $formData['departure_time']         = $_POST['depTime'];
        $formData['departure_airlane']      = $_POST['depAir'];
        $formData['departure_flight_code']  = $_POST['depCode'];
        $formData['return_date']            = date_format(date_create($_POST['retDate']), 'Y-m-d');
        $formData['return_airport']         = $_POST['retAirport'];
        $formData['return_time']            = $_POST['retTime'];
        $formData['return_airlane']         = $_POST['retAir'];
        $formData['return_flight_code']     = $_POST['retCode'];

        if($_POST['id'] == ''){
            $this->db->insert('travel_flight', $formData);
            $this->session->set_flashdata('succ_msg', 'Successfully upload flight information!');
        }else{
            $this->db->where('id_flight', $_POST['id'])->update('travel_flight', $formData);
            $this->session->set_flashdata('succ_msg', 'Successfully edit flight information!');
        }

        redirect('travel');
    }
    public function residence(){
        $formData['id_user']    = $this->session->userdata('id_user');
        $formData['type']       = $_POST['resType'];
        $formData['address']    = $_POST['resAddress'];

        if($_POST['id'] == ''){
            $this->db->insert('travel_residence', $formData);
            $this->session->set_flashdata('succ_msg', 'Successfully upload residence information!');
        }else{
            $this->db->where('id_residence', $_POST['id'])->update('travel_residence', $formData);
            $this->session->set_flashdata('succ_msg', 'Successfully edit residence information!');
        }

        redirect('travel');
    }
    public function visa(){
        if(!empty($_FILES['visaFile']['name'])){
            $uploadImage = $this->uploadImage(['path' => 'visa', 'file' => 'visaFile']);
            if($uploadImage['status'] == false){
                $this->session->set_flashdata('err_msg', $uploadImage['msg']);
                redirect('admin/announcement-public/edit/'.$_POST['id']);
            }
            $formData['file'] = $uploadImage['link'];
        }
        
        $formData['id_user']    = $this->session->userdata('id_user');
        if($_POST['id'] == ''){
            $this->db->insert('travel_visa', $formData);
            $this->session->set_flashdata('succ_msg', 'Successfully upload visa information!');
        }else{
            $this->db->where('id_visa', $_POST['id'])->update('travel_visa', $formData);
            $this->session->set_flashdata('succ_msg', 'Successfully edit visa information!');
        }
        redirect('travel');
    }
    public function uploadImage($param){
        $path = "uploads/travel/".$param['path'];
        $conf['upload_path']    = $path;
        $conf['allowed_types']  = 'jpg|jpeg|png';
        // $conf['max_size']       = 1024;
        $conf['file_name']      = time().rand(1, 10);
        $conf['encrypt_name']   = true;
        $this->upload->initialize($conf);

        if ($this->upload->do_upload($param['file'])) {
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