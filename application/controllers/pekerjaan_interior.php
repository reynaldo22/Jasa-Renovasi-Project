<?php

class Pekerjaan_interior extends CI_Controller
{

  function __construct(){
    parent::__construct();

    $this->load->helper(array('form', 'url'));
    $this->load->model('My_model');
    $this->load->library('upload');
  }

  function index() {
    $data = array('pekerjaan_interior' => $this->My_model->pekerjaan_interior()->result());
    $this->load->view('renovasi/pekerjaan_interior/pekerjaan_interior',$data);
  }

}

 ?>
