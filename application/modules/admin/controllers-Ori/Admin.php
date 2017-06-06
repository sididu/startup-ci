<?php

class Admin extends Admin_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "dashboard";
        $this->load->view($this->_container, $data);
    }

}
