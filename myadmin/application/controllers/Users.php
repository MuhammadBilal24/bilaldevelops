<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function index()
	{
		$email = $this->session->email;
				if($email ==""){
				$this->load->view('login.php');
		}else{
			$data['usersdata'] = $this->db->get('users')->result();
			$this->load->view('users.php',$data);
		}
	}
	public function insert()
	{
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$usertype = $this->input->post('usertype');
		$data = [
			'name'=>$name,
			'email' => $email,
			'password' => $password,
			'usertype' => $usertype,

		];
		$result = $this->db->insert('users', $data);
		if ($result) {
			echo ("Correct");
		} else {
			echo ("Uncorrect");
		}
	}
}
