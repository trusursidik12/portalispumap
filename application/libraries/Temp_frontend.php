<?php

Class Temp_frontend{

	var $template_data = array();

	function set($name, $value){
		$this->template_data[$name] = $value;
	}

	function load($temp_frontend = '', $view = '', $view_data = array(), $return = FALSE){
		$this->CI =& get_instance();
		$this->set('contentsfrontend', $this->CI->load->view($view, $view_data, TRUE));
		return $this->CI->load->view($temp_frontend, $this->template_data, $return);
	}
}