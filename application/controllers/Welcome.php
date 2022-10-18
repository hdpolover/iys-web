<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// require 'src/claviska/SimpleImage.php';
class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		redirect('home');
	}
	public function home(){

		$data['title'] 				= "Home";
		$data['topBar'] 			= "home";
		$data['totalParticipant'] 	= $this->db->query("
			SELECT COUNT(*) as total FROM users
		")->row()->total;
		$this->template->front('landing', $data);
	}
	public function tes(){
		print_r(hash('sha256', md5('testing123')));
	}

	public function get_regis(){
		$this->load->library('encryption');
		$token = $this->encryption->encrypt('USRP_3aa171c8;'.date('Y-m-d H:i', strtotime("+1 day")));
		echo $token;
	}
}
