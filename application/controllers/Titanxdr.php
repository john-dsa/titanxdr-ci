<?php

class Titanxdr extends CI_Controller {

       public function __construct() {
        parent::__construct();
        $this->load->model('titanxdr_model');
        $this->load->helper('url_helper');
        $this->load->library('table');
        } 
      public function index() {
        $tdrcalls['title']='TITAN (X)DR';
        $tdrcalls['titantdrcalls'] = $this->titanxdr_model->get_tdrcalls();
        $this->load->view('templates/header', $tdrcalls);
        //$this->load->view('titanxdr/Titanxdr_View', $tdrcalls);
        $this->load->view('titanxdr/titantdrcall_View', $tdrcalls);
        //$this->load->view('titanxdr/testview', $data);
        $this->load->view('templates/footer');
    }    
}
