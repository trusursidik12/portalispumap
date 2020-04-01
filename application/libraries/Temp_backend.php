<?php

Class Temp_backend{

	var $template_data = array();

	function set($name, $value){
		$this->template_data[$name] = $value;
	}

	function load($temp_backend = '', $view = '', $view_data = array(), $return = FALSE){
		$this->CI =& get_instance();
		$this->set('contentsbackend', $this->CI->load->view($view, $view_data, TRUE));
		return $this->CI->load->view($temp_backend, $this->template_data, $return);
	}
}