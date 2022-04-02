<?php

class AnnouncementController extends CI_Controller{
    public function __construct(){
        parent::__construct();
        if($this->session->userdata('role') != "0"){
            redirect('/');
        }
        $this->load->library('upload');
        $this->load->model('Admin');
    }
    public function index(){
        $data['title']      = 'Announcement';
        $data['sidebar']    = 'announcement';

        $this->template->admin('adm/announcement/index', $data);
    }
    public function store(){
        $uploadPoster = $this->uploadImage();
        if($uploadPoster['status'] == false){
            $this->session->set_flashdata('err_msg', $uploadPoster['msg']);
        }

        // $formData['title'] = 
    }
    public function uploadImage(){
        $path = "uploads/announcement";
        $conf['upload_path']    = $path;
        $conf['allowed_types']  = 'jpg|jpeg|png';
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