<?php

  $jum1 = 1;
  $nosop = 1;

 ?>


<div class="row">
  <div class="leftcolumn w3-animate-top">
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
    </div>
		<div class="card">
			<legend class="w3-center w3-black">Unit</legend>
			<?php
			foreach ($showunitID as $key):?>
			<p class="w3-center"><?= $key->nama_unit ?></p>
			<legend class="w3-center w3-black">Organisasi</legend>
			<p class="w3-center"><?= $key->nama_unor ?></p>
		  <?php endforeach; ?>
		</div>

  </div>

  <div class="rightcolumn">
    <div class="card">
      <div class="contentRealisasi">
        <legend>Realisasi Penanganan Risiko</legend>
         <table class="table table-bordered table-hover">
           <tr class="bg-blue">
             <th>No</th>
             <th>Risiko</th>
             <th>Penyebab</th>
             <th>Kemungkinan</th>
             <th>Dampak</th>
             <th>Tingkat Risiko</th>
             <th>Pengendalian Yang Sudah Ada</th>
             <th>Rencana Penanganan</th>
             <th>Mulai</th>
             <th>Selesai</th>
             <th>Output</th>
             <th>PIC</th>
             <th>Anggaran</th>
             <th>Aksi</th>
           </tr>
      <?php $noreal = 1; ?>
       <?php foreach ($realisasi as $real): ?>
             <tr>
               <td><?= $noreal++ ?></td>
               <td><?= $real->nama_risk ?></td>
               <td><?= $real->deskripsi_cause ?></td>
               <td><?= $real->frekuensi ?></td>
               <td><?= $real->dampak ?></td>
               <td><?= $real->hitung ?></td>
               <td><?= $real->deskripsi_pengendalian ?></td>
               <td><?= $real->deskripsi_rtp ?></td>
               <td><?= $real->plan_mulai ?></td>
               <td><?= $real->plan_selesai ?></td>
               <td><?= $real->indikator_output ?></td>
               <td><?= $real->pic ?></td>
               <td><?= $real->anggaran ?></td>
               <td><a class="btn btn-info btn-md" id="buatRealisasi" real-id_sop="<?= $real->id_sop ?>" real-nama_sop="<?= $real->nama_sop ?>" real-nama_risk="<?= $real->nama_risk ?>" real-cause="<?= $real->deskripsi_cause ?>" real-pengendalian="<?= $real->deskripsi_pengendalian ?>" real-rencana="<?= $real->deskripsi_rtp ?>" real-plan_mulai="<?= $real->plan_mulai ?>" real-plan_selesai="<?= $real->plan_selesai ?>" real-output="<?= $real->indikator_output ?>" real-pic="<?= $real->pic ?>"> Realisasi </a></td>
           </tr>
       <?php  endforeach ?>
         </table>
      </div>

      <div class="AddRealisasi">
      <legend>Tambah Realisasi</legend>
        <div class="alert alert-danger" id="alertReal"></div>
        <form action="<?= base_url('admin/manajementrisk/updateRTP') ?>" class="formReal" method="post">
        <div class="row">

          <div class="col-md-4">
              <div class="form-group">
                <label>SOP</label>
                <textarea class="form-control" readonly="" id="real_nama_sop"></textarea>
                <input name="id_sop" type="hidden" value="" id="real_id_sop">
              </div>
              <div class="form-group">
                <label>Risiko</label>
                <textarea class="form-control" readonly="" id="real_nama_risk"></textarea>
              </div>
              <div class="form-group">
                <label>Penyebab</label>
                <textarea class="form-control" readonly="" id="real_deskripsi_cause"></textarea>
              </div>
              <div class="form-group">
                <label>Penanganan Yang Sudah Ada</label>
                <textarea class="form-control" readonly="" id="real_deskripsi_pengendalian"></textarea>
              </div>
          </div>

          <div class="col-md-4">
            <div class="form-group">
                <label>Deskripsi RTP</label>
                <textarea name="deskripsi_rtp" class="form-control" id="real_deskripsi_rtp" readonly=""></textarea>
              </div>
              <div class="form-group">
                <label>Plan Mulai</label>
                <input type="date" class="form-control" name="plan_mulai" id="real_plan_mulai" readonly="">
              </div>
              <div class="form-group">
                <label>Plan Selesai</label>
                <input type="date" class="form-control" name="plan_selesai" id="real_plan_selesai" readonly="">
              </div>
              <div class="form-group">
                <label>Indikator Output</label>
                <input type="text" class="form-control" name="indikator_output" id="real_indikator_output" readonly="">
              </div>
              <div class="form-group">
                <label>PIC</label>
                <select class="form-control" name="pic" id="real_pic" disabled="">
                  <option value=""> -- Pilih -- </option>
                  <?php
                  foreach($pegawai as $karyawan){
                    echo "<option value='$karyawan->nama_pegawai'> $karyawan->nama_pegawai </option>";
                  }
                   ?>
                </select>
              </div>
          </div>

          <div class="col-md-4">
            <div class="form-group">
              <label>Real Mulai</label>
              <input type="date" class="form-control" name="real_mulai" id="real_mulai">
            </div>
            <div class="form-group">
              <label>Real Selesai</label>
              <input type="date" class="form-control" name="real_selesai" id="real_selesai">
            </div>
            <div class="form-group">
              <label>Hambatan</label>
              <textarea class="form-control" name="hambatan" id="hambatan"></textarea>
            </div>
          </div>
          <div class="pull-right">
            <button type="submit" name="submit" class="btn btn-md btn-info">Simpan</button>
            <button type="button" name="cancel" class="btn btn-md btn-danger" id="cancelReal">Batal</button>
          </div>
        </div>

      </form>
      </div>

          </div>
        </div>
