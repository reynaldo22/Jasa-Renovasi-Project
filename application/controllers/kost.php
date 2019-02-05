<?php

class Kost extends CI_Controller
{

  function __construct(){
    parent::__construct();

    $this->load->helper(array('form', 'url'));
    $this->load->model('My_model');
    $this->load->library('upload');
  }

  function index() {
    $data = array('kost' => $this->My_model->kost()->result());
    $this->load->view('membangun/kost/kost',$data);
  }

}

 ?>
