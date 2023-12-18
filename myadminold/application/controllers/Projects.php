<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Projects extends CI_Controller {
	public function index()
	{
		$data['projectsdata'] = $this->db->get('projects')->result();
		$this->load->view('projects.php',$data);
	}
    public function insertproject()
	{
		$config['upload_path'] = "./assets/imgs";
		$config['allowed_types'] = 'gif|jpg|png|jpeg|PNG';
		$this->load->library('upload', $config);
		if ($this->upload->do_upload("file")) {
			$data = array('upload_data' => $this->upload->data());
			$data1 = array(
				'web_name' => $this->input->post('web_name'),
				'details' => $this->input->post('details'),
				'link' => $this->input->post('link'),
				'status' => $this->input->post('status'),
				'img' => $data['upload_data']['file_name']
			);
		$result = $this->db->insert('projects', $data1);
		if ($result) {
			echo ("Correct");
		} else {
			echo ("Uncorrect");
		}
		}
	}
	public function edit()
	{
		$id = $this->input->post('id');
		$data = $this->db->query("select * from products where id='$id'")->result()[0];
		echo json_encode($data);
	}
	public function update()
	{
		$id = $this->input->post('id');
		$web_name = $this->input->post('web_name');
		$details = $this->input->post('details');
		$link = $this->input->post('link');
		$status = $this->input->post('status');
		$img = $this->input->post('img');
		$data = $this->db->query("update products set web_name='$web_name' , details='$details', link='$link', status='$status',img='$img' where id='$id' ");
		if ($data == 'Correct') {
			echo ("Correct");
		} else {
			echo ("Uncorrect");
		}
	}



}