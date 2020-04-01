<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class B_news extends CI_Controller {

    function __construct()
    {
        parent::__construct();      
        check_not_login();
        check_bukan_level_staff();
    }

	public function index()
	{
		$data['news']           = $this->b_news_m->get_aqmnews();
        $data['users']          = $this->b_news_m->get_users();
        $data['title_header']   = "News List";
        $data['title_menu']     = "Add News";
        $data['controllers']    = "news";

		$this->temp_backend->load('backend/theme/template_v', 'backend/news/news_list', $data);
	}

	public function add()
    {
        $data['title_header']   = "Add News";
        $data['title_menu']     = "List News";
        $data['controllers']    = "news";
        $this->form_validation->set_rules('title', 'Title News', 'required');

        $this->form_validation->set_message('required', '%s tidak boleh kosong');

        if ($this->form_validation->run() === false) {
            $this->temp_backend->load('backend/theme/template_v', 'backend/news/news_form_add', $data);
        } else {
            $this->b_news_m->add_aqmnews();
            redirect('news/list');
        }
    }

    public function edit($slug = NULL)
    {
        $data['news']           = $this->b_news_m->get_aqmnewsslug($slug);

        if(empty($data['news'])){
            show_404();
        }

        $data['title_header']   = "Add News";
        $data['title_menu']     = "List News";
        $data['controllers']    = "news";
        $this->form_validation->set_rules('title', 'Title News', 'required');

        $this->form_validation->set_message('required', '%s tidak boleh kosong');

        if ($this->form_validation->run() === false) {
            $this->temp_backend->load('backend/theme/template_v', 'backend/news/news_form_edit', $data);
        } else {
            $this->b_news_m->update_aqmnews();
            redirect('news/list');
        }
    }

    public function delete($id){
        $id = decrypt_url($id);
        $this->b_news_m->delete_aqmnews($id);
        redirect('news/list');
    }
}
