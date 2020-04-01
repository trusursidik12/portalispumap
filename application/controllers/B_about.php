<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class B_about extends CI_Controller {

    function __construct()
    {
        parent::__construct();      
        check_not_login();
        check_bukan_level_staff();
    }

	public function index()
	{
		$data['about']          = $this->b_about_m->get_aqmabout();
        $data['users']          = $this->b_about_m->get_users();
        $data['title_header']   = "About List";
        $data['title_menu']     = "Add About";
        $data['controllers']    = "about";

		$this->temp_backend->load('backend/theme/template_v', 'backend/about/about_list', $data);
	}

    public function add()
    {
        $data['title_header']   = "Add About";
        $data['title_menu']     = "List About";
        $data['controllers']    = "about";
        $this->form_validation->set_rules('title', 'Title About', 'required');

        $this->form_validation->set_message('required', '%s tidak boleh kosong');

        if ($this->form_validation->run() === false) {
            $this->temp_backend->load('backend/theme/template_v', 'backend/about/about_form_add', $data);
        } else {
            $this->b_about_m->add_aqmabout();
            redirect('about/list');
        }
    }

    public function edit($slug = NULL)
    {
        $data['about']           = $this->b_about_m->get_aqmaboutslug($slug);

        if(empty($data['about'])){
            show_404();
        }

        $data['title_header']   = "Add About";
        $data['title_menu']     = "List About";
        $data['controllers']    = "about";
        $this->form_validation->set_rules('title', 'Title About', 'required');

        $this->form_validation->set_message('required', '%s tidak boleh kosong');

        if ($this->form_validation->run() === false) {
            $this->temp_backend->load('backend/theme/template_v', 'backend/about/about_form_edit', $data);
        } else {
            $this->b_about_m->update_aqmabout();
            redirect('about/list');
        }
    }

    public function delete($id){
        $id = decrypt_url($id);
        $this->b_about_m->delete_aqmabout($id);
        redirect('about/list');
    }
}
