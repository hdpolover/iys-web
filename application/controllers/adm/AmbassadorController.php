<?php

class AmbassadorController extends CI_Controller{
    public function __construct(){
        parent::__construct();
        if($this->session->userdata('role') != "0"){
            redirect('/');
        }
        $this->load->library('upload');
        $this->load->model('Ambassador');
    }
    public function index(){
        $data['title']          = 'Ambassador';
        $data['sidebar']        = 'ambassador';
        $data['ambassadors']    = $this->Ambassador->getAll();

        $this->template->admin('adm/ambassador/index', $data);
    }
    public function add(){
        $data['title']          = 'Add New Announcement';
        $data['sidebar']        = 'ambassador';

        $this->template->admin('adm/ambassador/add', $data);
    }
    public function edit($id){
        $data['title']          = 'Edit Announcement';
        $data['sidebar']        = 'ambassador';
        $data['subSidebar']     = 'announcePublic';
        $data['ambassador']     = $this->Ambassador->getById($id);

        $this->template->admin('adm/ambassador/edit', $data);
    }
    public function store(){
        if($_POST['referral'] == null || $_POST['referral'] == ''){
            $this->session->set_flashdata('err_msg', 'The referral code has not been filled!');
            redirect('admin/ambassador/add');
        }

        if(!empty($_FILES['poster']['name'])){
            $uploadPoster = $this->uploadImage();
            if($uploadPoster['status'] == false){
                $this->session->set_flashdata('err_msg', $uploadPoster['msg']);
                redirect('admin/ambassador/add');
            }
            $formData['photo'] = $uploadPoster['link'];
        }

        $formData['name']           = $_POST['name'];
        $formData['referral_code']  = $_POST['referral'];

        $this->Ambassador->insert($formData);
        $this->session->set_flashdata('succ_msg', 'Successfully added a new ambassador!');
        redirect('admin/ambassador');
    }
    public function generateRC(){
        $words   = explode(' ', $_POST['name']);
        $initial = "";
        foreach ($words as $word) {
            $initial .= strtoupper($word[0]);
        }

        if(count($words) < 5){
            $shfl = $this->generateRandomString(5 - count($words));
            $initial = $initial.$shfl;
        }

        do {
            $newRC      = "AMB23".$initial;
            $ambassador = $this->Ambassador->get(['referral_code' => $newRC]);
        } while ($ambassador != null);

        echo json_encode(['referral_code' => $newRC]);
    }
    public function change(){
        if(!empty($_FILES['poster']['name'])){
            $uploadPoster = $this->uploadImage();
            if($uploadPoster['status'] == false){
                $this->session->set_flashdata('err_msg', $uploadPoster['msg']);
                redirect('admin/ambassador/edit/'.$_POST['id']);
            }
            $formData['photo'] = $uploadPoster['link'];
        }

        $formData['id_ambassador']    = $_POST['id'];
        $formData['name']             = $_POST['name'];

        $this->Ambassador->update($formData);
        $this->session->set_flashdata('succ_msg', 'Successfully edit ambassador!');
        redirect('admin/ambassador');
    }
    public function destroy(){
        $this->Ambassador->delete(['id_ambassador' => $_POST['id']]);
        $this->session->set_flashdata('succ_msg', 'Successfully delete ambassador!');
        redirect('admin/ambassador');
    }
    public function uploadImage(){
        $path = "uploads/ambassador";
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
    function generateRandomString($length = 10) {
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}