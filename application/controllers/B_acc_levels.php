<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class B_acc_levels extends CI_Controller {

	function __construct()
	{
		parent::__construct();		
		check_not_login();
		check_bukan_level_staff();
	}

	public function index()
	{
		$data['levels'] 		= $this->b_acc_levels_m->get_levels();
		// $data['iconbar'] 		= $this->global_m->get_iconbar();
		// $data['users'] 			= $this->b_acc_levels_m->get_users();
		$data['title_header'] 	= "Levels List";
		$data['title_menu'] 	= "Add Level";
		$data['controllers'] 	= "levels";
		$this->temp_backend->load('backend/theme/template_v', 'backend/accounts/levels/levels_list', $data);
	}

	public function add(){
		// $data['iconbar'] 		= $this->global_m->get_iconbar();
		$data['title_header'] 	= "Add Levels";
		$data['title_menu'] 	= "List Levels";
		$data['controllers'] 	= "levels";

		$this->form_validation->set_rules('lvl_name', 'Level Name', 'required|is_unique[acc_levels.lvl_name]|max_length[50]');
		$this->form_validation->set_rules('lvl_desc', 'Level Description', 'max_length[240]');

		$this->form_validation->set_message('required', '%s Empty, Please Input..');
		$this->form_validation->set_message('is_unique', '%s Already Exist, Please Input Another Level Name..');

		if($this->form_validation->run() === FALSE){
			$this->temp_backend->load('backend/theme/template_v', 'backend/accounts/levels/levels_form_add', $data);
		} else {
			$this->b_acc_levels_m->add_levels();
			redirect('accounts/levels/list');
		}		
	}

	public function edit($slug = NULL){
		$data['levels'] 		= $this->b_acc_levels_m->get_levelsview($slug);
		// $data['iconbar'] 		= $this->global_m->get_iconbar();
		$data['title_header'] 	= "Edit Levels";
		$data['title_menu'] 	= "List Levels";
		$data['controllers'] 	= "levels";

		if(empty($data['levels'])){
			show_404();
		}

		$this->form_validation->set_rules('lvl_name', 'Level Name', 'required|callback_levels_check|max_length[50]');
		$this->form_validation->set_rules('lvl_desc', 'Level Description', 'max_length[240]');

		$this->form_validation->set_message('required', '%s Empty, Please Input..');

		if($this->form_validation->run() === FALSE){
			$this->temp_backend->load('backend/theme/template_v', 'backend/accounts/levels/levels_form_edit', $data);
		} else {
			$this->b_acc_levels_m->update_levels();
			redirect('accounts/levels/list');
		}
	}

	public function levels_check()
	{
		$post = $this->input->post(null, TRUE);
		$query = $this->db->query("SELECT * FROM acc_levels WHERE lvl_name = '$post[lvl_name]' AND lvl_id != '$post[lvl_id]'");
		if($query->num_rows() > 0){
			$this->form_validation->set_message('levels_check', '{field} Already Exist, Please Input Another Level Name');
			return FALSE;
		}
			return TRUE;
	}

	public function delete($id){
		$id = decrypt_url($id);
		$this->b_acc_levels_m->delete_levels($id);
		redirect('accounts/levels/list');
	}
}
