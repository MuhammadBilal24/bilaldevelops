<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
		$this->load->view('home.php');
	}
	public function insertcontact()
	{
		$cemail = $this->input->post('cemail');
		$csubject = $this->input->post('csubject');
		$cmessage = $this->input->post('cmessage');
		$data = [
			'cemail' => $cemail,
			'csubject' => $csubject,
			'cmessage' => $cmessage,

		];
		$result = $this->db->insert('contacts', $data);
		if ($result) {
			echo ("Correct");
		} else {
			echo ("Uncorrect");
		}
	}
	public function insertmodalview()
	{
		$watch = $this->input->post('watch');
		$data = [
			'watch' => $watch,
		];
		$result = $this->db->insert('views', $data);
		if ($result) {
			echo ("Correct");
		} else {
			echo ("Uncorrect");
		}
	}
}
