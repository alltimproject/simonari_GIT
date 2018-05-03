<?php


	defined('BASEPATH') OR exit('No direct script access allowed');

	class M_organisasi extends CI_Model
	{
		function showPegOrg($where)
		{
					$this->db->select('*');
        	$this->db->from('tbl_pegawai');
        	$this->db->join('tbl_jabatan','tbl_jabatan.id_jabatan = tbl_pegawai.id_jabatan');
        	$this->db->join('tbl_unit_kerja', 'tbl_unit_kerja.id_unit = tbl_pegawai.id_unit');
        	$this->db->join('tbl_unit_org', 'tbl_unit_org.id_unor = tbl_pegawai.id_unor');

        	$this->db->where($where);

        	return $this->db->get();

			//$q = $this->db->query("SELECT a.nip, a.nama_pegawai, b.id_jabatan, b.nama_jabatan, c.id_unit, c.nama_unit FROM tbl_pegawai a LEFT JOIN tbl_jabatan b ON b.id_jabatan = a.id_jabatan LEFT JOIN tbl_unit_kerja c ON c.id_unit = a.id_unit WHERE a.id_unor = '$id_unor'");

			//return $q;
		}



		function showPegUnit($where)
		{
			$this->db->select('*');
			$this->db->from('tbl_pegawai');
			$this->db->join('tbl_jabatan', 'tbl_jabatan.id_jabatan = tbl_pegawai.id_jabatan');
			$this->db->join('tbl_unit_kerja', 'tbl_unit_kerja.id_unit = tbl_pegawai.id_unit');

			$this->db->where($where);

			return $this->db->get();
		}

		function oldPassword($where, $where2)
		{
			$this->db->select('password');
			$this->db->from('tbl_pegawai');
			$this->db->where($where);
			$this->db->where($where2);
			return $this->db->get();
		}

		function updatepassword($pass_baru, $nip)
		{
			$query = $this->db->query("UPDATE tbl_pegawai SET password='$pass_baru' WHERE nip='$nip' ");
			return $query;
		}

		function upload()
		{
			$config['upload_path']   = './upload/';
			$config['allowed_types'] = 'jpg|png|jpeg|zip|rar';
			$config['max_size']      = '3048';
			$config['remove_space']  = TRUE;

			$this->load->library('upload', $config);

			if($this->upload->do_upload('foto') ){
			$return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
			return $return;
			}else{
      			$return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
		  		return $return;
			}
		}

		function saveupload($upload)
		{
			$data = array(
				'foto' => $upload['file']['file_name']
			);
			$where = array(
				'nip' => $this->session->userdata('nip')
			);

			$this->db->where($where);
			$this->db->update('tbl_pegawai', $data);

		}
		function showpegawai($session_nip)
		{
			return $this->db->get_where('tbl_pegawai', $session_nip);
		}

	}

 ?>
