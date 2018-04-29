<?php
	$nopk = 1;
  $noskp = 1;
  $nosop = 1;
	$jum = 1;
  $jum1 = 1;
	$no = 1;
	$numberskp = 1;
?>
<div class="row">
	<?php $this->load->view('admin/include/sidebar_kegProses'); ?>
</div>

  <div class="rightcolumn">
		<!-- Halaman Edit SKP -->
        <div class="editSKP">
          <h3 align="right">Edit Sasaran Kerja Pegawai</h3>
          <div class="alert alert-danger" id="alertSKP"></div>
          <form class="editskp" action="<?= base_url('admin/kegiatanprosesbisnis/updateSKP') ?>" method="post">
            <table class="table table-bordered" id="tb-skp">
              <tr>
                <th width="20%">Kegiatan</th>
                <th width="20%">Volume</th>
                <th width="20%">Mutu</th>
                <th width="15%">Waktu</th>
                <th width="15%">Biaya</th>
                <th></th>
              </tr>
              <tr>
                <td><textarea name="nama_skp" class="form-control" style="height:100px;" id="nama_skp"></textarea></td>
                <td><textarea name="target_volume" class="form-control" style="height:100px;" id="target_volume"></textarea></td>
                <td><textarea name="target_mutu" class="form-control" style="height:100px;" id="target_mutu"></textarea></td>
                <td><textarea name="target_waktu" class="form-control" style="height:100px;" id="target_waktu"></textarea></td>
                <td><input type="number" class="form-control" name="target_biaya" id="target_biaya"></td>
                <td>
                  <input type="hidden" name="id_skp" id="id_skp">
                  <button type="submit" name="submit" class="btn btn-success btn-md"><span class="fa fa-save"></span></button>
                  <button type="button" class="btn btn-danger btn-md" id="cancelUpdateSKP"><span class="fa fa-close"></span></button>
                </td>
              </tr>
            </table>
          </form>
          </div>
<!-- Akhir halaman Edit SKP -->




    <div class="card">
      <legend><h3>
			Sasaran Kerja Pegawai
       <div class="pull-right"><a href="<?= base_url('admin/kegiatanprosesbisnis/addSKP') ?>" class="btn btn-md btn-info">Tambah</a></div>
       </h3></legend>
			 <?php if($this->session->flashdata('notif') ){ ?>
			 <div class="callout callout-success" id="notifications">
			 <?php echo $this->session->flashdata('notif'); ?>
			 </div>
			 <?php } ?>
       <table class="table  table-bordered table-hover">
         <tr class="bg-blue">
           <th>No</th>
           <th>Indikator Kinerja</th>
           <th>Kegiatan</th>
           <th>Volume</th>
           <th>Mutu</th>
           <th>Waktu</th>
           <th>Biaya</th>
           <th>Aksi</th>
         </tr>

     <?php foreach ($showSKP as $skp) { ?>
         <tr>
           <?php

             if($jum <= 1)
             {
               $jmlrow = $skp->rowpk;
               if ($jmlrow == 0) {
                 $jmlrow = 1;
               }
           ?>
             <td rowspan="<?= $jmlrow ?>"><?= $noskp ?></td>
             <td rowspan="<?= $jmlrow ?>"><?= $skp->nama_ik ?></td>
           <?php
               $jum = $skp->rowpk;
               $noskp++;
             } else {
               $jum = $jum - 1;
             }
            ?>

            <td><?= $skp->nama_skp ?></td>
            <td><?= $skp->target_volume ?></td>
            <td><?= $skp->target_mutu ?></td>
            <td><?= $skp->target_waktu ?></td>
            <td><?= $skp->target_biaya ?></td>
            <td rowspan="">
							<a id="pilihSKP" data-id_skp="<?= $skp->id_skp ?>" data-nama_skp="<?= $skp->nama_skp ?>" data-target_volume="<?= $skp->target_volume ?>" data-target_waktu="<?= $skp->target_waktu ?>" data-target_mutu="<?= $skp->target_mutu ?>" data-target_biaya="<?= $skp->target_biaya ?>" class="btn btn-success btn-sm">
										Edit SKP
								</a>
            </td>

         </tr>
     <?php  } ?>
       </table>
     </div>

		 <script type="text/javascript" src="<?= base_url().'assets1/includeJS/admin/sidebarkegProses.js' ?>"></script>
		 <script type="text/javascript" src="<?= base_url().'assets1/includeJS/admin/kegiatanproses.js' ?>"></script>
