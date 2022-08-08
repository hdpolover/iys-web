<?php

class Template {
    protected $_ci;

    function __construct(){
        $this->_ci = &get_instance();
    }
    public function front($content, $data){
        $this->_ci->load->view('templates/front/header', $data);
        $this->_ci->load->view('templates/front/topbar', $data);
        $this->_ci->load->view($content, $data); // Content
        $this->_ci->load->view('templates/front/footer', $data);
    }
    public function frontWithoutTopBar($content, $data){
        $this->_ci->load->view('templates/front/header', $data);
        $this->_ci->load->view($content, $data); // Content
        $this->_ci->load->view('templates/front/footer', $data);
    }
    public function user($content, $data){
        $this->_ci->load->view('templates/usr/header', $data);
        $this->_ci->load->view('templates/usr/topbar', $data);
        $this->_ci->load->view($content, $data); // Content
        $this->_ci->load->view('templates/usr/footer', $data);
    }
    public function admin($content, $data){
        $this->_ci->load->view('templates/adm/header', $data);
        $this->_ci->load->view('templates/adm/topbar', $data);
        $this->_ci->load->view($content, $data); // Content
        $this->_ci->load->view('templates/adm/footer', $data);
    }
    public function affiliate($content, $data){
        $this->_ci->load->view('templates/aff/header', $data);
        $this->_ci->load->view('templates/aff/topbar', $data);
        $this->_ci->load->view($content, $data); // Content
        $this->_ci->load->view('templates/aff/footer', $data);
    }
}