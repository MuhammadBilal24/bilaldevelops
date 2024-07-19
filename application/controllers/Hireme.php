<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hireme extends CI_Controller {

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
		$this->load->view('hireme.php');
	}
	public function insert()
	{
		$hname = $this->input->post('hname');
		$hemail = $this->input->post('hemail');
		$hsubject = $this->input->post('hsubject');
		$habout = $this->input->post('habout');
		$data = [
			'hname'=>$hname,
			'hemail' => $hemail,
			'hsubject' => $hsubject,
			'habout' => $habout,

		];
		$result = $this->db->insert('hired', $data);
		if ($result) {
			echo ("Correct");
		} else {
			echo ("Uncorrect");
		}
	}
}
