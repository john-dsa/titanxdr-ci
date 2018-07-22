<?php

class Titanxdr_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_last_ten_tdr() {
        $tdr = $this->db->query('SELECT * FROM tdr LIMIT 10');
        foreach ($tdr->result() as $row) {
            return $tdr->result();
        }
    }
    public function get_last_ten_cdr() {
        $cdr = $this->db->query('SELECT * FROM cdr LIMIT 10');
        foreach ($cdr->result() as $row) {
            return $cdr->result();
        }        
    }

}
