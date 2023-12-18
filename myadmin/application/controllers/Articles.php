<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Articles extends CI_Controller {

	public function index()
	{
		

		$email = $this->session->email;
				if($email ==""){
				$this->load->view('login.php');
		}else{
			$data['articlesdata'] = $this->db->get('articles')->result();
		$this->load->view('articles.php',$data);
		}
	}
}
