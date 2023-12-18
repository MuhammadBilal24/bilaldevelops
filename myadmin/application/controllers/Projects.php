<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Projects extends CI_Controller {

	public function index()
	{
		

		$email = $this->session->email;
				if($email ==""){
				$this->load->view('login.php');
		}else{
			$data['projectdata'] = $this->db->get('projects')->result();
		$this->load->view('projects.php',$data);
		}
	}
}
