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
				<div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><?= $jumlahPKunit ?></span>

            <div class="info-box-content">
              <span class="info-box-text"><h4>Perjanjian Kinerja</h4></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
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
									</td>

                </tr>

               <?php endforeach; ?>
              </tbody>
            </table>
          </div>
          </div>
        </div>


				<script type="text/javascript" src="<?= base_url().'assets1/includeJS/admin/sidebarkegProses.js' ?>"></script>
