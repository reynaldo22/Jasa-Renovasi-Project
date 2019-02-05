<?php

class Ruang_kerja extends CI_Controller
{

  function __construct(){
    parent::__construct();

    $this->load->helper(array('form', 'url'));
    $this->load->model('My_model');
    $this->load->library('upload');
  }

  function index() {
    $data = array('ruang_kerja' => $this->My_model->ruang_kerja()->result());
    $this->load->view('furniture/ruang_kerja/ruang_kerja',$data);
  }

}

 ?>
