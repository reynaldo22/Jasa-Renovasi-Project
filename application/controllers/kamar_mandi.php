<?php

class Kamar_mandi extends CI_Controller
{

  function __construct(){
    parent::__construct();

    $this->load->helper(array('form', 'url'));
    $this->load->model('My_model');
    $this->load->library('upload');
  }

  function index() {
    $data = array('kamar_mandi' => $this->My_model->kamar_mandi()->result());
    $this->load->view('furniture/kamar_mandi/kamar_mandi',$data);
  }

}

 ?>
