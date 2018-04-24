<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kegiatanprosesbisnis extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('admin/m_unit');
    $this->load->model('admin/m_organisasi');
    $this->load->model('admin/m_prosesbisnis');
    $this->load->model('core/m_core');
    $this->load->model('admin/m_core');
  }

  function index()
  {
    $data['title'] = 'Kegiatan Dan Proses Bisnis | Simonari';
    $this->load->view('admin/include/header', $data);

    $data['show']     = $this->m_organisasi->getorganisasiunit()->result();
    $data['showunit'] = $this->m_unit->getAllunit()->result();
    $this->load->view('admin/v_kegiatanproses', $data);

    $this->load->view('admin/include/footer');
  }
  function lihatpk($id)
  {
    $data['title'] = 'Detail PK | Simonari';
    $this->load->view('admin/include/header', $data);

    $where = array(
      'tbl_unit_kerja.id_unit' => $id
    );

    $session = array(
      'session_unit' => $id
    );

    $this->session->set_userdata($session);
    $data['showunitID'] = $this->m_prosesbisnis->getUnit($where)->result();
    $data['showPK']  = $this->m_prosesbisnis->getPK($where)->result();
    $data['showSKP'] = $this->m_prosesbisnis->getSKP($where)->result();
    $data['showSOP'] = $this->m_prosesbisnis->getSOP($where)->result();

    $data['jumlahPKunit'] = $this->m_prosesbisnis->hitungJumlahPKunit($id);
    $this->load->view('admin/v_lihatpk',$data);

    $this->load->view('admin/include/footer');
  }
  function addPK()
  {
    $data['title'] = 'Tambah PK | Simonari';
    $this->load->view('admin/include/header', $data);

    $this->load->view('admin/v_tambahpk');

    $this->load->view('admin/include/footer');
  }
  function addSKP()
  {
    $data['title'] = 'Tambah SKP | Simonari';
    $this->load->view('admin/include/header', $data);

    $where = array(
      'tbl_unit_kerja.id_unit' => $this->session->userdata('session_unit')
    );

    $data['select'] = $this->m_prosesbisnis->selectPK($where)->result();
    $this->load->view('admin/v_tambahskp', $data);

    $this->load->view('admin/include/footer');
  }
  function addsop()
  {
    $data['title'] = 'Tambah SOP | Simonari';
    $this->load->view('admin/include/header', $data);

    $where = array(
      'tbl_unit_kerja.id_unit' => $this->session->userdata('session_unit')
    );
    $data['select'] = $this->m_prosesbisnis->selectPK($where)->result();
    $this->load->view('admin/v_tambahsop', $data);

    $this->load->view('admin/include/footer');
  }
  function savePK()
  {
    $sess_unit = $this->session->userdata('session_unit');
    $post = $this->input->post();
    $result = array();
    $total_post = count($post['nama_ik']);

    foreach($post['nama_ik'] AS $key => $val)
    {
      $result[] = array(
        'nama_ik' => $post['nama_ik'][$key],
        'target' => $post['target'][$key],
        'anggaran' => $post['anggaran'][$key],
        'tahun_pk' => $post['tahun_pk'][$key],
        'id_unit' => $sess_unit
      );
    }
    $table = 'tbl_pk';

    $cek = $this->m_core->saveData($table, $result);
    if($cek) {
      $this->session->set_flashdata('notif', "Berhasil Menambahkan Data");
      redirect('admin/kegiatanprosesbisnis/lihatpk/'.$sess_unit);
    } else {
      redirect('gagal');
    }
  }

  function saveSKP()
  {
    $post = $this->input->post();
    $id_pk = $this->input->post('id_pk');
    $result = array();
    $total_post = count($post['nama_skp']);

    foreach($post['nama_skp'] AS $key => $val)
    {

      $result[] = array(
        'id_pk' => $id_pk,
        'nama_skp' => $post['nama_skp'][$key],
        'target_volume' => $post['target_volume'][$key],
        'target_mutu' => $post['target_mutu'][$key],
        'target_waktu' => $post['target_waktu'][$key],
        'target_biaya' => $post['target_biaya'][$key]
      );
    }
    $table = 'tbl_skp';

    $cek = $this->m_core->saveData($table, $result);
    if($cek) {
      $this->session->set_flashdata('notif', "Berhasil Menambahkan Data");
      redirect('admin/kegiatanprosesbisnis/lihatskp/'.$this->session->userdata('session_unit'));
    } else {
      redirect('gagal');
    }
  }

  function lihatskp($id)
  {
    $data['title'] = 'Detail SKP | Simonari';
    $this->load->view('admin/include/header', $data);

    $where = array(
      'tbl_unit_kerja.id_unit' => $id
    );

    $data['jumlahSKPunit'] = $this->m_prosesbisnis->hitungJumlahSKPunit($id);
    $data['showunitID'] = $this->m_prosesbisnis->getUnit($where)->result();
    $data['showSKP'] = $this->m_prosesbisnis->getSKP($where)->result();
    $this->load->view('admin/v_lihatskp', $data);

    $this->load->view('admin/include/footer');
  }

  function getSKP()
  {
    $id_pk = $this->input->post('id_pk');
    $table = 'tbl_skp';
    $where = array(
      'id_pk' => $id_pk
    );

    $skp = $this->m_core->showWhere($table, $where)->result();
    if(count($skp) > 0)
    {
      $select_skp = '';
      $select_skp = '<option value="">-- Pilih SKP --</option>';
      foreach ($skp as $key) {
         $select_skp .= '<option value="'.$key->id_skp.'">'.$key->nama_skp.'</option>';

      }
       echo json_encode($select_skp);
    }
  }
  function lihatsop($id)
  {
    $data['title'] = 'Detail SKP | Simonari';
    $this->load->view('admin/include/header', $data);

    $where = array(
      'tbl_unit_kerja.id_unit' => $id
    );

    $data['jumlahSOPunit'] = $this->m_prosesbisnis->hitungJumlahSOPunit($id);
    $data['showunitID'] = $this->m_prosesbisnis->getUnit($where)->result();
    $data['showSOP'] = $this->m_prosesbisnis->getSOP($where)->result();
    $this->load->view('admin/v_lihatsop', $data);

    $this->load->view('admin/include/footer');

  }

  function saveSOP()
  {
    $id_skp = $this->input->post('id_skp');
    $post = $this->input->post();
    $sop = array();
    $cause = array();
    $pengendalian = array();
    $total = count($post['nama_sop']);

    foreach($post['nama_sop'] as $key => $value) {
      $sop[] = array(
        'id_skp' => $id_skp,
        'nama_sop' => $post['nama_sop'][$key],
        'nama_risk' => $post['nama_risk'][$key],
        'frekuensi' => $post['frekuensi'][$key],
        'dampak' => $post['dampak'][$key],
        'hitung' => $post['dampak'][$key] * $post['frekuensi'][$key],
        'sisa_risk' => $post['sisa_risk'][$key],
        'deskripsi_cause' => $post['deskripsi_cause'][$key],
        'kategori_cause' => $post['kategori_cause'][$key],
        'deskripsi_pengendalian' => $post['deskripsi_p_exist'][$key]
      );
    }

    $cek = $this->m_core->saveData('tbl_sop_risk', $sop);

    if($cek) {
      $this->session->set_flashdata('notif', 'Berhasil Menambahkan Data SOP');
      redirect('admin/kegiatanprosesbisnis/lihatsop/'.$this->session->userdata('session_unit'));
    } else {
      redirect('gagal');
    }
  }

  function hapuspk($id)
  {
    $where = array(
      'id_pk' => $id,
      'id_unit' => $this->session->userdata('session_unit')
    );
    $this->m_core->delete($where, 'tbl_pk');
    $this->session->set_flashdata('notif', 'Berhasil Menghapus Data PK ');
    redirect('admin/lihatpk/'.$this->session->userdata('session_unit'));

  }
  function hapusSOP($id)
  {
    $where = array(
      'id_sop'  => $id
    );
    $this->m_core->delete($where, 'tbl_sop_risk');
    $this->session->set_flashdata('notif', 'Berhasil Mengahapus Data SOP');
    redirect('admin/kegiatanprosesbisnis/lihatsop/'.$this->session->userdata('session_unit') );
  }





}
