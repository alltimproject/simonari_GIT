<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_laporan extends CI_Model{

  function selectTahunPK($where)
  {
    $this->db->select('tahun_pk');
    $this->db->from('tbl_pk');
    $this->db->join('tbl_unit_kerja', 'tbl_unit_kerja.id_unit = tbl_pk.id_unit');
    $this->db->where($where);
    $this->db->group_by('tahun_pk');

    return $this->db->get();
  }

  function showDR($where, $where2)
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
    $this->db->where($where2);
    return $this->db->get();
  }

  function showRencana($where, $where2)
  {
      $this->db->select('*');

        $this->db->from('tbl_monitor_rtp');
        $this->db->join('tbl_sop_risk', 'tbl_sop_risk.id_sop = tbl_monitor_rtp.id_sop', 'right');
        $this->db->join('tbl_skp', 'tbl_skp.id_skp = tbl_sop_risk.id_skp', 'left');
        $this->db->join('tbl_pk', 'tbl_pk.id_pk = tbl_skp.id_pk', 'left');
        $this->db->join('tbl_unit_kerja', 'tbl_unit_kerja.id_unit = tbl_pk.id_unit', 'left');

        $this->db->where($where);
        $this->db->where($where2);
        return $this->db->get();
  }

  function showReal($where, $where2)
  {
			$this->db->select('*');
			// $this->db->select('(select count(deskripsi_rtp) from tbl_monitor_rtp where tbl_monitor_rtp.status = "Open") as jumlahopen');
			// $this->db->select('(select count(deskripsi_rtp) from tbl_monitor_rtp where tbl_monitor_rtp.status = "Closed") as jumlahclose');
			// $this->db->select('(select count(hitung) from tbl_sop_risk where tbl_sop_risk.hitung between 1 and 5) as sgtrendah');
			// $this->db->select('(select count(hitung) from tbl_sop_risk where tbl_sop_risk.hitung between 6 and 11) as rendah');
			// $this->db->select('(select count(hitung) from tbl_sop_risk where tbl_sop_risk.hitung between 12 and 15) as sedang');
			// $this->db->select('(select count(hitung) from tbl_sop_risk where tbl_sop_risk.hitung between 16 and 19) as tinggi');
			// $this->db->select('(select count(hitung) from tbl_sop_risk where tbl_sop_risk.hitung between 20 and 25) as sgttinggi');

			// $this->db->select('(select count(deskripsi_cause) from tbl_sop_risk where tbl_sop_risk.deskripsi_cause = "Man") as man');
			// $this->db->select('(select count(deskripsi_cause) from tbl_sop_risk where tbl_sop_risk.deskripsi_cause = "Money") as money');
			// $this->db->select('(select count(deskripsi_cause) from tbl_sop_risk where tbl_sop_risk.deskripsi_cause = "Method") as method');
			// $this->db->select('(select count(deskripsi_cause) from tbl_sop_risk where tbl_sop_risk.deskripsi_cause = "Machine") as machine');
			// $this->db->select('(select count(deskripsi_cause) from tbl_sop_risk where tbl_sop_risk.deskripsi_cause = "Material") as material');

        	$this->db->from('tbl_sop_risk');
        	$this->db->join('tbl_skp','tbl_skp.id_skp = tbl_sop_risk.id_skp', 'left');
          $this->db->join('tbl_pk', 'tbl_pk.id_pk = tbl_skp.id_pk', 'left');
        	$this->db->join('tbl_unit_kerja', 'tbl_unit_kerja.id_unit = tbl_pk.id_unit', 'left');
          $this->db->join('tbl_monitor_rtp', 'tbl_monitor_rtp.id_sop = tbl_sop_risk.id_sop', 'left');
        	$this->db->where($where);
          $this->db->where($where2);

        	return $this->db->get();
		}

}

?>
