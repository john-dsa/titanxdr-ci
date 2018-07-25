<?php 
if (!defined('BASEPATH'))
exit('No direct script access allowed');

class Titanxdr_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_tdrcalls() {
        //$dashtdr = $this->db->query('SELECT * FROM `titan`.`tdr` ORDER BY `gmt_time` DESC LIMIT 2;');
        
        $this->db->select('gmt_time,cge164clean,cde164clean,cde164npcorrected,diversionnum,edge_server,peer_name,peer_list_name,action,response,event_code');
        $this->db->limit(10);
        $this->db->order_by('gmt_time');
        $tdrcalls = $this->db->get('tdr');
        return $tdrcalls->result_array();
    }

}
