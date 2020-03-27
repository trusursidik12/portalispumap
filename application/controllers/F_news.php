<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class F_news extends CI_Controller {

	public function index()
	{
		$data['news'] = $this->f_home_m->get_aqmnews();
		$this->temp_frontend->load('frontend/theme/template_v', 'frontend/news/news/news_v', $data);
	}


	public function readmore($slug = NULL)
	{
		$data['singlenews'] 		= $this->f_home_m->get_aqmnews_slug($slug);
		$data['news'] 				= $this->f_home_m->get_aqmnews();

		if(empty($data['singlenews'])){
			show_404();
		}

		$this->temp_frontend->load('frontend/theme/template_v', 'frontend/news/readmore/readmore_v', $data);
	}
}
