<?php

class Lookup_Model extends CI_Model {

    protected $lookup_table = 'lookup';

    function __construct() {
        $this->load->database();
    }

    public function get($category = "", $id = 0) {
        if($category != "") {
            $this->db->where('category', $category);
        }
        if($id > 0) {
            $this->db->where('lookup_id', $id);
        }
        $result = $this->db->get($this->lookup_table);
        if($id > 0) {
            return $result->row();
        } else {
            return $result->result();
        }
    }

} 