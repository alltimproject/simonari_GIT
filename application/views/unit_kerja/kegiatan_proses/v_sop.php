<div class="contentSOP">
        <legend><h3>Standar Operasional Prosedur
        <div class="pull-right">
            <a href="<?= base_url('unit_kerja/kegiatan_proses/tambah_sop') ?>" class="btn btn-md btn-info tambah" align="right">Tambah</a>
        </div>
        </h3></legend>

        <div class="contentEdit">
          <h3 align="right">Edit Standar Operasional Prosedur</h3>
          <form class="form-edit">
            <table class="table table-bordered" id="tb-sop">
                <tr style="background-color: grey; color: white;">
                  <th width="25%">Proses Bisnis</th>
                </tr>
                <tr>
                  <td><textarea id="nama_sop" name="nama_sop" class="form-control" style="height:100px"></textarea></td>
                </tr>
                
                <tr>
                  <td colspan="4">
                    <div class="pull-right">
                      <input type="hidden" name="id_sop" id="id_sop">
                      <button type="submit" name="submit" class="btn btn-success btn-md"><span class="fa fa-save"></span></button>
                      <button type="button" class="btn btn-danger btn-md" id="cancelButton"><span class="fa fa-close"></span></button>
                    </div>
                  </td>
                </tr>
            </table>
          </form>
        </div>

        <table class="table table-bordered">
          <tr class="bg-blue">
            <th>No</th>
            <th>Indikator Kinerja</th>
            <th>Kegiatan</th>
            <th>Proses Bisnis</th>
            <th>Aksi</th>
          </tr>

      <?php $nosop = 1; $jum1 = 1; $jum2 = 1; ?>
      <?php foreach ($dataSOP as $sop) { ?>
          <tr>
            <?php

              if($jum2 <= 1)
              {
                $jmlpk = $sop->rowpk;
                if ($jmlpk == 0) {
                  $jmlpk = 1;
                }
            ?>
              <td rowspan="<?= $jmlpk ?>"><?= $nosop ?></td>
              <td rowspan="<?= $jmlpk ?>"><?= $sop->nama_ik ?></td>
            <?php
                $jum2 = $sop->rowpk;
                $nosop++;
              } else {
                $jum2 = $jum2 - 1;
              }
             ?>

            <?php

              if($jum1 <= 1)
              {
                $jmlsop = $sop->rowskp;
                if ($jmlsop == 0) {
                  $jmlsop = 1;
                }
            ?>
              <td rowspan="<?= $jmlsop ?>"><?= $sop->nama_skp ?></td>
            <?php
                $jum1 = $sop->rowskp;
              } else {
                $jum1 = $jum1 - 1;
              }
             ?>

             <td><?= $sop->nama_sop ?></td>

             <td>
             <?php if(!empty($sop->nama_sop)) { ?>
                  <a id="pilihSOP" data-id_sop="<?= $sop->id_sop ?>" data-nama_sop="<?= $sop->nama_sop ?>" class="btn btn-success btn-sm">
                      Edit SOP
                  </a>
             <?php } ?>
             </td>
          </tr>
      <?php  } ?>
        </table>
      </div>
      
<script type="text/javascript">
    $(function(){
        $('.contentEdit').hide();
        
        $(document).on('click', '#pilihSOP', function(){
            $('.contentEdit').slideDown();
            $('html, body').animate({
    scrollTop: $('.contentEdit').offset().top
            });
            
            $('#nama_sop').val($(this).attr('data-nama_sop'));
            $('#id_sop').val($(this).attr('data-id_sop'));
        });
        
        $(document).on('click', '#cancelButton', function(){
            $('.contentEdit').slideUp();
        });
        
        $('.form-edit').submit(function(){
           var id_sop = $('#id_sop').val();
           var nama_sop = $('#nama_sop').val();
           var link = '<?= base_url('unit_kerja/kegiatan_proses/proses_sop/edit') ?>';
            
            if(id_sop == '' || nama_sop == '')
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
                            toastr.success('Berhasil Mengedit Standar Operasional Prosedur');
                            $('#content').load('<?= base_url('unit_kerja/kegiatan_proses/sop')  ?>');
                        } else
                        {
                            toastr.error('Tidak Berhasil Mengedit Standar Operasional Prosedur');
                            $('#content').load('<?= base_url('unit_kerja/kegiatan_proses/sop')  ?>');
                        }
                    },
                    error: function(){
                        toastr.error('Tidak Berhasil Standar Operasional Prosedur');
                        $('#content').load('<?= base_url('unit_kerja/kegiatan_proses/sop')  ?>');
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
