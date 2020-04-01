<?php

	function check_already_login(){
		$ci =& get_instance();
		$user_session = $ci->session->userdata('userid');
		if($user_session){
			redirect(site_url('dashboard'));
		}
	}

	function check_not_login(){
		$ci =& get_instance();
		$user_session = $ci->session->userdata('userid');
		if(!$user_session){
			redirect('login');
		}
	}

	function check_bukan_level_admin(){
		$ci =& get_instance();
		$ci->load->library('fungsi');
		if($ci->fungsi->user_login()->usr_lvl_id == 1){
			redirect(site_url('dashboard'));
		}
	}

	function check_bukan_level_staff(){
		$ci =& get_instance();
		$ci->load->library('fungsi');
		if($ci->fungsi->user_login()->usr_lvl_id == 2){
			redirect(site_url('dashboard'));
		}
	}