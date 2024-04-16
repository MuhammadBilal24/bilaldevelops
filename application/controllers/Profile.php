<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

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
		$this->load->view('profile.php');
	}
	public function insertcontact()
	{
		$email_contact = $this->input->post('email_contact');
		$subject_contact = $this->input->post('subject_contact');
		$message_contact = $this->input->post('message_contact');
		$data = [
			'email_contact' => $email_contact,
			'subject_contact' => $subject_contact,
			'message_contact' => $message_contact,

		];
		$result = $this->db->insert('contacts', $data);
		if ($result) {
			echo ("Correct");
		} else {
			echo ("Uncorrect");
		}
	}
}
