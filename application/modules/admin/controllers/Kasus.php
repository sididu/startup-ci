<?php

class Kasus extends Admin_Controller {

    function __construct() {
        parent::__construct();

        $this->load->model(array('admin/tabel_kasus'));
        $this->load->model(array('admin/tabel_subyek'));
    }

    public function index() {
    	$kasus = $this->tabel_kasus->get_all();
    	$data['tabel_kasus'] = $kasus;
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "kasus/kasus_list";
        $this->load->view($this->_container, $data);
    }

    // public function create() {
    //     $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "kasus/kasus_create";
    //     $this->load->view($this->_container, $data);
    // }

    public function create() {
        if ($this->input->post('judul_kasus')) {
            $data['judul_kasus'] = $this->input->post('judul_kasus');
            $data['id_kasus'] = $this->input->post('id');
            $data['lokasi_kejadian'] = $this->input->post('lokasi_kejadian');
            $data['tanggal_kejadian'] = $this->input->post('tanggal_kejadian');
            $data['nama_lengkap'] = $this->input->post('nama_lengkap');
            $data['alamat'] = $this->input->post('alamat');
            $data['kota'] = $this->input->post('kota');
            $data['kodepos'] = $this->input->post('kodepos');
            // $data['no_surat'] = $this->input->post('no_surat');
            // $data['tanggal_surat'] = $this->input->post('tanggal_surat');
            // $data['disposisi'] = $this->input->post('disposisi');
            // $data['kasus_posisi'] = $this->input->post('kasus_posisi');
            // $data['kesimpulan'] = $this->input->post('kesimpulan');
            // $data['saran'] = $this->input->post('saran');
            // $data['id_surat'] = $this->input->post('id_surat');
    
            $this->tabel_kasus->insert($data);

        }

        if ($this->input->post('nama_terlapor')) {
            $data_subyek['id_kasus'] = $this->input->post('id');
            $data_subyek['nama_terlapor'] = $this->input->post('nama_terlapor');
            $data_subyek['lembaga'] = $this->input->post('lembaga');
            $data_subyek['kategori_subyek'] = $this->input->post('kategori_subyek');
        	
        	$this->tabel_subyek->insert($data_subyek);

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
        
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "kasus/kasus_edit";
        $this->load->view($this->_container, $data);
    }

}