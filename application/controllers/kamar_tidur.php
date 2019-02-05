<?php

class Kamar_tidur extends CI_Controller
{

  function __construct(){
    parent::__construct();

    $this->load->helper(array('form', 'url'));
    $this->load->model('My_model');
    $this->load->library('upload');
  }

  function index() {
    $data = array('kamar_tidur' => $this->My_model->kamar_tidur()->result());
    $this->load->view('furniture/kamar_tidur/kamar_tidur',$data);
  }

}

 ?>
