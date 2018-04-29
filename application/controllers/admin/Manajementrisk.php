<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manajementrisk extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('admin/m_manajement');
    $this->load->model('unit/m_organisasi');
    $this->load->model('unit/m_dashboard');
    $this->load->model('admin/m_prosesbisnis');
    $this->load->model('core/m_core');
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $data['title'] = 'Manajemen Risiko | Simonari';
    $this->load->view('admin/include/header', $data);

    $data['show'] = $this->m_manajement->getUnit()->result();
    $this->load->view('admin/manajemenrisk/v_manajemen', $data);

    $this->load->view('admin/include/footer');
  }

  function lihatdetail($id)
  {
    //error_reporting(0);

    $data['title'] = 'Detail Monitoring Unit | Simonari';
    $this->load->view('admin/include/header', $data);

    $session = array(
      'session_unit' => $id
    );

    $where = array(
      'tbl_unit_kerja.id_unit' => $id
    );
      $this->session->set_userdata($session);

    $data['showPegawaiunit'] = $this->m_prosesbisnis->getPegUnit($where)->result();
    $data['data'] = $this->m_manajement->showRisk($where)->result();
    $data['showunitID'] = $this->m_manajement->getUnitid($where)->result();
    $this->load->view('admin/manajemenrisk/v_lihatdetailmonitoring', $data);

    $this->load->view('admin/include/footer');
  }

  function lihatrencana($id)
  {
    $data['title'] = 'Rencana Penanganan | Simonari';
    $this->load->view('admin/include/header', $data);

    $session = array(
      'session_unit' => $id
    );

    $where = array(
      'tbl_unit_kerja.id_unit' => $id
    );
    $data['showPegawaiunit'] = $this->m_prosesbisnis->getPegUnit($where)->result();
    $data['realisasi']    = $this->m_manajement->showRealisasi($where)->result();
    $data['showunitID']   = $this->m_manajement->getUnitid($where)->result();
    $data['rencana']      = $this->m_manajement->showRencana($where)->result();
    $data['pegawai']      = $this->m_organisasi->showPegUnit($where)->result();
    $this->load->view('admin/manajemenrisk/v_lihatrencana', $data);

    $this->load->view('admin/include/footer');
  }

  function saveRTP()
  {
    $action = $this->input->post('action');
    $id_sop = $this->input->post('id_sop');
    $deskripsi_rtp = $this->input->post('deskripsi_rtp');
    $plan_mulai = $this->input->post('plan_mulai');
    $plan_selesai = $this->input->post('plan_selesai');
    $indikator = $this->input->post('indikator_output');
    $pic = $this->input->post('pic');

    $data = array(
      'id_sop' => $id_sop,
      'deskripsi_rtp' => $deskripsi_rtp,
      'plan_mulai' => $plan_mulai,
      'plan_selesai' => $plan_selesai,
      'indikator_output' => $indikator,
      'pic' => $pic,
      'status' => 'Open'
    );

    $where = array(
      'id_sop' => $id_sop
    );

    if($action == "tambah")
    {
      $cek = $this->m_core->insertData('tbl_monitor_rtp', $data);
    } elseif($action == "edit")
    {
      $cek2 = $this->m_core->updateData($data, $where, 'tbl_monitor_rtp');
    }

    if($cek){
      $this->session->set_flashdata('notif', 'Berhasil Menambahkan Data RTP');
      $this->session->set_flashdata('halaman', 'okrtp');
      redirect('admin/manajementrisk/lihatrencana/'.$this->session->userdata('session_unit'));
    } elseif($cek2) {
      $this->session->set_flashdata('notif', 'Berhasil Mengedit Data RTP');
      $this->session->set_flashdata('halaman', 'okrtp');
      redirect('admin/manajementrisk/lihatrencana/'.$this->session->userdata('session_unit'));
    } else {
      redirect('admin/manajementrisk/lihatrencana/'.$this->session->userdata('session_unit'));
    }

  }

  function lihatrealisasi($id)
  {
    $data['title'] = 'Realisasi Penanganan | Simonari';
    $this->load->view('admin/include/header', $data);

    $session = array(
      'session_unit' => $id
    );

    $where = array(
      'tbl_unit_kerja.id_unit' => $id
    );

    $data['showPegawaiunit'] = $this->m_prosesbisnis->getPegUnit($where)->result();
    $data['realisasi'] = $this->m_manajement->showRealisasi($where)->result();
    $data['showunitID'] = $this->m_manajement->getUnitid($where)->result();
    $data['pegawai'] = $this->m_organisasi->showPegUnit($where)->result();

    $this->load->view('admin/manajemenrisk/v_realisasi', $data);

    $this->load->view('admin/include/footer');
  }
  function updateRTP()
  {
    $id_sop = $this->input->post('id_sop');
    $hambatan = $this->input->post('hambatan');
    $realm_mulai = $this->input->post('real_mulai');
    $real_selesai = $this->input->post('real_selesai');

    $where = array(
      'id_sop' => $id_sop
    );

    $data = array(
      'id_sop' => $id_sop,
      'hambatan' => $hambatan,
      'real_mulai' => $real_mulai,
      'real_selesai' => $real_selesai,
      'status' => 'Close'
    );

    $cek = $this->m_core->updateData($data, $where, 'tbl_monitor_rtp');

    if($cek){
      $this->session->set_flashdata('notif', 'Berhasil Menambahkan Data Realisasi');
      $this->session->set_flashdata('halaman', 'okreal');
      redirect('admin/manajementrisk/lihatrealisasi/'.$this->session->userdata('session_unit') );
    } else {
      $this->session->set_flashdata('notif', 'Gagal Mengedit Data');
      redirect('admin/manajementrisk/lihatrencana/'.$this->session->userdata('session_unit'));
    }
  }

  function lihatstatuspenanganan($id)
  {
    $data['title'] = "Status Penanganan | Simonari";
    $this->load->view('admin/include/header', $data);

    $where = array(
      'tbl_unit_kerja.id_unit' => $id
    );

    $data['showPegawaiunit'] = $this->m_prosesbisnis->getPegUnit($where)->result();
    $data['showunitID'] = $this->m_manajement->getUnitid($where)->result();
    $data['realisasi']  = $this->m_manajement->showRealisasiClose($where)->result();
    $data['jumlahClose'] = $this->m_dashboard->rowClose($where)->num_rows();
    $this->load->view('admin/manajemenrisk/v_statuspenanganan', $data);

    $this->load->view('admin/include/footer');
  }

  function lihatidentifikasi($id)
  {
    $data['title'] = 'Identifikasi Risiko | Simonari';
    $this->load->view('admin/include/header', $data);

    $where = array(
      'tbl_unit_kerja.id_unit' => $id
    );

    $data['dataSOP'] = $this->m_manajement->showSOP($where)->result();
    $data['showunitID'] = $this->m_manajement->getUnitid($where)->result();
    $data['showPegawaiunit'] = $this->m_prosesbisnis->getPegUnit($where)->result();
    $this->load->view('admin/manajemenrisk/v_identifikasirisiko', $data);

    $this->load->view('admin/include/footer');
  }

  function updateRisiko()
  {
    $id_sop            = $this->input->post('id_sop');
    $nama_risk         = $this->input->post('nama_risk');
    $frekuensi         = $this->input->post('frekuensi');
    $dampak            = $this->input->post('dampak');
    $deskripsi_cause   = $this->input->post('deskripsi_cause');
    $kategori_cause    = $this->input->post('kategori_cause');
    $deskrisp_pengendalian = $this->input->post('deskripsi_pengendalian');
    $sisa_risk         = $this->input->post('sisa_risk');
    $hitung            = $this->input->post('hitung');

    $data = array(
      'nama_risk'         => $nama_risk,
      'frekuensi'         => $frekuensi,
      'dampak'            => $dampak,
      'hitung'            => $hitung,
      'deskripsi_cause'   => $deskripsi_cause,
      'kategori_cause'    => $kategori_cause,
      'deskripsi_pengendalian' => $deskrisp_pengendalian,
      'sisa_risk'         => $sisa_risk,
      'hitung'            => $hitung
    );

    $where = array(
      'id_sop' => $id_sop
    );

    $table = 'tbl_sop_risk';

    $cek = $this->m_prosesbisnis->updateData($data, $where, $table);
    if($cek){
      $this->session->set_flashdata('notif', 'Berhasil Merubah Identifikasi Risiko');
      redirect('admin/manajementrisk/lihatidentifikasi/'.$this->session->userdata('session_unit') );
    }else{
      $this->session->set_flashdata('notif', 'Gagal Merubah Identifikasi Risiko');
      redirect('admin/manajementrisk/lihatidentifikasi/'.$this->sessison->userdata('session_unit') );
    }
  }



}
