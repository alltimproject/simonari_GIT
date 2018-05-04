<div class="box box-info">
		<div class="box-header">
			<div class="box-title"> <h3>Tambah Standar Operasional Prosedur </h3></div>
		</div>
		<div class="box-body">
			<div class="table-responsive">
					<form class="form-tambah">
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
						    <button type="button" name="cancel" class="btn btn-md btn-danger" id="cancelButton">Batal</button>
						  </center>
						</div>
					</form>
				</div>

		</div>
	</div>


<script type="text/javascript">
$(function(){
  $('#selectPK').on('change', function(){
    var id_pk = $(this).val();
    if (id_pk == '') {
      $('#selectSKP').prop('disabled', true);
    } else {
      $('#selectSKP').prop('disabled', false);
      var link = "<?= base_url('unit_kerja/kegiatan_proses/getSKP') ?>"
      $.ajax({
        url: link,
        type: "POST",
        data: {'id_pk': id_pk},
        dataType: 'json',
        success: function(data){
          $('#selectSKP').html(data);
        },
        error: function(){
          alert("Belum ada Kegiatan");
        }
      });
    }
  });
});

$(function(){
    var count = 1;
      $('#add-sop').click(function(){
        count = count + 1;
        var html_code = "<tr id='baris"+count+"'>";
        html_code += "<td style='background-color: grey; color: white;'></td>";
        html_code += "<td><textarea name='nama_sop[]' class='form-control' style='height:100px' required></textarea></td>";
        html_code += "<td><center><button id='"+count+"' type='button' name='remove' class='btn btn-danger btn-md remove'> - </button></center></td>";
        html_code += "</tr>";
        $('#tb-sop').append(html_code);
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
										$('#content').load('<?= base_url('unit_kerja/kegiatan_proses/sop') ?>', function(){
												$('#content').show('slow');
												$('.loader').fadeOut();
										});
									});
                });

              }
      });

    $('.form-tambah').submit(function(){
        var link = '<?= base_url('unit_kerja/kegiatan_proses/proses_sop/tambah') ?>';
        $.ajax({
            url: link,
            type: "POST",
            data: $('.form-tambah').serialize(),
            success: function(data)
            {
                if(data == "berhasil")
                {
                    toastr.info('Berhasil Menambahkan Standar Operasional Prosedur');
                    $('.form-tambah')[0].reset();
                } else {
                    toastr.error('Tidak Berhasil Menambahkan Standar Operasional Prosedur');
                    $('.form-tambah')[0].reset();
                }

            },
            error: function(){
                toastr.error('Tidak Berhasil Menambahkan Standar Operasional Prosedur');
                $('.form-tambah')[0].reset();
            }
        });
        return false;
    });
});
</script>
