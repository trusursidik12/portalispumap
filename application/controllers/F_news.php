<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class F_news extends CI_Controller {

	public function index()
	{
		$this->temp_frontend->load('frontend/theme/template_v', 'frontend/news/news/news_v');
	}


	public function readmore()
	{
		$this->temp_frontend->load('frontend/theme/template_v', 'frontend/news/readmore/readmore_v');
	}
}
