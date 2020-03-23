<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class F_maps extends CI_Controller {

	public function index()
	{
		$this->temp_frontend->load('frontend/theme/template_v', 'frontend/maps/maps_v');
	}
}
