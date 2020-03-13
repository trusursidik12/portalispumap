<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		// $this->load->view('welcome_message');
		$this->temp_frontend->load('frontend/theme/template_v', 'frontend/home/home_v');
	}

	public function profile()
	{
		$this->temp_frontend->load('frontend/theme/template_v', 'frontend/profile/profile_v');
	}
}
