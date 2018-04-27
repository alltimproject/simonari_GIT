<?php


	defined('BASEPATH') OR exit('No direct script access allowed');

	class M_manajemenrisiko extends CI_Model
	{
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
					$this->db->order_by('tbl_monitor_rtp.plan_mulai ASC');
       		return $this->db->get();
		}

		function showRealisasi($where)
		{
			$this->db->select('*');

			//$where2 = "tbl_monitor_rtp.status = 'Open'";

			$this->db->from('tbl_monitor_rtp');
			$this->db->join('tbl_sop_risk', 'tbl_sop_risk.id_sop = tbl_monitor_rtp.id_sop', 'left');
       		$this->db->join('tbl_skp', 'tbl_skp.id_skp = tbl_sop_risk.id_skp', 'left');
       		$this->db->join('tbl_pk', 'tbl_pk.id_pk = tbl_skp.id_pk', 'left');
       		$this->db->join('tbl_unit_kerja', 'tbl_unit_kerja.id_unit = tbl_pk.id_unit', 'left');

       		$this->db->where($where);
       		$this->db->order_by('tbl_monitor_rtp.real_mulai ASC');
       		return $this->db->get();
		}

		function showpegawai($session_nip)
		{
			return $this->db->get_where('tbl_pegawai', $session_nip);
		}
	}

 ?>
