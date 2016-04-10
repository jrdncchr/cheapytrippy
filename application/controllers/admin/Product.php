<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends MY_Controller {

    public function __construct() {
        parent::__construct();
        if(null == $this->admin) {
            redirect("/");
        }
        $this->load->model('product_model');
    }

	public function index() {
        $this->home();
	}

    public function home() {
        $this->_renderA('product/home');
    }

    public function all() {
        $this->_renderA('product/list');
    }

    public function add() {
        $this->_renderA('product/add');
    }

    public function action() {

    }

    public function test() {
        $product =  $this->product_model->get_list();
        var_dump($product);
    }

}

