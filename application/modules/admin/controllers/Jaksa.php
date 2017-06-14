<?php

class Jaksa extends Admin_Controller {

    function __construct() {
        parent::__construct();

        $this->load->model(array('admin/tabel_jaksa'));
    }

    public function index() {
        $jaksa = $this->tabel_jaksa->get_all();

        $data['tabel_jaksa'] = $jaksa;
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "jaksa/jaksa_list";
        $this->load->view($this->_container, $data);
    }

    public function create() {
        if ($this->input->post('nip')) {
            $data['nip'] = $this->input->post('nip');
            $data['nama_jaksa'] = $this->input->post('nama_jaksa');
            $data['pangkat'] = $this->input->post('pangkat');
    
            $this->tabel_jaksa->insert($data);

            redirect('/admin/administrasi/jaksa', 'refresh');
        }

        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "jaksa/jaksa_create";
        $this->load->view($this->_container, $data);
    }

    public function edit($id) {
        if ($this->input->post('nip')) {
            $data['nip'] = $this->input->post('nip');
            $data['nama_jaksa'] = $this->input->post('nama_jaksa');
            $data['pangkat'] = $this->input->post('pangkat');
            $this->tabel_jaksa->update($data, $id);

            redirect('/admin/administrasi/jaksa', 'refresh');
        }

        $jaksa = $this->tabel_jaksa->get($id);

        $data['tabel_jaksa'] = $jaksa;
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "jaksa/jaksa_edit";
        $this->load->view($this->_container, $data);
    }

    public function delete($id) {
        $this->tabel_jaksa->delete($id);

        redirect('/admin/administrasi/jaksa', 'refresh');
    }

}
