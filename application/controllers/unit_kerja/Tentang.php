<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tentang extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('unit/m_organisasi');

  }

  function index()
  {
    $data['title'] = 'Tentang Simonari';
    $session_nip = array(
      'nip' => $this->session->userdata('nip')
    );
    $data['showprofile'] = $this->m_organisasi->showpegawai($session_nip)->result();

    $this->load->view('unit_kerja/include/header', $data);
    $this->load->view('unit_kerja/include/sidebar_tentang', $data);
    $this->load->view('unit_kerja/v_tentang');
    $this->load->view('unit_kerja/include/footer');
  }

}
