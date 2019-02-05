<?php

class Membuat_dak extends CI_Controller
{

  function __construct(){
    parent::__construct();

    $this->load->helper(array('form', 'url'));
    $this->load->model('My_model');
    $this->load->library('upload');
  }

  function index() {
    $data = array('membuat_dak' => $this->My_model->membuat_dak()->result());
    $this->load->view('renovasi/membuat_dak/membuat_dak',$data);
  }
}
 ?>
