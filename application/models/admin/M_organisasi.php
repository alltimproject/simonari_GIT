<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_organisasi extends CI_Model{

  function getallOrganisasi()
  {
    return $this->db->get('tbl_unit_org');
  }
  function getorganisasiunit()
  {
    $this->db->select('*');
    $this->db->from('tbl_unit_kerja');
    $this->db->join('tbl_unit_org','tbl_unit_org.id_unor = tbl_unit_kerja.id_unor');
    $this->db->order_by('tbl_unit_org.nama_unor', 'ASC');
    return $this->db->get();
  }
  function detailunit($where)
  {
    $this->db->select('*');
    $this->db->from('tbl_unit_kerja');
    $this->db->join('tbl_unit_org','tbl_unit_org.id_unor = tbl_unit_kerja.id_unor');
    $this->db->where($where);

    return $this->db->get();
  }
  function detailorganisasi($where)
  {
    return $this->db->get_where('tbl_unit_org', $where);
  }

  function hitungJumlahOrg()
  {
    $query = $this->db->query("SELECT * FROM tbl_unit_org");
    $total = $query->num_rows();
    return $total;
  }

  function hitungJumlahUnit()
  {
    $query = $this->db->query("SELECT * FROM tbl_unit_kerja");
    $total = $query->num_rows();
    return $total;
  }
  function hitungJumlahPegawai()
  {
    $query = $this->db->query("SELECT * FROM tbl_pegawai");
    $total = $query->num_rows();
    return $total;
  }

  function uploadfoto()
  {
    $config['upload_path']   = './upload/';
    $config['allowed_types'] = 'jpg|png|jpeg|';
    $config['max_size']      = '3048';
    $config['remove_space']  = TRUE;

    $this->load->library('upload', $config);

    if($this->upload->do_upload('foto') ){
      $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
      return $return;
    }else{
      $return  = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
      return $return;
    }
  }

  function saveupload($upload)
  {
    $nip = $this->input->post('nip');

    $data = array(
      'foto' => $upload['file']['file_name']
    );

    $where = array(
      'nip' => $nip
    );
    $this->db->where($where);
    $this->db->update('tbl_pegawai', $data);
  }


}
