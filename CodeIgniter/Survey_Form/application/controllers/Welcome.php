<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('index');
	}
	public function submitForm()
	{
		$this->load->model("User");
		$user_details = array(
			'Name' => $this->input->post('Name'),
			'Location' => $this->input->post('Location'),
			'Language' => $this->input->post('Language'),
			'Comment' => $this->input->post('Comment'),
		);
		$add_user = $this->User->Create($user_details);
		if($add_user == true)
		{
			// redirect('http://localhost:8888/Welcome/success');
			redirect('http://localhost:8888/result');
			// $this->load->view('success');
		}
		else
		{
			redirect('/');
		}
	}
	public function success()
	{
		$this->load->view("success");
	}
}
