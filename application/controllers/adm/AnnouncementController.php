<?php

class AnnouncementController extends CI_Controller{
    public function __construct(){
        parent::__construct();
        if($this->session->userdata('role') != "0"){
            redirect('/');
        }
        $this->load->library('upload');
        $this->load->model('Announcement');
    }
    public function index(){
        $data['title']          = 'Announcement';
        $data['sidebar']        = 'announcement';
        $data['subSidebar']     = 'announcePublic';
        $data['announcements']  = $this->Announcement->getAll();

        $this->template->admin('adm/announcement/public/index', $data);
    }
    public function add(){
        $data['title']      = 'Add New Announcement';
        $data['sidebar']    = 'announcement';
        $data['subSidebar']     = 'announcePublic';

        $this->template->admin('adm/announcement/public/add', $data);
    }
    public function edit($id){
        $data['title']          = 'Edit Announcement';
        $data['sidebar']        = 'announcement';
        $data['subSidebar']     = 'announcePublic';
        $data['announcement']   = $this->Announcement->getById($id);

        $this->template->admin('adm/announcement/public/edit', $data);
    }
    public function store(){
        if(!empty($_FILES['poster']['name'])){
            $uploadPoster = $this->uploadImage();
            if($uploadPoster['status'] == false){
                $this->session->set_flashdata('err_msg', $uploadPoster['msg']);
                redirect('admin/announcement-public/add');
            }
            $formData['poster'] = $uploadPoster['link'];
        }

        $formData['id_summit']  = $_POST['summit'];
        $formData['title']      = $_POST['title'];
        $formData['content']    = $_POST['content'];
        $formData['date']       = date('Y-m-d H:i:s');

        $this->Announcement->insert($formData);
        $this->session->set_flashdata('succ_msg', 'Successfully added a new announcement!');
        redirect('admin/announcement-public');
    }
    public function change(){
        if(!empty($_FILES['poster']['name'])){
            $uploadPoster = $this->uploadImage();
            if($uploadPoster['status'] == false){
                $this->session->set_flashdata('err_msg', $uploadPoster['msg']);
                redirect('admin/announcement-public/edit/'.$_POST['id']);
            }
            $formData['poster'] = $uploadPoster['link'];
        }

        $formData['id_announcement']    = $_POST['id'];
        $formData['title']              = $_POST['title'];
        $formData['content']            = $_POST['content'];

        $this->Announcement->update($formData);
        $this->session->set_flashdata('succ_msg', 'Successfully edit announcement!');
        redirect('admin/announcement-public');
    }
    public function destroy(){
        $this->Announcement->delete(['id_announcement' => $_POST['id']]);
        $this->session->set_flashdata('succ_msg', 'Successfully delete announcement!');
        redirect('admin/announcement-public');
    }
    public function uploadImage(){
        $path = "uploads/announcement";
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