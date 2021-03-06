<?php

class MY_Controller extends CI_Controller {

    protected $admin;
    protected $data;

    protected $css;
    protected $js;
    protected $bower;

    protected $title = "Cheapy Trippy";
    protected $description = "Cheapy Trippy";
    protected $keywords = "Cheapy Trippy";
    protected $author = "Danero";

    public $request_method;

    public function __construct($logged = false) {
        parent::__construct();
        $this->request_method = $_SERVER['REQUEST_METHOD'];
        $this->load->helper(array('url'));
        $this->load->library('session');

//        $this->_loadConstants();

        $admin = $this->session->userdata("admin");
        if(null != $admin) {
            $this->admin = $admin;
        }

        $this->data['site_title'] = $this->title;
        $this->data['site_description'] = $this->description;
        $this->data['site_keywords'] = $this->keywords;
        $this->data['site_author'] = $this->author;
        $this->data['admin'] = $admin;
    }

    public function _render($view) {
        $this->data['css'] = $this->css;
        $this->data['js'] = $this->js;
        $this->data['bower'] = $this->bower;

        $data['head'] = $this->load->view('templates/head', $this->data, true);
        $data['footer'] = $this->load->view('templates/footer', $this->data, true);
        $data['content'] = $this->load->view($view, $data, true);

        $this->load->view('templates/skeleton', $data);
    }

    public function _renderA($view) {
        $this->data['css'] = $this->css;
        $this->data['js'] = $this->js;
        $this->data['bower'] = $this->bower;

        $data['head'] = $this->load->view('templates/head', $this->data, true);
        $data['nav'] = $this->load->view('templates/admin/nav', $this->data, true);
        $data['sidenav'] = $this->load->view('templates/admin/sidenav', $this->data, true);
        $data['footer'] = $this->load->view('templates/footer', $this->data, true);
        $data['content'] = $this->load->view($view, $data, true);

        $this->load->view('templates/admin/skeleton', $data);
    }

    public function _loadConstants() {
        $this->session->unset_userdata('constants_loaded');
        $constants_loaded = $this->session->userdata('constants_loaded');
        if(!$constants_loaded) {
            $this->load->model("api_model");
            $this->api_model->load_constants();
            $this->session->set_userdata('constants_loaded', true);
        }
    }

} 