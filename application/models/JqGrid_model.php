<?php

    class JqGrid_model extends CI_Model {

        public function __construct() {
            $this->load->database();
        }

        function getAllData(){
            $query = $this->db->get('checkers, checksplan, result, type, verifiable');
            return $query->result_array();
        } 
}