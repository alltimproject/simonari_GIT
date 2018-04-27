<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ManajemenRisk extends CI_Controller{

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
    $session = $this->session->userdata('id_unit');

			$where = array(
				'tbl_unit_kerja.id_unit' => $session
			);

      $where2 = array(
				'tbl_pegawai.id_unit' => $session
			);

    //ambil foto
    $session_nip = array(
      'nip' => $this->session->userdata('nip')
    );

    $data['showprofile'] = $this->m_organisasi->showpegawai($session_nip)->result();
    $data['title'] = "Manajemen Risk | Simonari";
    $data['data'] = $this->m_manajemenrisiko->showRisk($where)->result();
    $data['dataSOP'] = $this->m_kegiatanproses->showSOP($where)->result();
    $data['realisasi'] = $this->m_manajemenrisiko->showRealisasi($where)->result();
    $data['rencana'] = $this->m_manajemenrisiko->showRencana($where)->result();
    $data['pegawai'] = $this->m_organisasi->showPegUnit($where2)->result();

    $this->load->view('unit_kerja/include/header', $data);
    $this->load->view('unit_kerja/include/sidebar_risk', $data);
    $this->load->view('unit_kerja/v_manajemenrisiko', $data);
    $this->load->view('unit_kerja/include/footer');
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

    if($action == "tambah")
    {
      $config['upload_path']   = APPPATH. '../uploadzip/';
      $config['allowed_types'] = 'zip|rar';
      $config['max_size']      = 100;

      $this->load->library('upload', $config);
        if(!$this->upload->do_upload('zip_file') ){
          $error = array('error '=> $this->upload->display_errors() );
          $this->load->view('v_manajemenrisiko', $error);
        }else{
          $upload_data = $this->upload->data();
          $data['zip_file'] = $upload_data['file_name'];
          $this->m_core->insertdatartp($data);
        }





      //$cek = $this->m_core->insertData('tbl_monitor_rtp', $data);
    } elseif($action == "edit")
    {
      $cek2 = $this->m_core->updateData($data, $where, 'tbl_monitor_rtp');
    }

    if($cek){
      $this->session->set_flashdata('notif', 'Berhasil Menambahkan Rencana Penanganan');
      $this->session->set_flashdata('class', 'success');
      $this->session->set_flashdata('halaman', 'okrtp');
      redirect('unit_kerja/manajemenrisk');
    } elseif($cek2) {
      $this->session->set_flashdata('notif', 'Berhasil Mengedit Rencana Penanganan');
      $this->session->set_flashdata('class', 'success');
      $this->session->set_flashdata('halaman', 'okrtp');
      redirect('unit_kerja/manajemenrisk');
    } else {
      $this->session->set_flashdata('notif', 'Tidak Berhasil Menambah/Mengedit Rencana Penanganan');
      $this->session->set_flashdata('class', 'danger');
      $this->session->set_flashdata('halaman', 'okrtp');
      redirect('unit_kerja/manajemenrisk');
    }

  }


  function updateRTP()
  {
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

    $cek = $this->m_core->updateData($data, $where, 'tbl_monitor_rtp');

    if($cek){
      $this->session->set_flashdata('notif', 'Berhasil Menambahkan Data Realisasi');
      $this->session->set_flashdata('class', 'success');
      $this->session->set_flashdata('halaman', 'okreal');
      redirect('unit_kerja/manajemenrisk');
    } else {
      $this->session->set_flashdata('notif', 'Tidak Berhasil Menambahkan Data Realisasi');
      $this->session->set_flashdata('class', 'danger');
      $this->session->set_flashdata('halaman', 'okreal');
      redirect('unit_kerja/manajemenrisk');
    }
  }


}
