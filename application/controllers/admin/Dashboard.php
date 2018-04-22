<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('admin/m_dashboard');


    if($this->session->userdata('status') != 'loginactive'){
      redirect('admin/login');
    }
  }

  function index()
  {
    $data['title'] = 'Dashboard Admin | Simonari';
    $this->load->view('admin/include/header', $data);

    $data['jmlopen'] =  $this->m_dashboard->rowOpen()->num_rows();
    $data['jmlclose'] = $this->m_dashboard->rowClose()->num_rows();

    $data['sgtrendah'] = $this->m_dashboard->rowSgtRendah()->num_rows();
    $data['rendah'] = $this->m_dashboard->rowRendah()->num_rows();
    $data['sedang'] = $this->m_dashboard->rowSedang()->num_rows();
    $data['tinggi'] = $this->m_dashboard->rowTinggi()->num_rows();
    $data['sgttinggi'] = $this->m_dashboard->rowSgtTinggi()->num_rows();

    $data['man'] = $this->m_dashboard->rowMan()->num_rows();
    $data['money'] = $this->m_dashboard->rowMoney()->num_rows();
    $data['method'] = $this->m_dashboard->rowMethod()->num_rows();
    $data['machine'] = $this->m_dashboard->rowMachine()->num_rows();
    $data['material'] = $this->m_dashboard->rowMaterial()->num_rows();


    $data['data'] = $this->m_dashboard->showPenangananRisk()->result();
    $this->load->view('admin/v_dashboard', $data);

    $this->load->view('admin/include/footer');
  }

}
