<?php

class Furniture extends CI_Controller
{

  function __construct(){
    parent::__construct();

    $this->load->helper(array('form', 'url'));
    $this->load->model('My_model');
    $this->load->library('upload');
  }

  function index() {
    $data['item'] = $this->My_model->ruang-tamu()->result();
    $this->load->view('v_furniture');
  }

}

 ?>
