<?php

class Titanxdr extends CI_Controller {

       public function __construct() {
        parent::__construct();
        $this->load->model('titanxdr_model');
        $this->load->helper('url_helper');
        $this->load->library('table');
        } 
      public function index() {
        $data['title']='TITAN (X)DR';
        $data['titantdrcalls'] = $this->titanxdr_model->get_dashtdr();
        //print_r($data);
        $this->load->view('templates/header', $data);
        //$this->load->view('titanxdr/Titanxdr_View', $data);
        $this->load->view('titanxdr/titantdrcall_View', $data);
        //$this->load->view('titanxdr/testview', $data);
        $this->load->view('templates/footer');
    }
}
