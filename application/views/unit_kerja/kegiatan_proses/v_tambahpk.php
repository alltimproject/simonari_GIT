
	<div class="box box-info" onbeforeunload="coba();">
		<div class="box-header">
			<div class="box-title"><h3>Tambah Perjanjian Kinerja</h3></div>
		</div>
		<div class="box-body">
			<div class="table-responsive">
				<form class="form-tambah">
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
				   			<a name="cancel" class="btn btn-md btn-danger" id="cancelButton">Batal</a>
						</center>
					</div>
				</form>
			</div>
		</div>
	</div>


<script type="text/javascript">
    $(function(){
          var count = 1;
          $('#add-pk').click(function(){
            count = count + 1;
            var html_code = "<tr id='baris"+count+"'>";
            html_code += "<td><textarea name='nama_ik[]' class='form-control' style='height: 80px' id='nama_ik' required></textarea></td>";
            html_code += "<td><textarea name='target[]' class='form-control' style='height: 80px' id='target' required></textarea></td>";
            html_code += "<td><input type='number' class='form-control' name='anggaran[]' id='anggaran' required></td>";
            html_code += "<td><input type='number' class='form-control' name='tahun_pk[]' maxlength='4' id='tahun_pk' required></td>";
            html_code += "<td><button id='"+count+"' type='button' name='remove' class='btn btn-danger btn-md remove'>-</button></td>";
            html_code += "</tr>";
            $('#tb-pk').append(html_code);
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
                    $('#content').load('<?= base_url('unit_kerja/kegiatan_proses/pk') ?>', function(){
                        $('#content').show('slow');
                    });
                });
                  
              }  
            });
        
          $('.form-tambah').submit(function(){
            var link = '<?= base_url('unit_kerja/kegiatan_proses/proses_pk/tambah') ?>';
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
