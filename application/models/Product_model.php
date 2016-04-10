<?php

class Product_model extends CI_Model {

    protected $product_table = 'product';
    protected $rates_table = 'product_rates';
    protected $rates_bo_dates_table = 'product_rates_bo_dates';
    protected $rates_bo_days_table = 'product_rates_bo_days';
    protected $rates_nop_pricing_table = 'product_rates_nop_pricing';
    protected $rates_sp_pricing_table = 'product_rates_sp_pricing';

    protected $add_rules = [
        'required'  => [['name'], ['email'], ['password']],
        'email'     => [['email']],
        'equals'    => [['password', 'confirm_password']],
        'lengthMin' => [],
        'lengthMax' => []
    ];

    function __construct() {
        $this->load->database();
    }

    public function get_by_id($id = 0) {
        $this->db->select('*');
        $this->db->from($this->product_table);
        $this->db->join($this->rates_table, 'product_rates.product_id = product.product_id', 'left');
        $this->db->where(array('product.product_id' => $id));
        $query = $this->db->get();
        $product = $query->row();

        $query = $this->db->get_where($this->rates_nop_pricing_table, array('rate_id' => $product->rate_id));
        $product->nop_pricing = $query->result();

        $query = $this->db->get_where($this->rates_sp_pricing_table, array('rate_id' => $product->rate_id));
        $product->sp_pricing = $query->result();

        $query = $this->db->get_where($this->rates_bo_dates_table, array('rate_id' => $product->rate_id));
        $product->bo_dates = $query->result();

        $query = $this->db->get_where($this->rates_bo_days_table, array('rate_id' => $product->rate_id));
        $product->bo_days = $query->result();

        return $product;
    }

    public function get_list() {
        $this->db->select('*');
        $this->db->from($this->product_table);
        $query = $this->db->get();
        return $query->result();
    }

    public function add() {

    }

    public function update() {

    }



} 