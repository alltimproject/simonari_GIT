<?php

  $jum1 = 1;
  $nosop = 1;

 ?>

<div class="rightcolumn">
  <div class="card">

    <div class="contentTambahRTP">
      <legend class="judulForm">Tambah RTP</legend>
      <div class="alert alert-danger" id="alertRTP"></div>
      <form action="<?= base_url('unit_kerja/manajemenrisk/saveRTP') ?>" class="formRTP" method="post">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label>SOP</label>
              <textarea class="form-control" readonly="" id="nama_sop"></textarea>
              <input name="id_sop" type="hidden" value="" id="id_sop">
              <input name="action" type="hidden" value="" id="action">
            </div>
            <div class="form-group">
              <label>Risiko</label>
              <textarea class="form-control" readonly="" id="nama_risk"></textarea>
            </div>
            <div class="form-group">
              <label>Penyebab</label>
              <textarea class="form-control" readonly="" id="deskripsi_cause"></textarea>
            </div>
            <div class="form-group">
              <label>Penanganan Yang Sudah Ada</label>
              <textarea class="form-control" readonly="" id="deskripsi_pengendalian"></textarea>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Deskripsi RTP</label>
              <textarea name="deskripsi_rtp" class="form-control" id="deskripsi_rtp"></textarea>
            </div>
            <div class="form-group">
              <label>Plan Mulai</label>
              <input type="date" class="form-control" name="plan_mulai" id="plan_mulai">
            </div>
            <div class="form-group">
              <label>Plan Selesai</label>
              <input type="date" class="form-control" name="plan_selesai" id="plan_selesai">
            </div>
            <div class="form-group">
              <label>Indikator Output</label>
              <input type="text" class="form-control" name="indikator_output" id="indikator_output">
            </div>
            <div class="form-group">
              <label>PIC</label>
              <select class="form-control" name="pic" id="pic">
                <option value=""> -- Pilih -- </option>
                <?php
                foreach($pegawai as $karyawan){
                  echo "<option value='$karyawan->nama_pegawai'> $karyawan->nama_pegawai </option>";
                }
                 ?>
              </select>
            </div>
            <div class="form-group">
              <label>Status</label>
              <input type="text" class="form-control" name="status" id="status" readonly="">
            </div>
          </div>
          <div class="pull-right">
            <button type="submit" name="submit" class="btn btn-md btn-info" id="submitRTP">Simpan</button>
            <button type="button" name="cancel" class="btn btn-md btn-danger" id="cancelRTP">Batal</button>
          </div>
        </div>
      </form>
    </div>

    <div class="contentRISK">
       <legend>Daftar Risiko</legend>
       <div class="table-responsive">
         <table class="table table-bordered table-hover">
           <tr class="bg-blue">
             <th>No</th>
             <th>Kegiatan</th>
             <th>Proses Bisnis</th>
             <th>Risiko</th>
             <th>Penyebab</th>
             <th>Penanganan Yang Sudah Ada</th>
             <th>Sisa Risiko</th>
             <th>Kemungkinan</th>
             <th>Dampak</th>
             <th>Tingkat Risiko</th>
             <th>Keterangan</th>
           </tr>

       <?php foreach ($data as $risk) { ?>
           <tr>
             <?php

               if($jum1 <= 1)
               {
                 $jmlsop = $risk->rowskp;
                 if ($jmlsop == 0) {
                   $jmlsop = 1;
                 }
             ?>
               <td rowspan="<?= $jmlsop ?>"><?= $nosop ?></td>
               <td rowspan="<?= $jmlsop ?>"><?= $risk->nama_skp ?></td>
             <?php
                 $jum1 = $risk->rowskp;
                 $nosop++;
               } else {
                 $jum1 = $jum1 - 1;
               }
              ?>

              <td><?= $risk->nama_sop ?></td>
              <td><?= $risk->nama_risk ?></td>
              <td><?= $risk->deskripsi_cause ?></td>
              <td><?= $risk->deskripsi_pengendalian ?></td>
              <td><?= $risk->sisa_risk ?></td>
              <td><?= $risk->frekuensi ?></td>
              <td><?= $risk->dampak ?></td>
              <td><?= $risk->hitung ?></td>
              <td>
                 <?php

                     if($risk->hitung == 0)
                     {
                       echo "<small>NULL</small>";
                     }elseif($risk->hitung >= 1 && $risk->hitung <= 5 && $risk->dampak != 5)
                     {
                       echo "<small class='label pull-right bg-blue'>Sangat Rendah</small>";
                     } elseif ($risk->hitung >= 6 && $risk->hitung <= 11 && $risk->dampak != 5)
                     {
                       echo "<small class='label pull-right bg-green'>Rendah</small>";
                     } elseif ($risk->hitung >= 12 && $risk->hitung <= 15 && $risk->dampak != 5)
                     {
                       echo "<small class='label pull-right bg-yellow'>Sedang</small>";
                     } elseif ($risk->hitung >= 16 && $risk->hitung <= 19 && $risk->dampak != 5) {
                       echo "<small class='label pull-right bg-green'>Tinggi</small>";
                     } else
                     {
                       echo "<small class='label pull-right bg-red'>Sangat Tinggi</small>";
                     }
                 ?>
              </td>
           </tr>
       <?php  } ?>
         </table>
       </div>
    </div>

    <div class="contentRealisasi">
      <legend>Realisasi Penanganan Risiko</legend>
      <div class="table-responsive">
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
    </div>

    <div class="contentRTP">
      <legend>Rencana Penanganan Risiko </legend>
      <div class="table-responsive">
        <table class="table table-bordered table-hover">
          <tr class="bg-blue">
            <th>No</th>
             <th>Risiko</th>
             <th>Penyebab</th>
             <th>Tingkat Risiko</th>
             <th>Penanganan Yang Sudah Ada</th>
             <th>Rencana Penanganan</th>
             <th>Mulai</th>
             <th>Selesai</th>
             <th>Indikator Output</th>
             <th>PIC</th>
             <th>Anggaran</th>
             <th>Aksi</th>
          </tr>

        <?php $nortp = 1; ?>
       <?php foreach ($rencana as $rtp): ?>
             <tr>
               <td><?= $nortp++ ?></td>
               <td><?= $rtp->nama_risk ?></td>
               <td><?= $rtp->deskripsi_cause ?></td>
               <td><?= $rtp->hitung ?></td>
               <td><?= $rtp->deskripsi_pengendalian ?></td>
               <td><?= $rtp->deskripsi_rtp ?></td>
               <td><?= $rtp->plan_mulai ?></td>
               <td><?= $rtp->plan_selesai ?></td>
               <td><?= $rtp->indikator_output ?></td>
               <td><?= $rtp->pic ?></td>
               <td><?= $rtp->anggaran ?></td>
               <td><?php if(!isset($rtp->deskripsi_rtp)){ ?>
                     <button id="buatRTP" class="btn btn-sm btn-info" data-id_sop="<?= $rtp->id_sop ?>" data-nama_sop="<?= $rtp->nama_sop ?>" data-nama_risk="<?= $rtp->nama_risk ?>" data-cause="<?= $rtp->deskripsi_cause ?>" data-pengendalian="<?= $rtp->deskripsi_pengendalian ?>">Buat RTP</button>
                   <?php } else { ?>
                     <button id="editRTP" <?php if($rtp->status == "Close"){ echo "disabled"; }  ?> class="btn btn-sm btn-success" data-id_sop="<?= $rtp->id_sop ?>" data-nama_sop="<?= $rtp->nama_sop ?>" data-nama_risk="<?= $rtp->nama_risk ?>" data-cause="<?= $rtp->deskripsi_cause ?>" data-pengendalian="<?= $rtp->deskripsi_pengendalian ?>" data-rencana="<?= $rtp->deskripsi_rtp ?>" data-plan_mulai="<?= $rtp->plan_mulai ?>" data-plan_selesai="<?= $rtp->plan_selesai ?>" data-output="<?= $rtp->indikator_output ?>" data-pic="<?= $rtp->pic ?>" data-status="<?= $rtp->status ?>">Edit RTP</button>
                   <?php } ?>
               </td>
           </tr>
       <?php  endforeach ?>
         </table>
      </div>
    </div>


    <div class="AddRealisasi">
    <legend>Tambah Realisasi</legend>
      <div class="alert alert-danger" id="alertReal"></div>
      <form action="<?= base_url('unit_kerja/manajemenrisk/updateRTP') ?>" class="formReal" method="post">
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




    <!-- End Table -->

  </div>
</div>

<?php if($this->session->flashdata('notif') ){ ?>
              <div class="callout callout-<?= $this->session->flashdata('class'); ?>" id="notifications" data-MR="<?= $this->session->flashdata('halaman'); ?>">
              <?= $this->session->flashdata('notif'); ?>
              </div>
              <?php } ?>

<script type="text/javascript" src="<?= base_url().'assets1/includeJS/manajemenrisk.js' ?>"></script>
