<?php

class Home_improvement extends CI_Controller
{

  function __construct(){
    parent::__construct();

    $this->load->helper(array('form', 'url'));
    $this->load->model('My_model');
    $this->load->library('upload');
  }

  function index() {
    $data = array('home_improvement' => $this->My_model->home_improvement()->result());
    $this->load->view('furniture/home_improvement/home_improvement',$data);
  }

}

 ?>
