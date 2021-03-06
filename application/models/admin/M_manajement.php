<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_manajement extends CI_Model{

  function getUnit()
  {
    $this->db->select('*');
    $this->db->from('tbl_unit_kerja');
    $this->db->join('tbl_unit_org', 'tbl_unit_org.id_unor = tbl_unit_kerja.id_unor');

    return $this->db->get();
  }

  function getUnitid($where)
  {
    $this->db->select('*');
    $this->db->from('tbl_unit_kerja');
    $this->db->join('tbl_unit_org', 'tbl_unit_org.id_unor = tbl_unit_kerja.id_unor');
    $this->db->where($where);
    return $this->db->get();
  }

  function showRisk($where)
  {
    $this->db->select('*');

    $this->db->select('(select count(nama_sop) from tbl_sop_risk where tbl_sop_risk.id_skp = tbl_skp.id_skp) as rowskp');

    $this->db->from('tbl_skp');
    $this->db->join('tbl_sop_risk', 'tbl_sop_risk.id_skp = tbl_skp.id_skp');
    $this->db->join('tbl_pk', 'tbl_pk.id_pk = tbl_skp.id_pk', 'left');
    $this->db->join('tbl_unit_kerja', 'tbl_unit_kerja.id_unit = tbl_pk.id_unit', 'left');


  $this->db->where($where);
  return $this->db->get();
  }
  function showRencana($where)
  {
    $this->db->select('*');

    $this->db->from('tbl_monitor_rtp');
    $this->db->join('tbl_sop_risk', 'tbl_sop_risk.id_sop = tbl_monitor_rtp.id_sop', 'right');
        $this->db->join('tbl_skp', 'tbl_skp.id_skp = tbl_sop_risk.id_skp', 'left');
        $this->db->join('tbl_pk', 'tbl_pk.id_pk = tbl_skp.id_pk', 'left');
        $this->db->join('tbl_unit_kerja', 'tbl_unit_kerja.id_unit = tbl_pk.id_unit', 'left');

        $this->db->where($where);
        return $this->db->get();
  }

  function showRealisasi($where)
  {
    $this->db->select('*');

    $where2 = "tbl_monitor_rtp.status = 'Open'";

    $this->db->from('tbl_monitor_rtp');
    $this->db->join('tbl_sop_risk', 'tbl_sop_risk.id_sop = tbl_monitor_rtp.id_sop', 'right');
        $this->db->join('tbl_skp', 'tbl_skp.id_skp = tbl_sop_risk.id_skp', 'right');
        $this->db->join('tbl_pk', 'tbl_pk.id_pk = tbl_skp.id_pk', 'right');
        $this->db->join('tbl_unit_kerja', 'tbl_unit_kerja.id_unit = tbl_pk.id_unit', 'right');

        $this->db->where($where);
        $this->db->where($where2);
        return $this->db->get();
  }
  function showRealisasiClose($where)
  {
    $this->db->select('*');

    $where2 = "tbl_monitor_rtp.status = 'Close'";

    $this->db->from('tbl_monitor_rtp');
    $this->db->join('tbl_sop_risk', 'tbl_sop_risk.id_sop = tbl_monitor_rtp.id_sop', 'right');
        $this->db->join('tbl_skp', 'tbl_skp.id_skp = tbl_sop_risk.id_skp', 'right');
        $this->db->join('tbl_pk', 'tbl_pk.id_pk = tbl_skp.id_pk', 'right');
        $this->db->join('tbl_unit_kerja', 'tbl_unit_kerja.id_unit = tbl_pk.id_unit', 'right');

        $this->db->where($where);
        $this->db->where($where2);
        return $this->db->get();
  }
  function hitungStatusOpen_unit()
  {
    $this->db->select('*');
    //$where = 'tbl_monitor_rtp.status = "Open"';
    $this->db->from('tbl_monitor_rtp');
    $this->db->join('tbl_sop_risk', 'tbl_sop_risk.id_sop = tbl_monitor_rtp.id_sop', 'right');
    $this->db->join('tbl_skp', 'tbl_skp.id_skp = tbl_sop_risk.id_skp', 'right');
    $this->db->join('tbl_pk', 'tbl_pk.id_pk = tbl_skp.id_pk', 'right');
    $this->db->join('tbl_unit_kerja', 'tbl_unit_kerja.id_unit = tbl_pk.id_unit','right');
    $this->db->join('tbl_unit_org', 'tbl_unit_org.id_unor = tbl_unit_kerja.id_unor', 'right');


    //$this->db->where($where);
    //$this->db->where('tbl_unit_kerja.id_unit', $id);
    return $this->db->get();

  }

  function showSOP($where)
		{

			$where2 = "tbl_sop_risk.nama_sop != ''";

       $this->db->select('*');
       // $this->db->select('(select count(nama_skp) from tbl_skp where tbl_skp.id_pk = tbl_pk.id_pk) as rowpk');
       $this->db->select('(select count(nama_skp) from tbl_skp LEFT JOIN tbl_sop_risk ON tbl_sop_risk.id_skp = tbl_skp.id_skp where tbl_skp.id_pk = tbl_pk.id_pk and tbl_sop_risk.nama_sop != "") as rowpk');
       $this->db->select('(select count(nama_sop) from tbl_sop_risk where tbl_sop_risk.id_skp = tbl_skp.id_skp and tbl_sop_risk.nama_sop != "") as rowskp');

			 $this->db->from('tbl_pk');
       $this->db->join('tbl_skp', 'tbl_skp.id_pk = tbl_pk.id_pk', 'left');
       $this->db->join('tbl_sop_risk', 'tbl_sop_risk.id_skp = tbl_skp.id_skp', 'left');
       // $this->db->join('tbl_pk', 'tbl_pk.id_pk = tbl_skp.id_pk', 'left');
       $this->db->join('tbl_unit_kerja', 'tbl_unit_kerja.id_unit = tbl_pk.id_unit', 'left');


       $this->db->where($where);
			 $this->db->where($where2);
       return $this->db->get();
		}

}
