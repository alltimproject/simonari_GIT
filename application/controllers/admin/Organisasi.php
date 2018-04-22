<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Organisasi extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('admin/m_pegawai');
    $this->load->model('admin/m_organisasi');
    $this->load->model('admin/m_unit');
    $this->load->model('admin/m_core');

    if($this->session->userdata('status') != 'loginactive' ){
      redirect('admin/login');
    }
  }

  function index()
  {
    $data['title'] = 'Organisasi | Simonari';
    $this->load->view('admin/include/header', $data);

    $data['showorganisasiunit'] = $this->m_organisasi->getorganisasiunit()->result();
    $data['showunit']       = $this->m_unit->getAllunit()->result();
    $data['showjabatan']    = $this->m_pegawai->getJabatan()->result();
    $data['showorganisasi'] = $this->m_organisasi->getallOrganisasi()->result();
    $data['showpegawai']    = $this->m_pegawai->getallPegawai()->result();
    $this->load->view('admin/v_organisasi', $data);
    $this->load->view('admin/include/footer');
  }

  function addpegawai()
  {
    $nip            = $this->input->post('nip');
    $nama_pegawai   = $this->input->post('nm_pegawai');
    $ket_jabatan    = $this->input->post('ket_jabatan');
    $jabatan        = $this->input->post('jabatan');
    $unit_kerja     = $this->input->post('unit_kerja');
    $unit_org       = $this->input->post('unit_org');
    $password       = $this->input->post('password');


    $data = array(
      'nip'           => $nip,
      'nama_pegawai'  => $nama_pegawai,
      'id_jabatan'    => $jabatan,
      'ket_jabatan'   => $ket_jabatan,
      'id_unit'       => $unit_kerja,
      'id_unor'       => $unit_org,
      'password'      => md5($password)
    );

    $cek = $this->m_pegawai->addpegawai($data,'tbl_pegawai');
    $this->session->set_flashdata('notif', 'Berhasil Menambahkan Data Pegawai');
    redirect('admin/organisasi?pegawai');

  }

  function editpeg($id)
  {
    $data['title'] = 'Edit Pegawai | Simonari';
    $this->load->view('admin/include/header',$data);

    $where = array(
      'nip' => $id
    );
    $data['showunit']       = $this->m_unit->getAllunit()->result();
    $data['showjabatan']    = $this->m_pegawai->getJabatan()->result();

    $data['showorganisasi'] = $this->m_organisasi->getallOrganisasi()->result();
    $data['showpeg'] = $this->m_pegawai->editpeg($where)->result();
    $this->load->view('admin/v_edit', $data);
    $this->load->view('admin/include/footer');
  }

  function updatePegawai()
  {
    $nip     = $this->input->post('nip');
    $nama    = $this->input->post('nm_pegawai');
    $jabatan = $this->input->post('jabatan');
    $unit    = $this->input->post('unit');
    $org     = $this->input->post('organisasi');

    $data = array(
      'nama_pegawai' => $nama,
      'id_jabatan'   => $jabatan,
      'id_unit'      => $unit,
      'id_unor'      => $org
    );
    $where = array(
      'nip' => $nip
    );
    $this->m_pegawai->updatePegawai($where, $data, 'tbl_pegawai');
    if($data > 0 ){
      echo $this->session->set_flashdata('notif', 'Data Pegawai Berhasil Dirubah');
      redirect(base_url('admin/organisasi?pegawai') );
    }else{
      echo $this->session->set_flashdata('notif', 'Gagal Mengupdate Data');
      redirect(base_url('admin/organisasi?pegawai') );
    }
  }
  function hapuspeg($nip)
  {
    $where = array(
      'nip' => $nip
    );

    $cek = $this->m_pegawai->delete($where,'tbl_pegawai');
      $this->session->set_flashdata('notif', 'Berhasil Mengahapus Data Pegawai');
      redirect(base_url('admin/organisasi?pegawai') );
  }

  function addunit()
  {
    $nama_unit  = $this->input->post('nama_unit');
    $sasaran    = $this->input->post('sasaran');
    $iku        = $this->input->post('iku');
    $organisasi = $this->input->post('organisasi');

    $data = array(
      'nama_unit' => $nama_unit,
      'sasaran'   => $sasaran,
      'iku'       => $iku,
      'id_unor'=> $organisasi
    );
    $this->m_core->tambah($data, 'tbl_unit_kerja');
    $this->session->set_flashdata('notif', 'Berhasil Menambahkan Data');
    redirect('admin/organisasi?unit');
  }



  function detailunit($id)
  {
    $data['title'] = 'Detail Unit | Simonari';
    $this->load->view('admin/include/header', $data);
    $where = array(
      'tbl_unit_kerja.id_unit' => $id
    );
    $data['showorganisasi'] = $this->m_organisasi->getallOrganisasi()->result();
    $data['detailunit'] = $this->m_organisasi->detailunit($where)->result();
    $this->load->view('admin/v_detailunit', $data);

    $this->load->view('admin/include/footer');

  }
  function updateunit()
  {
    $id_unit        = $this->input->post('id_unit');
    $nm_unit        = $this->input->post('nm_unit');
    $nm_organisasi  = $this->input->post('organisasi');
    $sasaran        = $this->input->post('sasaran');
    $iku            = $this->input->post('iku');

    $data = array(
      'nama_unit' => $nm_unit,
      'sasaran'   => $sasaran,
      'iku'       => $iku,
      'id_unor'   => $nm_organisasi
    );

    $where = array(
      'id_unit' => $id_unit
    );

    $this->m_core->update($where, $data, 'tbl_unit_kerja');
    $this->session->set_flashdata('notif', 'Berhasil Merubah Data');
    redirect('admin/organisasi?unit');

  }

  function hapusunit($id)
  {
    $where = array(
      'id_unit' => $id
    );
    $this->m_core->delete($where, 'tbl_unit_kerja');
    $this->session->set_flashdata('notif', 'Berhasil Mengahapus Data');
    redirect('admin/organisasi?unit');
  }

  //--------- organisasi ---------//
  function hapusorg($id)
  {
    $where = array(
      'id_unor' => $id
    );
    $this->m_core->delete($where, 'tbl_unit_org');
    $this->session->set_flashdata('notif', 'Berhasil Mengahapus Data');
    redirect('admin/organisasi?organisasi');
  }
  function detailorganisasi($id)
  {
    $data['title'] = 'Detail Organisasi | Simonari';
    $this->load->view('admin/include/header', $data);
    $where = array(
      'id_unor' => $id
    );
    $data['detailorganisasi'] = $this->m_organisasi->detailorganisasi($where)->result();
    $this->load->view('admin/v_detailorganisasi', $data);

    $this->load->view('admin/include/footer');
  }
  function addorg()
  {
    $nama_org = $this->input->post('nama_org');

    $data = array(
      'nama_unor' => $nama_org
    );
    $this->m_core->tambah($data, 'tbl_unit_org');
    $this->session->set_flashdata('notif', 'Berhasil Menambahkan Data');
    redirect('admin/organisasi?organisasi');
  }
  function updateorganisasi()
  {
    $id_unor = $this->input->post('id_unor');
    $nm_org  = $this->input->post('nm_org');

    $data = array(
      'nama_unor' => $nm_org
    );

    $where = array(
      'id_unor' => $id_unor
    );

    $this->m_core->update($where, $data, 'tbl_unit_org');
    $this->session->set_flashdata('notif', 'Berhasil Merubah Data');
    redirect('admin/organisasi/detailorganisasi/'.$id_unor);
  }






  }
