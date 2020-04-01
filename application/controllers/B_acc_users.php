<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class B_acc_users extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');		
		check_not_login();
		check_bukan_level_staff();
	}

	public function index()
	{
		$data['users'] 			= $this->b_acc_users_m->get_users();
		// $data['iconbar'] 		= $this->global_m->get_iconbar();
		$data['title_header'] 	= "Users List";
		$data['title_menu'] 	= "Add User";
		$data['controllers'] 	= "users";
		
		$this->temp_backend->load('backend/theme/template_v', 'backend/accounts/users/users_list', $data);
	}

	public function add(){
		$data['levels'] 		= $this->b_acc_users_m->get_levels();
		// $data['iconbar'] 		= $this->global_m->get_iconbar();
		$data['title_header'] 	= 'Add User';
		$data['title_menu'] 	= "Users List";
		$data['controllers'] 	= "users";

		$this->form_validation->set_rules('usr_fullname', 'Fullname', 'required');
		$this->form_validation->set_rules('usr_email', 'Email / Username', 'required|is_unique[acc_users.usr_email]');
		$this->form_validation->set_rules('usr_password', 'Password', 'required');
		$this->form_validation->set_rules('usr_repassword', 'Password Confirmation', 'required|matches[usr_password]',
			array('matches' => '%s Wrong')
		);
		$this->form_validation->set_rules('usr_phone', 'Phone Number', 'required|is_unique[acc_users.usr_phone]');
		$this->form_validation->set_rules('usr_photo', 'Photo', 'callback_validate_photo');

		$this->form_validation->set_message('required', '%s Empty, Please Input..');
		$this->form_validation->set_message('is_unique', '%s Already Exist, Please Try Again ..');

		if($this->form_validation->run() === FALSE){
			$this->temp_backend->load('backend/theme/template_v', 'backend/accounts/users/users_form_add', $data);
		} else {
			$config['upload_path'] = './assets/backend/img/accounts/users';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';

			$rename = date('d-m-Y His ').strtolower($this->input->post('usr_fullname'));
			$config['file_name'] = $rename;

			$this->load->helper('file');
			$this->load->library('upload', $config);

			if(!$this->upload->do_upload('usr_photo')){
				$errors = array('error' => $this->upload->display_errors());
				$photo = 'nophoto.png';
			} else {
				$dataphotos = $this->upload->data();
				$photo = $dataphotos['file_name'];
			}

			$this->b_acc_users_m->add_users($photo);
			redirect('accounts/users/list');
		}
	}

	public function edit($slug = NULL){
		$data['users'] 			= $this->b_acc_users_m->get_usersview($slug);
		$data['levels'] 		= $this->b_acc_users_m->get_levels();
		// $data['iconbar'] 		= $this->global_m->get_iconbar();
		$data['title_header'] 	= 'Edit User';
		$data['title_menu'] 	= "Users List";
		$data['controllers'] 	= "users";

		if(empty($data['users'])){
			show_404();
		}

		$this->form_validation->set_rules('usr_fullname', 'Fullname', 'required');
		$this->form_validation->set_rules('usr_email', 'Email / Username', 'required|callback_username_check');
		if ($this->input->post('usr_password')) {
			$this->form_validation->set_rules('usr_password', 'Password', 'required');
			$this->form_validation->set_rules('usr_repassword', 'Password Confirmation', 'required|matches[usr_password]',
				array('matches' => '%s Wrong')
			);
		}
		if ($this->input->post('usr_repassword')) {
			$this->form_validation->set_rules('usr_repassword', 'Password Confirmation', 'required|matches[usr_password]',
				array('matches' => '%s Wrong')
			);
		}
		$this->form_validation->set_rules('usr_phone', 'Phone Number', 'required|callback_users_phone_check|max_length[16]');
		$this->form_validation->set_rules('usr_photo', 'Photo', 'callback_validate_photo');

		$this->form_validation->set_message('required', '%s Empty, Please Input..');

		if($this->form_validation->run() === FALSE){
			$this->temp_backend->load('backend/theme/template_v', 'backend/accounts/users/users_form_edit', $data);
		} else {
			$id = $this->input->post('usr_id');
			$config['upload_path'] = './assets/backend/img/accounts/users';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';

			$rename = date('d-m-Y His ').strtolower($this->input->post('usr_fullname'));
			$config['file_name'] = $rename;

			$this->load->library('upload', $config);

			if(!$this->upload->do_upload('usr_photo')){
				$errors = array('error' => $this->upload->display_errors());
				$photo = $this->input->post('photos');
			} else {
				$data = $this->b_acc_users_m->ambil_id_gambar($id);
				$path = './assets/backend/img/accounts/users/';
				$nama = $path.$data->usr_photo;

				if(file_exists($nama) && unlink($nama)){
					$dataphotos = $this->upload->data();
					$photo = $dataphotos['file_name'];
				}
					$dataphotos = $this->upload->data();
					$photo = $dataphotos['file_name'];
			}
			$this->b_acc_users_m->update_users($photo);
			redirect('accounts/users/list');
		}
	}

	public function validate_photo() {
    $check = TRUE;
    if (isset($_FILES['usr_photo']) && $_FILES['usr_photo']['size'] != 0) {
        $allowedExts = array("gif", "jpeg", "jpg", "png", "JPG", "JPEG", "GIF", "PNG");
        $allowedTypes = array(IMAGETYPE_PNG, IMAGETYPE_JPEG, IMAGETYPE_GIF);
        $extension = pathinfo($_FILES["usr_photo"]["name"], PATHINFO_EXTENSION);
        $detectedType = exif_imagetype($_FILES['usr_photo']['tmp_name']);
        $type = $_FILES['usr_photo']['type'];
        if (!in_array($detectedType, $allowedTypes)) {
            $this->form_validation->set_message('validate_photo', 'Invalid Image Content!');
            $check = FALSE;
        }
        if(filesize($_FILES['usr_photo']['tmp_name']) > 3000000) {
            $this->form_validation->set_message('validate_photo', 'The Image file size shoud not exceed 3MB!');
            $check = FALSE;
        }
        if(!in_array($extension, $allowedExts)) {
            $this->form_validation->set_message('validate_photo', "Invalid file extension {$extension}, Only .gif | .jpeg | .jpg | .png format is allowed");
            $check = FALSE;
        }
    }
    return $check;
	}

	public function username_check()
	{
		$post = $this->input->post(null, TRUE);
		$query = $this->db->query("SELECT * FROM acc_users WHERE usr_email = '$post[usr_email]' AND usr_id != '$post[usr_id]'");
		if($query->num_rows() > 0){
			$this->form_validation->set_message('username_check', '{field} Already Exist, Please Input Another Email / Username');
			return FALSE;
		}
			return TRUE;
	}

	public function users_phone_check()
	{
		$post = $this->input->post(null, TRUE);
		$query = $this->db->query("SELECT * FROM acc_users WHERE usr_phone = '$post[usr_phone]' AND usr_id != '$post[usr_id]'");
		if($query->num_rows() > 0){
			$this->form_validation->set_message('users_phone_check', '{field} Already Exist, Please Try Agin ..');
			return FALSE;
		}
			return TRUE;
	}

	public function delete($id){
		$id 	= decrypt_url($id);
		$data 	= $this->b_acc_users_m->ambil_id_gambar($id);//ambil id gambar	  
		$path 	= './assets/backend/img/accounts/users/';// lokasi gambar berada
		unlink($path.$data->usr_photo);// hapus data di folder dimana data tersimpan
		$this->b_acc_users_m->delete_users($id);
		redirect('accounts/users/list');
	}

}
