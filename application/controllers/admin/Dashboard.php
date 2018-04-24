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

  function getSangatTinggi()
  {

     $jumlah =   $this->m_dashboard->rowSgtTinggi()->num_rows();

      echo '<div class="box w3-animate-bottom">';
      echo '<div class="box-header">
          <div class="pull-right"><a href='.base_url('admin/Dashboard').' class="hideform btn btn-box-tool"><i class="fa fa-minus">Tutup</i></a></div>
            <div class="box-title">
              <div class="col-md-12 col-sm-6 col-xs-12">
                <div class="info-box">
                  <span class="info-box-icon bg-red">'.$jumlah.'</span>
                  <div class="info-box-content">
                    <span class="info-box-text"><h4>Tingkat Risiko Sangat Tinggi</h4></span>
                  </div>
                </div>
              </div>
            </div>
            </div>
            <div class="box-body">
            <div class="table-responsive">';
     echo '  <table id="pernyataanRisk" class="table table-responsive table-striped table-hover table-bordered">
             <thead>
               <tr class="bg-red">
                 <th>No</th>
                 <th>Pernyataan Risiko</th>
                 <th>Penyebab</th>
                 <th>Kategori</th>
                 <th>Kemungkinan</th>
                 <th>Dampak</th>
                 <th>Tingkat</th>
                 <th> Rencana Penanganan</th>
                 <th>Mulai</th>
                 <th>Selesai</th>
                 <th>PIC</th>
                 <th>Status</th>
               </tr>
               </thead>
               <tbody>';
                    $no = 1;
                   foreach($this->m_dashboard->rowSgtTinggi()->result() as $key ){
                     echo '<tr>';
                     echo '<td> '.$no++.' </td>';
                     echo '<td> '.$key->nama_sop.' </td>';
                     echo '<td> '.$key->deskripsi_cause.' </td>';
                     echo '<td> '.$key->kategori_cause.' </td>';
                     echo '<td> '.$key->frekuensi.' </td>';
                     echo '<td> '.$key->dampak.' </td>';
                     echo '<td> '.$key->hitung.' </td>';
                     echo '<td> '.$key->deskripsi_rtp.' </td>';
                     echo '<td> '.$key->plan_mulai.' </td>';
                     echo '<td> '.$key->plan_selesai.' </td>';
                     echo '<td> '.$key->pic.' </td>';
                     echo '<td> '.$key->status.' </td>';
                     echo '</tr>';
                   }
      echo '</tbody>

          </table>
          </div>
        </div>
      </div>';

  }//end function

  function getTinggi()
  {

     $jumlah =   $this->m_dashboard->rowTinggi()->num_rows();

      echo '<div class="box w3-animate-bottom">';
      echo '<div class="box-header">
          <div class="pull-right"><a href='.base_url('admin/Dashboard').' class="hideform btn btn-box-tool"><i class="fa fa-minus">Tutup</i></a></div>
            <div class="box-title">
              <div class="col-md-12 col-sm-6 col-xs-12">
                <div class="info-box">
                  <span class="info-box-icon bg-orange">'.$jumlah.'</span>
                  <div class="info-box-content">
                    <span class="info-box-text"><h4>Tingkat Risiko Tinggi</h4></span>
                  </div>
                </div>
              </div>
            </div>
            </div>
            <div class="box-body">
            <div class="table-responsive">';
     echo '  <table id="pernyataanRisk" class="table table-responsive table-striped table-hover table-bordered">
             <thead>
               <tr class="bg-orange">
                 <th>No</th>
                 <th>Pernyataan Risiko</th>
                 <th>Penyebab</th>
                 <th>Kategori</th>
                 <th>Kemungkinan</th>
                 <th>Dampak</th>
                 <th>Tingkat</th>
                 <th> Rencana Penanganan</th>
                 <th>Mulai</th>
                 <th>Selesai</th>
                 <th>PIC</th>
                 <th>Status</th>
               </tr>
               </thead>
               <tbody>';
                    $no = 1;
                   foreach($this->m_dashboard->rowTinggi()->result() as $key ){
                     echo '<tr>';
                     echo '<td> '.$no++.' </td>';
                     echo '<td> '.$key->nama_sop.' </td>';
                     echo '<td> '.$key->deskripsi_cause.' </td>';
                     echo '<td> '.$key->kategori_cause.' </td>';
                     echo '<td> '.$key->frekuensi.' </td>';
                     echo '<td> '.$key->dampak.' </td>';
                     echo '<td> '.$key->hitung.' </td>';
                     echo '<td> '.$key->deskripsi_rtp.' </td>';
                     echo '<td> '.$key->plan_mulai.' </td>';
                     echo '<td> '.$key->plan_selesai.' </td>';
                     echo '<td> '.$key->pic.' </td>';
                     echo '<td> '.$key->status.' </td>';
                     echo '</tr>';
                   }
      echo '</tbody>

          </table>
          </div>
        </div>
      </div>';

  }//end function

  function getSedang()
  {

     $jumlah =   $this->m_dashboard->rowSedang()->num_rows();

      echo '<div class="box w3-animate-bottom">';
      echo '<div class="box-header">
          <div class="pull-right"><a href='.base_url('admin/Dashboard').' class="hideform btn btn-box-tool"><i class="fa fa-minus">Tutup</i></a></div>
            <div class="box-title">
              <div class="col-md-12 col-sm-6 col-xs-12">
                <div class="info-box">
                  <span class="info-box-icon w3-yellow">'.$jumlah.'</span>
                  <div class="info-box-content">
                    <span class="info-box-text"><h4>Tingkat Risiko Sedang</h4></span>
                  </div>
                </div>
              </div>
            </div>
            </div>
            <div class="box-body">
            <div class="table-responsive">';
     echo '  <table id="pernyataanRisk" class="table table-responsive table-striped table-hover table-bordered">
             <thead>
               <tr class="w3-yellow">
                 <th>No</th>
                 <th>Pernyataan Risiko</th>
                 <th>Penyebab</th>
                 <th>Kategori</th>
                 <th>Kemungkinan</th>
                 <th>Dampak</th>
                 <th>Tingkat</th>
                 <th> Rencana Penanganan</th>
                 <th>Mulai</th>
                 <th>Selesai</th>
                 <th>PIC</th>
                 <th>Status</th>
               </tr>
               </thead>
               <tbody>';
                    $no = 1;
                   foreach($this->m_dashboard->rowSedang()->result() as $key ){
                     echo '<tr>';
                     echo '<td> '.$no++.' </td>';
                     echo '<td> '.$key->nama_sop.' </td>';
                     echo '<td> '.$key->deskripsi_cause.' </td>';
                     echo '<td> '.$key->kategori_cause.' </td>';
                     echo '<td> '.$key->frekuensi.' </td>';
                     echo '<td> '.$key->dampak.' </td>';
                     echo '<td> '.$key->hitung.' </td>';
                     echo '<td> '.$key->deskripsi_rtp.' </td>';
                     echo '<td> '.$key->plan_mulai.' </td>';
                     echo '<td> '.$key->plan_selesai.' </td>';
                     echo '<td> '.$key->pic.' </td>';
                     echo '<td> '.$key->status.' </td>';
                     echo '</tr>';
                   }
      echo '</tbody>

          </table>
          </div>
        </div>
      </div>';

  }//end function

  function getRendah()
  {

     $jumlah =   $this->m_dashboard->rowRendah()->num_rows();

      echo '<div class="box w3-animate-bottom">';
      echo '<div class="box-header">
          <div class="pull-right"><a href='.base_url('admin/Dashboard').' class="hideform btn btn-box-tool"><i class="fa fa-minus">Tutup</i></a></div>
            <div class="box-title">
              <div class="col-md-12 col-sm-6 col-xs-12">
                <div class="info-box">
                  <span class="info-box-icon bg-green">'.$jumlah.'</span>
                  <div class="info-box-content">
                    <span class="info-box-text"><h4>Tingkat Risiko Rendah</h4></span>
                  </div>
                </div>
              </div>
            </div>
            </div>
            <div class="box-body">
            <div class="table-responsive">';
     echo '  <table id="pernyataanRisk" class="table table-responsive table-striped table-hover table-bordered">
             <thead>
               <tr class="bg-green">
                 <th>No</th>
                 <th>Pernyataan Risiko</th>
                 <th>Penyebab</th>
                 <th>Kategori</th>
                 <th>Kemungkinan</th>
                 <th>Dampak</th>
                 <th>Tingkat</th>
                 <th> Rencana Penanganan</th>
                 <th>Mulai</th>
                 <th>Selesai</th>
                 <th>PIC</th>
                 <th>Status</th>
               </tr>
               </thead>
               <tbody>';
                    $no = 1;
                   foreach($this->m_dashboard->rowRendah()->result() as $key ){
                     echo '<tr>';
                     echo '<td> '.$no++.' </td>';
                     echo '<td> '.$key->nama_sop.' </td>';
                     echo '<td> '.$key->deskripsi_cause.' </td>';
                     echo '<td> '.$key->kategori_cause.' </td>';
                     echo '<td> '.$key->frekuensi.' </td>';
                     echo '<td> '.$key->dampak.' </td>';
                     echo '<td> '.$key->hitung.' </td>';
                     echo '<td> '.$key->deskripsi_rtp.' </td>';
                     echo '<td> '.$key->plan_mulai.' </td>';
                     echo '<td> '.$key->plan_selesai.' </td>';
                     echo '<td> '.$key->pic.' </td>';
                     echo '<td> '.$key->status.' </td>';
                     echo '</tr>';
                   }
      echo '</tbody>

          </table>
          </div>
        </div>
      </div>';

  }//end function

  function getSangatRendah()
  {

     $jumlah =   $this->m_dashboard->rowSgtRendah()->num_rows();

      echo '<div class="box w3-animate-bottom">';
      echo '<div class="box-header">
          <div class="pull-right"><a href='.base_url('admin/Dashboard').' class="hideform btn btn-box-tool"><i class="fa fa-minus">Tutup</i></a></div>
            <div class="box-title">
              <div class="col-md-12 col-sm-6 col-xs-12">
                <div class="info-box">
                  <span class="info-box-icon bg-blue">'.$jumlah.'</span>
                  <div class="info-box-content">
                    <span class="info-box-text"><h4>Tingkat Risiko Sangat Rendah</h4></span>
                  </div>
                </div>
              </div>
            </div>
            </div>
            <div class="box-body">
            <div class="table-responsive">';
     echo '  <table id="pernyataanRisk" class="table table-responsive table-striped table-hover table-bordered">
             <thead>
               <tr class="bg-blue">
                 <th>No</th>
                 <th>Pernyataan Risiko</th>
                 <th>Penyebab</th>
                 <th>Kategori</th>
                 <th>Kemungkinan</th>
                 <th>Dampak</th>
                 <th>Tingkat</th>
                 <th> Rencana Penanganan</th>
                 <th>Mulai</th>
                 <th>Selesai</th>
                 <th>PIC</th>
                 <th>Status</th>
               </tr>
               </thead>
               <tbody>';
                    $no = 1;
                   foreach($this->m_dashboard->rowSgtRendah()->result() as $key ){
                     echo '<tr>';
                     echo '<td> '.$no++.' </td>';
                     echo '<td> '.$key->nama_sop.' </td>';
                     echo '<td> '.$key->deskripsi_cause.' </td>';
                     echo '<td> '.$key->kategori_cause.' </td>';
                     echo '<td> '.$key->frekuensi.' </td>';
                     echo '<td> '.$key->dampak.' </td>';
                     echo '<td> '.$key->hitung.' </td>';
                     echo '<td> '.$key->deskripsi_rtp.' </td>';
                     echo '<td> '.$key->plan_mulai.' </td>';
                     echo '<td> '.$key->plan_selesai.' </td>';
                     echo '<td> '.$key->pic.' </td>';
                     echo '<td> '.$key->status.' </td>';
                     echo '</tr>';
                   }
      echo '</tbody>

          </table>
          </div>
        </div>
      </div>';

  }//end function



}
