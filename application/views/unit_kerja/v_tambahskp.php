
<br/><br/>
<div class="box box-info">
	<div class="box-header">
		<div class="box-title"> <h3>Tambah Sasaran Kerja Pegawai</h3> </div>
	</div>
	<div class="box-body">
		<div class="table-responsive">
					<form class="form-skp" action="<?= base_url('unit_kerja/kegiatanproses/saveSKP') ?>" method="post">
						<table class="table table-bordered" id="tb-skp">
						  <tr style="background-color: grey; color: white;">
						    <th width="27%">Indikator Kinerja</th>
						    <th width="25%">Kegiatan</th>
						    <th width="10%">Volume</th>
						    <th width="10%">Mutu</th>
							<th width="10%">Waktu</th>
							<th width="15%">Biaya</th>
						    <th width="5%"><button type="button" name="add" id="add-skp" class="btn btn-success btn-md"> + </button></th>
						  </tr>
						  <tr>
								<td>
									<select class="form-control" name="id_pk" required>
										<option value=""></option>
										<?php foreach ($select as $option): ?>
											<?php echo $option->id_pk; ?>
											<option value="<?= $option->id_pk ?>"><?= $option->nama_ik ?></option>
										<?php endforeach; ?>
									</select>
								</td>
						    <td><textarea name="nama_skp[]" class="form-control" style="height:100px;" required></textarea></td>
						    <td><input type="text" name="target_volume[]" class="form-control" style="width:150px;" required></td>
						    <td><input type="text" name="target_mutu[]" class="form-control" style="width:150px;" required></textarea></td>
						    <td><input type="text" name="target_waktu[]" class="form-control" style="width:150px;" required></textarea></td>
							<td><input type="number" class="form-control" name="target_biaya[]"></td>
						    <td></td>
						  </tr>
						</table>

						<div class="form-group">
						  <center>
						    <button type="submit" name="submit" class="btn btn-info btn-md">Simpan</button>
						    <a href="<?= base_url('unit_kerja/kegiatanproses')  ?>" type="button" name="cancel" class="btn btn-md btn-danger">Batal</a>
						  </center>
						</div>
					</form>
				</div>
	</div>
</div>


<script type="text/javascript" src="<?= base_url().'assets1/includeJS/tambahdata.js' ?>"></script>
