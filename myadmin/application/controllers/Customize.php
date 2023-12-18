<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customize extends CI_Controller {

	public function index()
	{
		$email = $this->session->email;
				if($email ==""){
				$this->load->view('login.php');
		}else{
			$data['customizedata']=$this->db->get('customization')->result();		
		$this->load->view('customize.php',$data);
		}
	}
	function getCustomizedata()
	{
		{
			$id = $this->input->post('id');
			$data=$this->db->query("select * from customization where id='$id'")->result()[0];		
			echo json_encode($data);
		}
	}
	public function update()
	{
		$id = $this->input->post('id');
		$title = $this->input->post('title');
		$value = $this->input->post('value');
		// $status = $this->input->post('status');
		// $status = "0";
		// if($status == "on")
		// {
			
		// }

		$data = [
			'title' => $title,
			'value' => $value,
			// 'status' => $status,
		];
		$this->db->where('id',$id);
		$this->db->update('customization',$data);
		echo("Correct");
	}
	function deletewatch()
	{
		{
			$this->db->query("DELETE FROM views WHERE watch");		
			// echo json_encode($data);
		}
	}
	function deletecontacts()
	{
		{
			$this->db->query("DELETE FROM contacts WHERE id");		
			// echo json_encode($data);
		}
	}
	function deleterequests()
	{
		{
			$this->db->query("DELETE FROM hired WHERE id");		
			// echo json_encode($data);
		}
	}
}
