<?php

class Pasal extends Admin_Controller {

    function __construct() {
        parent::__construct();

        $this->load->model(array('admin/tabel_pasal'));
    }

    public function index() {
        $pasal = $this->tabel_pasal->get_all();

        $data['tabel_pasal'] = $pasal;
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "pasal/pasal_list";
        $this->load->view($this->_container, $data);
    }

    public function create() {
        if ($this->input->post('ayat')) {
            $data['ayat'] = $this->input->post('ayat');
            $data['keterangan'] = $this->input->post('keterangan');
            $data['jumlah_masa_hukuman'] = $this->input->post('jumlah_masa_hukuman');
    
            $this->tabel_pasal->insert($data);

            redirect('/admin/administrasi/pasal', 'refresh');
        }

        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "pasal/pasal_create";
        $this->load->view($this->_container, $data);
    }

    public function edit($id) {
        if ($this->input->post('ayat')) {
            $data['ayat'] = $this->input->post('ayat');
            $data['keterangan'] = $this->input->post('keterangan');
            $data['jumlah_masa_hukuman'] = $this->input->post('jumlah_masa_hukuman');
            $this->tabel_pasal->update($data, $id);

            redirect('/admin/administrasi/pasal', 'refresh');
        }

        $jaksa = $this->tabel_pasal->get($id);

        $data['tabel_pasal'] = $jaksa;
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "pasal/pasal_edit";
        $this->load->view($this->_container, $data);
    }

    public function delete($id) {
        $this->tabel_pasal->delete($id);

        redirect('/admin/administrasi/pasal', 'refresh');
    }

}
