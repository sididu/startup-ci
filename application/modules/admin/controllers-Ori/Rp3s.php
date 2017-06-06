<?php

class Rp3s extends Admin_Controller {

    function __construct() {
        parent::__construct();

        $this->load->model(array('admin/rp3'));
        $this->load->model(array('admin/rp2'));
        $this->load->model(array('admin/jaksa'));
        $this->load->model(array('admin/pasal'));
    }

    public function index() {
        $rp3s = $this->rp3->get_all();

        $data['rp3s'] = $rp3s;
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "rp3s_list";
        $this->load->view($this->_container, $data);
    }
    public function create() {
        if ($this->input->post('obyek_pidana')) {
            $data['judul_kasus'] = $this->input->post('judul_kasus');
            // $data['id_subyek'] = $this->input->post('id_subyek');
            $data['nama_terlapor'] = $this->input->post('nama_terlapor');
            $data['lembaga'] = $this->input->post('lembaga');
            $data['jabatan_resmi'] = $this->input->post('jabatan_resmi');

            $data['obyek_pidana'] = $this->input->post('obyek_pidana');
            $data['jenis_obyek'] = $this->input->post('jenis_obyek');
            $data['nilai_kontrak'] = $this->input->post('nilai_kontrak');
            $data['pemulihan_aset'] = $this->input->post('pemulihan_aset');
            $data['kerugian_negara'] = $this->input->post('kerugian_negara');
            $data['tanggal_surat'] = $this->input->post('tanggal_surat');
            $data['no_surat'] = $this->input->post('no_surat');
            $data['tanggal_berhenti'] = $this->input->post('tanggal_berhenti');
            $data['nama_jaksa'] = $this->input->post('nama_jaksa');
            $data['flag_rp3'] = 1;
            // $data['id_surat'] = $this->input->post('id_surat');

            $this->rp3->insert($data);

            redirect('/admin/rp3s', 'refresh');
        }
        $jaksas = $this->jaksa->get_all();

        $data['jaksas'] = $jaksas;
        $pasals = $this->pasal->get_all();
        $data['pasals'] = $pasals;
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "rp3s_create";
        $this->load->view($this->_container, $data);
    }

    public function create1($id) {

        if ($this->input->post('obyek_pidana')) {
            $data['judul_kasus'] = $this->input->post('judul_kasus');
            // $data['id_subyek'] = $this->input->post('id_subyek');
            $data['nama_terlapor'] = $this->input->post('nama_terlapor');
            $data['lembaga'] = $this->input->post('lembaga');
            $data['jabatan_resmi'] = $this->input->post('jabatan_resmi');

            $data['obyek_pidana'] = $this->input->post('obyek_pidana');
            $data['jenis_obyek'] = $this->input->post('jenis_obyek');
            $data['nilai_kontrak'] = $this->input->post('nilai_kontrak');
            $data['pemulihan_aset'] = $this->input->post('pemulihan_aset');
            $data['kerugian_negara'] = $this->input->post('kerugian_negara');
            $data['tanggal_surat'] = $this->input->post('tanggal_surat');
            $data['no_surat'] = $this->input->post('no_surat');
            $data['tanggal_berhenti'] = $this->input->post('tanggal_berhenti');
            $data['nama_jaksa'] = $this->input->post('nama_jaksa');
            $data['flag_rp3'] = 1;
            // $data['id_surat'] = $this->input->post('id_surat');

            // if ($this->input->post('obyek_pidana')) {
                # code...
            // $datas['id'] = $this->input->post('id');
            $datas['flag_rp2'] = 0;
            $this->rp2->update($datas, $id);
            // }
            $this->rp3->insert($data);

            redirect('/admin/rp3s', 'refresh');
        }

        // $kasuss = $this->kasus->get_all();
        $jaksas = $this->jaksa->get_all();
        $data['jaksas'] = $jaksas;

        $pasals = $this->pasal->get_all();
        $data['pasals'] = $pasals;

        $rp2s = $this->rp2->get($id);
        $datas['rp2s'] = $rp2s;

        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "rp3s_create1";
        $this->load->view($this->_container, $data);
    }

    public function edit($id) {
        if ($this->input->post('pemulihan_aset')) {
            $data['judul_kasus'] = $this->input->post('judul_kasus');
            // $data['id_subyek'] = $this->input->post('id_subyek');
            $data['nama_terlapor'] = $this->input->post('nama_terlapor');
            $data['lembaga'] = $this->input->post('lembaga');
            $data['jabatan_resmi'] = $this->input->post('jabatan_resmi');

            $data['obyek_pidana'] = $this->input->post('obyek_pidana');
            $data['jenis_obyek'] = $this->input->post('jenis_obyek');
            $data['nilai_kontrak'] = $this->input->post('nilai_kontrak');
            $data['pemulihan_aset'] = $this->input->post('pemulihan_aset');
            $data['kerugian_negara'] = $this->input->post('kerugian_negara');
            $data['tanggal_surat'] = $this->input->post('tanggal_surat');
            $data['no_surat'] = $this->input->post('no_surat');
            $data['tanggal_berhenti'] = $this->input->post('tanggal_berhenti');
            $data['nama_jaksa'] = $this->input->post('nama_jaksa');
            // $data['id_surat'] = $this->input->post('id_surat');

            $this->rp3->update($data, $id);

            redirect('/admin/rp3s', 'refresh');
        }

        $rp3 = $this->rp3->get($id);

        $data['rp3'] = $rp3;
        $jaksas = $this->jaksa->get_all();

        $data['jaksas'] = $jaksas;
        $pasals = $this->pasal->get_all();
        $data['pasals'] = $pasals;
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "rp3s_edit";
        $this->load->view($this->_container, $data);
    }

    public function delete($id) {
        $this->rp2->delete($id);

        redirect('/admin/kasuss', 'refresh');
    }

}
