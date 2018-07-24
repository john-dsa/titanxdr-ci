<?php
class Titanxdr_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_dashtdr() {
        $dashtdr = $this->db->query('SELECT * FROM `titan`.`tdr` ORDER BY `gmt_time` DESC LIMIT 5;');
        //return $this->table->generate($dashtdr);
        return $dashtdr->result_array();
    }

}
