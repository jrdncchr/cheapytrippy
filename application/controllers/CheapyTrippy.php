<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class CheapyTrippy extends MY_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        if($this->admin == null) {
            $this->login();
        } else {
            redirect('main');
        }
    }

    public function login() {
        if($this->request_method == "POST") {
            $this->load->model('admin_model');
            $result = $this->admin_model->login($this->input->post());
            if($result['success']) {
                redirect('main');
            } else {
                $this->session->set_flashdata('error', $result['message']);
                redirect('/');
            }
        } else {
            $this->_render('login');
        }

    }

}

