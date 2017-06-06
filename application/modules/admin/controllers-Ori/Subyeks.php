<?php

class Subyeks extends Admin_Controller {

    function __construct() {
        parent::__construct();

        $this->load->model(array('admin/subyek'));
        $this->load->model(array('admin/pasal'));
    }

    public function index() {
        $subyeks = $this->subyek->get_all();

        $data['subyeks'] = $subyeks;
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "subyeks_list";
        $this->load->view($this->_container, $data);
    }

    public function create() {
        if ($this->input->post('nama_terlapor')) {
            $data['nama_terlapor'] = $this->input->post('nama_terlapor');
            $data['lembaga'] = $this->input->post('lembaga');
            $data['jabatan_resmi'] = $this->input->post('jabatan_resmi');
            $data['status'] = $this->input->post('status');
            $data['peran'] = $this->input->post('peran');
            $data['id_pasal'] = $this->input->post('id_pasal');
    
            $this->subyek->insert($data);

            redirect('/admin/subyeks', 'refresh');
        }

        $pasals = $this->pasal->get_all();

        $data['pasals'] = $pasals;

        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "subyeks_create";
        $this->load->view($this->_container, $data);
    }

    public function edit($id) {
        if ($this->input->post('nama_terlapor')) {
            $data['nama_terlapor'] = $this->input->post('nama_terlapor');
            $data['lembaga'] = $this->input->post('lembaga');
            $data['jabatan_resmi'] = $this->input->post('jabatan_resmi');
            $data['status'] = $this->input->post('status');
            $data['peran'] = $this->input->post('peran');
            $data['id_pasal'] = $this->input->post('id_pasal');

            $this->subyek->update($data, $id);

            redirect('/admin/subyeks', 'refresh');
        }

        $subyek = $this->subyek->get($id);
        $pasals = $this->pasal->get_all();

        $data['pasals'] = $pasals;
        $data['subyek'] = $subyek;
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "subyeks_edit";
        $this->load->view($this->_container, $data);
    }

    public function delete($id) {
        $this->subyek->delete($id);

        redirect('/admin/subyeks', 'refresh');
    }

}
