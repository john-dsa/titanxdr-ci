<?php

class Titanxdr extends CI_Controller {

public $data;

       public function __construct() {
        parent::__construct();
        $this->load->model('titanxdr_model');
        $this->load->helper('url_helper');
        $this->load->library('table');
        }
      public function index() {
        $data['titantdr'] = $this->titanxdr_model->get_last_ten_tdr();
        //$data['titancdr'] = $this->titanxdr_model->get_last_ten_cdr();
        //print_r($data);
        $this->load->view('titanxdr/Titanxdr_View', $data);

        //$this->load->view('templates/header', $data);
        //$this->load->view('templates/footer');
    }
}
