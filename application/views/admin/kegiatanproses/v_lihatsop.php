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
			<div class="editSOP">
						<h3 align="right">Edit Standar Operasional Prosedur</h3>
						<div class="alert alert-danger" id="alertSOP"></div>
						<form class="editsop" action="<?= base_url('admin/kegiatanprosesbisnis/updateSOP') ?>" method="post">
							<table class="table table-bordered" id="tb-sop">
									<tr>
										<th width="25%">Proses Bisnis</th>
									</tr>
									<tr>
										<td><textarea id="nama_sop" name="nama_sop" class="form-control" style="height:100px"></textarea></td>
									</tr>

									<tr>
										<td colspan="4">
											<div class="pull-right">
												<input type="hidden" name="id_sop" id="id_sop">
												<button type="submit" name="submit" class="btn btn-success btn-md"><span class="fa fa-save"></span></button>
												<button type="button" class="btn btn-danger btn-md" id="cancelUpdateSOP"><span class="fa fa-close"></span></button>
											</div>
										</td>
									</tr>
							</table>
						</form>
					</div>


      <legend><h3>
				Standar Operasional Prosedur
      <div class="pull-right"><a href="<?= base_url('admin/kegiatanprosesbisnis/addsop') ?>" class="btn btn-md btn-info" align="right">Tambah SOP</a></div>
      </h3></legend>
			<?php if($this->session->flashdata('notif') ){ ?>
			<div class="callout callout-success" id="notifications">
			<?php echo $this->session->flashdata('notif'); ?>
			</div>
			<?php } ?>
			<table class="table table-bordered">
          <tr class="bg-blue">
            <th>No</th>
            <th>Indikator Kinerja</th>
            <th>Kegiatan</th>
            <th>Proses Bisnis</th>
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

             <td>
             <?php if(!empty($sop->nama_sop)) { ?>
                  <a id="pilihSOP" data-id_sop="<?= $sop->id_sop ?>" data-nama_sop="<?= $sop->nama_sop ?>" class="btn btn-success btn-sm">
                      Edit SOP
                  </a>
             <?php } ?>
             </td>
          </tr>
      <?php  } ?>
        </table>
    </div>

  </div>
</div>
<script type="text/javascript" src="<?= base_url().'assets1/includeJS/admin/sidebarkegProses.js' ?>"></script>
<script type="text/javascript" src="<?= base_url().'assets1/includeJS/admin/kegiatanproses.js' ?>"></script>
