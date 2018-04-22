<?php


	defined('BASEPATH') OR exit('No direct script access allowed');

	class M_dashboard extends CI_Model
	{
		function showPenangananRisk($where)
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

        	return $this->db->get();
		}

		function rowOpen($where)
		{
			$where2 = array(
				'tbl_monitor_rtp.status' => 'Open'
			);

			$this->db->select('*');
			$this->db->from('tbl_monitor_rtp');
			$this->db->join('tbl_sop_risk', 'tbl_sop_risk.id_sop = tbl_monitor_rtp.id_sop', 'left');
        	$this->db->join('tbl_skp','tbl_skp.id_skp = tbl_sop_risk.id_skp', 'left');
          	$this->db->join('tbl_pk', 'tbl_pk.id_pk = tbl_skp.id_pk', 'left');
        	$this->db->join('tbl_unit_kerja', 'tbl_unit_kerja.id_unit = tbl_pk.id_unit', 'left');

        	$this->db->where($where);
        	$this->db->where($where2);

        	return $this->db->get();
		}

		function rowClose($where)
		{
			$where2 = array(
				'tbl_monitor_rtp.status' => 'Close'
			);

			$this->db->select('*');
			$this->db->from('tbl_monitor_rtp');
			$this->db->join('tbl_sop_risk', 'tbl_sop_risk.id_sop = tbl_monitor_rtp.id_sop', 'left');
        	$this->db->join('tbl_skp','tbl_skp.id_skp = tbl_sop_risk.id_skp', 'left');
          	$this->db->join('tbl_pk', 'tbl_pk.id_pk = tbl_skp.id_pk', 'left');
        	$this->db->join('tbl_unit_kerja', 'tbl_unit_kerja.id_unit = tbl_pk.id_unit', 'left');

        	$this->db->where($where);
        	$this->db->where($where2);

        	return $this->db->get();
		}

		function rowSgtRendah($where)
		{
			$where2 = 'tbl_sop_risk.hitung BETWEEN 1 AND 5';
			$where3 = 'tbl_sop_risk.dampak != 5';

			$this->db->select('*');
			$this->db->from('tbl_sop_risk');
        	$this->db->join('tbl_skp','tbl_skp.id_skp = tbl_sop_risk.id_skp', 'left');
          	$this->db->join('tbl_pk', 'tbl_pk.id_pk = tbl_skp.id_pk', 'left');
        	$this->db->join('tbl_unit_kerja', 'tbl_unit_kerja.id_unit = tbl_pk.id_unit', 'left');

        	$this->db->where($where);
        	$this->db->where($where2);
        	$this->db->where($where3);


        	return $this->db->get();
		}

		function rowRendah($where)
		{
			$where2 = 'tbl_sop_risk.hitung BETWEEN 6 AND 11';
			$where3 = 'tbl_sop_risk.dampak != 5';

			$this->db->select('*');
			$this->db->from('tbl_sop_risk');
        	$this->db->join('tbl_skp','tbl_skp.id_skp = tbl_sop_risk.id_skp', 'left');
          	$this->db->join('tbl_pk', 'tbl_pk.id_pk = tbl_skp.id_pk', 'left');
        	$this->db->join('tbl_unit_kerja', 'tbl_unit_kerja.id_unit = tbl_pk.id_unit', 'left');

        	$this->db->where($where);
        	$this->db->where($where2);
        	$this->db->where($where3);

        	return $this->db->get();
		}

		function rowSedang($where)
		{
			$where2 = 'tbl_sop_risk.hitung BETWEEN 12 AND 15';
			$where3 = 'tbl_sop_risk.dampak != 5';

			$this->db->select('*');
			$this->db->from('tbl_sop_risk');
        	$this->db->join('tbl_skp','tbl_skp.id_skp = tbl_sop_risk.id_skp', 'left');
          	$this->db->join('tbl_pk', 'tbl_pk.id_pk = tbl_skp.id_pk', 'left');
        	$this->db->join('tbl_unit_kerja', 'tbl_unit_kerja.id_unit = tbl_pk.id_unit', 'left');

        	$this->db->where($where);
        	$this->db->where($where2);
        	$this->db->where($where3);

        	return $this->db->get();
		}

		function rowTinggi($where)
		{
			$where2 = 'tbl_sop_risk.hitung BETWEEN 16 AND 19';
			$where3 = 'tbl_sop_risk.dampak != 5';

			$this->db->select('*');
			$this->db->from('tbl_sop_risk');
        	$this->db->join('tbl_skp','tbl_skp.id_skp = tbl_sop_risk.id_skp', 'left');
          	$this->db->join('tbl_pk', 'tbl_pk.id_pk = tbl_skp.id_pk', 'left');
        	$this->db->join('tbl_unit_kerja', 'tbl_unit_kerja.id_unit = tbl_pk.id_unit', 'left');

        	$this->db->where($where);
        	$this->db->where($where2);
        	$this->db->where($where3);

        	return $this->db->get();
		}

		function rowSgtTinggi($where)
		{
			$where2 = 'tbl_sop_risk.dampak = 5 OR tbl_sop_risk.hitung BETWEEN 20 AND 25';

			$this->db->select('*');
			$this->db->from('tbl_sop_risk');
        	$this->db->join('tbl_skp','tbl_skp.id_skp = tbl_sop_risk.id_skp', 'left');
          	$this->db->join('tbl_pk', 'tbl_pk.id_pk = tbl_skp.id_pk', 'left');
        	$this->db->join('tbl_unit_kerja', 'tbl_unit_kerja.id_unit = tbl_pk.id_unit', 'left');

        	$this->db->where($where);
        	$this->db->where($where2);

        	return $this->db->get();
		}

		function rowMan($where)
		{
			$where2 = array(
				'tbl_sop_risk.kategori_cause' => 'Man'
			);

			$this->db->select('*');
			$this->db->from('tbl_sop_risk');
        	$this->db->join('tbl_skp','tbl_skp.id_skp = tbl_sop_risk.id_skp', 'left');
          	$this->db->join('tbl_pk', 'tbl_pk.id_pk = tbl_skp.id_pk', 'left');
        	$this->db->join('tbl_unit_kerja', 'tbl_unit_kerja.id_unit = tbl_pk.id_unit', 'left');

        	$this->db->where($where);
        	$this->db->where($where2);

        	return $this->db->get();
		}

		function rowMoney($where)
		{
			$where2 = array(
				'tbl_sop_risk.kategori_cause' => 'Money'
			);

			$this->db->select('*');
			$this->db->from('tbl_sop_risk');
        	$this->db->join('tbl_skp','tbl_skp.id_skp = tbl_sop_risk.id_skp', 'left');
          	$this->db->join('tbl_pk', 'tbl_pk.id_pk = tbl_skp.id_pk', 'left');
        	$this->db->join('tbl_unit_kerja', 'tbl_unit_kerja.id_unit = tbl_pk.id_unit', 'left');

        	$this->db->where($where);
        	$this->db->where($where2);

        	return $this->db->get();
		}

		function rowMethod($where)
		{
			$where2 = array(
				'tbl_sop_risk.kategori_cause' => 'Method'
			);

			$this->db->select('*');
			$this->db->from('tbl_sop_risk');
        	$this->db->join('tbl_skp','tbl_skp.id_skp = tbl_sop_risk.id_skp', 'left');
          	$this->db->join('tbl_pk', 'tbl_pk.id_pk = tbl_skp.id_pk', 'left');
        	$this->db->join('tbl_unit_kerja', 'tbl_unit_kerja.id_unit = tbl_pk.id_unit', 'left');

        	$this->db->where($where);
        	$this->db->where($where2);

        	return $this->db->get();
		}

		function rowMachine($where)
		{
			$where2 = array(
				'tbl_sop_risk.kategori_cause' => 'Machine'
			);

			$this->db->select('*');
			$this->db->from('tbl_sop_risk');
        	$this->db->join('tbl_skp','tbl_skp.id_skp = tbl_sop_risk.id_skp', 'left');
          	$this->db->join('tbl_pk', 'tbl_pk.id_pk = tbl_skp.id_pk', 'left');
        	$this->db->join('tbl_unit_kerja', 'tbl_unit_kerja.id_unit = tbl_pk.id_unit', 'left');

        	$this->db->where($where);
        	$this->db->where($where2);

        	return $this->db->get();
		}

		function rowMaterial($where)
		{
			$where2 = array(
				'tbl_sop_risk.kategori_cause' => 'Material'
			);

			$this->db->select('*');
			$this->db->from('tbl_sop_risk');
        	$this->db->join('tbl_skp','tbl_skp.id_skp = tbl_sop_risk.id_skp', 'left');
          	$this->db->join('tbl_pk', 'tbl_pk.id_pk = tbl_skp.id_pk', 'left');
        	$this->db->join('tbl_unit_kerja', 'tbl_unit_kerja.id_unit = tbl_pk.id_unit', 'left');

        	$this->db->where($where);
        	$this->db->where($where2);

        	return $this->db->get();
		}
		

	}

 ?>
