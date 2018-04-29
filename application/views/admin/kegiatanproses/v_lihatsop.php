<?php
	$nopk = 1;
  $noskp = 1;
  $nosop = 1;
	$jum = 1;
  $jum1 = 1;
	$no = 1;
?>
<div class="row">
  	<?php $this->load->view('admin/include/sidebar_kegProses'); ?>
</div>

  <div class="rightcolumn">
    <div class="card">
      <legend><h3>
				<div class="col-md-6 col-sm-6 col-xs-12">
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
						<a href="<?= base_url('admin/kegiatanprosesbisnis/hapusSOP/'.$sop->id_sop) ?>" onclick="return confirm('Apakah Anda Yakin Ingin Mengahapus Data ini ?')" class="btn btn-danger btn-sm" >Hapus</a>
           </td>
        </tr>
    <?php  } ?>
      </table>
    </div>

  </div>
</div>
<script type="text/javascript" src="<?= base_url().'assets1/includeJS/admin/sidebarkegProses.js' ?>"></script>
