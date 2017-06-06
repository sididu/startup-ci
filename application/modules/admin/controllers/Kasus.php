<?php

class Kasus extends Admin_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "kasus_list";
        $this->load->view($this->_container, $data);
    }

    public function create() {
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "kasus_add";
        $this->load->view($this->_container, $data);
    }

}