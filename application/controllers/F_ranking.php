<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class F_ranking extends CI_Controller {

	public function index()
	{
		$data['aqmdata'] 			= $this->f_home_m->get_aqmdata();
		$data['aqmprovinsi'] 		= $this->f_home_m->get_aqmprovinsi_web();

		$this->temp_frontend->load('frontend/theme/template_v', 'frontend/ranking/ranking_v', $data);
	}
}
