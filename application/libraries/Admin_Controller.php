<?php if (!defined('BASEPATH'))  exit('No direct script access allowed');

class Admin_Controller extends MY_Controller {
    public $is_admin;
    public $logged_in_name;

    function __construct() {
        parent::__construct();

        // Set container variable
        $this->_container = $this->config->item('ci_my_admin_template_dir_admin') . "layout.php";
        $this->_modules = $this->config->item('modules_locations');

        $this->load->library(array('ion_auth'));

        if (!$this->ion_auth->logged_in()) {
            redirect('/auth', 'refresh');
        }

        $this->is_admin = $this->ion_auth->is_admin();
        $user = $this->ion_auth->user()->row();
        $this->logged_in_name = $user->first_name;

        log_message('debug', 'CI My Admin : Admin_Controller class loaded');
    }
}

/* End of Admin_controller.php */
/* Location: ./application/libraries/Admin_controller.php */