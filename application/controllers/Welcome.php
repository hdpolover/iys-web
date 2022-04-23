<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
		$data['title'] 	= "Home";
		$data['topBar'] = "home";
		$this->template->front('landing', $data);
	}
	public function tes(){
		// print_r(hash('sha256', md5('123admin456')));
		// $this->load->view('email/register');
		$this->load->library('encryption');
		echo $this->encryption->decrypt('24d2eb8e9a4f8fd39c1f0fe560ff9ea38cb0adc74127bf9c55294269dae0db3927f49b467d19d910be7e83ee33432927db8b83443d6af366a70e643fab3d4680bFACru+xk5xz56dSHzgxXOhAXNkPfFaCfCP5RmrX8Alf7J0gp1ogng37ywKx8xje');
	}
}
