<?php

class Obyeks extends Admin_Controller {

    function __construct() {
        parent::__construct();

        $this->load->model(array('admin/obyek'));
        $this->load->model(array('admin/pidana'));
    }

    public function index() {
        $obyeks = $this->obyek->get_all();

        $data['obyeks'] = $obyeks;
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "obyeks_list";
        $this->load->view($this->_container, $data);
    }

    public function create() {
        if ($this->input->post('obyek_pidana')) {
            $data['obyek_pidana'] = $this->input->post('obyek_pidana');
            $data['jenis_obyek'] = $this->input->post('jenis_obyek');
            $data['nilai_kontrak'] = $this->input->post('nilai_kontrak');
            $data['kerugian_negara'] = $this->input->post('kerugian_negara');
            $data['pemulihan_aset'] = $this->input->post('pemulihan_aset');
            $data['id_kategori_pidana'] = $this->input->post('id_kategori_pidana');
    
            $this->obyek->insert($data);

            redirect('/admin/obyeks', 'refresh');
        }

        $pidanas = $this->pidana->get_all();

        $data['pidanas'] = $pidanas;

        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "obyeks_create";
        $this->load->view($this->_container, $data);
    }

    public function edit($id) {
        if ($this->input->post('obyek_pidana')) {
            $data['obyek_pidana'] = $this->input->post('obyek_pidana');
            $data['jenis_obyek'] = $this->input->post('jenis_obyek');
            $data['nilai_kontrak'] = $this->input->post('nilai_kontrak');
            $data['kerugian_negara'] = $this->input->post('kerugian_negara');
            $data['pemulihan_aset'] = $this->input->post('pemulihan_aset');
            $data['id_kategori_pidana'] = $this->input->post('id_kategori_pidana');

            $this->obyek->update($data, $id);

            redirect('/admin/obyeks', 'refresh');
        }

        $obyek = $this->obyek->get($id);
        $pidanas = $this->pidana->get_all();

        $data['pidanas'] = $pidanas;
        $data['obyek'] = $obyek;
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "obyeks_edit";
        $this->load->view($this->_container, $data);
    }

    public function delete($id) {
        $this->obyek->delete($id);

        redirect('/admin/obyeks', 'refresh');
    }

}
