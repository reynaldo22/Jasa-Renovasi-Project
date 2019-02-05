<?php

class Membangun_ruko extends CI_Controller
{

  function __construct(){
    parent::__construct();

    $this->load->helper(array('form', 'url'));
    $this->load->model('My_model');
    $this->load->library('upload');
  }

  function index() {
    $data = array('membangun_ruko' => $this->My_model->membangun_ruko()->result());
    $this->load->view('membangun/membangun_ruko/membangun_ruko',$data);
  }

}

 ?>
