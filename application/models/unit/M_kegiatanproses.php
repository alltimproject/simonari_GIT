<?php


	defined('BASEPATH') OR exit('No direct script access allowed');

	class M_kegiatanproses extends CI_Model
	{

    function showPK($where)
    {
      $this->db->select('*');
      $this->db->from('tbl_pk');
      $this->db->join('tbl_unit_kerja', 'tbl_unit_kerja.id_unit = tbl_pk.id_unit');

      $this->db->where($where);

      return $this->db->get();
    }

    function showSKP($where)
		{
       $this->db->select('*');
       //$this->db->select('(select count(nama_skp) from tbl_skp JOIN tbl_sop_risk ON tbl_skp.id_skp = tbl_sop_risk.id_skp WHERE tbl_skp.id_skp = tbl_sop_risk.id_skp) as rowskp');
       $this->db->select('(select count(nama_skp) from tbl_skp where tbl_skp.id_pk = tbl_pk.id_pk) as rowpk');

       // $this->db->from('tbl_sop_risk');
       // $this->db->join('tbl_skp', 'tbl_skp.id_skp = tbl_sop_risk.id_skp', 'right');
       // $this->db->join('tbl_pk', 'tbl_pk.id_pk = tbl_skp.id_pk');
       // $this->db->join('tbl_unit_kerja', 'tbl_unit_kerja.id_unit = tbl_pk.id_unit');
       // $this->db->group_by('tbl_skp.id_skp');

       $this->db->from('tbl_pk');
       $this->db->join('tbl_skp', 'tbl_skp.id_pk = tbl_pk.id_pk', 'left');
       $this->db->join('tbl_unit_kerja', 'tbl_unit_kerja.id_unit = tbl_pk.id_unit', 'left');


       $this->db->where($where);
       return $this->db->get();

		}

		function showSOP($where)
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

    function updateData($data, $where, $table)
    {
      $this->db->where($where);
      return $this->db->update($table, $data);
    }

     function logPK($where)
    {
      $this->db->select('*');
      $this->db->from('tbl_pk');
      $this->db->join('tbl_unit_kerja', 'tbl_unit_kerja.id_unit = tbl_pk.id_unit');

      $this->db->where($where);

      return $this->db->get();
    }

    function logSKP($where)
    {
       $this->db->select('*');
       //$this->db->select('(select count(nama_skp) from tbl_skp JOIN tbl_sop_risk ON tbl_skp.id_skp = tbl_sop_risk.id_skp WHERE tbl_skp.id_skp = tbl_sop_risk.id_skp) as rowskp');
       $this->db->select('(select count(nama_skp) from tbl_skp where tbl_skp.id_pk = tbl_pk.id_pk) as rowpk');

       // $this->db->from('tbl_sop_risk');
       // $this->db->join('tbl_skp', 'tbl_skp.id_skp = tbl_sop_risk.id_skp', 'right');
       // $this->db->join('tbl_pk', 'tbl_pk.id_pk = tbl_skp.id_pk');
       // $this->db->join('tbl_unit_kerja', 'tbl_unit_kerja.id_unit = tbl_pk.id_unit');
       // $this->db->group_by('tbl_skp.id_skp');

       $this->db->from('tbl_pk');
       $this->db->join('tbl_skp', 'tbl_skp.id_pk = tbl_pk.id_pk', 'left');
       $this->db->join('tbl_unit_kerja', 'tbl_unit_kerja.id_unit = tbl_pk.id_unit', 'left');


       $this->db->where($where);
       return $this->db->get();

    }

    function logSOP($where)
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

	}

 ?>
