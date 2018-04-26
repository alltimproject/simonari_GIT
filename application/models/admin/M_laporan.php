<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_laporan extends CI_Model{

  function showDR($where = NULL)
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

    if ($where != NULL) {
        $this->db->where($where);
    }

    return $this->db->get();
  }

  function showRencana($where = NULL)
  {
        $this->db->select('*');

        $this->db->from('tbl_monitor_rtp');
        $this->db->join('tbl_sop_risk', 'tbl_sop_risk.id_sop = tbl_monitor_rtp.id_sop', 'right');
        $this->db->join('tbl_skp', 'tbl_skp.id_skp = tbl_sop_risk.id_skp', 'left');
        $this->db->join('tbl_pk', 'tbl_pk.id_pk = tbl_skp.id_pk', 'left');
        $this->db->join('tbl_unit_kerja', 'tbl_unit_kerja.id_unit = tbl_pk.id_unit', 'left');

        if ($where != NULL) {
            $this->db->where($where);
        }
        return $this->db->get();
  }

  function showReal($where = NULL)
  {
			    $this->db->select('*');

        	$this->db->from('tbl_sop_risk');
        	$this->db->join('tbl_skp','tbl_skp.id_skp = tbl_sop_risk.id_skp', 'left');
          $this->db->join('tbl_pk', 'tbl_pk.id_pk = tbl_skp.id_pk', 'left');
        	$this->db->join('tbl_unit_kerja', 'tbl_unit_kerja.id_unit = tbl_pk.id_unit', 'left');
          $this->db->join('tbl_monitor_rtp', 'tbl_monitor_rtp.id_sop = tbl_sop_risk.id_sop', 'left');

          if ($where != NULL) {
              $this->db->where($where);
          }
        	return $this->db->get();
		}
}
