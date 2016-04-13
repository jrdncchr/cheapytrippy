<?php

class Product_model extends CI_Model {

    protected $product_table = 'product';
    protected $rates_table = 'product_rates';
    protected $rates_bo_dates_table = 'product_rates_bo_dates';
    protected $rates_bo_days_table = 'product_rates_bo_days';
    protected $rates_nop_pricing_table = 'product_rates_nop_pricing';
    protected $rates_sp_pricing_table = 'product_rates_sp_pricing';

    protected $category_table = 'product_category';

    protected $add_rules = [
        'required'  => [],
        'email'     => [],
        'equals'    => [],
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

    public function add($product) {
        /* Validate using the rules */
        $v = new Valitron\Validator($product);
        $v->rules($this->add_rules);
        if(!$v->validate()) {
            return array('success' => false, 'message' => "Please validate your inputs.", 'errors' => $v->errors());
        }

        $this->db->trans_start();
        if($this->db->insert($this->product_table, $product['offer'])) {
            $product_id = $this->db->insert_id();
            $product['rates']['product_id'] = $product_id;

            if($this->db->insert($this->rates_table, $product['rates'])) {
                $rate_id = $this->db->insert_id();

                if(isset($product['bo_dates'])) {
                    if(sizeof($product['bo_dates']) > 0) {
                        foreach($product['bo_dates'] as $bo_date) {
                            $bo_date['rate_id'] = $rate_id;
                            $this->db->insert($this->rates_bo_dates_table, $bo_date);
                        }
                    }
                }
                if(isset($product['bo_days'])) {
                    if(sizeof($product['bo_days']) > 0) {
                        foreach($product['bo_days'] as $bo_day) {
                            $bo_day['rate_id'] = $rate_id;
                            $this->db->insert($this->rates_bo_days_table, $bo_day);
                        }
                    }
                }
                if(isset($product['nop_pricing'])) {
                    if(sizeof($product['nop_pricing']) > 0) {
                        foreach($product['nop_pricing'] as $nop_price) {
                            $nop_price['rate_id'] = $rate_id;
                            $this->db->insert($this->rates_nop_pricing_table, $nop_price);
                        }
                    }
                }
                if(isset($product['sp_pricing'])) {
                    if(sizeof($product['sp_pricing']) > 0) {
                        foreach($product['sp_pricing'] as $sp_price) {
                            $sp_price['rate_id'] = $rate_id;
                            $this->db->insert($this->rates_sp_pricing_table, $sp_price);
                        }
                    }
                }

            }
        }

        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
        } else {
            $this->db->trans_commit();
            return array('success' => true, 'product_id' => $product_id, 'rate_id' => $rate_id);
        }

        return array('success' => false, 'message' => "Something went wrong.");
    }

    public function update($product) {
        /* Validate using the rules */
        $v = new Valitron\Validator($product);
        $v->rules($this->add_rules);
        if(!$v->validate()) {
            return array('success' => false, 'message' => "Please validate your inputs.", 'errors' => $v->errors());
        }

        $this->db->trans_start();
        $this->db->where('product_id', $product['offer']['product_id']);
        if($this->db->update($this->product_table, $product['offer'])) {

            $this->db->where('rate_id', $product['rates']['rate_id']);
            if($this->db->update($this->rates_table, $product['rates'])) {

                if(isset($product['bo_dates'])) {
                    if(sizeof($product['bo_dates']) > 0) {
                        foreach($product['bo_dates'] as $bo_date) {
                            $this->db->where('rate_id', $product['rates']['rate_id']);
                            $this->db->update($this->rates_bo_dates_table, $bo_date);
                        }
                    }
                }
                if(isset($product['bo_days'])) {
                    if(sizeof($product['bo_days']) > 0) {
                        foreach($product['bo_days'] as $bo_day) {
                            $this->db->where('rate_id', $product['rates']['rate_id']);
                            $this->db->update($this->rates_bo_days_table, $bo_day);
                        }
                    }
                }
                if(isset($product['nop_pricing'])) {
                    if(sizeof($product['nop_pricing']) > 0) {
                        foreach($product['nop_pricing'] as $nop_price) {
                            $this->db->where('rate_id', $product['rates']['rate_id']);
                            $this->db->update($this->rates_nop_pricing_table, $nop_price);
                        }
                    }
                }
                if(isset($product['sp_pricing'])) {
                    if(sizeof($product['sp_pricing']) > 0) {
                        foreach($product['sp_pricing'] as $sp_price) {
                            $this->db->where('rate_id', $product['rates']['rate_id']);
                            $this->db->update($this->rates_sp_pricing_table, $sp_price);
                        }
                    }
                }

            }
        }

        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
        } else {
            $this->db->trans_commit();
            return array('success' => true);
        }

        return array('success' => false, 'message' => "Something went wrong.");
    }

    public function delete($product_id, $rate_id) {
        $this->db->trans_start();
        $this->db->where('product_id', $product_id);
        $this->db->delete($this->product_table);

        $this->db->where('rate_id', $rate_id);
        $this->db->delete($this->rates_table);

        $this->db->where('rate_id', $rate_id);
        $this->db->delete($this->rates_bo_dates_table);

        $this->db->where('rate_id', $rate_id);
        $this->db->delete($this->rates_bo_days_table);

        $this->db->where('rate_id', $rate_id);
        $this->db->delete($this->rates_nop_pricing_table);

        $this->db->where('rate_id', $rate_id);
        $this->db->delete($this->rates_sp_pricing_table);

        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
        } else {
            $this->db->trans_commit();
            return array('success' => true);
        }

        return array('success' => false, 'message' => "Something went wrong.");
    }

    public function get_category($parent_id = 0, $category_id = 0) {
        if($category_id > 0) {
            $result = $this->db->get_where($this->category_table, array('category_id' => $category_id));
        } else {
            $result = $this->db->get_where($this->category_table, array('parent_id' => $parent_id));
        }
        return $result->result();
    }


} 