<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class F_home extends CI_Controller {

	public function index()
	{
		// $this->load->view('welcome_message');
		$this->temp_frontend->load('frontend/theme/template_v', 'frontend/home/home_v');
	}
}
