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

      <div class="contentTambahRTP">
        <legend class="judulForm">Tambah RTP</legend>
        <div class="alert alert-danger" id="alertRTP"></div>
        <form action="<?= base_url('admin/manajementrisk/saveRTP') ?>" class="formRTP" method="post">
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
            </div>
            <div class="pull-right">
              <button type="submit" name="submit" class="btn btn-md btn-info" id="submitRTP">Simpan</button>
              <button type="button" name="cancel" class="btn btn-md btn-danger" id="cancelRTP">Batal</button>
            </div>
          </div>
        </form>
      </div>
























  <div class="contentRTP">
      <legend><h3>Rencana Penanganan Risiko
    </div>
		<?php if($this->session->flashdata('notif') ){ ?>
		<div class="callout callout-success" id="notifications">
		<?php echo $this->session->flashdata('notif'); ?>
		</div>
		<?php } ?>
         <!-- TAMPIL CARI pk-->
         <div class="box">
                 <div class="box-header">
                 </div>
                 <!-- /.box-header -->
                 <div class="box-body">
                    <table class="table table-bordered table-striped table-hover">
                      <thead>
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
                                   <button id="editRTP" class="btn btn-sm btn-success" data-id_sop="<?= $rtp->id_sop ?>" data-nama_sop="<?= $rtp->nama_sop ?>" data-nama_risk="<?= $rtp->nama_risk ?>" data-cause="<?= $rtp->deskripsi_cause ?>" data-pengendalian="<?= $rtp->deskripsi_pengendalian ?>" data-rencana="<?= $rtp->deskripsi_rtp ?>" data-plan_mulai="<?= $rtp->plan_mulai ?>" data-plan_selesai="<?= $rtp->plan_selesai ?>" data-output="<?= $rtp->indikator_output ?>" data-pic="<?= $rtp->pic ?>">Edit Rencana</button>
                                 <?php } ?>
                             </td>
                         </tr>
                     <?php  endforeach ?>
            </table>
          </div>
          </div>
        </div>
      </div>
