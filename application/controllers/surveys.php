<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Surveys extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler();
	}

	public function index()
	{
		$this->load->view('surveys/form');
	}

	public function getInfo(){
		$data = array(
			'name' => $this->input->post('name', TRUE),
			'location' => $this->input->post('location', TRUE),
			'languages' => $languages = $this->input->post('languages', TRUE),
			'comment' => $this->input->post('comment', TRUE)
			);
		$this->load->view('surveys/result', $data);
	}
}

//end of main controller