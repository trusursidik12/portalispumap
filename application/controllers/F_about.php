<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class F_about extends CI_Controller {

	public function index()
	{
		$this->temp_frontend->load('frontend/theme/template_v', 'frontend/about/about_v');
	}
}
