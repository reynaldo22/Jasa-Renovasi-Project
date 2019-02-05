<?php

class Perabotan extends CI_Controller
{

  function __construct(){
    parent::__construct();

    $this->load->helper(array('form', 'url'));
    $this->load->model('My_model');
    $this->load->library('upload');
  }

  function index() {
    $data = array('perabotan' => $this->My_model->perabotan()->result());
    $this->load->view('furniture/perabotan/perabotan',$data);
  }

}

 ?>
