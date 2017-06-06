<?php

class Rp2s extends Admin_Controller {

    function __construct() {
        parent::__construct();

        $this->load->model(array('admin/rp2'));
        $this->load->model(array('admin/kasus'));
        $this->load->model(array('admin/jaksa'));
        $this->load->model(array('admin/pidana'));
        $this->load->model(array('admin/pasal'));
    }

    public function index() {
        $rp2s = $this->rp2->get_all('*' , array('flag_rp2' => 1 ));

        $data['rp2s'] = $rp2s;
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "rp2s_list";
        $this->load->view($this->_container, $data);
    }

    public function create1() {

        if ($this->input->post('obyek_pidana')) {
            $data['judul_kasus'] = $this->input->post('judul_kasus');
            // $data['id_subyek'] = $this->input->post('id_subyek');
            $data['nama_terlapor'] = $this->input->post('nama_terlapor');
            $data['lembaga'] = $this->input->post('lembaga');
            $data['jabatan_resmi'] = $this->input->post('jabatan_resmi');

            $data['obyek_pidana'] = $this->input->post('obyek_pidana');
            $data['jenis_obyek'] = $this->input->post('jenis_obyek');
            $data['nilai_kontrak'] = $this->input->post('nilai_kontrak');
            $data['tanggal_surat'] = $this->input->post('tanggal_surat');
            $data['no_surat'] = $this->input->post('no_surat');
            $data['tanggal_berhenti'] = $this->input->post('tanggal_berhenti');
            $data['nama_jaksa'] = $this->input->post('nama_jaksa');
            $data['flag_rp2'] = 1;
            // $data['id_surat'] = $this->input->post('id_surat');

            $this->rp2->insert($data);

            redirect('/admin/rp2s', 'refresh');
        }
        $jaksas = $this->jaksa->get_all();
        $pidanas = $this->pidana->get_all();

        $data['pidanas'] = $pidanas;
        $data['jaksas'] = $jaksas;
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "rp2s_create1";
        $this->load->view($this->_container, $data);
    }

    public function create($id) {

        if ($this->input->post('obyek_pidana')) {
            $data['judul_kasus'] = $this->input->post('judul_kasus');
            // $data['id_subyek'] = $this->input->post('id_subyek');
            $data['nama_terlapor'] = $this->input->post('nama_terlapor');
            $data['lembaga'] = $this->input->post('lembaga');
            $data['jabatan_resmi'] = $this->input->post('jabatan_resmi');

            $data['obyek_pidana'] = $this->input->post('obyek_pidana');
            $data['jenis_obyek'] = $this->input->post('jenis_obyek');
            $data['nilai_kontrak'] = $this->input->post('nilai_kontrak');
            $data['tanggal_surat'] = $this->input->post('tanggal_surat');
            $data['no_surat'] = $this->input->post('no_surat');
            $data['tanggal_berhenti'] = $this->input->post('tanggal_berhenti');
            $data['nama_jaksa'] = $this->input->post('nama_jaksa');
            $data['flag_rp2'] = 1;

            // if ($this->input->post('obyek_pidana')) {
                # code...
            // $datas['id'] = $this->input->post('id');
            $datas['flag_surat'] = 0;
            $this->kasus->update($datas, $id);
            // }
            $this->rp2->insert($data);

            redirect('/admin/rp2s', 'refresh');
        }

        // $kasuss = $this->kasus->get_all();
        $jaksas = $this->jaksa->get_all();
        $data['jaksas'] = $jaksas;

        $kasuss = $this->kasus->get($id);
        $datas['kasuss'] = $kasuss;

        $pidanas = $this->pidana->get_all();

        $data['pidanas'] = $pidanas;

        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "rp2s_create";
        $this->load->view($this->_container, $data);
    }

    public function edit($id) {
        if ($this->input->post('obyek_pidana')) {
            $data['judul_kasus'] = $this->input->post('judul_kasus');
            // $data['id_subyek'] = $this->input->post('id_subyek');
            $data['nama_terlapor'] = $this->input->post('nama_terlapor');
            $data['lembaga'] = $this->input->post('lembaga');
            $data['jabatan_resmi'] = $this->input->post('jabatan_resmi');

            $data['obyek_pidana'] = $this->input->post('obyek_pidana');
            $data['jenis_obyek'] = $this->input->post('jenis_obyek');
            $data['nilai_kontrak'] = $this->input->post('nilai_kontrak');
            $data['tanggal_surat'] = $this->input->post('tanggal_surat');
            $data['no_surat'] = $this->input->post('no_surat');
            $data['tanggal_berhenti'] = $this->input->post('tanggal_berhenti');
            $data['nama_jaksa'] = $this->input->post('nama_jaksa');
            // $data['id_surat'] = $this->input->post('id_surat');

            $this->rp2->update($data, $id);

            redirect('/admin/rp2s', 'refresh');
        }

        $rp2 = $this->rp2->get($id);

        $data['rp2'] = $rp2;
        $jaksas = $this->jaksa->get_all();

        $data['jaksas'] = $jaksas;
        $pidanas = $this->pidana->get_all();

        $data['pidanas'] = $pidanas;
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "rp2s_edit";
        $this->load->view($this->_container, $data);
    }

    public function nextstep($id) {
        // if ($this->input->post('pemulihan_aset')) {
        //     # code...
        //     $data['flag_rp2']= 0;
        //     $this->rp2->update($data, $id);
        // }
        // if ($this->input->post('obyek_pidana')) {
        //     $data['judul_kasus'] = $this->input->post('judul_kasus');
        //     $data['id_subyek'] = $this->input->post('id_subyek');
        //     $data['nama_terlapor'] = $this->input->post('nama_terlapor');
        //     $data['lembaga'] = $this->input->post('lembaga');
        //     $data['jabatan_resmi'] = $this->input->post('jabatan_resmi');
        //     $data['nama_pelapor'] = $this->input->post('nama_pelapor');

        //     $data['obyek_pidana'] = $this->input->post('obyek_pidana');
        //     $data['jenis_obyek'] = $this->input->post('jenis_obyek');
        //     $data['nilai_kontrak'] = $this->input->post('nilai_kontrak');
        //     $data['tanggal_surat'] = $this->input->post('tanggal_surat');
        //     $data['no_surat'] = $this->input->post('no_surat');
        //     $data['tanggal_berhenti'] = $this->input->post('tanggal_berhenti');
        //     $data['nama_jaksa'] = $this->input->post('nama_jaksa');
        //     // $data['id_surat'] = $this->input->post('id_surat');

        //     $this->rp2->insert($data);

        //     redirect('/admin/rp3s', 'refresh');
        // }
        $jaksas = $this->jaksa->get_all();
        $data['jaksas'] = $jaksas;
        $rp2 = $this->rp2->get($id);
        $rp2s = $this->rp2->get_all();

        $data['rp2'] = $rp2;
        $data['rp2s'] = $rp2s;
        $pidanas = $this->pidana->get_all();

        $data['pidanas'] = $pidanas;
        $pasals = $this->pasal->get_all();
        $data['pasals'] = $pasals;
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "rp3s_create1";
        $this->load->view($this->_container, $data);
    }


    public function delete($id) {
        $this->rp2->delete($id);

        redirect('/admin/rp2s', 'refresh');
    }

}
