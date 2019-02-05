<?php

class Perbaikan_genteng extends CI_Controller
{

  function __construct(){
    parent::__construct();

    $this->load->helper(array('form', 'url'));
    $this->load->model('My_model');
    $this->load->library('upload');
  }

  function index() {
    $data = array('perbaikan_genteng' => $this->My_model->perbaikan_genteng()->result());
    $this->load->view('renovasi/perbaikan_genteng/perbaikan_genteng',$data);
  }

}

 ?>
