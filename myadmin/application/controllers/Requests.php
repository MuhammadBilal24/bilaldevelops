<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Requests extends CI_Controller {

	public function index()
	{
		$email = $this->session->email;
				if($email ==""){
				$this->load->view('login.php');
		}else{
			$hdata['hireddata'] = $this->db->get('hired')->result();
			$this->load->view('requests.php',$hdata);
		}
	}
}
