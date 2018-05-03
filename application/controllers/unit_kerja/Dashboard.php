<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('m_login');
    $this->load->model('unit/m_dashboard');
    $this->load->model('m_core');

    if($this->session->userdata('login') != "ok")
    {
      redirect('login');
    }
  }

  function index()
  {
    $sess_unit = $this->session->userdata('id_unit');

    $where = array(
      'tbl_unit_kerja.id_unit' => $sess_unit
    );

    $data['title'] = "Dashboard | Simonari";
    $data['data'] = $this->m_dashboard->showPenangananRisk($where)->result();
    $data['jmlopen'] = $this->m_dashboard->rowOpen($where)->num_rows();
    $data['jmlclose'] = $this->m_dashboard->rowClose($where)->num_rows();

    $data['sgtrendah'] = $this->m_dashboard->rowSgtRendah($where)->num_rows();
    $data['rendah'] = $this->m_dashboard->rowRendah($where)->num_rows();
    $data['sedang'] = $this->m_dashboard->rowSedang($where)->num_rows();
    $data['tinggi'] = $this->m_dashboard->rowTinggi($where)->num_rows();
    $data['sgttinggi'] = $this->m_dashboard->rowSgtTinggi($where)->num_rows();

    $data['man'] = $this->m_dashboard->rowMan($where)->num_rows();
    $data['money'] = $this->m_dashboard->rowMoney($where)->num_rows();
    $data['method'] = $this->m_dashboard->rowMethod($where)->num_rows();
    $data['machine'] = $this->m_dashboard->rowMachine($where)->num_rows();
    $data['material'] = $this->m_dashboard->rowMaterial($where)->num_rows();

    $this->load->view('unit_kerja/include/header', $data);
    $this->load->view('unit_kerja/dashboard/content_dashboard', $data);
    $this->load->view('unit_kerja/include/footer');
  }

  function tingkat_risiko($tingkat)
  {
      if($tingkat == 5)
      {
        $sess_unit = $this->session->userdata('id_unit');

        $where = array(
          'tbl_unit_kerja.id_unit' => $sess_unit
        );
        $data['jumlah'] = $this->m_dashboard->rowSgtTinggi($where)->num_rows();
        $data['data'] = $this->m_dashboard->rowSgtTinggi($where)->result();

        $this->load->view('unit_kerja/dashboard/v_sangattinggi', $data);
      } elseif($tingkat == 4)
      {
        $sess_unit = $this->session->userdata('id_unit');

        $where = array(
          'tbl_unit_kerja.id_unit' => $sess_unit
        );
        $data['jumlah'] = $this->m_dashboard->rowTinggi($where)->num_rows();
        $data['data'] = $this->m_dashboard->rowTinggi($where)->result();

        $this->load->view('unit_kerja/dashboard/v_tinggi', $data);
      } elseif($tingkat == 3)
      {
        $sess_unit = $this->session->userdata('id_unit');

        $where = array(
          'tbl_unit_kerja.id_unit' => $sess_unit
        );
        $data['jumlah'] = $this->m_dashboard->rowSedang($where)->num_rows();
        $data['data'] = $this->m_dashboard->rowSedang($where)->result();

        $this->load->view('unit_kerja/dashboard/v_sedang', $data);
      } elseif($tingkat == 2)
      {
        $sess_unit = $this->session->userdata('id_unit');

        $where = array(
          'tbl_unit_kerja.id_unit' => $sess_unit
        );
        $data['jumlah'] = $this->m_dashboard->rowRendah($where)->num_rows();
        $data['data'] = $this->m_dashboard->rowRendah($where)->result();

        $this->load->view('unit_kerja/dashboard/v_rendah', $data);
      } elseif($tingkat == 1)
      {
        $sess_unit = $this->session->userdata('id_unit');

        $where = array(
          'tbl_unit_kerja.id_unit' => $sess_unit
        );
        $data['jumlah'] = $this->m_dashboard->rowSgtRendah($where)->num_rows();
        $data['data'] = $this->m_dashboard->rowSgtRendah($where)->result();

        $this->load->view('unit_kerja/dashboard/v_sangatrendah', $data);
      }
  }

  function kategori_risiko($kategori)
  {
    if($kategori == "man")
    {
      $sess_unit = $this->session->userdata('id_unit');

      $where = array(
        'tbl_unit_kerja.id_unit' => $sess_unit
      );
      $data['jumlah'] = $this->m_dashboard->rowMan($where)->num_rows();
      $data['data'] = $this->m_dashboard->rowMan($where)->result();

      $this->load->view('unit_kerja/dashboard/v_man', $data);
    } elseif($kategori == "money")
    {
      $sess_unit = $this->session->userdata('id_unit');

      $where = array(
        'tbl_unit_kerja.id_unit' => $sess_unit
      );
      $data['jumlah'] = $this->m_dashboard->rowMoney($where)->num_rows();
      $data['data'] = $this->m_dashboard->rowMoney($where)->result();

      $this->load->view('unit_kerja/dashboard/v_money', $data);
    } elseif($kategori == "method")
    {
      $sess_unit = $this->session->userdata('id_unit');

      $where = array(
        'tbl_unit_kerja.id_unit' => $sess_unit
      );
      $data['jumlah'] = $this->m_dashboard->rowMethod($where)->num_rows();
      $data['data'] = $this->m_dashboard->rowMethod($where)->result();

      $this->load->view('unit_kerja/dashboard/v_method', $data);
    } elseif($kategori == "machine")
    {
      $sess_unit = $this->session->userdata('id_unit');

      $where = array(
        'tbl_unit_kerja.id_unit' => $sess_unit
      );
      $data['jumlah'] = $this->m_dashboard->rowMachine($where)->num_rows();
      $data['data'] = $this->m_dashboard->rowMachine($where)->result();

      $this->load->view('unit_kerja/dashboard/v_machine', $data);
    } elseif($kategori == "material")
    {
      $sess_unit = $this->session->userdata('id_unit');

      $where = array(
        'tbl_unit_kerja.id_unit' => $sess_unit
      );
      $data['jumlah'] = $this->m_dashboard->rowMaterial($where)->num_rows();
      $data['data'] = $this->m_dashboard->rowMaterial($where)->result();

      $this->load->view('unit_kerja/dashboard/v_material', $data);
    }
  }

  function status_risiko($status)
  {
    if($status == "open")
    {
      $sess_unit = $this->session->userdata('id_unit');

      $where = array(
        'tbl_unit_kerja.id_unit' => $sess_unit
      );
      $data['jumlah'] = $this->m_dashboard->rowOpen($where)->num_rows();
      $data['data'] = $this->m_dashboard->rowOpen($where)->result();

      $this->load->view('unit_kerja/dashboard/v_open', $data);
    } elseif($status == "close")
    {
      $sess_unit = $this->session->userdata('id_unit');

      $where = array(
        'tbl_unit_kerja.id_unit' => $sess_unit
      );
      $data['jumlah'] = $this->m_dashboard->rowClose($where)->num_rows();
      $data['data'] = $this->m_dashboard->rowClose($where)->result();

      $this->load->view('unit_kerja/dashboard/v_close', $data);
    }
  }

}
