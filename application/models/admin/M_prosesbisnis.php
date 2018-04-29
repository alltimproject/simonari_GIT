<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_prosesbisnis extends CI_Model{

  function getPK($where)
  {
    $this->db->select('*');
    $this->db->from('tbl_pk');
    $this->db->join('tbl_unit_kerja', 'tbl_unit_kerja.id_unit = tbl_pk.id_unit');
    $this->db->where($where);

    return $this->db->get();
  }

  function updateData($data, $where, $table)
  {
    $this->db->where($where);
    return $this->db->update($table, $data);
  }


  function getSKP($where)
  {
    $this->db->select('*');
    $this->db->select('(select count(nama_skp) from tbl_skp where tbl_skp.id_pk = tbl_pk.id_pk ) as rowpk');

    $this->db->from('tbl_pk');
    $this->db->join('tbl_skp', 'tbl_skp.id_pk = tbl_pk.id_pk', 'left');
    $this->db->join('tbl_unit_kerja', 'tbl_unit_kerja.id_unit = tbl_pk.id_unit','left');

    $this->db->where($where);
    return $this->db->get();

  }
  function getSOP($where)
  {
    $this->db->select('*');
       // $this->db->select('(select count(nama_skp) from tbl_skp where tbl_skp.id_pk = tbl_pk.id_pk) as rowpk');
       $this->db->select('(select count(nama_skp) from tbl_skp LEFT JOIN tbl_sop_risk ON tbl_sop_risk.id_skp = tbl_skp.id_skp where tbl_skp.id_pk = tbl_pk.id_pk) as rowpk');
       $this->db->select('(select count(nama_sop) from tbl_sop_risk where tbl_sop_risk.id_skp = tbl_skp.id_skp) as rowskp');

			 $this->db->from('tbl_pk');
       $this->db->join('tbl_skp', 'tbl_skp.id_pk = tbl_pk.id_pk', 'left');
       $this->db->join('tbl_sop_risk', 'tbl_sop_risk.id_skp = tbl_skp.id_skp', 'left');
       // $this->db->join('tbl_pk', 'tbl_pk.id_pk = tbl_skp.id_pk', 'left');
       $this->db->join('tbl_unit_kerja', 'tbl_unit_kerja.id_unit = tbl_pk.id_unit', 'left');


       $this->db->where($where);
			 // $this->db->order_by('tbl_sop_risk.hitung ASC');
       return $this->db->get();
  }
  function selectPK($where)
  {
    $this->db->select('*');
    $this->db->from('tbl_pk');
    $this->db->join('tbl_unit_kerja', 'tbl_unit_kerja.id_unit = tbl_pk.id_unit');

    $this->db->where($where);

    return $this->db->get();
  }
  function getUnit($session)
  {
    $this->db->select('*');
    $this->db->from('tbl_unit_kerja');
    $this->db->join('tbl_unit_org', 'tbl_unit_org.id_unor = tbl_unit_kerja.id_unor');
    //$this->db->join('tbl_pegawai', 'tbl_pegawai.id_unit = tbl_unit_kerja.id_unit');
    $this->db->where($session);

    return $this->db->get();
  }
  function getPegUnit($where)
  {
    $this->db->select('*');
    $this->db->from('tbl_pegawai');
    $this->db->join('tbl_unit_kerja','tbl_unit_kerja.id_unit = tbl_pegawai.id_unit');
    $this->db->join('tbl_unit_org', 'tbl_unit_org.id_unor = tbl_pegawai.id_unor');
    $this->db->where($where);

    return $this->db->get();
  }

  function hitungJumlahPKunit($id)
  {
    $query = $this->db->query("SELECT * FROM tbl_pk WHERE id_unit='$id'");
    $total = $query->num_rows();
    return $total;
  }
  function hitungJumlahSKPunit($id)
  {
    $this->db->select('*');
    $this->db->from('tbl_pk');
    $this->db->join('tbl_unit_kerja', 'tbl_unit_kerja.id_unit = tbl_pk.id_unit', 'left');
    $this->db->join('tbl_skp', 'tbl_skp.id_pk = tbl_pk.id_pk');
    $this->db->where('tbl_unit_kerja.id_unit', $id);

    return $this->db->get()->num_rows();

    // $query = $this->db->query("SELECT * FROM tbl_pk, tbl_unit_kerja, tbl_skp WHERE tbl_pk.id_unit = tbl_unit_kerja.id_unit AND tbl_pk.id_pk = tbl_skp.id_pk AND tbl_unit_kerja.id_unit = '$id' ");
    // $total = $query->num_rows();
    // return $total;
  }
  function hitungJumlahSOPunit($id)
  {
    $this->db->select('*');
    $this->db->from('tbl_skp');
    $this->db->join('tbl_sop_risk', 'tbl_sop_risk.id_skp = tbl_skp.id_skp', 'left');
    $this->db->join('tbl_pk', 'tbl_pk.id_pk = tbl_skp.id_skp', 'left');
    $this->db->join('tbl_unit_kerja','tbl_unit_kerja.id_unit = tbl_pk.id_unit', 'left');
    $this->db->where('tbl_unit_kerja.id_unit', $id);

    return $this->db->get()->num_rows();
  }


}
