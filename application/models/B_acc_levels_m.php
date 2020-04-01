<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class B_acc_levels_m extends CI_Model {

	function __construct()
	{
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');
		// check_not_login();
		// check_bukan_level_staff();
	}

	public function get_levels($id = FALSE){
		if($id === FALSE){
			$this->db->select('*');
			$this->db->from('acc_levels');
			$this->db->join('acc_users as two', 'two.usr_id = acc_levels.lvl_edited_by', 'left');
			$this->db->join('acc_users as one', 'one.usr_id = acc_levels.lvl_created_by', 'left');
			$query = $this->db->get();
			return $query->result_array();
		}
		$query = $this->db->get_where('acc_levels', array('lvl_id' => $id));
		return $query->row_array();
	}

	public function get_levelsview($slug = FALSE){
		if($slug === FALSE){
			$this->db->order_by('lvl_id', 'ASC');
			$query = $this->db->get('acc_levels');
			return $query->result_array();
		}
		$query = $this->db->get_where('acc_levels', array('lvl_slug' => $slug));
		return $query->row_array();
	}

	// public function get_users(){
	// 	$this->db->order_by('usr_id', 'ASC');
	// 	$query = $this->db->get('acc_users');
	// 	return $query->result_array();
	// }

	public function add_levels(){
		$slug = url_title($this->input->post('lvl_name'));
		$data = array(
			'lvl_name' 			=> $this->input->post('lvl_name'),
			'lvl_slug' 			=> strtolower($slug),
			'lvl_desc' 			=> $this->input->post('lvl_desc'),
			'lvl_created_at' 	=> $this->input->post('lvl_created_at', array('type' => 'timestamp')),
			'lvl_created_by' 	=> '1'
		);
		return $this->db->insert('acc_levels', $data);
	}

	public function update_levels(){
		$slug = url_title($this->input->post('lvl_name'));
		$data = array(
			'lvl_name' 			=> $this->input->post('lvl_name'),
			'lvl_slug' 			=> strtolower($slug),
			'lvl_desc' 			=> $this->input->post('lvl_desc'),
			'lvl_edited_at' 	=> date('Y-m-d H:i:s'),
			'lvl_edited_by' 	=> '1'
		);
		$this->db->where('lvl_id', $this->input->post('lvl_id'));
		return $this->db->update('acc_levels', $data);
	}

	public function delete_levels($id){
		$this->db->where('lvl_id', $id);
		$this->db->delete('acc_levels');
		return TRUE;
	}

}