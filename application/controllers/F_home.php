<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class F_home extends CI_Controller {

	public function index()
	{
		$data['aqmdata'] 			= $this->f_home_m->get_aqmdata();
		$data['aqmispu'] 			= $this->f_home_m->get_aqmispu();
		$data['aqmstasiun'] 		= $this->f_home_m->get_aqmstasiun();
		$data['aqmprovinsi'] 		= $this->f_home_m->get_aqmprovinsi_web();
		$data['aqmprovinsilist'] 	= $this->f_home_m->get_aqmprovinsi_list();
		$data['news'] 				= $this->f_home_m->get_aqmnews();

		$this->temp_frontend->load('frontend/theme/template_v', 'frontend/home/home_v', $data);
	}
}
