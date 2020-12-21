<?php

    class JqGrid_model extends CI_Model {

        public function __construct() {

            $this->load->database();

        }

        function getJSON() {
            $sql = $this->db->query("
                SELECT plan.Id, plan.Date, verifiable.ShortName, checkers.shortname, result.Name
                FROM plan 
                INNER JOIN verifiable ON plan.verifiable = verifiable.id    
                INNER JOIN checkers ON plan.checkers = checkers.id
                INNER JOIN result ON plan.result = result.id
            ")->result();
            return json_encode($sql, JSON_UNESCAPED_UNICODE);
        }

        function getAllData($id) {
            $sql = $this->db->query("
            SELECT plan.Id, plan.Date, verifiable.ShortName, checkers.shortname, result.Name
            FROM plan 
            WHERE plan.Id=$id
            INNER JOIN verifiable ON plan.verifiable = verifiable.id    
            INNER JOIN checkers ON plan.checkers = checkers.id
            INNER JOIN result ON plan.result = result.id
            ");

        }
    
    }