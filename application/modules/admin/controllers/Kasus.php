<?php

class Kasus extends Admin_Controller {

    function __construct() {
        parent::__construct();

        $this->load->model(array('admin/tabel_kasus'));
        $this->load->model(array('admin/tabel_subyek'));
        $this->load->model(array('admin/detail_kasus_subyek'));
    }

    public function index() {
    	$allkasus = $this->detail_kasus_subyek->get_detail_kasus();
    	$data['detail_kasus_subyek'] = $allkasus;
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "kasus/kasus_list";
        $this->load->view($this->_container, $data);
    }

    // public function create() {
    //     $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "kasus/kasus_create";
    //     $this->load->view($this->_container, $data);
    // }

    public function create() {
        if ($this->input->post('judul_kasus') && $this->input->post('nama_terlapor')) {
            $data['judul_kasus'] = $this->input->post('judul_kasus');
            $data['lokasi_kejadian'] = $this->input->post('lokasi_kejadian');
            $data['tanggal_kejadian'] = $this->input->post('tanggal_kejadian');
            $data['nama_lengkap'] = $this->input->post('nama_lengkap');
            $data['alamat'] = $this->input->post('alamat');
            $data['kota'] = $this->input->post('kota');
            $data['kodepos'] = $this->input->post('kodepos');
            $data['status'] = 'kasus';
            // $data['no_surat'] = $this->input->post('no_surat');
            // $data['tanggal_surat'] = $this->input->post('tanggal_surat');
            // $data['disposisi'] = $this->input->post('disposisi');
            // $data['kasus_posisi'] = $this->input->post('kasus_posisi');
            // $data['kesimpulan'] = $this->input->post('kesimpulan');
            // $data['saran'] = $this->input->post('saran');
            // $data['id_surat'] = $this->input->post('id_surat');

            $last_id_kasus = $this->tabel_kasus->insert($data);
            $data['id_kasus'] = $last_id_kasus;
            $this->tabel_kasus->update($data, $last_id_kasus);
            

            $data_subyek['nama_terlapor'] = $this->input->post('nama_terlapor');
            $data_subyek['lembaga'] = $this->input->post('lembaga');
            $data_subyek['kategori_subyek'] = $this->input->post('kategori_subyek');
            $data_subyek['id_kasus'] = $last_id_kasus;
        	
        	$last_id_subyek = $this->tabel_subyek->insert($data_subyek);


        	$data_detail['id_kasus'] = $last_id_kasus;
        	$data_detail['id_subyek'] = $last_id_subyek;

        	$this->detail_kasus_subyek->insert($data_detail);


            redirect('/admin/register/kasus', 'refresh');

        }

        // $surats = $this->surat->get_all();

        // $data['surats'] = $surats;
        // $pidanas = $this->pidana->get_all();

        // $data['pidanas'] = $pidanas;

        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "kasus/kasus_create";
        $this->load->view($this->_container, $data);
    }

    public function edit($id) {

        $kasus = $this->tabel_kasus->get($id);
        $subyek = $this->tabel_subyek->get($id);
        $data['kasus'] = $kasus;
        $data['subyek'] = $subyek;
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "kasus/kasus_edit";
        $this->load->view($this->_container, $data);
    }

    public function naik_lidik() {
        
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "perkara_penyelidikan_create";
        $this->load->view($this->_container, $data);
    }

}