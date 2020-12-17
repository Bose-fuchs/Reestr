<?php

    class Plan_model extends CI_Model {

        public function __construct() {
            $this->load->database();
        }

        public function getType() {
            $query = $this->db->get('checkers, checksplan, result, type, verifiable');
            return $query->result_array();
        }

    }