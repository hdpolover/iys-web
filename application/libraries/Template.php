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
}