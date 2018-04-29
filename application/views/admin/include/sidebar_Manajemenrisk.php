<div class="leftcolumn">
  <div class="card">
    <div class="w3-panel" style="width:100%">
      <a href="<?= base_url('admin/manajementrisk/lihatdetail/'.$this->session->userdata('session_unit')) ?>"  class="w3-button w3-block w3-teal">Daftar Risiko</a>
    </div>
    <div class="w3-panel" style="width:100%">
      <a href="<?= base_url('admin/manajementrisk/lihatrencana/'.$this->session->userdata('session_unit'))  ?>"  class="w3-button w3-block w3-teal">Rencana Penanganan Risiko</a>
    </div>
    <div class="w3-panel" style="width:100%">
      <a href="<?= base_url('admin/manajementrisk/lihatrealisasi/'.$this->session->userdata('session_unit'))  ?>"  class="w3-button w3-block w3-teal">Realisasi Penanganan Risiko</a>
    </div>
    <div class="w3-panel" style="width:100%">
      <a href="<?= base_url('admin/manajementrisk/lihatstatuspenanganan/'.$this->session->userdata('session_unit'))  ?>"  class="w3-button w3-block w3-teal">Status Penanganan Close</a>
    </div>
  </div>
  <div class="card">
    <legend class="w3-center bg-blue">Unit</legend>
    <?php
    foreach ($showunitID as $key):?>
    <p class="w3-center"><?= $key->nama_unit ?></p>
    <legend class="w3-center bg-blue">Organisasi</legend>
    <p class="w3-center"><?= $key->nama_unor ?></p>
    <?php endforeach; ?>
    <div class="box">
       <div class="box-header bg-blue">
         <center><h3 class="box-title">Daftar Pegawai</h3></center>
       </div>
           <!-- /.box-header -->
       <div class="box-body no-padding">
          <input class="w3-input w3-border w3-padding" type="text" placeholder="Cari Nama Pegawai" id="myInput" onkeyup="myFunction()">
          <table class="w3-table-all w3-margin-top" id="myTable">
          <tr>
            <th style="width:60%;">Nama</th>
          </tr>
      <?php
      foreach($showPegawaiunit as $key):?>
        <tr>
          <td><?= $key->nama_pegawai ?></td>
        </tr>
      <?php endforeach; ?>
    </table>
       </div>
    </div>
  </div>
