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

    public function form($product_id = 0) {
        if($product_id > 0) {
            $this->data['product'] = $this->product_model->get_by_id($product_id);
        }

        $this->load->model('lookup_model');
        $this->data['types_of_offer'] = $this->lookup_model->get('TYPE_OF_OFFER');
        $this->data['price_basis'] = $this->lookup_model->get('PRICE_BASIS');
        $this->data['categories'] = $this->product_model->get_category();
        $this->_renderA('product/form');
    }

    public function action() {
        $result = array('success' => false);

        $action = $this->input->post("action");
        switch($action) {

            case 'list' :
                $list = $this->product_model->get_list();
                $result = array('data' => $list);
                break;

            case 'save' :
                $product = $this->input->post('product');
                if(isset($product['offer']['product_id'])) {
                    $result = $this->product_model->update($product);
                } else {
                    $result = $this->product_model->add($product);
                }
                break;

            case 'delete' :
                $result = $this->product_model->delete($this->input->post('product_id'), $this->input->post('rate_id'));
                break;

            default:
                $result['message'] = "Action not found.";
        }

        echo json_encode($result);
    }

    public function test() {
        $product = array(
            'offer' => array(
                'title' => 'Product Title',
                'type_id' => 3,
                'snippet' => 'Sample Snippet',
                'description' => 'Sample Description',
                'supplier_id' => 5,
                'traveller_tip' => 'Tippp!',
                'duration' => '03:22:32',
                'business_hours_from' => '15:00',
                'business_hours_to' => '17:00',
                'street' => '62-b 1st Road',
                'state' => 'Palma',
                'city' => 'Baguio',
                'country' => 'Philippines',
                'last_modified_by' => 4
            ),
            'rates' => array(
                'price_basis' => 32,
                'commission' => 10,
                'nop_min' => 1,
                'nop_max' => 3,
                'availability_from' => '2016-04-10',
                'availability_to' => '2016-04-12',
                'have_bod' => true
            ),
            'bo_dates' => array(
                array(
                    'bo_from' => '2016-04-13',
                    'bo_to' => '2016-04-15'
                ),
                array(
                    'bo_from' => '2016-04-16',
                    'bo_to' => '2016-04-18'
                )
            ),
            'bo_days' => array(
                array(
                    'day' => 'Mon'
                ),
                array(
                    'day' => 'Wed'
                )
            ),
            'nop_pricing' => array(
                array(
                    'number' => 1,
                    'supplier_rate' => 5,
                    'published_rate' => 7,
                ),
                array(
                    'number' => 2,
                    'supplier_rate' => 6,
                    'published_rate' => 7,
                ),
                array(
                    'number' => 3,
                    'supplier_rate' => 7,
                    'published_rate' => 9,
                )
            ),
            'sp_pricing' => array(
                array(
                    'number' => 1,
                    'supplier_rate' => 5,
                    'published_rate' => 6,
                ),
                array(
                    'number' => 2,
                    'supplier_rate' => 7,
                    'published_rate' => 8,
                ),
                array(
                    'number' => 3,
                    'supplier_rate' => 8,
                    'published_rate' => 9,
                )
            )
        );

        $result = $this->product_model->add($product);
        var_dump($result);
    }

}

