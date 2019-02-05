<?php

class Membangun_rumah extends CI_Controller
{

  function __construct(){
    parent::__construct();

    $this->load->helper(array('form', 'url'));
    $this->load->model('My_model');
    $this->load->library('upload');
  }

  function index() {
    $data = array('membangun_rumah' => $this->My_model->membangun_rumah()->result());
    $this->load->view('membangun/membangun_rumah/membangun_rumah',$data);
  }

}

 ?>
