<?php

class Pidanas extends Admin_Controller {

    function __construct() {
        parent::__construct();

        $this->load->model(array('admin/pidana'));
    }

    public function index() {
        $pidanas = $this->pidana->get_all();

        $data['pidanas'] = $pidanas;
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "pidanas_list";
        $this->load->view($this->_container, $data);
    }

    public function create() {
        if ($this->input->post('kategori_pidana')) {
            $data['kategori_pidana'] = $this->input->post('kategori_pidana');
    
            $this->pidana->insert($data);

            redirect('/admin/pidanas', 'refresh');
        }

        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "pidanas_create";
        $this->load->view($this->_container, $data);
    }

    public function edit($id) {
        if ($this->input->post('kategori_pidana')) {
            $data['kategori_pidana'] = $this->input->post('kategori_pidana');
            $this->pidana->update($data, $id);

            redirect('/admin/pidanas', 'refresh');
        }

        $pidana = $this->pidana->get($id);

        $data['pidana'] = $pidana;
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "pidanas_edit";
        $this->load->view($this->_container, $data);
    }

    public function delete($id) {
        $this->pidana->delete($id);

        redirect('/admin/pidanas', 'refresh');
    }

}
