<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class B_acc_users_m extends CI_Model {

	function __construct()
	{
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');
	}

	public function login($post){
		$this->db->select('*');
		$this->db->from('acc_users');
		$this->db->where('usr_email', $post['usr_email']);
		$query = $this->db->get();
		return $query;
	}

	public function get($id = null)
	{
		$this->db->from('acc_users');
		if($id != null){
			$this->db->where('usr_id', $id);
		}
		$query = $this->db->get();
		return $query;
	}

	public function get_users($id = FALSE){
		if($id === FALSE){
			$this->db->order_by('usr_id', 'DESC');
			$this->db->join('acc_levels', 'acc_levels.lvl_id = acc_users.usr_lvl_id');
			$query = $this->db->get('acc_users');
			return $query->result_array();
		}
		$query = $this->db->get_where('acc_users', array('usr_id' => $id));
		return $query->row_array();
	}

	public function get_usersview($slug = FALSE){
		if($slug === FALSE){
			$this->db->order_by('usr_id', 'ASC');
			$query = $this->db->get('acc_users');
			return $query->result_array();
		}
		$query = $this->db->get_where('acc_users', array('usr_slug' => $slug));
		return $query->row_array();
	}

	public function get_levels(){
		$this->db->order_by('lvl_id', 'ASC');
		$query = $this->db->get('acc_levels');
		return $query->result_array();
	}

	public function add_users($photo){
		$slug = url_title($this->input->post('usr_fullname'));
		$data = array(
			'usr_lvl_id' 				=> $this->input->post('usr_lvl_id'),
			'usr_fullname' 				=> $this->input->post('usr_fullname'),
			'usr_slug' 					=> strtolower($slug),
			'usr_email' 				=> $this->input->post('usr_email'),
			'usr_password' 				=> password_hash($this->input->post('usr_password'), PASSWORD_ARGON2I),
			'usr_phone' 				=> $this->input->post('usr_phone'),
			'usr_address' 				=> $this->input->post('usr_address'),
			'usr_photo' 				=> $photo,
			'usr_created_at' 			=> $this->input->post('usr_created_at', array('type' => 'timestamp')),
			'usr_created_by' 			=> '1'
		);
		return $this->db->insert('acc_users', $data);
	}

	public function update_users($photo){
		$slug = url_title($this->input->post('usr_fullname'));		
		$data = array(
			'usr_lvl_id' 				=> $this->input->post('usr_lvl_id'),
			'usr_fullname' 				=> $this->input->post('usr_fullname'),
			'usr_slug' 					=> strtolower($slug),
			'usr_email' 				=> $this->input->post('usr_email'),
			'usr_phone' 				=> $this->input->post('usr_phone'),
			'usr_address' 				=> $this->input->post('usr_address'),
			'usr_photo' 				=> $photo,
			'usr_edited_at' 			=> date('Y-m-d H:i:s'),
			'usr_edited_by' 			=> '1'
		);
		if(!empty($this->input->post('usr_password'))){
		$data['usr_password'] = password_hash($this->input->post('usr_password'), PASSWORD_ARGON2I);
		}
		$this->db->where('usr_id', $this->input->post('usr_id'));
		return $this->db->update('acc_users', $data);
	}

	public function ambil_id_gambar($id){
	$this->db->from('acc_users');
	$this->db->where('usr_id', $id);
	$result = $this->db->get('');
	// periksa ada datanya atau tidak
		if ($result->num_rows() > 0) {
		  return $result->row();//ambil datanya berdasrka row id
		}
	}

	public function delete_users($id){
		$this->db->where('usr_id', $id);
		$this->db->delete('acc_users');
		return TRUE;
	}

}