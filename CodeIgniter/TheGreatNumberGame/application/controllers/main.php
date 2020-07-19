<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class main extends CI_Controller {

	public function index()
	{
		$this->session->set_userdata('number', rand(1, 100));
		$this->load->view("index");
	}

	public function check_guess()
	{
		if($this->input->post('guess') < $this->session->userdata('number')){
			$this->session->set_flashdata('result', 'Too Low!');
		}
		if($this->input->post('guess') > $this->session->userdata('number')){
			$this->session->set_flashdata('result', 'Too High!');
		}
		if($this->input->post('guess') == $this->session->userdata('number')){
			$this->session->set_flashdata('correct', 'Guess Is Correct!!');
		}
		redirect('/');
	}
}
?>
