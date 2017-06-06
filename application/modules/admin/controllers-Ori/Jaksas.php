<?php

class Jaksas extends Admin_Controller {

    function __construct() {
        parent::__construct();

        $this->load->model(array('admin/jaksa'));
    }

    public function index() {
        $jaksas = $this->jaksa->get_all();

        $data['jaksas'] = $jaksas;
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "jaksas_list";
        $this->load->view($this->_container, $data);
    }

    public function create() {
        if ($this->input->post('nip')) {
            $data['nip'] = $this->input->post('nip');
            $data['nama'] = $this->input->post('nama');
            $data['pangkat'] = $this->input->post('pangkat');
    
            $this->jaksa->insert($data);

            redirect('/admin/jaksas', 'refresh');
        }

        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "jaksas_create";
        $this->load->view($this->_container, $data);
    }

    public function edit($id) {
        if ($this->input->post('nip')) {
            $data['nip'] = $this->input->post('nip');
            $data['nama'] = $this->input->post('nama');
            $data['pangkat'] = $this->input->post('pangkat');
            $this->jaksa->update($data, $id);

            redirect('/admin/jaksas', 'refresh');
        }

        $jaksa = $this->jaksa->get($id);

        $data['jaksa'] = $jaksa;
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "jaksas_edit";
        $this->load->view($this->_container, $data);
    }

    public function delete($id) {
        $this->jaksa->delete($id);

        redirect('/admin/jaksas', 'refresh');
    }

}
