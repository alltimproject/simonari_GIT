<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tentang extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    // tiba

  }

  function index()
  {
    $data['title'] = 'Tentang Simonari';
    $this->load->view('unit_kerja/include/header', $data);

    $this->load->view('unit_kerja/v_tentang');

    $this->load->view('unit_kerja/include/footer');
  }

}
