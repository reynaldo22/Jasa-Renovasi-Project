<?php

class Ruang_makan extends CI_Controller
{

  function __construct(){
    parent::__construct();

    $this->load->helper(array('form', 'url'));
    $this->load->model('My_model');
    $this->load->library('upload');
  }

  function index() {
    $data = array('ruang_makan' => $this->My_model->ruang_makan()->result());
    $this->load->view('furniture/ruang_makan/ruang_makan',$data);
  }

}

 ?>
