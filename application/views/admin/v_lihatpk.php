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
        <a href="<?= base_url('admin/kegiatanprosesbisnis/lihatskp/'.$this->session->userdata('session_unit'))  ?>"  class="w3-button w3-block w3-teal">Sasaran Kerja Pegawai</a>
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
									</td>

                </tr>

               <?php endforeach; ?>
              </tbody>
            </table>
          </div>
          </div>
        </div>
