<?php
defined('BASEPATH') OR exit('No direct script access allowed');


	class Error extends CI_Controller
	{

		public function index()
		{
			$data['title'] = "Halaman Tidak Di Temukan";
			$this->load->view('unit_kerja/include/header', $data);
			$this->load->view('error');
			$this->load->view('unit_kerja/include/footer');
		}
	}
?>
