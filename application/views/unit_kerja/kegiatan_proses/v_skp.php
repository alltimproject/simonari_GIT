 
     
     
     
      

       <legend><h3>Sasaran Kerja Pegawai
        <div class="pull-right"><a href="<?= base_url('unit_kerja/kegiatan_proses/tambah_skp') ?>" class="btn btn-md btn-info tambah">Tambah</a></div>
        </h3></legend>

<!-- Halaman Edit SKP -->
        <div class="contentEdit">
          <h3 align="right">Edit Sasaran Kerja Pegawai</h3>
          <form class="form-edit">
            <table class="table table-bordered" id="tb-skp">
              <tr style="background-color: grey; color: white;">
                <th width="20%">Kegiatan</th>
                <th width="20%">Volume</th>
                <th width="20%">Mutu</th>
                <th width="15%">Waktu</th>
                <th width="15%">Biaya</th>
                <th></th>
              </tr>
              <tr>
                <td><textarea name="nama_skp" class="form-control" style="height:100px;" id="nama_skp"></textarea></td>
                <td><input type="text" name="target_volume" id="target_volume" class="form-control"></td>
                <td><input type="text" name="target_mutu" id="target_mutu" class="form-control"></td>
                <td><input type="text" name="target_waktu" id="target_waktu" class="form-control"></td>
                <td><input type="number" class="form-control" name="target_biaya" id="target_biaya"></td>
                <td>
                  <input type="hidden" name="id_skp" id="id_skp">
                  <button type="submit" name="submit" class="btn btn-success btn-md"><span class="fa fa-save"></span></button>
                  <button type="button" class="btn btn-danger btn-md" id="cancelButton"><span class="fa fa-close"></span></button>
                </td>
              </tr>
            </table>
          </form>
          </div>
<!-- Akhir halaman Edit SKP -->

        <table class="table  table-bordered table-hover">
          <tr class="bg-blue">
            <th>No</th>
            <th width="25%" >Indikator Kinerja</th>
            <th>Kegiatan</th>
            <th width="9%">Volume</th>
            <th width="9%">Mutu</th>
            <th width="9%">Waktu</th>
            <th width="9%">Biaya</th>
            <th>Aksi</th>
          </tr>
      <?php  $noskp = 1; $jum = 1; ?>
      <?php foreach ($dataSKP as $skp) { ?>
          <tr>
            <?php

              if($jum <= 1)
              {
                $jmlrow = $skp->rowpk;
                if ($jmlrow == 0) {
                  $jmlrow = 1;
                }
            ?>
              <td rowspan="<?= $jmlrow ?>"><?= $noskp ?></td>
              <td rowspan="<?= $jmlrow ?>"><?= $skp->nama_ik ?></td>
            <?php
                $jum = $skp->rowpk;
                $noskp++;
              } else {
                $jum = $jum - 1;
              }
             ?>

             <td><?= $skp->nama_skp ?></td>
             <td><?= $skp->target_volume ?></td>
             <td><?= $skp->target_mutu ?></td>
             <td><?= $skp->target_waktu ?></td>
             <td><?= $skp->target_biaya ?></td>
             <td>
             <?php if(!empty($skp->nama_skp)) { ?>
                  <a id="pilihSKP" data-id_skp="<?= $skp->id_skp ?>" data-nama_skp="<?= $skp->nama_skp ?>" data-target_volume="<?= $skp->target_volume ?>" data-target_waktu="<?= $skp->target_waktu ?>" data-target_mutu="<?= $skp->target_mutu ?>" data-target_biaya="<?= $skp->target_biaya ?>" class="btn btn-success btn-sm">
                      Edit SKP
                  </a>
            <?php } ?>
             </td>

          </tr>
      <?php  } ?>
        </table>
        
<script type="text/javascript">
    $(function(){
        $('.contentEdit').hide();
        
        $(document).on('click', '#pilihSKP', function(){
            $('.contentEdit').slideDown();
            $('html, body').animate({
    scrollTop: $('.contentEdit').offset().top
            });
            

            $('#nama_skp').val($(this).attr('data-nama_skp'));
            $('#target_volume').val($(this).attr('data-target_volume'));
            $('#target_waktu').val($(this).attr('data-target_waktu'));
            $('#target_mutu').val($(this).attr('data-target_mutu'));
            $('#target_biaya').val($(this).attr('data-target_biaya'));
            $('#id_skp').val($(this).attr('data-id_skp'));
        });
        
        $(document).on('click', '#cancelButton', function(){
            $('.contentEdit').slideUp();
        });
        
        $('.form-edit').submit(function(){
           var id_skp = $('#id_skp').val();
           var nama_skp = $('#nama_skp').val();
           var target_volume = $('#target_volume').val();
           var target_waktu = $('#target_waktu').val();
           var target_mutu = $('#target_mutu').val();
           var target_biaya = $('#target_biaya').val();
           var link = '<?= base_url('unit_kerja/kegiatan_proses/proses_skp/edit') ?>';
            
            if(id_skp == '' || nama_skp == '' || target_volume == '' || target_waktu == '' || target_mutu == '' || target_biaya == '')
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
                            $('#content').load('<?= base_url('unit_kerja/kegiatan_proses/skp')  ?>');
                        } else
                        {
                            toastr.error('Tidak Berhasil Mengedit Perjanjian Kinerja');
                            $('#content').load('<?= base_url('unit_kerja/kegiatan_proses/skp')  ?>');
                        }
                    },
                    error: function(){
                        toastr.error('Tidak Berhasil Mengedit Perjanjian Kinerja');
                        $('#content').load('<?= base_url('unit_kerja/kegiatan_proses/skp')  ?>');
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
