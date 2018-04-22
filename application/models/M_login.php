<?php

  defined('BASEPATH') OR exit('No direct script access allowed');

  class M_login extends CI_Model
  {

      function loginCek($where)
      {
        $this->db->select('*');
        $this->db->from('tbl_pegawai');
        $this->db->join('tbl_jabatan','tbl_jabatan.id_jabatan = tbl_pegawai.id_jabatan');
        $this->db->join('tbl_unit_kerja','tbl_unit_kerja.id_unit = tbl_pegawai.id_unit');
        $this->db->join('tbl_unit_org', 'tbl_unit_org.id_unor = tbl_pegawai.id_unor');

        $this->db->where($where);

        return $this->db->get();
      }

      function loginCekUnor($where)
      {
        $this->db->select('*');
        $this->db->from('tbl_pegawai');
        $this->db->join('tbl_jabatan','tbl_jabatan.id_jabatan = tbl_pegawai.id_jabatan');
        $this->db->join('tbl_unit_org','tbl_unit_org.id_unor = tbl_pegawai.id_unor');


        $this->db->where($where);

        return $this->db->get();
      }


  }



 ?>
