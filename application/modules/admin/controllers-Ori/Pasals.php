<?php

class Pasals extends Admin_Controller {

    function __construct() {
        parent::__construct();

        $this->load->model(array('admin/pasal'));
    }

    public function index() {
        $pasals = $this->pasal->get_all();

        $data['pasals'] = $pasals;
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "pasals_list";
        $this->load->view($this->_container, $data);
    }

    public function create() {
        if ($this->input->post('pasal')) {
            $data['pasal'] = $this->input->post('pasal');
            $data['ancaman_hukuman'] = $this->input->post('ancaman_hukuman');
    
            $this->pasal->insert($data);

            redirect('/admin/pasals', 'refresh');
        }

        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "pasals_create";
        $this->load->view($this->_container, $data);
    }

    public function edit($id) {
        if ($this->input->post('pasal')) {
            $data['pasal'] = $this->input->post('pasal');
            $data['ancaman_hukuman'] = $this->input->post('ancaman_hukuman');
            $this->pasal->update($data, $id);

            redirect('/admin/pasals', 'refresh');
        }

        $pasal = $this->pasal->get($id);

        $data['pasal'] = $pasal;
        $data['page'] = $this->config->item('ci_my_admin_template_dir_admin') . "pasals_edit";
        $this->load->view($this->_container, $data);
    }

    public function delete($id) {
        $this->pasal->delete($id);

        redirect('/admin/pasals', 'refresh');
    }

}
