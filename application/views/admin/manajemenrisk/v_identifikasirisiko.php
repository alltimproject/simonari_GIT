<?php

  $jum1 = 1;
  $nosop = 1;

 ?>
<div class="row">
<?php $this->load->view('admin/include/sidebar_Manajemenrisk'); ?>
</div>
<div class="rightcolumn">
  <div class="card">
    <div class="editRisiko">
          <legend id="judulRisiko">Tambah Identifikasi Risiko</legend>
          <div class="alert alert-danger" id="alertRisiko"></div>
          <form class="formRisiko" action="<?= base_url('admin/manajementrisk/updateRisiko') ?>" method="post">
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

  </div>
</div>
	<script type="text/javascript" src="<?= base_url().'assets1/includeJS/admin/manajement.js' ?>"></script>
