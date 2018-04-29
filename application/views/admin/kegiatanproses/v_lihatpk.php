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
		<!-- Halaman Edit PK -->
		      <div class="editPK">
		      <h3 align="right">Edit Perjanjian Kerja</h3>
		      <div class="alert alert-danger" id="alertPK"></div>
		      <form class="editpk" action="<?= base_url('admin/kegiatanprosesbisnis/updatePK') ?>" method="post">
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


    <div class="card">
      <legend><h3>Perjanjian Kinerja
      <div class="pull-right"><a href="<?= base_url('admin/kegiatanprosesbisnis/addPK') ?>" class="btn btn-md btn-info">Tambah</a></div></h3></legend>
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
                    <table id="example1" class="table table-bordered table-striped table-hover">
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
                <?php
                $no = 1;
                foreach($showPK as $keyPK):?>
                <tr>
                  <td><?= $no++ ?></td>
                  <td><?= $keyPK->nama_ik ?></td>
                  <td><?= $keyPK->target ?></td>
                  <td><?= $keyPK->anggaran ?></td>
                  <td><?= $keyPK->tahun_pk ?></td>
									<td>
										<a onclick="return confirm('Anda yakin ingin menghapus data ?')" href="#" class="btn btn-danger btn-sm">Hapus</a>
										<a id="pilihPK" data-id_pk="<?= $keyPK->id_pk ?>" data-nama_ik="<?= $keyPK->nama_ik ?>" data-target="<?= $keyPK->target ?>" data-anggaran="<?= $keyPK->anggaran ?>" data-tahun_pk="<?= $keyPK->tahun_pk ?>" class="btn btn-success btn-sm">Edit PK</a>
									</td>

                </tr>

               <?php endforeach; ?>
              </tbody>
            </table>
          </div>
          </div>
        </div>


				<script type="text/javascript" src="<?= base_url().'assets1/includeJS/admin/sidebarkegProses.js' ?>"></script>
				<script type="text/javascript" src="<?= base_url().'assets1/includeJS/admin/kegiatanproses.js' ?>"></script>
