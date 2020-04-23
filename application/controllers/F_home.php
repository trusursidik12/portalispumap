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
		$data['aqmrankso2'] 		= $this->f_home_m->get_aqmrankso2();

		$this->temp_frontend->load('frontend/theme/template_v', 'frontend/home/home_v', $data);
	}

	function ajax_aqmstasiun()
	{
		$stasiun = $this->f_home_m->get_aqmstasiun();

		$data = array();
        foreach ($stasiun as $list) {
            $row = array();
             $row['lat'] = $list['lat'];
             $row['lon'] = $list['lon'];
            $data[] = $row;
        }
        $output = array(
                    "data" => $data,
                );
        // output to json format
        echo json_encode($output);
	}

	function ajax_var()
	{
		$lat = @$_GET['lat'];
		$lon = @$_GET['lon'];
		// print_r($_GET);
		// echo $slug;
		// $slug = $this->post('slug');
		$stasiun = $this->f_home_m->get_lat_lon($lat,$lon);
		// $str  = str_replace('\"', '"', $stasiun);
        // output to json format
        // $output = array(
        // 	$stasiun
        // );
        echo $stasiun;
	}
}
