<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('admin/m_unit');
    $this->load->model('admin/m_laporan');
  }

  function index()
  {
    $data['title'] = 'Laporan | Simonari';
    $this->load->view('admin/include/header', $data);
    $this->load->view('admin/laporan/sidebar_laporan');
    $this->load->view('admin/include/footer');
  }

  function daftarrisiko()
  {
    $data['select'] = $this->m_unit->getAllunit()->result();
    $this->load->view('admin/laporan/v_lap_daftarrisiko', $data);
  }

  function getDR()
  {
    $id_unit = $this->input->post('id_unit');

    $where = array(
      'tbl_unit_kerja.id_unit' => $id_unit
    );

    if($id_unit == '')
    {
      $dr = $this->m_laporan->showDR()->result();
    } else {
      $dr = $this->m_laporan->showDR($where)->result();
    }

    if(count($dr) > 0)
    {
      foreach ($dr as $key) {
        $tbDr[] = $key;
      }

      echo json_encode($tbDr);
    }
  }

  function daftarrencana()
  {
    $data['select'] = $this->m_unit->getAllunit()->result();
    $this->load->view('admin/laporan/v_lap_rencana', $data);
  }

  function getRencana()
  {
    $id_unit = $this->input->post('id_unit');

    $where = array(
      'tbl_unit_kerja.id_unit' => $id_unit
    );

    if($id_unit == '')
    {
      $rcn = $this->m_laporan->showRencana()->result();
    } else {
      $rcn = $this->m_laporan->showRencana($where)->result();
    }

    if(count($rcn) > 0)
    {
      $tbRcn = '';
      $no_rcn = 1;
      foreach ($rcn as $key) {
        $tbRcn .= '<tr>';
        $tbRcn .= '<td>'.$no_rcn++.'</td>';
        $tbRcn .= '<td>'.$key->nama_risk.'</td>';
        $tbRcn .= '<td>'.$key->deskripsi_cause.'</td>';
        $tbRcn .= '<td>'.$key->frekuensi.'</td>';
        $tbRcn .= '<td>'.$key->dampak.'</td>';
        $tbRcn .= '<td>'.$key->hitung.'</td>';
        $tbRcn .= '<td>'.$key->deskripsi_pengendalian.'</td>';
        $tbRcn .= '<td>'.$key->deskripsi_rtp.'</td>';
        $tbRcn .= '<td>'.$key->plan_mulai.'</td>';
        $tbRcn .= '<td>'.$key->plan_selesai.'</td>';
        $tbRcn .= '<td>'.$key->indikator_output.'</td>';
        $tbRcn .= '<td>'.$key->pic.'</td>';
        $tbRcn .= '<td>'.$key->anggaran.'</td>';
        $tbRcn .= '</tr>';
      }
      echo json_encode($tbRcn);
    }
  }

  function daftarrealisasi()
  {
    $data['select'] = $this->m_unit->getAllunit()->result();
    $this->load->view('admin/laporan/v_lap_realisasi', $data);
  }

  function getReal()
  {
    $id_unit = $this->input->post('id_unit');

    $where = array(
      'tbl_unit_kerja.id_unit' => $id_unit
    );

    if($id_unit == '')
    {
      $real = $this->m_laporan->showReal()->result();
    } else {
      $real = $this->m_laporan->showReal($where)->result();
    }

    if(count($real) > 0)
    {
      $no_real = 1;
      $tbReal = '';

      foreach ($real as $key)
      {

         $tbReal .= '<tr>';
         $tbReal .= '<td>'.$no_real++.'</td>';
         $tbReal .= '<td>'.$key->nama_risk.'</td>';
         $tbReal .= '<td>'.$key->deskripsi_rtp.'</td>';
         $tbReal .= '<td>'.$key->plan_mulai.'</td>';
         $tbReal .= '<td>'.$key->plan_selesai.'</td>';
         $tbReal .= '<td>'.$key->indikator_output.'</td>';
         $tbReal .= '<td>'.$key->pic.'</td>';
         $tbReal .= '<td>'.$key->anggaran.'</td>';
         $tbReal .= '<td>'.$key->real_mulai.'</td>';
         $tbReal .= '<td>'.$key->real_selesai.'</td>';
         $tbReal .= '<td>'.$key->hambatan.'</td>';
         $tbReal .= '<td>'.$key->keterangan.'</td>';
         $tbReal .= '</tr>';
      }

      echo json_encode($tbReal);
    }
  }



}
