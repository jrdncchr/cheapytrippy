<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends MY_Controller {

    public function __construct() {
        parent::__construct();
        if(null == $this->admin) {
            redirect("/");
        }
    }

	public function index() {
        $this->home();
	}

    public function home() {
        $this->_renderA('home');
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('/');
    }

}

