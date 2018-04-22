<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('unit/m_dashboard');
    $this->load->model('core/m_report');
    $this->load->model('unit/m_kegiatanproses');
    $this->load->model('unit/m_manajemenrisiko');
    $this->load->model('unit/m_dashboard');

    error_reporting(0);
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $data['title'] = 'Report Daftar Risiko | Simonari';
    $this->load->view('unit_kerja/include/header', $data);

    $sess_unit = $this->session->userdata('id_unit');
    $where = array(
      'tbl_unit_kerja.id_unit' => $sess_unit
    );

    $data['dataSOP'] = $this->m_kegiatanproses->showSOP($where)->result();
    $this->load->view('unit_kerja/include/v_laporan');
    $this->load->view('unit_kerja/laporan/v_daftarResiko', $data);
    $this->load->view('unit_kerja/include/footer');
  }

  function printdaftarresiko()
  {
    $sess_unit = $this->session->userdata('id_unit');
    $where = array(
      'tbl_unit_kerja.id_unit' => $sess_unit
    );

    $data['dataSOP'] = $this->m_kegiatanproses->showSOP($where)->result();
    $this->load->view('unit_kerja/laporan/v_daftarResikoExcel', $data);
  }

  function printdaftarresikopdf()
  {

    $sess_unit = $this->session->userdata('id_unit');
    $where = array(
      'tbl_unit_kerja.id_unit' => $sess_unit
    );

    $data['dataSOP'] = $this->m_kegiatanproses->showSOP($where)->result();
    $html = $this->load->view('unit_kerja/laporan/v_daftarResikoPDF', $data, true);

    $this->load->library('pdf');
    $pdf = $this->pdf->load();
    $pdf->WriteHTML(utf8_encode($html));
    $pdf->WriteHTML($html,1);
    $pdf->Output("Daftar_Risiko.pdf" ,'I');

  }


  function reportrencana()
  {
    $data['title'] = 'Report Daftar Risiko | Simonari';
    $this->load->view('unit_kerja/include/header', $data);

    $sess_unit = $this->session->userdata('id_unit');
    $where = array(
      'tbl_unit_kerja.id_unit' => $sess_unit
    );

    $data['rencana'] = $this->m_manajemenrisiko->showRencana($where)->result();
    $this->load->view('unit_kerja/include/v_laporan');
    $this->load->view('unit_kerja/laporan/v_reportRencana', $data);
    $this->load->view('unit_kerja/include/footer');
  }


  function printrencanaExcel()
  {
    $session = $this->session->userdata('id_unit');

    $where = array(
      'tbl_unit_kerja.id_unit' => $session
    );
    $data['rencana'] = $this->m_manajemenrisiko->showRencana($where)->result();
    $this->load->view('unit_kerja/laporan/v_reportrencanaExcel', $data);
  }

  function printrencanapdf()
  {

    $sess_unit = $this->session->userdata('id_unit');
    $where = array(
      'tbl_unit_kerja.id_unit' => $sess_unit
    );

    $data['rencana'] = $this->m_manajemenrisiko->showRencana($where)->result();
    $html = $this->load->view('unit_kerja/laporan/v_reportRencanaPDF', $data, true);

    $this->load->library('pdf');
    $pdf = $this->pdf->load();
    $pdf->WriteHTML(utf8_encode($html));
    $pdf->WriteHTML($html,1);
    $pdf->Output("Rencana_Penanganan.pdf" ,'I');

  }

  function reportRealisasi()
  {
    $data['title'] = 'Report Realisasi Penanganan | Simonari';
    $this->load->view('unit_kerja/include/header', $data);

    $sess_unit = $this->session->userdata('id_unit');
    $where = array(
      'tbl_unit_kerja.id_unit' => $sess_unit
    );

    $data['data'] = $this->m_dashboard->showPenangananRisk($where)->result();
    $this->load->view('unit_kerja/include/v_laporan');
    $this->load->view('unit_kerja/laporan/v_reportRealisasi', $data);
    $this->load->view('unit_kerja/include/footer');
  }

  function reportRealisasiExcel()
  {
    $session = $this->session->userdata('id_unit');

    $where = array(
      'tbl_unit_kerja.id_unit' => $session
    );
    $data['data'] = $this->m_dashboard->showPenangananRisk($where)->result();
    $this->load->view('unit_kerja/laporan/v_reportRealisasiExcel', $data);
  }

  function reportRealisasiPDF()
  {

    $sess_unit = $this->session->userdata('id_unit');
    $where = array(
      'tbl_unit_kerja.id_unit' => $sess_unit
    );

    $data['data'] = $this->m_dashboard->showPenangananRisk($where)->result();
    $html = $this->load->view('unit_kerja/laporan/v_reportRealisasiPDF', $data, true);

    $this->load->library('pdf');
    $pdf = $this->pdf->load();
    $pdf->WriteHTML(utf8_encode($html));
    $pdf->WriteHTML($html,1);
    $pdf->Output("Rencana_Penanganan.pdf" ,'I');
  }
}
