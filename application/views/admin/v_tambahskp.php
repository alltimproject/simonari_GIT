
<br/><br/>
<div class="box box-info">
	<div class="box-header">
		<div class="box-title"> <h3>Tambah Sasaran Kerja Pegawai</h3> </div>
	</div>
	<div class="box-body">
		<div class="table-responsive">
					<form class="form-skp" action="<?= base_url('admin/kegiatanprosesbisnis/saveSKP') ?>" method="post">
						<table class="table table-bordered" id="tb-skp">
						  <tr class="w3-dark-grey" >
						    <th width="15%">IK</th>
						    <th width="20%">SKP</th>
						    <th width="20%">Target Volume</th>
						    <th width="20%">Target Mutu</th>
							<th width="15%">Target Waktu</th>
							<th width="15%">Target Biaya</th>
						    <th width="5%"><button type="button" name="add" id="add-skp" class="btn btn-success btn-md"> + </button></th>
						  </tr>
						  <tr>
								<td>
									<select class="form-control" name="id_pk">
										<option value=""></option>
										<?php foreach ($select as $option): ?>
											<?php echo $option->id_pk; ?>
											<option value="<?= $option->id_pk ?>"><?= $option->nama_ik ?></option>
										<?php endforeach; ?>
									</select>
								</td>
						    <td><textarea name="nama_skp[]" class="form-control" style="height:100px;"></textarea></td>
						    <td><textarea name="target_volume[]" class="form-control" style="height:100px;"></textarea></td>
						    <td><textarea name="target_mutu[]" class="form-control" style="height:100px;"></textarea></td>
						    <td><textarea name="target_waktu[]" class="form-control" style="height:100px;"></textarea></td>
							<td><input type="number" class="form-control" name="target_biaya[]"></td>
						    <td></td>
						  </tr>
						</table>

						<div class="form-group">
						  <center>
						    <button type="submit" name="submit" class="btn btn-info btn-md">Save</button>
						  </center>
						</div>
					</form>
				</div>
	</div>
</div>
