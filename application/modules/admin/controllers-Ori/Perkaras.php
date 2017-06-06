<?php

class Perkaras extends Admin_Controller {

    function __construct() {
        parent::__construct();

        $this->load->model(array('admin/perkara'));
        $this->load->model(array('admin/surat'));
        $this->load->model(array('admin/jaksa'));
        $this->load->model(array('admin/subyek'));
        $this->load->model(array('admin/obyek'));
    }

    public function index() {
        $surats = $this->surat->get_all();
        $jaksas = $this->jaksa->get_all();
        $subyeks = $this->subyek->get_all();
        $obyeks = $this->obyek->get_all();

        $data['surats'] = $surats;
        $data['jaksas'] = $jaksas;
        $data['subyeks'] = $subyeks;
        $data['obyeks'] = $obyeks;
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "perkaras_list";
        $this->load->view($this->_container, $data);
    }

    // public function create() {
    //     if ($this->input->post('judul_surat')) {
    //         $data['judul_surat'] = $this->input->post('judul_surat');
    //         $data['no_surat'] = $this->input->post('no_surat');
    //         $data['tanggal_surat'] = $this->input->post('tanggal_surat');
    //         $data['tanggal_mulai'] = $this->input->post('tanggal_mulai');
    //         $data['tanggal_berakhir'] = $this->input->post('tanggal_berakhir');
    //         $data['keterangan'] = $this->input->post('keterangan');
    //         $data['id_jaksa'] = $this->input->post('id_jaksa');
    //         $data['id_subyek'] = $this->input->post('id_subyek');
    //         $data['id_obyek'] = $this->input->post('id_obyek');
    
    //         $this->surat->insert($data);

    //         redirect('/admin/surats', 'refresh');
    //     }

    //     $jaksas = $this->jaksa->get_all();
    //     $subyeks = $this->subyek->get_all();
    //     $obyeks = $this->obyek->get_all();

    //     $data['jaksas'] = $jaksas;
    //     $data['subyeks'] = $subyeks;
    //     $data['obyeks'] = $obyeks;

    //     $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "surats_create";
    //     $this->load->view($this->_container, $data);
    // }

    // public function edit($id) {
    //     if ($this->input->post('judul_surat')) {
    //         $data['judul_surat'] = $this->input->post('judul_surat');
    //         $data['no_surat'] = $this->input->post('no_surat');
    //         $data['tanggal_surat'] = $this->input->post('tanggal_surat');
    //         $data['tanggal_mulai'] = $this->input->post('tanggal_mulai');
    //         $data['tanggal_berakhir'] = $this->input->post('tanggal_berakhir');
    //         $data['keterangan'] = $this->input->post('keterangan');
    //         $data['id_jaksa'] = $this->input->post('id_jaksa');
    //         $data['id_subyek'] = $this->input->post('id_subyek');
    //         $data['id_obyek'] = $this->input->post('id_obyek');

    //         $this->surat->update($data, $id);

    //         redirect('/admin/surats', 'refresh');
    //     }

    //     $surat = $this->surat->get($id);
    //     $jaksas = $this->jaksa->get_all();
    //     $subyeks = $this->subyek->get_all();
    //     $obyeks = $this->obyek->get_all();

    //     $data['jaksas'] = $jaksas;
    //     $data['subyeks'] = $subyeks;
    //     $data['obyeks'] = $obyeks;

    //     $data['surat'] = $surat;
    //     $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "surats_edit";
    //     $this->load->view($this->_container, $data);
    // }

    // public function delete($id) {
    //     $this->surat->delete($id);

    //     redirect('/admin/surats', 'refresh');
    // }

}
