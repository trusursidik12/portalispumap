<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class F_full_news extends CI_Controller {

	public function index()
	{
		$this->temp_frontend->load('frontend/theme/template_v', 'frontend/fullnews/full_news_v');
	}
}
