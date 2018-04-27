	<br/><br/>
	<div class="box box-info">
		<div class="box-header">
			<div class="box-title"> <h3>Tambah Standar Operasional Prosedur </h3></div>
		</div>
		<div class="box-body">
			<div class="table-responsive">
					<form class="form-sop" action="<?= base_url('unit_kerja/kegiatanproses/saveSOP') ?>" method="post">
						<table class="table" id="tb-sop">
						    <tr>
						        <td  style="background-color: grey; color: white;">Indikator Kinerja</td>
						        <td>
						            <select class="form-control" name="id_pk" id="selectPK" required>
										<option value="">-- Pilih PK --</option>
										<?php foreach ($select as $option): ?>
											<?php echo $option->id_pk; ?>
											<option value="<?= $option->id_pk ?>"><?= $option->nama_ik ?></option>
										<?php endforeach; ?>
									</select>
						        </td>
						        <td></td>
						    </tr>
						    <tr>
						        <td  style="background-color: grey; color: white;">Sasaran Kerja Pegawai</td>
						        <td>
						            <select class="form-control" name="id_skp" id="selectSKP" disabled="" required>
	                   				 	<option value="">--Pilih Kegiatan--</option>
	                 				 </select>
						        </td>
						        <td></td>
						    </tr>
						  	<tr>
                                <td width="15%" style="background-color: grey; color: white;">Proses Bisnis</td>
                                <td><textarea name="nama_sop[]" class="form-control" style="height:100px" required></textarea></td>
						    	<td width="5%"><center><button type="button" name="add" id="add-sop" class="btn btn-success btn-md"> + </button></center></td>
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
