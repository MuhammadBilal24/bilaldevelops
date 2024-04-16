<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function index()
	{
		

		$email = $this->session->email;
				if($email ==""){
				$this->load->view('login.php');
		}else{
			
		$this->load->view('Profile.php');
		}
	}
}
