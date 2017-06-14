<?php

class Kategori_subyek extends Admin_Controller {

    function __construct() {
        parent::__construct();

        $this->load->model(array('admin/tabel_kategori_subyek'));
    }

    public function index() {
        $kategori_subyek = $this->tabel_kategori_subyek->get_all();

        $data['tabel_kategori_subyek'] = $kategori_subyek;
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "kategori-subyek/kategori_subyek_list";
        $this->load->view($this->_container, $data);
    }

    public function create() {
        if ($this->input->post('kategori_subyek')) {
            $data['kategori_subyek'] = $this->input->post('kategori_subyek');
    
            $this->tabel_kategori_subyek->insert($data);

            redirect('/admin/administrasi/kategori_subyek', 'refresh');
        }

        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "kategori-subyek/kategori_subyek_create";
        $this->load->view($this->_container, $data);
    }

    public function edit($id) {
        if ($this->input->post('kategori_subyek')) {
            $data['kategori_subyek'] = $this->input->post('kategori_subyek');
            
            $this->tabel_kategori_subyek->update($data, $id);

            redirect('/admin/administrasi/kategori_subyek', 'refresh');
        }

        $kategori_subyek = $this->tabel_kategori_subyek->get($id);

        $data['tabel_kategori_subyek'] = $kategori_subyek;
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "kategori-subyek/kategori_subyek_edit";
        $this->load->view($this->_container, $data);
    }

    public function delete($id) {
        $this->tabel_kategori_subyek->delete($id);

        redirect('/admin/administrasi/kategori_subyek', 'refresh');
    }

}
