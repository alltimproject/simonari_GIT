	<br/><br/>
	<div class="box box-info" onbeforeunload="coba();">
		<div class="box-header">
			<div class="box-title"><h3>Tambah Perjanjian Kinerja</h3></div>
		</div>
		<div class="box-body">
			<div class="table-responsive">
				<form class="form-pk" action="<?= base_url('unit_kerja/kegiatanproses/savePK') ?>" method="post">
					<table class="table table-bordered table-responsive" id="tb-pk">
						<tr style="background-color: grey; color: white">
						    <th width="40%">Indikator Kinerja</th>
						    <th width="30%">Target</th>
						    <th width="20%">Anggaran</th>
						    <th width="10%">Tahun</th>
						    <th width="5%"><button type="button" name="add" id="add-pk" class="btn btn-success btn-md">+</button></th>
						</tr>
						<tr>
						    <td><textarea name="nama_ik[]" class="form-control" style="height: 80px" id="nama_ik" required></textarea></td>
						    <td><textarea name="target[]" class="form-control" style="height: 80px" id="target" required></textarea></td>
						    <td><input type="number" class="form-control" name="anggaran[]" id="anggaran" required></td>
						    <td><input type="number" class="form-control" name="tahun_pk[]" maxlength="4" id="tahun_pk" required></td>
						    <td></td>
						</tr>
					</table>
					<div class="form-group">
						<center>
				   			<button type="submit" name="submit" class="btn btn-info btn-md">Simpan</button>
				   			<a href="<?= base_url('unit_kerja/kegiatanproses') ?>" name="cancel" class="btn btn-md btn-danger">Batal</a>
						</center>
					</div>
				</form>
			</div>
		</div>
	</div>


<script type="text/javascript" src="<?= base_url().'assets1/includeJS/tambahdata.js' ?>"></script>
