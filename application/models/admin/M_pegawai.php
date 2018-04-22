<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pegawai extends CI_Model{

  function getallPegawai()
  {
    $this->db->select('*');
    $this->db->from('tbl_pegawai');
    $this->db->join('tbl_unit_kerja','tbl_unit_kerja.id_unit = tbl_pegawai.id_unit');
    $this->db->join('tbl_jabatan', 'tbl_jabatan.id_jabatan = tbl_pegawai.id_jabatan');
    $this->db->join('tbl_unit_org', 'tbl_unit_org.id_unor = tbl_pegawai.id_unor');


    return $this->db->get();
  }

  function getJabatan()
  {
    return $this->db->get('tbl_jabatan');
  }

  function uploadgambar()
  {
    $config['upload_path']  = './storage';
    $config['allowed_type'] = 'jpg|png|jpeg';
    $config['max_size']     = '2048';
    $config['remove_space'] = TRUE;

    $this->load->library('upload', $config);
    if($this->upload->do_upload('input_gambar') ){
      $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '' );
      return $return;

    }else{
      $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors() );
      return $return;
    }

  }

  function addpegawai($data, $table)
  {
    $this->db->insert($table, $data);
  }
  function editpeg($where)
  {
    $this->db->select('*');
    $this->db->from('tbl_pegawai');
    $this->db->join('tbl_unit_kerja','tbl_unit_kerja.id_unit = tbl_pegawai.id_unit');
    $this->db->join('tbl_jabatan', 'tbl_jabatan.id_jabatan = tbl_pegawai.id_jabatan');
    $this->db->join('tbl_unit_org', 'tbl_unit_org.id_unor = tbl_pegawai.id_unor');
    $this->db->where($where);

    return $this->db->get();
  }

  function updatePegawai($where, $data, $table)
  {
    $this->db->where($where);
    $this->db->update($table, $data);
  }
  function uploadfotoPG($where, $data, $table)
  {
    $query = $this->db->query("UPDATE tbl_pegawai SET foto='$data' WHERE nip='$nip' ");
    return $query;
  }
  function delete($where, $table)
  {
    $this->db->where($where);
    $this->db->delete($table);
  }






}
