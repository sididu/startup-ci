<?php

class Kasuss extends Admin_Controller {

    function __construct() {
        parent::__construct();

        $this->load->model(array('admin/kasus'));
        $this->load->model(array('admin/surat'));
        $this->load->model(array('admin/rp2'));
        $this->load->model(array('admin/jaksa'));
        $this->load->model(array('admin/pidana'));
    }

    public function index() {
        $kasuss = $this->kasus->get_all('*' , array('flag_surat' => 1 ));
        // $this->db->where('id_surat !=', 1);

        $data['kasuss'] = $kasuss;
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "kasuss_list";
        $this->load->view($this->_container, $data);
    }

    public function create() {
        if ($this->input->post('judul_kasus')) {
            $data['judul_kasus'] = $this->input->post('judul_kasus');
            $data['id_subyek'] = $this->input->post('id_subyek');
            $data['nama_terlapor'] = $this->input->post('nama_terlapor');
            $data['lembaga'] = $this->input->post('lembaga');
            $data['jabatan_resmi'] = $this->input->post('jabatan_resmi');
            $data['nama_pelapor'] = $this->input->post('nama_pelapor');
            $data['waktu_kejadian'] = $this->input->post('waktu_kejadian');
            $data['lokasi_kejadian'] = $this->input->post('lokasi_kejadian');
            $data['kasus_posisi'] = $this->input->post('kasus_posisi');
            $data['masalah'] = $this->input->post('masalah');
            $data['kesimpulan'] = $this->input->post('kesimpulan');
            $data['saran'] = $this->input->post('saran');
            // $data['id_surat'] = $this->input->post('id_surat');
    
            $this->kasus->insert($data);

            redirect('/admin/kasuss', 'refresh');
        }

        $surats = $this->surat->get_all();

        $data['surats'] = $surats;
        $pidanas = $this->pidana->get_all();

        $data['pidanas'] = $pidanas;

        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "kasuss_create";
        $this->load->view($this->_container, $data);
    }

    public function edit($id) {
        if ($this->input->post('judul_kasus')) {
            $data['judul_kasus'] = $this->input->post('judul_kasus');
            $data['id_subyek'] = $this->input->post('id_subyek');
            $data['nama_terlapor'] = $this->input->post('nama_terlapor');
            $data['lembaga'] = $this->input->post('lembaga');
            $data['jabatan_resmi'] = $this->input->post('jabatan_resmi');
            $data['nama_pelapor'] = $this->input->post('nama_pelapor');
            $data['waktu_kejadian'] = $this->input->post('waktu_kejadian');
            $data['lokasi_kejadian'] = $this->input->post('lokasi_kejadian');
            $data['kasus_posisi'] = $this->input->post('kasus_posisi');
            $data['masalah'] = $this->input->post('masalah');
            $data['kesimpulan'] = $this->input->post('kesimpulan');
            $data['saran'] = $this->input->post('saran');
            // $data['id_surat'] = $this->input->post('id_surat');

            $this->kasus->update($data, $id);

            redirect('/admin/kasuss', 'refresh');
        }

        $kasus = $this->kasus->get($id);
        $surats = $this->surat->get_all();

        $data['surats'] = $surats;

        $data['kasus'] = $kasus;
        $pidanas = $this->pidana->get_all();

        $data['pidanas'] = $pidanas;
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "kasuss_edit";
        $this->load->view($this->_container, $data);
    }

    public function nextstep($id) {
        if ($this->input->post('obyek_pidana')) {
            # code...
            $data['flag_surat']= 0;
            $this->kasus->update($data, $id);
        }
        if ($this->input->post('obyek_pidana')) {
            $data['judul_kasus'] = $this->input->post('judul_kasus');
            $data['id_subyek'] = $this->input->post('id_subyek');
            $data['nama_terlapor'] = $this->input->post('nama_terlapor');
            $data['lembaga'] = $this->input->post('lembaga');
            $data['jabatan_resmi'] = $this->input->post('jabatan_resmi');
            $data['nama_pelapor'] = $this->input->post('nama_pelapor');

            $data['obyek_pidana'] = $this->input->post('obyek_pidana');
            $data['jenis_obyek'] = $this->input->post('jenis_obyek');
            $data['nilai_kontrak'] = $this->input->post('nilai_kontrak');
            $data['tanggal_surat'] = $this->input->post('tanggal_surat');
            $data['no_surat'] = $this->input->post('no_surat');
            $data['tanggal_berhenti'] = $this->input->post('tanggal_berhenti');
            $data['nama_jaksa'] = $this->input->post('nama_jaksa');
            // $data['id_surat'] = $this->input->post('id_surat');

            $this->rp2->insert($data);

            redirect('/admin/rp2s', 'refresh');
        }
        $jaksas = $this->jaksa->get_all();
        $data['jaksas'] = $jaksas;
        $kasus = $this->kasus->get($id);
        $kasuss = $this->kasus->get_all();

        $data['kasus'] = $kasus;
        $data['kasuss'] = $kasuss;
        $pidanas = $this->pidana->get_all();

        $data['pidanas'] = $pidanas;
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "rp2s_create";
        $this->load->view($this->_container, $data);
    }

    public function delete($id) {
        $this->kasus->delete($id);

        redirect('/admin/kasuss', 'refresh');
    }

}
