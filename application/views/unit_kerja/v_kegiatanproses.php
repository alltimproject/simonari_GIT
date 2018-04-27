<?php
	$no = 1;
?>



  <div class="rightcolumn">
    <div class="card">
    <div class="contentPK">
      <legend>
        <h3>Perjanjian Kinerja
          <div class="pull-right"><a href="<?= base_url('unit_kerja/kegiatanproses/addPK') ?>" class="btn btn-md btn-info">Tambah</a></div>
        </h3>
      </legend>




<!-- Halaman Edit PK -->
      <div class="editPK">
      <h3 align="right">Edit Perjanjian Kerja</h3>
      <div class="alert alert-danger" id="alertPK"></div>
      <form class="editpk" action="<?= base_url('unit_kerja/kegiatanproses/updatePK') ?>" method="post">
        <table class="table table-bordered table-responsive" id="tb-pk">
            <tr style="background-color: grey; color: white">
                <th width="30%">Indikator Kinerja</th>
                <th width="30%">Target</th>
                <th width="20%">Anggaran</th>
                <th width="10%">Tahun</th>
                <th width="10%"></th>
            </tr>
            <tr>
                <td class="ik"><textarea name="nama_ik" class="form-control" style="height: 80px" id="nama_ik"></textarea></td>
                <td class="target"><textarea name="target" class="form-control" style="height: 80px" id="target"></textarea></td>
                <td class="anggaran"><input type="number" class="form-control" name="anggaran" id="anggaran"></td>
                <td class="tahun_pk"><input type="number" class="form-control" name="tahun_pk" maxlength="4" id="tahun_pk"></td>
                <td>
                  <center>
                    <button type="submit" class="btn btn-md btn-success"><i class="fa fa-save"></i></button>
                    <button type="button" class="btn btn-md btn-danger" id="cancelUpdatePK"><i class="fa fa-close"></i></button>
                  </center>
                </td>
            </tr>
            <input type="hidden" id="id_pk" name="id_pk">
          </table>
        </form>
      </div>
<!-- -->

<!-- Halaman Data PK -->

				<div class="table-responsive">
					<table class="table table-bordered">
						<thead>
							<tr class="bg-blue">
		            <th>No</th>
		            <th width="35%">Indikator Kinerja</th>
		            <th>Target</th>
		            <th>Anggaran</th>
		            <th>Tahun</th>
		            <th>Aksi</th>
		          </tr>
						</thead>
						<tbody>
              <?php   $nopk = 1; ?>
							<?php foreach ($dataPK as $pk): ?>
		            <tr>
		              <td><?= $nopk++ ?></td>
		              <td><?= $pk->nama_ik ?></td>
		              <td><?= $pk->target ?></td>
		              <td><?= $pk->anggaran ?></td>
		              <td><?= $pk->tahun_pk ?></td>
		              <td>
		                <a id="pilihPK" data-id_pk="<?= $pk->id_pk ?>" data-nama_ik="<?= $pk->nama_ik ?>" data-target="<?= $pk->target ?>" data-anggaran="<?= $pk->anggaran ?>" data-tahun_pk="<?= $pk->tahun_pk ?>" class="btn btn-success btn-sm">Edit PK</a>
		              </td>
		            </tr>
		          <?php endforeach; ?>
						</tbody>
	        </table>
				</div>
      </div>
<!-- Batas -->

<!-- Halaman SKP -->
      <div class="contentSKP">
       <legend><h3>Sasaran Kerja Pegawai
        <div class="pull-right"><a href="<?= base_url('unit_kerja/kegiatanproses/addSKP') ?>" class="btn btn-md btn-info">Tambah</a></div>
        </h3></legend>

<!-- Halaman Edit SKP -->
        <div class="editSKP">
          <h3 align="right">Edit Sasaran Kerja Pegawai</h3>
          <div class="alert alert-danger" id="alertSKP"></div>
          <form class="editskp" action="<?= base_url('unit_kerja/kegiatanproses/updateSKP') ?>" method="post">
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

        <table class="table  table-bordered table-hover">
          <tr class="bg-blue">
            <th>No</th>
            <th width="25%" >Indikator Kinerja</th>
            <th>Kegiatan</th>
            <th width="9%">Volume</th>
            <th width="9%">Mutu</th>
            <th width="9%">Waktu</th>
            <th width="9%">Biaya</th>
            <th>Aksi</th>
          </tr>
      <?php  $noskp = 1; $jum = 1; ?>
      <?php foreach ($dataSKP as $skp) { ?>
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
             <td>
             <?php if(!empty($skp->nama_skp)) { ?>
                  <a id="pilihSKP" data-id_skp="<?= $skp->id_skp ?>" data-nama_skp="<?= $skp->nama_skp ?>" data-target_volume="<?= $skp->target_volume ?>" data-target_waktu="<?= $skp->target_waktu ?>" data-target_mutu="<?= $skp->target_mutu ?>" data-target_biaya="<?= $skp->target_biaya ?>" class="btn btn-success btn-sm">
                      Edit SKP
                  </a>
            <?php } ?>
             </td>

          </tr>
      <?php  } ?>
        </table>
      </div>

      <div class="contentSOP">
        <legend><h3>Standar Operasional Prosedur
        <div class="pull-right"><a href="<?= base_url('unit_kerja/kegiatanproses/addsop') ?>" class="btn btn-md btn-info" align="right">Tambah</a></div>
        </h3></legend>

        <div class="editSOP">
          <h3 align="right">Edit Standar Operasional Prosedur</h3>
          <div class="alert alert-danger" id="alertSOP"></div>
          <form class="editsop" action="<?= base_url('unit_kerja/kegiatanproses/updateSOP') ?>" method="post">
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

  <?php if($this->session->flashdata('notif') ){ ?>
                <div class="callout callout-<?= $this->session->flashdata('class'); ?>" id="notifications" data-halaman="<?= $this->session->flashdata('halaman'); ?>">
                <?= $this->session->flashdata('notif'); ?>
                </div>
                <?php } ?>


<script type="text/javascript" src="<?= base_url().'assets1/includeJS/kegiatanproses.js' ?>"></script>
