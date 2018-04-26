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

    $data['datasgttinggi'] = $this->m_dashboard->rowSgtTinggi($where)->result();



    $data['man'] = $this->m_dashboard->rowMan($where)->num_rows();
    $data['money'] = $this->m_dashboard->rowMoney($where)->num_rows();
    $data['method'] = $this->m_dashboard->rowMethod($where)->num_rows();
    $data['machine'] = $this->m_dashboard->rowMachine($where)->num_rows();
    $data['material'] = $this->m_dashboard->rowMaterial($where)->num_rows();

    $this->load->view('unit_kerja/include/header', $data);
    $this->load->view('unit_kerja/v_dashboard', $data);
    $this->load->view('unit_kerja/include/footer');
  }


  function getSangatTinggi()
  {
    $sess_unit = $this->session->userdata('id_unit');

    $where = array(
      'tbl_unit_kerja.id_unit' => $sess_unit
    );
     $jumlah =   $this->m_dashboard->rowSgtTinggi($where)->num_rows();

      echo '<div class="box w3-animate-bottom">';
      echo '<div class="box-header">
          <div class="pull-right"><a href='.base_url('unit_kerja/Dashboard').' class="hideform btn btn-box-tool"><i class="fa fa-minus">Tutup</i></a></div>
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
                   foreach($this->m_dashboard->rowSgtTinggi($where)->result() as $key ){
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
    $sess_unit = $this->session->userdata('id_unit');

    $where = array(
      'tbl_unit_kerja.id_unit' => $sess_unit
    );
     $jumlah =   $this->m_dashboard->rowSgtRendah($where)->num_rows();



      echo '<div class="box w3-animate-bottom">';
      echo '<div class="box-header">
          <div class="pull-right"><a href='.base_url('unit_kerja/Dashboard').' class="hideform btn btn-box-tool"><i class="fa fa-minus">Tutup</i></a></div>

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
     echo '  <table  class="table table-responsive table-striped table-hover table-bordered">
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
                   foreach($this->m_dashboard->rowSgtRendah($where)->result() as $key ){
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
    $sess_unit = $this->session->userdata('id_unit');

    $where = array(
      'tbl_unit_kerja.id_unit' => $sess_unit
    );
     $jumlah =   $this->m_dashboard->rowRendah($where)->num_rows();



      echo '<div class="box w3-animate-bottom">';
      echo '<div class="box-header">
      <div class="pull-right"><a href='.base_url('unit_kerja/Dashboard').' class="hideform btn btn-box-tool"><i class="fa fa-minus">Tutup</i></a></div>

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
     echo '  <table  class="table table-responsive table-striped table-hover table-bordered">
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
                   foreach($this->m_dashboard->rowRendah($where)->result() as $key ){
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
    $sess_unit = $this->session->userdata('id_unit');

    $where = array(
      'tbl_unit_kerja.id_unit' => $sess_unit
    );
     $jumlah =   $this->m_dashboard->rowSedang($where)->num_rows();



      echo '<div class="box w3-animate-bottom">';
      echo '<div class="box-header">
      <div class="pull-right"><a href='.base_url('unit_kerja/Dashboard').' class="hideform btn btn-box-tool"><i class="fa fa-minus">Tutup</i></a></div>

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
     echo '  <table  class="table table-responsive table-striped table-hover table-bordered">
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
                   foreach($this->m_dashboard->rowSedang($where)->result() as $key ){
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
    $sess_unit = $this->session->userdata('id_unit');

    $where = array(
      'tbl_unit_kerja.id_unit' => $sess_unit
    );
     $jumlah =   $this->m_dashboard->rowTinggi($where)->num_rows();



      echo '<div class="box w3-animate-bottom">';
      echo '<div class="box-header">
      <div class="pull-right"><a href='.base_url('unit_kerja/Dashboard').' class="hideform btn btn-box-tool"><i class="fa fa-minus">Tutup</i></a></div>

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
     echo '  <table  class="table table-responsive table-striped table-hover table-bordered">
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
                   foreach($this->m_dashboard->rowTinggi($where)->result() as $key ){
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


  function getOpen()
  {
    $sess_unit = $this->session->userdata('id_unit');

    $where = array(
      'tbl_unit_kerja.id_unit' => $sess_unit
    );
     $jumlah =   $this->m_dashboard->rowOpen($where)->num_rows();



      echo '<div class="box w3-animate-bottom">';
      echo '<div class="box-header">
      <div class="pull-right"><a href='.base_url('unit_kerja/Dashboard').' class="hideform btn btn-box-tool"><i class="fa fa-minus">Tutup</i></a></div>

            <div class="box-title">
              <div class="col-md-12 col-sm-6 col-xs-12">
                <div class="info-box">
                  <span class="info-box-icon bg-green">'.$jumlah.'</span>
                  <div class="info-box-content">
                    <span class="info-box-text"><h4>Status Penanganan - OPEN</h4></span>
                  </div>
                </div>
              </div>
            </div>
            </div>
            <div class="box-body">
            <div class="table-responsive">';
     echo '  <table  class="table table-responsive table-striped table-hover table-bordered">
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
                   foreach($this->m_dashboard->rowOpen($where)->result() as $key ){
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

  function getClose()
  {
    $sess_unit = $this->session->userdata('id_unit');

    $where = array(
      'tbl_unit_kerja.id_unit' => $sess_unit
    );
     $jumlah =   $this->m_dashboard->rowClose($where)->num_rows();

      echo '<div class="box w3-animate-bottom">';
      echo '<div class="box-header">
      <div class="pull-right"><a href='.base_url('unit_kerja/Dashboard').' class="hideform btn btn-box-tool"><i class="fa fa-minus">Tutup</i></a></div>

            <div class="box-title">
              <div class="col-md-12 col-sm-6 col-xs-12">
                <div class="info-box">
                  <span class="info-box-icon bg-red">'.$jumlah.'</span>
                  <div class="info-box-content">
                    <span class="info-box-text"><h4>Status Penanganan - CLOSE</h4></span>
                  </div>
                </div>
              </div>
            </div>
            </div>
            <div class="box-body">
            <div class="table-responsive">';
     echo '  <table  class="table table-responsive table-striped table-hover table-bordered">
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
                   foreach($this->m_dashboard->rowClose($where)->result() as $key ){
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

  function getMan()
  {
    $sess_unit = $this->session->userdata('id_unit');

    $where = array(
      'tbl_unit_kerja.id_unit' => $sess_unit
    );
     $jumlah =   $this->m_dashboard->rowMan($where)->num_rows();

      echo '<div class="box w3-animate-bottom">';
      echo '<div class="box-header">
      <div class="pull-right"><a href='.base_url('unit_kerja/Dashboard').' class="hideform btn btn-box-tool"><i class="fa fa-minus">Tutup</i></a></div>

            <div class="box-title">
              <div class="col-md-12 col-sm-6 col-xs-12">
                <div class="info-box">
                  <span class="info-box-icon bg-red">'.$jumlah.'</span>
                  <div class="info-box-content">
                    <span class="info-box-text"><h4>Penyebab Risiko - Man</h4></span>
                  </div>
                </div>
              </div>
            </div>
            </div>
            <div class="box-body">
            <div class="table-responsive">';
     echo '  <table  class="table table-responsive table-striped table-hover table-bordered">
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
                   foreach($this->m_dashboard->rowMan($where)->result() as $key ){
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

  function getMoney()
  {
    $sess_unit = $this->session->userdata('id_unit');

    $where = array(
      'tbl_unit_kerja.id_unit' => $sess_unit
    );
     $jumlah =   $this->m_dashboard->rowMoney($where)->num_rows();

      echo '<div class="box w3-animate-bottom">';
      echo '<div class="box-header">
      <div class="pull-right"><a href='.base_url('unit_kerja/Dashboard').' class="hideform btn btn-box-tool"><i class="fa fa-minus">Tutup</i></a></div>

            <div class="box-title">
              <div class="col-md-12 col-sm-6 col-xs-12">
                <div class="info-box">
                  <span class="info-box-icon w3-teal">'.$jumlah.'</span>
                  <div class="info-box-content">
                    <span class="info-box-text"><h4>Penyebab Risiko - Money</h4></span>
                  </div>
                </div>
              </div>
            </div>
            </div>
            <div class="box-body">
            <div class="table-responsive">';
     echo '  <table  class="table table-responsive table-striped table-hover table-bordered">
             <thead>
               <tr class="w3-teal">
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
                   foreach($this->m_dashboard->rowMoney($where)->result() as $key ){
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

  function getMethod()
  {
    $sess_unit = $this->session->userdata('id_unit');

    $where = array(
      'tbl_unit_kerja.id_unit' => $sess_unit
    );
     $jumlah =   $this->m_dashboard->rowMethod($where)->num_rows();

      echo '<div class="box w3-animate-bottom">';
      echo '<div class="box-header">
      <div class="pull-right"><a href='.base_url('unit_kerja/Dashboard').' class="hideform btn btn-box-tool"><i class="fa fa-minus">Tutup</i></a></div>

            <div class="box-title">
              <div class="col-md-12 col-sm-6 col-xs-12">
                <div class="info-box">
                  <span class="info-box-icon bg-orange">'.$jumlah.'</span>
                  <div class="info-box-content">
                    <span class="info-box-text"><h4>Penyebab Risiko - Method</h4></span>
                  </div>
                </div>
              </div>
            </div>
            </div>
            <div class="box-body">
            <div class="table-responsive">';
     echo '  <table  class="table table-responsive table-striped table-hover table-bordered">
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
                   foreach($this->m_dashboard->rowMethod($where)->result() as $key ){
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

  function getMachine()
  {
    $sess_unit = $this->session->userdata('id_unit');

    $where = array(
      'tbl_unit_kerja.id_unit' => $sess_unit
    );
     $jumlah =   $this->m_dashboard->rowMachine($where)->num_rows();

      echo '<div class="box w3-animate-bottom">';
      echo '<div class="box-header">
      <div class="pull-right"><a href='.base_url('unit_kerja/Dashboard').' class="hideform btn btn-box-tool"><i class="fa fa-minus">Tutup</i></a></div>

            <div class="box-title">
              <div class="col-md-12 col-sm-6 col-xs-12">
                <div class="info-box">
                  <span class="info-box-icon w3-grey">'.$jumlah.'</span>
                  <div class="info-box-content">
                    <span class="info-box-text"><h4>Penyebab Risiko - Machine</h4></span>
                  </div>
                </div>
              </div>
            </div>
            </div>
            <div class="box-body">
            <div class="table-responsive">';
     echo '  <table  class="table table-responsive table-striped table-hover table-bordered">
             <thead>
               <tr class="w3-grey">
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
                   foreach($this->m_dashboard->rowMachine($where)->result() as $key ){
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

  function getMaterial()
  {
    $sess_unit = $this->session->userdata('id_unit');

    $where = array(
      'tbl_unit_kerja.id_unit' => $sess_unit
    );
     $jumlah =   $this->m_dashboard->rowMaterial($where)->num_rows();

      echo '<div class="box w3-animate-bottom">';
      echo '<div class="box-header">
      <div class="pull-right"><a href='.base_url('unit_kerja/Dashboard').' class="hideform btn btn-box-tool"><i class="fa fa-minus">Tutup</i></a></div>

            <div class="box-title">
              <div class="col-md-12 col-sm-6 col-xs-12">
                <div class="info-box">
                  <span class="info-box-icon w3-dark-grey">'.$jumlah.'</span>
                  <div class="info-box-content">
                    <span class="info-box-text"><h4>Penyebab Risiko - Material</h4></span>
                  </div>
                </div>
              </div>
            </div>
            </div>
            <div class="box-body">
            <div class="table-responsive">';
     echo '  <table  class="table table-responsive table-striped table-hover table-bordered">
             <thead>
               <tr class="w3-dark-grey">
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
                   foreach($this->m_dashboard->rowMaterial($where)->result() as $key ){
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
