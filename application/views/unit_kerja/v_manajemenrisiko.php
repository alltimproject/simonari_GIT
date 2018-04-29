<?php

  $jum1 = 1;
  $nosop = 1;

 ?>

<div class="rightcolumn">
  <div class="card">

  <!-- Content Identifikasi Risiko -->
   <div class="editRisiko">
          <legend id="judulRisiko">Tambah Identifikasi Risiko</legend>
          <div class="alert alert-danger" id="alertRisiko"></div>
          <form class="formRisiko" action="<?= base_url('unit_kerja/manajemenrisk/updateRisiko') ?>" method="post">
            <table class="table table-bordered" id="tb-sop">
                <tr>
                  <th width="25%">Proses Bisnis</th>
                  <th width="25%">Risiko</th>
                  <th width="25%">Kemungkinan</th>
                  <th width="25%">Dampak</th>
                  <th width="25%"></th>
                </tr>
                <tr>
                  <td><textarea id="iden-nama_sop" name="nama_sop" class="form-control" style="height:100px" readonly=""></textarea></td>
                  <td><textarea id="iden-nama_risk" name="nama_risk" class="form-control" style="height:100px"></textarea></td>
                  <td><select id="iden-frekuensi" name="frekuensi" class="form-control frekuensi"><option value=""></option><option value="1">1 - Sangat Jarang</option><option value="2">2 - Jarang</option><option value="3">3 - Kadang-kadang</option><option value="4">4 - Sering</option><option value="5">5 - Sangat Sering</option></select></td>
                  <td><select id="iden-dampak" name="dampak" class="form-control dampak"><option value=""></option><option value="1">1 - Sangat Rendah</option><option value="2">2 - Rendah</option><option value="3">3 - Sedang</option><option value="4">4 - Tinggi</option><option value="5">5 - Sangat Tinggi</option></select></td>
                </tr>
                <tr>
                  <th>Penyebab</th>
                  <th>Kategori</th>
                  <th>Pengendalian</th>
                  <th>Sisa Risiko</th>
                </tr>
                <tr>
                  <td><textarea id="iden-deskripsi_cause" name="deskripsi_cause" class="form-control" style="height:100px"></textarea></td>
                  <td><select id="iden-kategori_cause" name="kategori_cause" class="form-control"><option value="">--Pilih Kategori--</option><option value="Man">Man</option><option value="Money">Money</option><option value="Method">Method</option><option value="Machine">Machine</option><option value="Material">Material</option></select></td>
                  <td><textarea id="iden-deskripsi_pengendalian" name="deskripsi_pengendalian" class="form-control" style="height:100px"></textarea></td>
                  <td><textarea id="iden-sisa_risk" name="sisa_risk" class="form-control" style="height:100px"></textarea></td>
                </tr>
                <tr>
                  <td colspan="4">
                    <div class="pull-right">
                      <input type="hidden" name="id_sop" id="iden-id_sop">
                      <button type="submit" name="submit" class="btn btn-info btn-md" id="submitRisiko">Simpan</button>
                      <button type="button" class="btn btn-danger btn-md" id="cancelRisiko">Batal</button>
                    </div>
                  </td>
                </tr>
            </table>
          </form>
        </div>
    <div class="identifikasiRisk">
        <legend>Identifikasi Risiko</legend>
        <div class="table-responsive">
            <table class="table table-bordered">
          <tr class="bg-blue">
            <th>No</th>
            <th>Indikator Kinerja</th>
            <th>Kegiatan</th>
            <th>Proses Bisnis</th>
            <th>Risiko</th>
            <th>Kemungkinan</th>
            <th>Dampak</th>
            <th>Tingkat Risiko</th>
            <th>Sisa Risiko</th>
            <th>Aksi</th>
          </tr>

      <?php $nosop = 1; $jum1 = 1; $jum2 = 1; ?>
      <?php foreach ($dataSOP as $sop) { ?>
          <tr>
            <?php

              if($jum2 <= 1)
              {
                $jmlpk = $sop->rowpk;
                if ($jmlpk == 0) {
                  $jmlpk = 1;
                }
            ?>
              <td rowspan="<?= $jmlpk ?>"><?= $nosop ?></td>
              <td rowspan="<?= $jmlpk ?>"><?= $sop->nama_ik ?></td>
            <?php
                $jum2 = $sop->rowpk;
                $nosop++;
              } else {
                $jum2 = $jum2 - 1;
              }
             ?>

            <?php

              if($jum1 <= 1)
              {
                $jmlsop = $sop->rowskp;
                if ($jmlsop == 0) {
                  $jmlsop = 1;
                }
            ?>
              <td rowspan="<?= $jmlsop ?>"><?= $sop->nama_skp ?></td>
            <?php
                $jum1 = $sop->rowskp;
              } else {
                $jum1 = $jum1 - 1;
              }
             ?>

             <td><?= $sop->nama_sop ?></td>
             <td><?= $sop->nama_risk ?></td>
             <td><?= $sop->frekuensi ?></td>
             <td><?= $sop->dampak ?></td>
             <td><?= $sop->hitung ?></td>
             <td><?= $sop->sisa_risk ?></td>
             <td>
                 <?php if($sop->nama_risk == ''){ ?>
                     <a id="tambahRisiko" iden-id_sop="<?= $sop->id_sop ?>" iden-nama_sop="<?= $sop->nama_sop ?>" class="btn btn-info btn-sm">Tambah Risiko</a>
                 <?php } else { ?>
                     <a id="editRisiko" iden-id_sop="<?= $sop->id_sop ?>" iden-nama_sop="<?= $sop->nama_sop ?>" iden-nama_risk="<?= $sop->nama_risk ?>" iden-sisa_risk="<?= $sop->sisa_risk ?>" iden-frekuensi="<?= $sop->frekuensi ?>" iden-dampak="<?= $sop->dampak ?>" iden-deskripsi_cause="<?= $sop->deskripsi_cause ?>" iden-kategori_cause="<?= $sop->kategori_cause ?>" iden-deskripsi_pengendalian="<?= $sop->deskripsi_pengendalian ?>" class="btn btn-success btn-sm">Edit Risiko</a>
                 <?php } ?>

             </td>
          </tr>
      <?php  } ?>
        </table>
        </div>
    </div>
  <!-- End Content Identifikasi Risiko -->

   <!-- Content Daftar Risiko -->

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

    <!-- End Content Daftar Risiko -->




    <!-- Content Rencana Penanganan -->

    <div class="contentTambahRTP">
      <legend class="judulForm">Tambah Rencana</legend>
      <div class="alert alert-danger" id="alertRTP"></div>
      <form action="<?= base_url('unit_kerja/manajemenrisk/saveRTP') ?>" class="formRTP" method="post">
        <div class="row">
          <div class="col-md-6">
            <input type="hidden" name="id_unit" value="<?= $this->session->userdata('id_unit') ?>">
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
                     <button id="buatRTP" class="btn btn-sm btn-info" data-id_sop="<?= $rtp->id_sop ?>" data-nama_sop="<?= $rtp->nama_sop ?>" data-nama_risk="<?= $rtp->nama_risk ?>" data-cause="<?= $rtp->deskripsi_cause ?>" data-pengendalian="<?= $rtp->deskripsi_pengendalian ?>">Buat Rencana</button>
                   <?php } else { ?>
                     <button id="editRTP" <?php /* if($rtp->status == "Close"){ echo "disabled"; } */  ?> class="btn btn-sm btn-success" data-id_sop="<?= $rtp->id_sop ?>" data-nama_sop="<?= $rtp->nama_sop ?>" data-nama_risk="<?= $rtp->nama_risk ?>" data-cause="<?= $rtp->deskripsi_cause ?>" data-pengendalian="<?= $rtp->deskripsi_pengendalian ?>" data-rencana="<?= $rtp->deskripsi_rtp ?>" data-plan_mulai="<?= $rtp->plan_mulai ?>" data-plan_selesai="<?= $rtp->plan_selesai ?>" data-output="<?= $rtp->indikator_output ?>" data-pic="<?= $rtp->pic ?>" data-status="<?= $rtp->status ?>">Edit Rencana</button>
                   <?php } ?>
               </td>
           </tr>
       <?php  endforeach ?>
         </table>
      </div>
    </div>

    <!-- End Content Rencana Penanganan -->

    <!-- Conten Realisasi Penanganan -->


    <div class="AddRealisasi">
    <legend class="judulForm2">Tambah Realisasi</legend>
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
          <div class="form-group">
            <label>Keterangan</label>
            <textarea class="form-control" name="keterangan" id="keterangan"></textarea>
          </div>
        </div>
        <div class="pull-right">
          <button type="submit" name="submit" class="btn btn-md btn-info" id="submitRealisasi">Simpan</button>
          <button type="button" name="cancel" class="btn btn-md btn-danger" id="cancelReal">Batal</button>
        </div>
      </div>

    </form>
    </div>


    <div class="contentRealisasi">
      <legend>Realisasi Penanganan Risiko</legend>
      <div class="table-responsive">
        <table class="table table-bordered table-hover">
          <tr class="bg-blue">
            <th>No</th>
            <th>Risiko</th>
            <th>Rencana Penanganan</th>
            <th>Mulai</th>
            <th>Selesai</th>
            <th>Output</th>
            <th>PIC</th>
            <th>Anggaran</th>
            <th>Real Mulai</th>
            <th>Real Selesai</th>
            <th>Hambatan</th>
            <th>Keterangan</th>
            <th>Aksi</th>
          </tr>
     <?php $noreal = 1; ?>
      <?php foreach ($realisasi as $real): ?>
            <tr>
              <td><?= $noreal++ ?></td>
              <td><?= $real->nama_risk ?></td>
              <td><?= $real->deskripsi_rtp ?></td>
              <td><?= $real->plan_mulai ?></td>
              <td><?= $real->plan_selesai ?></td>
              <td><?= $real->indikator_output ?></td>
              <td><?= $real->pic ?></td>
              <td><?= $real->anggaran ?></td>
              <td><?= $real->real_mulai ?></td>
              <td><?= $real->real_selesai ?></td>
              <td><?= $real->hambatan ?></td>
              <td><?= $real->keterangan ?></td>

              <td>

                <?php if($real->status == "Open"){ ?>
                  <a class="btn btn-info btn-sm" id="buatRealisasi" real-id_sop="<?= $real->id_sop ?>" real-nama_sop="<?= $real->nama_sop ?>" real-nama_risk="<?= $real->nama_risk ?>" real-cause="<?= $real->deskripsi_cause ?>" real-pengendalian="<?= $real->deskripsi_pengendalian ?>" real-rencana="<?= $real->deskripsi_rtp ?>" real-plan_mulai="<?= $real->plan_mulai ?>" real-plan_selesai="<?= $real->plan_selesai ?>" real-output="<?= $real->indikator_output ?>" real-pic="<?= $real->pic ?>"> Buat Realisasi </a>

                <?php } else { ?>
                  <a class="btn btn-success btn-sm" id="editRealisasi" real-id_sop="<?= $real->id_sop ?>" real-nama_sop="<?= $real->nama_sop ?>" real-nama_risk="<?= $real->nama_risk ?>" real-cause="<?= $real->deskripsi_cause ?>" real-pengendalian="<?= $real->deskripsi_pengendalian ?>" real-rencana="<?= $real->deskripsi_rtp ?>" real-plan_mulai="<?= $real->plan_mulai ?>" real-plan_selesai="<?= $real->plan_selesai ?>" real-output="<?= $real->indikator_output ?>" real-pic="<?= $real->pic ?> " real-mulai="<?= $real->real_mulai ?>" real-selesai="<?= $real->real_selesai ?>" real-hambatan="<?= $real->hambatan ?>" real-keterangan="<?= $real->keterangan ?>" real-berkas="<?= $real->berkas ?>"> Edit Realisasi </a>

                  <?php
                                  if($real->berkas == ""){?>
                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#uploadzip">Upload Evidence</button>
                                                      <!-- Modal -->
                                    <div class="modal fade" id="uploadzip" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Upload Zip</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                          <form action="<?= base_url('unit_kerja/manajemenrisk/uploadzip') ?>" method="post" enctype="multipart/form-data">
                                            <input type="hidden" name="id_sop" value="<?= $real->id_sop ?>">
                                            <div class="form-group">
                                              <label> Pilih File ZIP </label>
                                              <input type="file" name="zip_file" class="form-control">
                                            </div>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" name="submit" class="btn btn-primary">Save changes</button>
                                          </div>
                                            </form>
                                        </div>
                                      </div>
                                    </div>
                                    <?php } else{ ?>
                                      <h4>File Uploaded <a href="<?= base_url('uploadzip/'.$real->berkas)?>">Lihat</a> </h4>

                  <?php } //end if  ?>


                <?php } ?>

             </td>
          </tr>
      <?php  endforeach ?>
        </table>
      </div>
    </div>



  </div>
</div>

<?php if($this->session->flashdata('notif') ){ ?>
              <div class="callout callout-<?= $this->session->flashdata('class'); ?>" id="notifications" data-MR="<?= $this->session->flashdata('halaman'); ?>">
              <?= $this->session->flashdata('notif'); ?>
              </div>
              <?php } ?>

<script type="text/javascript" src="<?= base_url().'assets1/includeJS/manajemenrisk.js' ?>"></script>
