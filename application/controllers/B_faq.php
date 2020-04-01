<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class B_faq extends CI_Controller {

    function __construct()
    {
        parent::__construct();      
        check_not_login();
        check_bukan_level_staff();
    }

	public function index()
	{
		$data['faqs']           = $this->b_faq_m->get_aqmfaq();
        $data['users']          = $this->b_faq_m->get_users();
        $data['title_header']   = "Faq List";
        $data['title_menu']     = "Add Faq";
        $data['controllers']    = "faq";

		$this->temp_backend->load('backend/theme/template_v', 'backend/faq/faq_list', $data);
	}

    public function add()
    {
        $data['title_header']   = "Add Faq";
        $data['title_menu']     = "List Faq";
        $data['controllers']    = "faq";
        $this->form_validation->set_rules('title', 'Title Faq', 'required');

        $this->form_validation->set_message('required', '%s tidak boleh kosong');

        if ($this->form_validation->run() === false) {
            $this->temp_backend->load('backend/theme/template_v', 'backend/faq/faq_form_add', $data);
        } else {
            $this->b_faq_m->add_aqmfaq();
            redirect('faq/list');
        }
    }

    public function edit($slug = NULL)
    {
        $data['faqs']           = $this->b_faq_m->get_aqmfaqslug($slug);

        if(empty($data['faqs'])){
            show_404();
        }

        $data['title_header']   = "Add Faq";
        $data['title_menu']     = "List Faq";
        $data['controllers']    = "faq";
        $this->form_validation->set_rules('title', 'Title Faq', 'required');

        $this->form_validation->set_message('required', '%s tidak boleh kosong');

        if ($this->form_validation->run() === false) {
            $this->temp_backend->load('backend/theme/template_v', 'backend/faq/faq_form_edit', $data);
        } else {
            $this->b_faq_m->update_aqmfaq();
            redirect('faq/list');
        }
    }

    public function delete($id){
        $id = decrypt_url($id);
        $this->b_faq_m->delete_aqmfaq($id);
        redirect('faq/list');
    }
}
