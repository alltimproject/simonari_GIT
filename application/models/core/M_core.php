<?php


	defined('BASEPATH') OR exit('No direct script access allowed');

	class M_core extends CI_Model
	{
		function showPeg($where)
		{
			$this->db->select('*');
        	$this->db->from('tbl_pegawai');
        	$this->db->join('tbl_jabatan','tbl_jabatan.id_jabatan = tbl_pegawai.id_jabatan');
        	$this->db->join('tbl_unit_kerja', 'tbl_unit_kerja.id_unit = tbl_pegawai.id_unit');

        	$this->db->where($where);

        	return $this->db->get();

			//$q = $this->db->query("SELECT a.nip, a.nama_pegawai, b.id_jabatan, b.nama_jabatan, c.id_unit, c.nama_unit FROM tbl_pegawai a LEFT JOIN tbl_jabatan b ON b.id_jabatan = a.id_jabatan LEFT JOIN tbl_unit_kerja c ON c.id_unit = a.id_unit WHERE a.id_unor = '$id_unor'");

			//return $q;
		}

		function saveData($table, $result = array())
		{
			$total_array = count($result);

			if($total_array != 0)
			{
				return $this->db->insert_batch($table, $result);
			}
		}

		function showData($table)
		{
			return $this->db->get($table);
		}

		function showWhere($table, $where)
		{
			return $this->db->get_where($table, $where);
		}

		function updateData($data, $where, $table)
		{
			$this->db->where($where);
			return $this->db->update($table, $data);
		}

		function insertData($table, $data)
		{
			return $this->db->insert($table, $data);
		}
		function delete($where, $table)
		{
			$this->db->where($where);
			$this->db->delete($table);
		}
	}

 ?>
