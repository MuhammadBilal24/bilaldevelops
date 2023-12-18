<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$email = $this->session->email;
				if($email ==""){
				$this->load->view('login.php');
		}else{
			// $data['hiredrequests']=$this->db->get('hired');
			$data['contactsdata']=$this->db->get('contacts');
			$data['notepaddata']=$this->db->get('notepad')->result();
			$this->load->view('dashboard',$data);
		}
	
	}
	public function notepadinsert()
	{
		$text_np = $this->input->post('text_np');
		$data = [
			'text_np'=>$text_np,
		];
		$result = $this->db->insert('notepad', $data);
		if ($result) {
			echo ("Correct");
		} else {
			echo ("Uncorrect");
		}
	}
	public function deletenotepad()
	{
		$id = $this->input->post('id');
		$this->db->where('id_np', $id);
		$result = $this->db->delete('notepad');
		if ($result) {
			echo ("Correct");
		} else {
			echo ("Uncorrect");
		}
	}
	}
