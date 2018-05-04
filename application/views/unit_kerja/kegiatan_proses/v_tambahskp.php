
<div class="box box-info">
	<div class="box-header">
		<div class="box-title"> <h3>Tambah Sasaran Kerja Pegawai</h3> </div>
	</div>
	<div class="box-body">
		<div class="table-responsive">
					<form class="form-tambah">
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
						    <td><input type="text" name="target_mutu[]" class="form-control" style="width:150px;" required></td>
						    <td><input type="text" name="target_waktu[]" class="form-control" style="width:150px;" required></td>
							<td><input type="number" class="form-control" name="target_biaya[]"></td>
						    <td></td>
						  </tr>
						</table>

						<div class="form-group">
						  <center>
						    <button type="submit" name="submit" class="btn btn-info btn-md">Simpan</button>
						    <button type="button" name="cancel" class="btn btn-md btn-danger" id="cancelButton">Batal</button>
						  </center>
						</div>
					</form>
				</div>
	</div>
</div>


<script type="text/javascript">
    $(function(){
          var count = 1;
          $('#add-skp').click(function(){
            count = count + 1;
            var html_code = "<tr id='baris"+count+"'>";
            html_code += "<td></td>";
            html_code += "<td><textarea name='nama_skp[]' class='form-control' style='height:100px;' required></textarea></td>";
            html_code += "<td><input name='target_volume[]' class='form-control' style='width:150px;' required></td>";
            html_code += "<td><input name='target_mutu[]' class='form-control' style='width:150px;' required></td>";
            html_code += "<td><input name='target_waktu[]' class='form-control' style='width:150px;' required></td>";
            html_code += "<td><input type='number' class='form-control' name='target_biaya[]' required></td>";
            html_code += "<td><button id='"+count+"' type='button' name='remove' class='btn btn-danger btn-md remove'> - </button></td>";
            html_code += "</tr>";
            $('#tb-skp').append(html_code);
          });
          $(document).on('click', '.remove', function(){
            var button_id = $(this).attr("id");
            $('#baris'+button_id+'').remove();
          });

          $('#cancelButton').click(function(){
          var konfirm = confirm('Apakah anda yakin ingin membatalkan?');

          if(konfirm)
              {
                $('#content').hide(function(){
									$('.loader').fadeIn(function(){
										$('#content').load('<?= base_url('unit_kerja/kegiatan_proses/skp') ?>', function(){
												$('#content').show('slow');
												$('.loader').fadeOut();
										});
									});
                });
              }
            });

          $('.form-tambah').submit(function(){
            var link = '<?= base_url('unit_kerja/kegiatan_proses/proses_skp/tambah') ?>';
            $.ajax({
                url: link,
                type: "POST",
                data: $('.form-tambah').serialize(),
                success: function(data)
                {
                    if(data == "berhasil")
                    {
                        toastr.info('Berhasil Menambahkan Perjanjian Kinerja');
                        $('.form-tambah')[0].reset();
                    } else {
                        toastr.error('Tidak Berhasil Menambahkan Perjanjian Kinerja');
                        $('.form-tambah')[0].reset();
                    }

                },
                error: function(){
                    toastr.error('Tidak Berhasil Menambahkan Perjanjian Kinerja');
                    $('.form-tambah')[0].reset();
                }
            });
            return false;
        });
    });

</script>
