<?php

class Meningkat_rumah extends CI_Controller
{

  function __construct(){
    parent::__construct();

    $this->load->helper(array('form', 'url'));
    $this->load->model('My_model');
    $this->load->library('upload');
  }

  function index() {
    $data = array('meningkat_rumah' => $this->My_model->meningkat_rumah()->result());
    $this->load->view('renovasi/meningkat_rumah/meningkat_rumah',$data);
  }

}

 ?>
