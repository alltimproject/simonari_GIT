
    <legend>
        <h3>Perjanjian Kinerja
          <div class="pull-right">
              <a href="<?= base_url('unit_kerja/kegiatan_proses/tambah_pk') ?>" class="btn btn-md btn-info tambah">Tambah</a>
          </div>
        </h3>
    </legend>




<!-- Halaman Edit PK -->
      <div class="contentEdit">
      <h3 align="right">Edit Perjanjian Kinerja</h3>
      <form class="form-edit">
        <table class="table table-bordered" id="tb-pk">
            <tr style="background-color: grey; color: white">
                <th width="35%">Indikator Kinerja</th>
                <th>Target</th>
                <th>Anggaran</th>
                <th>Tahun</th>
                <th></th>
            </tr>
            <tr>
                <td class="ik"><textarea name="nama_ik" class="form-control" style="height: 80px" id="nama_ik"></textarea></td>
                <td class="target"><textarea name="target" class="form-control" style="height: 80px" id="target"></textarea></td>
                <td class="anggaran"><input type="number" class="form-control" name="anggaran" id="anggaran"></td>
                <td class="tahun_pk"><input type="number" class="form-control" name="tahun_pk" maxlength="4" id="tahun_pk"></td>
                <td>
                  <center>
                    <button type="submit" class="btn btn-md btn-success"><i class="fa fa-save"></i></button>
                    <button type="button" class="btn btn-md btn-danger" id="cancelButton"><i class="fa fa-close"></i></button>
                  </center>
                </td>
            </tr>
            <input type="hidden" id="id_pk" name="id_pk">
          </table>
        </form>
      </div>
<!-- -->

<!-- Halaman Data PK -->

				<div class="table-responsive">
					<table class="table table-bordered">
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
              <?php   $nopk = 1; ?>
							<?php foreach ($dataPK as $pk): ?>
		            <tr>
		              <td><?= $nopk++ ?></td>
		              <td><?= $pk->nama_ik ?></td>
		              <td><?= $pk->target ?></td>
		              <td><?= $pk->anggaran ?></td>
		              <td><?= $pk->tahun_pk ?></td>
		              <td>
		                <a id="pilihPK" data-no="<?= $nopk++ ?>" data-id_pk="<?= $pk->id_pk ?>" data-nama_ik="<?= $pk->nama_ik ?>" data-target="<?= $pk->target ?>" data-anggaran="<?= $pk->anggaran ?>" data-tahun_pk="<?= $pk->tahun_pk ?>" class="btn btn-success btn-sm">Edit PK</a>
		              </td>
		            </tr>
		          <?php endforeach; ?>
						</tbody>
	        </table>
				</div>

<script type="text/javascript">
    $(function(){
        $('.contentEdit').hide();
        
        $(document).on('click', '#pilihPK', function(){
            $('.contentEdit').slideDown();
            $('html, body').animate({
    scrollTop: $('.contentEdit').offset().top
            });
            
            $('#no').val($(this).attr('data-no'));
            $('#nama_ik').val($(this).attr('data-nama_ik'));
            $('#target').val($(this).attr('data-target'));
            $('#anggaran').val($(this).attr('data-anggaran'));
            $('#tahun_pk').val($(this).attr('data-tahun_pk'));
            $('#id_pk').val($(this).attr('data-id_pk'));
        });
        
        $(document).on('click', '#cancelButton', function(){
            $('.contentEdit').slideUp();
        });
        
        $('.form-edit').submit(function(){
           var id_pk = $('#id_pk').val();
           var nama_ik = $('#nama_ik').val();
           var target = $('#target').val();
           var anggaran = $('#anggaran').val();
           var tahun_pk = $('#tahun_pk').val();
           var link = '<?= base_url('unit_kerja/kegiatan_proses/proses_pk/edit') ?>';
            
            if(id_pk == '' || nama_ik == '' || target == '' || anggaran == '' || tahun_pk == '' || id_pk == '')
            {
                toastr.error('Field tidak boleh kosong', 'Gagal');
            } else{
                $.ajax({
                    url: link,
                    type: "POST",
                    data: $('.form-edit').serialize(),
                    success: function(data){
                        if(data == "berhasil")
                        {
                            toastr.success('Berhasil Mengedit Perjanjian Kinerja');
                            $('#content').load('<?= base_url('unit_kerja/kegiatan_proses/pk')  ?>');
                        } else
                        {
                            toastr.error('Tidak Berhasil Mengedit Perjanjian Kinerja');
                            $('#content').load('<?= base_url('unit_kerja/kegiatan_proses/pk')  ?>');
                        }
                    },
                    error: function(){
                        toastr.error('Tidak Berhasil Mengedit Perjanjian Kinerja');
                        $('#content').load('<?= base_url('unit_kerja/kegiatan_proses/pk')  ?>');
                    }
                });
            }
            
            return false;
        });
    });
    
    $(function(){
        $('.tambah').click(function(){
            var link = $(this).attr('href');
            $('#content').hide('fast', function(){
                $('#content').load(link, function(){
                    $('#content').show('slow');
                });
            });
            return false;
        });
    });


</script>
