<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contacts extends CI_Controller {

	public function index()
	{
		

		$email = $this->session->email;
				if($email ==""){
				$this->load->view('login.php');
		}else{
			$data['contactdata'] = $this->db->get('contacts')->result();
		$this->load->view('contacts.php',$data);
		}
	}
}
