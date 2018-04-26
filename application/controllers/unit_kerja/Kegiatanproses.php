<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KegiatanProses extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('m_login');
    $this->load->model('m_core');
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
      //ambil foto
      $session_nip = array(
        'nip' => $this->session->userdata('nip')
      );

    $data['showprofile'] = $this->m_organisasi->showpegawai($session_nip)->result();

    $data['title'] = "Kegiatan dan Proses | Simonari";
    $data['dataSOP'] = $this->m_kegiatanproses->showSOP($where)->result();
    $data['dataSKP'] = $this->m_kegiatanproses->showSKP($where)->result();
    $data['dataPK'] = $this->m_kegiatanproses->showPK($where)->result();

    $this->load->view('unit_kerja/include/header', $data);
    $this->load->view('unit_kerja/include/sidebar_keg');
    $this->load->view('unit_kerja/v_kegiatanproses', $data);
    $this->load->view('unit_kerja/include/footer');
  }

  function addSOP()
  {
    $session = $this->session->userdata('id_unit');

      $where = array(
        'tbl_unit_kerja.id_unit' => $session
      );

    $data['title'] = "Proses Bisnis | Simonari";
    $data['dataSOP'] = $this->m_kegiatanproses->logSOP($where)->result();
    $data['select'] = $this->m_kegiatanproses->selectPK($where)->result();

    $this->load->view('unit_kerja/include/header', $data);
    $this->load->view('unit_kerja/v_tambahsop', $data);
    $this->load->view('unit_kerja/include/footer');
  }

  function addPK()
  {
    $session = $this->session->userdata('id_unit');

      $where = array(
        'tbl_unit_kerja.id_unit' => $session
      );


    $data['title'] = "Perjanjian Kinerja | Simonari";
    $data['dataPK'] = $this->m_kegiatanproses->logPK($where)->result();

    $this->load->view('unit_kerja/include/header', $data);
    $this->load->view('unit_kerja/v_tambahpk', $data);
    $this->load->view('unit_kerja/include/footer');
  }

  function addSKP()
  {
    $session = $this->session->userdata('id_unit');

      $where = array(
        'tbl_unit_kerja.id_unit' => $session
      );

    $data['title'] = "Kegiatan | Simonari";
    $data['dataSKP'] = $this->m_kegiatanproses->logSKP($where)->result();
    $data['select'] = $this->m_kegiatanproses->selectPK($where)->result();

    $this->load->view('unit_kerja/include/header', $data);
    $this->load->view('unit_kerja/v_tambahskp', $data);
    $this->load->view('unit_kerja/include/footer');
  }

  function savePK()
  {
    $sess_unit = $this->session->userdata('id_unit');

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
      $this->session->set_flashdata('notif', 'Berhasil Menambahkan Perjanjian Kinerja');
      $this->session->set_flashdata('halaman', 'okpk');
      $this->session->set_flashdata('class', 'success');
      redirect('unit_kerja/kegiatanproses');
    } else {
      $this->session->set_flashdata('notif', 'Tidak Berhasil Menambahkan Perjanjian Kinerja');
      $this->session->set_flashdata('class', 'danger');
      $this->session->set_flashdata('halaman', 'okpk');
      redirect('unit_kerja/kegiatanproses');
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
      $this->session->set_flashdata('notif', 'Berhasil Menambahkan Kegiatan');
      $this->session->set_flashdata('class', 'success');
      $this->session->set_flashdata('halaman', 'okskp');
      redirect('unit_kerja/kegiatanproses');
    } else {
      $this->session->set_flashdata('notif', 'Tidak Berhasil Menambahkan Kegiatan');
      $this->session->set_flashdata('class', 'danger');
      $this->session->set_flashdata('halaman', 'okskp');
      redirect('unit_kerja/kegiatanproses');
    }
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
      $select_skp = '<option value="">-- Pilih Kegiatan --</option>';
      foreach ($skp as $key) {
         $select_skp .= '<option value="'.$key->id_skp.'">'.$key->nama_skp.'</option>';

      }
       echo json_encode($select_skp);
    }
  }

  function saveSOP()
  {
    $id_skp = $this->input->post('id_skp');
    $post = $this->input->post();
    $sop = array();
    $total = count($post['nama_sop']);

    foreach($post['nama_sop'] as $key => $value) {
      $sop[] = array(
        'id_skp' => $id_skp,
        'nama_sop' => $post['nama_sop'][$key]
      );
    }

    $cek = $this->m_core->saveData('tbl_sop_risk', $sop);

    if($cek) {
      $this->session->set_flashdata('notif', 'Berhasil Menambahkan Proses Bisnis');
      $this->session->set_flashdata('class', 'success');
      $this->session->set_flashdata('halaman', 'oksop');
      redirect('unit_kerja/kegiatanproses');
    } else {
      $this->session->set_flashdata('notif', 'Tidak Berhasil Menambahkan Proses Bisnis');
      $this->session->set_flashdata('class', 'danger');
      $this->session->set_flashdata('halaman', 'oksop');
      redirect('unit_kerja/kegiatanproses');
    }
  }

  function updatePK()
  {
    $id_pk = $this->input->post('id_pk');
    $nama_ik = $this->input->post('nama_ik');
    $anggaran = $this->input->post('anggaran');
    $tahun_pk = $this->input->post('tahun_pk');
    $target = $this->input->post('target');

    $data = array(
      'nama_ik' => $nama_ik,
      'anggaran' => $anggaran,
      'tahun_pk' => $tahun_pk,
      'target' => $target
    );

    $where = array(
      'id_pk' => $id_pk
    );

    $table = 'tbl_pk';

    $cek = $this->m_kegiatanproses->updateData($data, $where, $table);

    if($cek)
    {
      $this->session->set_flashdata('notif', 'Berhasil Mengedit Perjanjian Kinerja');
      $this->session->set_flashdata('class', 'success');
      $this->session->set_flashdata('halaman', 'okpk');
      redirect('unit_kerja/kegiatanproses');
    } else
    {
      $this->session->set_flashdata('notif', 'Tidak Berhasil Mengedit Perjanjian Kinerja');
      $this->session->set_flashdata('class', 'danger');
      $this->session->set_flashdata('halaman', 'okpk');
      redirect('unit_kerja/kegiatanproses');
    }
  }

  function updateSKP()
  {
    $id_skp = $this->input->post('id_skp');
    $nama_skp = $this->input->post('nama_skp');
    $target_mutu = $this->input->post('target_mutu');
    $target_waktu = $this->input->post('target_waktu');
    $target_biaya = $this->input->post('target_biaya');
    $target_volume = $this->input->post('target_volume');

    $data = array(
      'nama_skp' => $nama_skp,
      'target_mutu' => $target_mutu,
      'target_waktu' => $target_waktu,
      'target_biaya' => $target_biaya,
      'target_volume' => $target_volume
    );

    $where = array(
      'id_skp' => $id_skp
    );

    $table = 'tbl_skp';

    $cek = $this->m_kegiatanproses->updateData($data, $where, $table);

    if($cek)
    {
      $this->session->set_flashdata('notif', 'Berhasil Mengedit Kegiatan');
      $this->session->set_flashdata('class', 'success');
      $this->session->set_flashdata('halaman', 'okskp');
      redirect('unit_kerja/kegiatanproses');
    } else
    {
      $this->session->set_flashdata('notif', 'Tidak Berhasil Mengedit Kegiatan');
      $this->session->set_flashdata('class', 'danger');
      $this->session->set_flashdata('halaman', 'okskp');
    }
  }

  function updateSOP()
  {
    $id_sop = $this->input->post('id_sop');
    $nama_sop = $this->input->post('nama_sop');

    $data = array(
      'nama_sop' => $nama_sop
    );

    $where = array(
      'id_sop' => $id_sop
    );

    $table = 'tbl_sop_risk';

    $cek = $this->m_kegiatanproses->updateData($data, $where, $table);

    if($cek)
    {
      $this->session->set_flashdata('notif', 'Berhasil Mengedit Proses Bisnis');
      $this->session->set_flashdata('class', 'success');
      $this->session->set_flashdata('halaman', 'oksop');
      redirect('unit_kerja/kegiatanproses');
    } else
    {
      $this->session->set_flashdata('notif', 'Tidak Berhasil Mengedit Proses Bisnis');
      $this->session->set_flashdata('class', 'danger');
      $this->session->set_flashdata('halaman', 'oksop');
      redirect('unit_kerja/kegiatanproses');
    }
  }

}
