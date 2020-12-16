<?php

class Plan_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function getType() {
        $query = $this->db->get('type');
        return $query->result_array();

       // $query = $this->db->get('name');
        //return $query->row_array();
    }

}