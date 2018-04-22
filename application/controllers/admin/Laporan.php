<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('admin/m_unit');

  }

  function index()
  {
    $data['title'] = 'Laporan | Simonari';
    $this->load->view('admin/include/header', $data);

    $this->load->view('admin/laporan/v_laporan');

    $this->load->view('admin/include/footer');
  }
  function printdaftarresiko()
  {
    $data['title'] = 'Laporan Daftar Resiko';
    $this->load->view('admin/include/header', $data);

    $data['showunit'] = $this->m_unit->getAllunit()->result();
    $this->load->view('admin/laporan/v_laporanDaftarResiko', $data);


    $this->load->view('admin/include/footer');
  }
  function printreportpenangaan()
  {
    $data['title'] = 'Laporan Rencana penanganan';
    $this->load->view('admin/include/header', $data);

    $data['showunit'] = $this->m_unit->getAllunit()->result();
    $this->load->view('admin/laporan/v_laporanrencanapenanganan', $data);

    $this->load->view('admin/include/footer');
  }
  function printrealisasipenanganan()
  {
    $data['title'] = 'Laporan Realisasi Penanganan';
    $this->load->view('admin/include/header', $data);

    $data['showunit'] = $this->m_unit->getAllunit()->result();
    $this->load->view('admin/laporan/v_laporanrealisasipenanganan', $data);

    $this->load->view('admin/include/footer');
  }

}
