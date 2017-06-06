<?php

class Products extends Admin_Controller {

    function __construct() {
        parent::__construct();

        $this->load->model(array('admin/brand'));
        $this->load->model(array('admin/category'));
        $this->load->model(array('admin/product'));
    }

    public function index() {
        $products = $this->product->get_all();

        $data['products'] = $products;
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "products_list";
        $this->load->view($this->_container, $data);
    }

    public function create() {
        if ($this->input->post('no_surat')) {
            $data['name'] = 'akbar';
            $data['price'] = $this->input->post('price');
            $data['model'] = $this->input->post('model');
            $data['brand_id'] = $this->input->post('brand_id');
            $data['category_id'] = $this->input->post('category_id');
            $data['tag_line'] = $this->input->post('tag_line');
            $data['features'] = $this->input->post('features');

            $data['no_surat'] = $this->input->post('no_surat');
            $data['tgl_surat'] = $this->input->post('tgl_surat');
            $data['judul_kasus'] = $this->input->post('judul_kasus');
            $data['masalah'] = $this->input->post('masalah');
            $data['kesimpulan'] = $this->input->post('kesimpulan');
            $data['saran'] = $this->input->post('saran');
            $data['nilai_kontrak'] = $this->input->post('nilai_kontrak');
            $data['subyek_hukum'] = $this->input->post('subyek_hukum');
            $data['status'] = $this->input->post('status');
            $data['lembaga'] = $this->input->post('lembaga');
            $data['kerugian_negara'] = $this->input->post('kerugian_negara');
            $data['pemulihan_aset'] = $this->input->post('pemulihan_aset');
            $data['register'] = $this->input->post('register');

            $this->product->insert($data);

            redirect('/admin/products', 'refresh');
        }

        $brands = $this->brand->get_all();
        $categories = $this->category->get_all();

        $data['brands'] = $brands;
        $data['categories'] = $categories;
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "products_create";
        $this->load->view($this->_container, $data);
    }

    // public function create() {
    //     if ($this->input->post('name')) {
    //         $data['name'] = $this->input->post('name');
    //         $data['price'] = $this->input->post('price');
    //         $data['model'] = $this->input->post('model');
    //         $data['brand_id'] = $this->input->post('brand_id');
    //         $data['category_id'] = $this->input->post('category_id');
    //         $data['tag_line'] = $this->input->post('tag_line');
    //         $data['features'] = $this->input->post('features');

    //         $this->product->insert($data);

    //         redirect('/admin/products', 'refresh');
    //     }

    //     $brands = $this->brand->get_all();
    //     $categories = $this->category->get_all();

    //     $data['brands'] = $brands;
    //     $data['categories'] = $categories;
    //     $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "products_create";
    //     $this->load->view($this->_container, $data);
    // }

    public function edit($id) {
        if ($this->input->post('no_surat')) {
            $data['name'] = 'akbar';
            $data['price'] = $this->input->post('price');
            $data['model'] = $this->input->post('model');
            $data['brand_id'] = $this->input->post('brand_id');
            $data['category_id'] = $this->input->post('category_id');
            $data['tag_line'] = $this->input->post('tag_line');
            $data['features'] = $this->input->post('features');

            $data['no_surat'] = $this->input->post('no_surat');
            $data['tgl_surat'] = $this->input->post('tgl_surat');
            $data['judul_kasus'] = $this->input->post('judul_kasus');
            $data['masalah'] = $this->input->post('masalah');
            $data['kesimpulan'] = $this->input->post('kesimpulan');
            $data['saran'] = $this->input->post('saran');
            $data['nilai_kontrak'] = $this->input->post('nilai_kontrak');
            $data['subyek_hukum'] = $this->input->post('subyek_hukum');
            $data['status'] = $this->input->post('status');
            $data['lembaga'] = $this->input->post('lembaga');
            $data['kerugian_negara'] = $this->input->post('kerugian_negara');
            $data['pemulihan_aset'] = $this->input->post('pemulihan_aset');
            $data['register'] = $this->input->post('register');
            $this->product->update($data, $id);

            redirect('/admin/products', 'refresh');
        }

        $product = $this->product->get($id);
        $brands = $this->brand->get_all();
        $categories = $this->category->get_all();

        $data['brands'] = $brands;
        $data['categories'] = $categories;
        $data['product'] = $product;
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "products_edit";
        $this->load->view($this->_container, $data);
    }

    public function delete($id) {
        $this->product->delete($id);

        redirect('/admin/products', 'refresh');
    }

}
