	<br/><br/>
	<div class="box box-info">
		<div class="box-header">
			<div class="box-title"> <h3>Tambah Standar Operasional Prosedur </h3></div>
		</div>
		<div class="box-body">
			<div class="table-responsive">
					<form class="form-sop" action="<?= base_url('unit_kerja/kegiatanproses/saveSOP') ?>" method="post">
						<table class="table table-bordered" id="tb-sop">
							<tr>
								<th>Indikator Kinerja & Sasaran Kerja Pegawai</th>
								<td colspan="4">
									<select class="form-control" name="id_pk" id="selectPK" required>
										<option value="">-- Pilih PK --</option>
										<?php foreach ($select as $option): ?>
											<?php echo $option->id_pk; ?>
											<option value="<?= $option->id_pk ?>"><?= $option->nama_ik ?></option>
										<?php endforeach; ?>
									</select>
								</td>
                				<td colspan="4">
	                  				<select class="form-control" name="id_skp" id="selectSKP" disabled="" required>
	                   				 	<option value="">--Pilih Kegiatan--</option>
	                 				 </select>
                				</td>
                				<td></td>
							</tr>
						  	<tr style="background-color: grey; color: white;">
								<th width="15%">Proses Bisnis</th>
						    <th width="15%">Risiko</th>
						    <th width="5%">Kemungkinan</th>
								<th width="5%">Dampak</th>
								<th width="15%">Penyebab</th>
								<th width="10%">Kategori Penyebab</th>
								<th width="15%">Pengendalian Yang Sudah Ada</th>
								<th width="10%">Sisa Risiko</th>
						    	<th width="5%"><center><button type="button" name="add" id="add-sop" class="btn btn-success btn-md"> + </button></center></th>
						  	</tr>
						  	<tr>
						    	<td><textarea name="nama_sop[]" class="form-control" style="height:100px" required></textarea></td>
								<td><textarea name="nama_risk[]" class="form-control" style="height:100px" required></textarea></td>
						    	<td><select name="frekuensi[]" class="form-control frekuensi" required><option value=""></option><option value="1">1 - Sangat Jarang</option><option value="2">2 - Jarang</option><option value="3">3 - Kadang-Kadang</option><option value="4">4 - Sering</option><option value="5">5 - Sangat Sering</option></select></td>
						    	<td><select name="dampak[]" class="form-control dampak" required><option value=""></option><option value="1">1 - Sangat Rendah</option><option value="2">2 - Rendah</option><option value="3">3 - Sedang</option><option value="4">4 - Tinggi</option><option value="5">5 - Sangat Tinggi</option></select></td>
								<td><textarea name="deskripsi_cause[]" class="form-control" style="height:100px" required></textarea></td>
								<td><select name="kategori_cause[]" class="form-control" required><option value="">--Pilih Kategori--</option><option value="Man">Man</option><option value="Money">Money</option><option value="Method">Method</option><option value="Machine">Machine</option><option value="Material">Material</option></select></td>
								<td><textarea name="deskripsi_p_exist[]" class="form-control" style="height:100px" required></textarea></td>
						    	<td><textarea name="sisa_risk[]" class="form-control" style="height:100px" required></textarea></td>
						    	<td></td>
						  	</tr>
						</table>

						<div class="form-group">
						  <center>
						    <button type="submit" name="submit" class="btn btn-info btn-md">Simpan</button>
						    <a href="<?= base_url('unit_kerja/kegiatanproses') ?>" type="button" name="cancel" class="btn btn-md btn-danger">Batal</a>
						  </center>
						</div>
					</form>
				</div>

		</div>
	</div>


<script type="text/javascript" src="<?= base_url().'assets1/includeJS/tambahdata.js' ?>"></script>
