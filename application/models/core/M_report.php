<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_report extends CI_Model{

  function printreportstatus($where)
  {
        $this->db->select('*');
        $this->db->from('tbl_sop_risk');
        $this->db->join('tbl_skp','tbl_skp.id_skp = tbl_sop_risk.id_skp');
        $this->db->join('tbl_pk', 'tbl_pk.id_pk = tbl_skp.id_pk');
        $this->db->join('tbl_unit_kerja', 'tbl_unit_kerja.id_unit = tbl_pk.id_unit');

        $this->db->join('tbl_cause', 'tbl_cause.id_sop = tbl_sop_risk.id_sop', 'left');
        $this->db->join('tbl_monitor_rtp', 'tbl_monitor_rtp.id_sop = tbl_sop_risk.id_sop', 'left');
        $this->db->where($where);


        return $this->db->get();
  }

  function reportResiko($where)
  {
     $this->db->select('*');

     $this->db->select('(select count(nama_sop) from tbl_sop_risk where tbl_sop_risk.id_skp = tbl_skp.id_skp) as rowskp');

     $this->db->from('tbl_skp');
     $this->db->join('tbl_sop_risk', 'tbl_sop_risk.id_skp = tbl_skp.id_skp', 'left');
     $this->db->join('tbl_pk', 'tbl_pk.id_pk = tbl_skp.id_pk', 'left');
     $this->db->join('tbl_unit_kerja', 'tbl_unit_kerja.id_unit = tbl_pk.id_unit', 'left');


     $this->db->where($where);
     return $this->db->get();

  }
  function reportpenanganan($where)
  {
    $this->db->select('*');
    $this->db->from('tbl_sop_risk');
    $this->db->join('tbl_skp','tbl_skp.id_skp = tbl_sop_risk.id_skp');
    $this->db->join('tbl_pk', 'tbl_pk.id_pk = tbl_skp.id_pk');
    $this->db->join('tbl_unit_kerja', 'tbl_unit_kerja.id_unit = tbl_pk.id_unit');

    $this->db->join('tbl_monitor_rtp', 'tbl_monitor_rtp.id_sop = tbl_sop_risk.id_sop', 'left');
    $this->db->where($where);


    return $this->db->get();
  }
  function reportrealisasi($where)
  {
    $this->db->select('*');
    $this->db->from('tbl_sop_risk');
    $this->db->join('tbl_skp','tbl_skp.id_skp = tbl_sop_risk.id_skp');
    $this->db->join('tbl_pk', 'tbl_pk.id_pk = tbl_skp.id_pk');
    $this->db->join('tbl_unit_kerja', 'tbl_unit_kerja.id_unit = tbl_pk.id_unit');

    $this->db->join('tbl_monitor_rtp', 'tbl_monitor_rtp.id_sop = tbl_sop_risk.id_sop', 'left');
    $this->db->where($where);


    return $this->db->get();
  }

}
