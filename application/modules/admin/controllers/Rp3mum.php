<?php

class Rp3mum extends Admin_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "rp3mum/perkara_penyidikan_umum_list";
        $this->load->view($this->_container, $data);
    }
    public function geledah() {
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "rp3mum/perkara_penyidikan_umum_geledah";
        $this->load->view($this->_container, $data);
    }

    public function naik_dik_sus($id) {
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "perkara_penyidikan_khusus_create";
        $this->load->view($this->_container, $data);
    }

    public function edit($id) {
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "rp3mum/perkara_penyelidikan_geledah";
        $this->load->view($this->_container, $data);
    }

    public function delete($id) {
        $this->jaksa->delete($id);

        redirect('/admin/register/rp3mum', 'refresh');
    }

}
