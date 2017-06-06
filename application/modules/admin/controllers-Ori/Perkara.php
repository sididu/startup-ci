<?php

class Perkara extends Admin_Controller {

    function __construct() {
        parent::__construct();

        $this->load->model(array('admin/brand'));
        $this->load->model(array('admin/category'));
        $this->load->model(array('admin/product'));
        $this->load->model(array('admin/perkara'));
    }

    public function index() {
        $perkara = $this->perkara->get_all();

        $data['perkara'] = $perkara;
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "perkara_list";
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

    //         $this->perkara->insert($data);

    //         redirect('/admin/perkara', 'refresh');
    //     }

    //     $brands = $this->brand->get_all();
    //     $categories = $this->category->get_all();

    //     $data['brands'] = $brands;
    //     $data['categories'] = $categories;
    //     $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "perkara_create";
    //     $this->load->view($this->_container, $data);
    // }

    // public function edit($id) {
    //     if ($this->input->post('name')) {
    //         $data['name'] = $this->input->post('name');
    //         $data['price'] = $this->input->post('price');
    //         $data['model'] = $this->input->post('model');
    //         $data['brand_id'] = $this->input->post('brand_id');
    //         $data['category_id'] = $this->input->post('category_id');
    //         $data['tag_line'] = $this->input->post('tag_line');
    //         $data['features'] = $this->input->post('features');
    //         $this->perkara->update($data, $id);

    //         redirect('/admin/perkara', 'refresh');
    //     }

    //     $product = $this->product->get($id);
    //     $brands = $this->brand->get_all();
    //     $categories = $this->category->get_all();

    //     $data['brands'] = $brands;
    //     $data['categories'] = $categories;
    //     $data['product'] = $product;
    //     $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "perkara_edit";
    //     $this->load->view($this->_container, $data);
    // }

    // public function delete($id) {
    //     $this->perkara->delete($id);

    //     redirect('/admin/perkara', 'refresh');
    // }

}
