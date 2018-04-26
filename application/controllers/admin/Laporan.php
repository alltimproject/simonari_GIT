<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('admin/m_unit');
    $this->load->model('admin/m_laporan');

    error_reporting(0);
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
    $data['selectT'] = $this->m_laporan->showTahun()->result();
    $this->load->view('admin/laporan/v_lap_daftarrisiko', $data);
  }

  function getDR()
  {
    $id_unit = $this->input->post('id_unit');
    $tahun_pk = $this->input->post('tahun_pk');

    $where = array(
      'tbl_unit_kerja.id_unit' => $id_unit
    );

    $where2 = array(
      'tbl_pk.tahun_pk' => $tahun_pk
    );

    $where3 = array(
      'tbl_unit_kerja.id_unit' => $id_unit,
      'tbl_pk.tahun_pk' => $tahun_pk
    );

    if($id_unit == '' && $tahun_pk == '')
    {
      $dr = $this->m_laporan->showDR()->result();
    } elseif($id_unit != '' && $tahun_pk == '') {
      $dr = $this->m_laporan->showDR($where)->result();
    } elseif($id_unit == '' && $tahun_pk != '') {
      $dr = $this->m_laporan->showDR($where2)->result();
    } else {
      $dr = $this->m_laporan->showDR($where3)->result();
    }

    if(count($dr) > 0)
    {
      foreach ($dr as $key) {
        $tbDr[] = $key;
      }

      echo json_encode($tbDr);
    }
  }

  function exportdaftarrisiko()
  {
    $id_unit = $this->input->post('id_unit');
    $tahun_pk = $this->input->post('tahun_pk');

    $where = array(
      'tbl_unit_kerja.id_unit' => $id_unit
    );

    $where2 = array(
      'tbl_pk.tahun_pk' => $tahun_pk
    );

    $where3 = array(
      'tbl_unit_kerja.id_unit' => $id_unit,
      'tbl_pk.tahun_pk' => $tahun_pk
    );

    if($id_unit == '' && $tahun_pk == '')
    {
      $data['dataSOP'] = $this->m_laporan->showDR()->result();
    } elseif($id_unit != '' && $tahun_pk == '') {
      $data['dataSOP'] = $this->m_laporan->showDR($where)->result();
    } elseif($id_unit == '' && $tahun_pk != '') {
      $data['dataSOP'] = $this->m_laporan->showDR($where2)->result();
    } else {
      $data['dataSOP'] = $this->m_laporan->showDR($where3)->result();
    }

    if(null !== $this->input->post('DRexcel'))
    {
      $this->load->view('unit_kerja/laporan/v_daftarResikoExcel', $data);
    } elseif (null !== $this->input->post('DRpdf'))
    {
      $html = $this->load->view('unit_kerja/laporan/v_daftarResikoPDF', $data, true);

      $this->load->library('pdf');
      $pdf = $this->pdf->load();
      $pdf->useSubstitutions = false;
      $pdf->WriteHTML(utf8_encode($html));
      $pdf->WriteHTML($html,1);
      $pdf->Output("Daftar_Risiko.pdf" ,'I');
    }
  }

  function daftarrencana()
  {
    $data['select'] = $this->m_unit->getAllunit()->result();
    $data['selectT'] = $this->m_laporan->showTahun()->result();
    $this->load->view('admin/laporan/v_lap_rencana', $data);
  }

  function getRencana()
  {
    $id_unit = $this->input->post('id_unit');
    $tahun_pk = $this->input->post('tahun_pk');

    $where = array(
      'tbl_unit_kerja.id_unit' => $id_unit
    );

    $where2 = array(
      'tbl_pk.tahun_pk' => $tahun_pk
    );

    $where3 = array(
      'tbl_unit_kerja.id_unit' => $id_unit,
      'tbl_pk.tahun_pk' => $tahun_pk
    );

    if($id_unit == '' && $tahun_pk == '')
    {
      $rcn = $this->m_laporan->showRencana()->result();
    } elseif($id_unit != '' && $tahun_pk == '') {
      $rcn = $this->m_laporan->showRencana($where)->result();
    } elseif($id_unit == '' && $tahun_pk != '') {
      $rcn = $this->m_laporan->showRencana($where2)->result();
    } else {
      $rcn = $this->m_laporan->showRencana($where3)->result();
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

  function exportrencana()
  {
    $id_unit = $this->input->post('id_unit');
    $tahun_pk = $this->input->post('tahun_pk');

    $where = array(
      'tbl_unit_kerja.id_unit' => $id_unit
    );

    $where2 = array(
      'tbl_pk.tahun_pk' => $tahun_pk
    );

    $where3 = array(
      'tbl_unit_kerja.id_unit' => $id_unit,
      'tbl_pk.tahun_pk' => $tahun_pk
    );

    if($id_unit == '' && $tahun_pk == '')
    {
      $data['rencana'] = $this->m_laporan->showRencana()->result();
    } elseif($id_unit != '' && $tahun_pk == '') {
      $data['rencana'] = $this->m_laporan->showRencana($where)->result();
    } elseif($id_unit == '' && $tahun_pk != '') {
      $data['rencana'] = $this->m_laporan->showRencana($where2)->result();
    } else {
      $data['rencana'] = $this->m_laporan->showRencana($where3)->result();
    }

    if(null !== $this->input->post('RCNexcel'))
    {

      $this->load->view('admin/laporan/v_reportRencanaExcel', $data);
    } elseif (null !== $this->input->post('RCNpdf'))
    {
      ob_start();
      $html = $this->load->view('admin/laporan/v_reportRencanaPDF', $data, true);
      ob_end_clean();

      $this->load->library('pdf');
      $pdf = $this->pdf->load();
      $pdf->useSubstitutions = false;
      $pdf->WriteHTML(utf8_encode($html));
      $pdf->WriteHTML($html,1);
      $pdf->Output("Rencana_Penanganan.pdf" ,'I');
    }
  }

  function daftarrealisasi()
  {
    $data['select'] = $this->m_unit->getAllunit()->result();
    $data['selectT'] = $this->m_laporan->showTahun()->result();
    $this->load->view('admin/laporan/v_lap_realisasi', $data);
  }

  function getReal()
  {
    $id_unit = $this->input->post('id_unit');
    $tahun_pk = $this->input->post('tahun_pk');

    $where = array(
      'tbl_unit_kerja.id_unit' => $id_unit
    );

    $where2 = array(
      'tbl_pk.tahun_pk' => $tahun_pk
    );

    $where3 = array(
      'tbl_unit_kerja.id_unit' => $id_unit,
      'tbl_pk.tahun_pk' => $tahun_pk
    );

    if($id_unit == '' && $tahun_pk == '')
    {
      $real = $this->m_laporan->showReal()->result();
    } elseif($id_unit != '' && $tahun_pk == '') {
      $real = $this->m_laporan->showReal($where)->result();
    } elseif($id_unit == '' && $tahun_pk != '') {
      $real = $this->m_laporan->showReal($where2)->result();
    } else {
      $real = $this->m_laporan->showReal($where3)->result();
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

  function exportrealisasi()
  {
    $id_unit = $this->input->post('id_unit');
    $tahun_pk = $this->input->post('tahun_pk');

    $where = array(
      'tbl_unit_kerja.id_unit' => $id_unit
    );

    $where2 = array(
      'tbl_pk.tahun_pk' => $tahun_pk
    );

    $where3 = array(
      'tbl_unit_kerja.id_unit' => $id_unit,
      'tbl_pk.tahun_pk' => $tahun_pk
    );

    if($id_unit == '' && $tahun_pk == '')
    {
      $data['data'] = $this->m_laporan->showReal()->result();
    } elseif($id_unit != '' && $tahun_pk == '') {
      $data['data'] = $this->m_laporan->showReal($where)->result();
    } elseif($id_unit == '' && $tahun_pk != '') {
      $data['data'] = $this->m_laporan->showReal($where2)->result();
    } else {
      $data['data'] = $this->m_laporan->showReal($where3)->result();
    }

    if(null !== $this->input->post('REALexcel'))
    {

      $this->load->view('unit_kerja/laporan/v_reportRealisasiExcel', $data);
    } elseif (null !== $this->input->post('REALpdf'))
    {
      $html = $this->load->view('unit_kerja/laporan/v_reportRealisasiPDF', $data, true);

      $this->load->library('pdf');
      $pdf = $this->pdf->load();
      $pdf->useSubstitutions = false;
      $pdf->WriteHTML(utf8_encode($html));
      $pdf->WriteHTML($html,1);
      $pdf->Output("Rencana_Penanganan.pdf" ,'I');
    }
  }



}
