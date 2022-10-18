<?php

class AnnouncementController extends CI_Controller{
    public function __construct(){
        parent::__construct();
        if($this->session->userdata('role') == "0" || $this->session->userdata('role') == "6"){
            $this->load->library('upload');
            $this->load->model('Announcement');
            $this->load->model('ParticipantDetail');
        }else{
            redirect('/');
        }
    }
    public function index(){
        $data['title']          = 'Announcement';
        $data['sidebar']        = 'announcement';
        $data['subSidebar']     = 'announcePublic';
        $data['announcements']  = $this->Announcement->get(['is_registered' => 0, 'orderBy' => 'date DESC']);

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

        $formData['id_summit']      = $_POST['summit'];
        $formData['title']          = $_POST['title'];
        $formData['content']        = $_POST['content'];
        $formData['date']           = date('Y-m-d H:i:s');

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
    public function rView(){
        $data['title']          = 'Announcement';
        $data['sidebar']        = 'announcement';
        $data['subSidebar']     = 'announceRegis';
        $data['announcements']  = $this->Announcement->get(['is_registered' => '1', 'orderBy' => 'date DESC']);

        $this->template->admin('adm/announcement/registered/index', $data);
    }
    public function rAdd(){
        $data['title']      = 'Add New Announcement';
        $data['sidebar']    = 'announcement';
        $data['subSidebar']     = 'announceRegis';

        $this->template->admin('adm/announcement/registered/add', $data);
    }
    public function rEdit($id){
        $data['title']          = 'Edit Announcement';
        $data['sidebar']        = 'announcement';
        $data['subSidebar']     = 'announceRegis';
        $data['announcement']   = $this->Announcement->getById($id);

        $this->template->admin('adm/announcement/registered/edit', $data);
    }
    public function rStore(){
        if(!empty($_FILES['poster']['name'])){
            $uploadPoster = $this->uploadImage();
            if($uploadPoster['status'] == false){
                $this->session->set_flashdata('err_msg', $uploadPoster['msg']);
                redirect('admin/announcement-registered/add');
            }
            $formData['poster'] = $uploadPoster['link'];
        }

        $formData['id_summit']      = $_POST['summit'];
        $formData['title']          = $_POST['title'];
        $formData['content']        = $_POST['content'];
        $formData['is_registered']  = 1;
        $formData['date']           = date('Y-m-d H:i:s');

        $this->Announcement->insert($formData);
        $this->ParticipantDetail->newAnnouncement($_POST['summit']);
        $this->session->set_flashdata('succ_msg', 'Successfully added a new announcement!');
        redirect('admin/announcement-registered');
    }
    public function rChange(){
        if(!empty($_FILES['poster']['name'])){
            $uploadPoster = $this->uploadImage();
            if($uploadPoster['status'] == false){
                $this->session->set_flashdata('err_msg', $uploadPoster['msg']);
                redirect('admin/announcement-registered/edit/'.$_POST['id']);
            }
            $formData['poster'] = $uploadPoster['link'];
        }

        $formData['id_announcement']    = $_POST['id'];
        $formData['title']              = $_POST['title'];
        $formData['content']            = $_POST['content'];

        $this->Announcement->update($formData);
        $this->session->set_flashdata('succ_msg', 'Successfully edit announcement!');
        redirect('admin/announcement-registered');
    }
    public function rDestroy(){
        $this->Announcement->delete(['id_announcement' => $_POST['id']]);
        $this->session->set_flashdata('succ_msg', 'Successfully delete announcement!');
        redirect('admin/announcement-registered');
    }

    public function uploadImage(){
        $path = "uploads/announcement";
        $conf['upload_path']    = $path;
        $conf['allowed_types']  = 'jpg|jpeg|png';
        // $conf['max_size']       = 1024;
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