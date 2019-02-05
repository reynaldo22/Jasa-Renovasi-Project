<?php

class Menambah_ruangan extends CI_Controller
{

  function __construct(){
    parent::__construct();

    $this->load->helper(array('form', 'url'));
    $this->load->model('My_model');
    $this->load->library('upload');
  }

  function index() {
    $data = array('menambah_ruangan' => $this->My_model->menambah_ruangan()->result());
    $this->load->view('renovasi/menambah_ruangan/menambah_ruangan',$data);
  }

}

 ?>
