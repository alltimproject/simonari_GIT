<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manajemen_risiko extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('m_login');
    $this->load->model('m_core');
    $this->load->model('unit/m_manajemenrisiko');
    $this->load->model('unit/m_kegiatanproses');
    $this->load->model('unit/m_organisasi');

    if($this->session->userdata('login') != "ok")
    {
      redirect('login');
    }
  }

  function index()
  {
    $session_nip = array(
      'nip' => $this->session->userdata('nip')
    );

    $data['showprofile'] = $this->m_organisasi->showpegawai($session_nip)->result();
    $data['title'] = "Manajemen Risk | Simonari";

    $this->load->view('unit_kerja/include/header', $data);
    $this->load->view('unit_kerja/manajemen_risiko/content_manajemenrisiko', $data);
    $this->load->view('unit_kerja/include/footer');
  }

  function identifikasi_risiko()
  {
      $session = $this->session->userdata('id_unit');
			$where = array(
				'tbl_unit_kerja.id_unit' => $session
			);

      $data['dataSOP'] = $this->m_manajemenrisiko->showSOP($where)->result();
      $this->load->view('unit_kerja/manajemen_risiko/v_identifikasi_risiko', $data);
  }

  function daftar_risiko()
  {
    $session = $this->session->userdata('id_unit');
    $where = array(
      'tbl_unit_kerja.id_unit' => $session
    );

    $data['data'] = $this->m_manajemenrisiko->showRisk($where)->result();
    $this->load->view('unit_kerja/manajemen_risiko/v_daftar_risiko', $data);
  }

  function rencana_penanganan()
  {
    $session = $this->session->userdata('id_unit');
    $where = array(
      'tbl_unit_kerja.id_unit' => $session
    );
    $where2 = array(
      'tbl_pegawai.id_unit' => $session
    );

    $data['rencana'] = $this->m_manajemenrisiko->showRencana($where)->result();
    $data['pegawai'] = $this->m_organisasi->showPegUnit($where2)->result();
    $this->load->view('unit_kerja/manajemen_risiko/v_rencana', $data);
  }

  function realisasi_penanganan()
  {
    $session = $this->session->userdata('id_unit');
    $where = array(
      'tbl_unit_kerja.id_unit' => $session
    );
    $where2 = array(
      'tbl_pegawai.id_unit' => $session
    );

    $data['realisasi'] = $this->m_manajemenrisiko->showRealisasi($where)->result();
    $data['pegawai'] = $this->m_organisasi->showPegUnit($where2)->result();
    $this->load->view('unit_kerja/manajemen_risiko/v_realisasi', $data);
  }

  function proses_identifikasi($aksi)
  {
    if($aksi == "update")
    {
      $id_sop = $this->input->post('id_sop');
      $nama_risk = $this->input->post('nama_risk');
      $frekuensi = $this->input->post('frekuensi');
      $dampak = $this->input->post('dampak');
      $deskripsi_cause = $this->input->post('deskripsi_cause');
      $kategori_cause = $this->input->post('kategori_cause');
      $deskripsi_pengendalian = $this->input->post('deskripsi_pengendalian');
      $sisa_risk = $this->input->post('sisa_risk');
      $hitung = $frekuensi * $dampak;

      $data = array(
        'nama_risk' => $nama_risk,
        'frekuensi' => $frekuensi,
        'dampak' => $dampak,
        'hitung' => $hitung,
        'deskripsi_cause' => $deskripsi_cause,
        'kategori_cause' => $kategori_cause,
        'deskripsi_pengendalian' => $deskripsi_pengendalian,
        'sisa_risk'=> $sisa_risk
      );

      $where = array(
        'id_sop' => $id_sop
      );

      $table = 'tbl_sop_risk';

      $cek = $this->m_kegiatanproses->updateData($data, $where, $table);

      if($cek)
      {
        echo "berhasil";
      } else
      {
        echo "gagal";
      }
    }
  }

  function proses_rencana($aksi)
  {
    $id_sop = $this->input->post('id_sop');
    $deskripsi_rtp = $this->input->post('deskripsi_rtp');
    $plan_mulai = $this->input->post('plan_mulai');
    $plan_selesai = $this->input->post('plan_selesai');
    $indikator = $this->input->post('indikator_output');
    $pic = $this->input->post('pic');
    $status = $this->input->post('status');

    $data = array(
      'id_sop' => $id_sop,
      'deskripsi_rtp' => $deskripsi_rtp,
      'plan_mulai' => $plan_mulai,
      'plan_selesai' => $plan_selesai,
      'indikator_output' => $indikator,
      'pic' => $pic,
      'status' => $status
    );
    $where = array(
      'id_sop' => $id_sop
    );

    if($aksi == "tambah")
    {
      $cek = $this->m_core->insertData('tbl_monitor_rtp', $data);
      if($cek)
      {
        echo "berhasil tambah";
      } else {
        echo "gagal";
      }
    } elseif($aksi == "edit")
    {
      $cek = $this->m_core->updateData($data, $where, 'tbl_monitor_rtp');
      if($cek)
      {
        echo "berhasil edit";
      } else {
        echo "gagal";
      }
    }
  }

  function proses_realisasi($aksi)
  {
    if($aksi == "update")
    {
        $action = $this->input->post('action');
        $id_sop = $this->input->post('id_sop');
        $hambatan = $this->input->post('hambatan');
        $real_mulai = $this->input->post('real_mulai');
        $real_selesai = $this->input->post('real_selesai');
        $keterangan = $this->input->post('keterangan');

        $where = array(
          'id_sop' => $id_sop
        );

        $data = array(
          'id_sop' => $id_sop,
          'hambatan' => $hambatan,
          'real_mulai' => $real_mulai,
          'real_selesai' => $real_selesai,
          'keterangan' => $keterangan,
          'status' => 'Close'
        );

        if($action == "tambah")
        {
          $cek = $this->m_core->updateData($data, $where, 'tbl_monitor_rtp');
          if($cek)
          {
            echo "berhasil tambah";
          } else {
            echo "gagal";
          }
        } elseif($action == "edit") {
          $cek = $this->m_core->updateData($data, $where, 'tbl_monitor_rtp');
          if($cek)
          {
            echo "berhasil edit";
          } else {
            echo "gagal";
          }
        }
    } elseif($aksi == "upload") {

      $upload = $this->m_manajemenrisiko->upload();
      if($upload['result'] == "success"){
        $cek = $this->m_manajemenrisiko->saveupload($upload);

        if($cek)
        {
          echo "berhasil";
        }else{
          echo "gagal";
        }
      }
    }

  }
}
