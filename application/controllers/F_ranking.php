<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class F_ranking extends CI_Controller {

	public function index()
	{
		$data['aqmrankpm10'] 					= $this->f_home_m->get_aqmrankpm10();
		$data['aqmrankpm25'] 					= $this->f_home_m->get_aqmrankpm25();
		$data['aqmrankso2'] 					= $this->f_home_m->get_aqmrankso2();
		$data['aqmrankco'] 						= $this->f_home_m->get_aqmrankco();
		$data['aqmranko3'] 						= $this->f_home_m->get_aqmranko3();
		$data['aqmrankno2'] 					= $this->f_home_m->get_aqmrankno2();
		$data['aqmprovinsi'] 					= $this->f_home_m->get_aqmprovinsi_web();
		$data['aqmrankpm10yesterday'] 			= $this->f_home_m->get_aqmrankpm10_yesterday();
		$data['aqmrankpm25yesterday'] 			= $this->f_home_m->get_aqmrankpm25_yesterday();
		$data['aqmrankso2yesterday'] 			= $this->f_home_m->get_aqmrankso2_yesterday();
		$data['aqmrankcoyesterday'] 			= $this->f_home_m->get_aqmrankco_yesterday();
		$data['aqmranko3yesterday'] 			= $this->f_home_m->get_aqmranko3_yesterday();
		$data['aqmrankno2yesterday'] 			= $this->f_home_m->get_aqmrankno2_yesterday();

		$this->temp_frontend->load('frontend/theme/template_v', 'frontend/ranking/ranking_v', $data);
	}
}
