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
    $this->load->model('unit/m_laporan');

    error_reporting(0);
    //Codeigniter : Write Less Do More


        if($this->session->userdata('login') != "ok")
        {
          redirect('login');
        }
  }

  function index()
  {
    $data['title'] = 'Laporan | Simonari';
    $this->load->view('unit_kerja/include/header', $data);

    $sess_unit = $this->session->userdata('id_unit');
    $where = array(
      'tbl_unit_kerja.id_unit' => $sess_unit
    );

    $data['select'] = $this->m_laporan->selectTahunPK($where)->result();

    $this->load->view('unit_kerja/include/v_laporan');
    $this->load->view('unit_kerja/laporan/v_laporanall', $data);
    $this->load->view('unit_kerja/include/footer');
  }

  function exportdaftarrisiko()
  {
    $tahun_pk = $this->input->post('tahun_pk');
    $sess_unit = $this->session->userdata('id_unit');

    $where = array(
      'tbl_unit_kerja.id_unit' => $sess_unit
    );

    $where2 = array(
      'tbl_pk.tahun_pk' => $tahun_pk
    );

    if(empty($tahun_pk))
    {
      $data['dataSOP'] = $this->m_kegiatanproses->showSOP($where)->result();
    } else {
      $data['dataSOP'] = $this->m_laporan->showDR($where, $where2)->result();
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

  function exportrencana()
  {
    $tahun_pk = $this->input->post('tahun_pk');
    $sess_unit = $this->session->userdata('id_unit');

    $where = array(
      'tbl_unit_kerja.id_unit' => $sess_unit
    );

    $where2 = array(
      'tbl_pk.tahun_pk' => $tahun_pk
    );

    if(empty($tahun_pk))
    {
      $data['rencana'] = $this->m_manajemenrisiko->showRencana($where)->result();
    } else {
      $data['rencana'] = $this->m_laporan->showRencana($where, $where2)->result();
    }

    if(null !== $this->input->post('RCNexcel'))
    {

      $this->load->view('unit_kerja/laporan/v_reportrencanaExcel', $data);
    } elseif (null !== $this->input->post('RCNpdf'))
    {
      ob_start();
      $html = $this->load->view('unit_kerja/laporan/v_reportRencanaPDF', $data, true);
      ob_end_clean();

      $this->load->library('pdf');
      $pdf = $this->pdf->load();
      $pdf->useSubstitutions = false;
      $pdf->WriteHTML(utf8_encode($html));
      $pdf->WriteHTML($html,1);
      $pdf->Output("Rencana_Penanganan.pdf" ,'I');
    }
  }

  function exportrealisasi()
  {
    $tahun_pk = $this->input->post('tahun_pk');
    $sess_unit = $this->session->userdata('id_unit');

    $where = array(
      'tbl_unit_kerja.id_unit' => $sess_unit
    );

    $where2 = array(
      'tbl_pk.tahun_pk' => $tahun_pk
    );

    if(empty($tahun_pk))
    {
      $data['data'] = $this->m_dashboard->showPenangananRisk($where)->result();
    } else {
      $data['data'] = $this->m_laporan->showReal($where, $where2)->result();
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


  function getDR()
  {
    $tahun_pk = $this->input->post('tahun_pk');
    $sess_unit = $this->session->userdata('id_unit');

    $where = array(
      'tbl_unit_kerja.id_unit' => $sess_unit
    );

    $where2 = array(
      'tbl_pk.tahun_pk' => $tahun_pk
    );

    if($tahun_pk == '')
    {
      $dr = $this->m_kegiatanproses->showSOP($where)->result();
    } else {
      $dr = $this->m_laporan->showDR($where, $where2)->result();
    }


    if(count($dr) > 0)
    {
      // $no_sop = 1;
      // $jum1 = 1;
      // $jum2 = 1;
      // $tbDr = '';

      foreach ($dr as $key)
      {

        $tbDr[] = $key;

        //  if($jum2 <= 1)
        //  {
        //    $jmlpk = $key->rowpk;
        //    if ($jmlpk == 0)
        //    {
        //      $jmlpk = 1;
        //    }
        //
        //    $tbDr .= '<td rowspan="'.$jml_pk.'">'.$no_sop++.'</td>';
        //    $tbDr .= '<td>'.$key->nama_ik.'</td>';
        //    $jum2 = $key->rowpk;
        //    $nosop++;
        // } else {
        //   $jum2 = $jum2 - 1;
        // }
        //
        // if($jum1 <= 1)
        // {
        //   $jmlsop = $key->rowskp;
        //   if ($jmlsop == 0)
        //   {
        //     $jmlsop = 1;
        //   }
        //
        //   $tbDr .= '<td rowspan="'.$jml_sop.'">'.$key->nama_skp.'</td>';
        //   $jum1 = $key->rowskp;
        // } else {
        //   $jum1 = $jum1 - 1;
        // }
        //  $tbDr .= '<td>'.$no_sop++.'</td>';
        //  $tbDr .= '<td>'.$key->nama_ik.'</td>';
        //  $tbDr .= '<td>'.$key->nama_skp.'</td>';
        //  $tbDr .= '<td>'.$key->nama_sop.'</td>';
        //  $tbDr .= '<td>'.$key->nama_risk.'</td>';
        //  $tbDr .= '<td>'.$key->deskripsi_cause.'</td>';
        //  $tbDr .= '<td>'.$key->deskripsi_pengendalian.'</td>';
        //  $tbDr .= '<td>'.$key->sisa_risk.'</td>';
        //  $tbDr .= '<td>'.$key->frekuensi.'</td>';
        //  $tbDr .= '<td>'.$key->dampak.'</td>';
        //  $tbDr .= '</tr>';
      }

      echo json_encode($tbDr);
    }

  }

  function getRencana()
  {
    $tahun_pk = $this->input->post('tahun_pk');
    $sess_unit = $this->session->userdata('id_unit');

    $where = array(
      'tbl_unit_kerja.id_unit' => $sess_unit
    );

    $where2 = array(
      'tbl_pk.tahun_pk' => $tahun_pk
    );

    if($tahun_pk == '')
    {
      $rcn = $this->m_manajemenrisiko->showRencana($where)->result();
    } else {
      $rcn = $this->m_laporan->showRencana($where, $where2)->result();
    }

    if(count($rcn) > 0)
    {
      $no_rcn = 1;


      foreach ($rcn as $key)
      {

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

  function getReal()
  {
    $tahun_pk = $this->input->post('tahun_pk');
    $sess_unit = $this->session->userdata('id_unit');

    $where = array(
      'tbl_unit_kerja.id_unit' => $sess_unit
    );

    $where2 = array(
      'tbl_pk.tahun_pk' => $tahun_pk
    );

    if($tahun_pk == '')
    {
      $real = $this->m_dashboard->showPenangananRisk($where)->result();
    } else {
      $real = $this->m_laporan->showReal($where, $where2)->result();
    }

    if(count($real) > 0)
    {
      $no_real = 1;

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
