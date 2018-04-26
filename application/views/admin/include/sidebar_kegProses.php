<div class="leftcolumn w3-animate-top">
  <div class="card">
    <div class="w3-panel" style="width:100%">
      <a href="<?= base_url('admin/kegiatanprosesbisnis/lihatpk/'. $this->session->userdata('session_unit'))  ?>"  class="w3-button w3-block w3-teal">
        Perjanjian Kinerja</a>
    </div>
    <div class="w3-panel" style="width:100%">
      <a href="<?= base_url('admin/kegiatanprosesbisnis/lihatskp/'.$this->session->userdata('session_unit'))  ?>"  class="w3-button w3-block w3-teal">Sasaran Kerja Pegawai</a>
    </div>
    <div class="w3-panel" style="width:100%">
      <a href="<?= base_url('admin/kegiatanprosesbisnis/lihatsop/'.$this->session->userdata('session_unit'))  ?>"  class="w3-button w3-block w3-teal">Standar Operasional Prosedur</a>
    </div>
  </div>

  <div class="card">
    <?php
    foreach ($showunitID as $key):?>

    <legend class="w3-center bg-blue">Organisasi</legend>
    <p class="w3-center"><?= $key->nama_unor ?></p>

    <legend class="w3-center bg-blue">Unit</legend>
    <p class="w3-center"><?= $key->nama_unit ?></p>

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
