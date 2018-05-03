<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Organisasi extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('m_login');
    $this->load->model('m_core');
    $this->load->model('unit/m_organisasi');

    if($this->session->userdata('login') != "ok")
    {
      redirect('login');
    }
  }

  function index()
  {
      $session = $this->session->userdata('id_unit');
      $table = "tbl_unit_kerja";
      $session_nip = array(
        'nip' => $this->session->userdata('nip')
      );

    $data['title'] = "Organisasi | Simonari";
    $data['showprofile'] = $this->m_organisasi->showpegawai($session_nip)->result();

    $this->load->view('unit_kerja/include/header', $data);
    $this->load->view('unit_kerja/organisasi/content_organisasi', $data);
    $this->load->view('unit_kerja/include/footer');
  }

  function unit()
  {
    $session = $this->session->userdata('id_unit');
    $table = "tbl_unit_kerja";
    $where = array(
      'id_unit' => $session
    );

    $data['keterangan'] = $this->m_core->showWhere($table, $where)->result();
    $this->load->view('unit_kerja/organisasi/v_unit', $data);

  }

  function pegawai()
  {
    $session = $this->session->userdata('id_unit');
    $table = "tbl_unit_kerja";
    $where = array(
      'tbl_pegawai.id_unit' => $session
    );

    $data['data'] = $this->m_organisasi->showPegUnit($where)->result();
    $this->load->view('unit_kerja/organisasi/v_pegawai', $data);

  }

  function proses($aksi)
  {
    if($aksi == "edit")
    {
      $id_unit = $this->input->post('id_unit');
      $sasaran = $this->input->post('sasaran');
      $iku = $this->input->post('iku');

      $data = array(
        'id_unit' => $id_unit,
        'sasaran' => $sasaran,
        'iku' => $iku
      );

      $where = array(
        'id_unit' => $id_unit
      );

      $cek = $this->m_core->updateData($data, $where, 'tbl_unit_kerja');
      if($cek)
      {
        echo "berhasil";
      } else {
        echo "gagal";
      }
    }

  }

  function ubahpassword()
  {
    $nip       = $this->session->userdata('nip');
    $pass_lama = $this->input->post('pass_lama');
    $pass_baru = $this->input->post('pass_baru');
    $kon_pass  = $this->input->post('kon_pass');
    $halaman = $this->input->post('redirect');

    $where = array(
      'password' => md5($pass_lama)
    );

    $where2 = array(
      'nip' => $nip
    );

    $cek = $this->m_organisasi->oldPassword($where, $where2);
    if($cek->num_rows() == 0){
      $this->session->set_flashdata('notif', 'Password Tidak Sesuai');
      $this->session->set_flashdata('class', 'danger');
      redirect($halaman);
    } else {
      $cek1 = $this->m_organisasi->updatepassword(md5($pass_baru), $nip);
      if($cek1){
        $this->session->set_flashdata('notif', 'Berhasil Merubah Password. Silahkan Login kembali');
        $this->session->set_flashdata('class', 'success');
        redirect('login');
      }else{
        $this->session->set_flashdata('notif', 'Gagal Merubah Password. Silahkan Coba Lagi');
        $this->session->set_flashdata('class', 'danger');
        redirect($halaman);
      }
    }

  }

  function uploadfoto()
  {
      $halaman = $this->input->post('redirect');
      $upload = $this->m_organisasi->upload();
      if($upload['result'] == "success"){
        $cek = $this->m_organisasi->saveupload($upload);
        if($cek)
        {
          $this->session->set_flashdata('notif', 'Tidak Berhasil Merubah Foto');
          $this->session->set_flashdata('class', 'success');
          redirect($halaman);
        } else {
          $this->session->set_flashdata('notif', 'Berhasil Merubah Foto');
          $this->session->set_flashdata('class', 'success');
          redirect($halaman);
        }
      }
  }


}
