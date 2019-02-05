<?php

class Dekorasi extends CI_Controller
{

  function __construct(){
    parent::__construct();

    $this->load->helper(array('form', 'url'));
    $this->load->model('My_model');
    $this->load->library('upload');
  }

  function index() {
    $data = array('dekorasi' => $this->My_model->dekorasi()->result());
    $this->load->view('furniture/dekorasi/dekorasi',$data);
  }

}

 ?>
