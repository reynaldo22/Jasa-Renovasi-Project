<?php

class Ruang_tamu extends CI_Controller
{

  function __construct(){
    parent::__construct();

    $this->load->helper(array('form', 'url'));
    $this->load->model('My_model');
    $this->load->library('upload');
  }

  function index() {
    $data = array('ruang_tamu' => $this->My_model->ruang_tamu()->result());
    $this->load->view('furniture/ruang_tamu/ruang_tamu',$data);
  }

}

 ?>
