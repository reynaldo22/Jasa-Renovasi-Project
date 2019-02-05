<?php

class Pengecatan extends CI_Controller
{

  function __construct(){
    parent::__construct();

    $this->load->helper(array('form', 'url'));
    $this->load->model('My_model');
    $this->load->library('upload');
  }

  function index() {
    $data = array('pengecatan' => $this->My_model->pengecatan()->result());
    $this->load->view('renovasi/pengecatan/pengecatan',$data);
  }

}

 ?>
