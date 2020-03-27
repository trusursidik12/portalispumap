<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class F_faq extends CI_Controller {

	public function index()
	{
		$data['faqs'] = $this->f_home_m->get_aqmfaqs();
		$this->temp_frontend->load('frontend/theme/template_v', 'frontend/faq/faq_v', $data);
	}
}
