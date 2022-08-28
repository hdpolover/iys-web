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
        $this->load->helper('download');
		// print_r(hash('sha256', md5('123NewsWriter456')));
		// $this->load->view('email/register');
		// $this->load->library('encryption');
		// echo $this->encryption->decrypt('24d2eb8e9a4f8fd39c1f0fe560ff9ea38cb0adc74127bf9c55294269dae0db3927f49b467d19d910be7e83ee33432927db8b83443d6af366a70e643fab3d4680bFACru+xk5xz56dSHzgxXOhAXNkPfFaCfCP5RmrX8Alf7J0gp1ogng37ywKx8xje');

		// $this->load->model('User');
		// $user = $this->User->getById("USRP_200c1d8b");
        // $usr['email']       = $user->email;
        // $usr['name']        = $user->name;
        // $usr['token_regis'] = $user->token_regis;
		// $this->mail->send('ilham.supali@gmail.com', 'Personal Data', $this->load->view('email/personal_submit', $usr, true));	


		try {
            // Create a new SimpleImage object
            $image = new \claviska\SimpleImage();

            $image
                ->fromFile('assets/img/documents/invoice/batch_1_x.jpg')
                ->autoOrient()
                ->text(
                    "ILHAM SAGITA PUTRA PUTRI DIMAS BIN WAHID",
                    array(
                        'fontFile' => realpath('font.ttf'),
                        'size' => 20,
                        'anchor' => 'left',
                        'xOffset' => 260,
                        'yOffset' => -210,
                    )
                )
				->text(
                    "August 22, 2022",
                    array(
                        'fontFile' => realpath('font.ttf'),
                        'size' => 20,
                        'anchor' => 'left',
                        'xOffset' => 600,
                        'yOffset' => -85,
                    )
                )
                //->toScreen();                               // output to the screen
                ->toFile('uploads/invoice/tes.png');
				force_download('uploads/invoice/tes.png', NULL);
            // And much more! 💪
        } catch (Exception $err) {
            // Handle errors
            echo $err->getMessage();
        }
	}

	public function get_regis(){
		$this->load->library('encryption');
		$token = $this->encryption->encrypt('USRP_3aa171c8;'.date('Y-m-d H:i', strtotime("+1 day")));
		echo $token;
	}
}
