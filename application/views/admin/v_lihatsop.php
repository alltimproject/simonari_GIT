<?php
	$nopk = 1;
  $noskp = 1;
  $nosop = 1;
	$jum = 1;
  $jum1 = 1;
	$no = 1;
?>
<div class="row">
  <div class="leftcolumn w3-animate-top">
    <div class="card">
      <div class="w3-panel" style="width:100%">
        <a href="<?= base_url('admin/kegiatanprosesbisnis/lihatpk/'. $this->session->userdata('session_unit'))  ?>"  class="w3-button w3-block w3-teal">Perjanjian Kinerja</a>
      </div>
      <div class="w3-panel" style="width:100%">
        <a href="<?= base_url('admin/kegiatanprosesbisnis/lihatskp/'. $this->session->userdata('session_unit'))  ?>"  class="w3-button w3-block w3-teal">Sasaran Kinerja Pegawai</a>
      </div>
      <div class="w3-panel" style="width:100%">
        <a href="<?= base_url('admin/kegiatanprosesbisnis/lihatsop/'.$this->session->userdata('session_unit'))  ?>"  class="w3-button w3-block w3-teal">Standar Operasional Prosedur</a>
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
      <legend><h3>
				<div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"> <?= $jumlahSOPunit ?> </span>

            <div class="info-box-content">
              <span class="info-box-text"><h4>Standar Operasional Prosedur</h4></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
      <div class="pull-right"><a href="<?= base_url('admin/kegiatanprosesbisnis/addsop') ?>" class="btn btn-md btn-info" align="right">Tambah SOP</a></div>
      </h3></legend>
			<?php if($this->session->flashdata('notif') ){ ?>
			<div class="callout callout-success" id="notifications">
			<?php echo $this->session->flashdata('notif'); ?>
			</div>
			<?php } ?>
      <table class="table table-bordered table-hover">
        <tr class="bg-blue">
          <th>No</th>
          <th>Nama SKP</th>
          <th>Nama SOP</th>
          <th>Nama Risk</th>
          <th>Frekuensi</th>
          <th>Dampak</th>
          <th>Hitung</th>
          <th>Sisa Risk</th>
          <th>Aksi</th>
        </tr>

    <?php foreach ($showSOP as $sop) { ?>
        <tr>
          <?php

            if($jum1 <= 1)
            {
              $jmlsop = $sop->rowskp;
              if ($jmlsop == 0) {
                $jmlsop = 1;
              }
          ?>
            <td rowspan="<?= $jmlsop ?>"><?= $nosop ?></td>
            <td rowspan="<?= $jmlsop ?>">
              <div class="tooltip-demo"><span data-toggle="tooltip" data-placement="left" title="Nama IK : <?= $sop->nama_ik ?>"><?= $sop->nama_skp ?></span></div>
            </td>
          <?php
              $jum1 = $sop->rowskp;
              $nosop++;
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
            <a href="" class="btn btn-default btn-sm">Edit SOP</a>
           </td>
        </tr>
    <?php  } ?>
      </table>
    </div>

  </div>
</div>
