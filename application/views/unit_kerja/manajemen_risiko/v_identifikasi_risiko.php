    
        <legend><h3>Identifikasi Risiko</h3></legend>
        
         <div class="form">
          <h4 class="pull-right judul-form"></h4>
          <form class="form-data">
            <table class="table table-bordered" id="tb-sop">
                <tr style="background-color: grey; color: white;">
                  <th width="25%">Proses Bisnis</th>
                  <th width="25%">Risiko</th>
                  <th width="25%">Kemungkinan</th>
                  <th width="25%">Dampak</th>
                </tr>
                <tr>
                  <td><textarea id="nama_sop" name="nama_sop" class="form-control" style="height:100px" readonly=""></textarea></td>
                  <td><textarea id="nama_risk" name="nama_risk" class="form-control" style="height:100px"></textarea></td>
                  <td><select id="frekuensi" name="frekuensi" class="form-control frekuensi"><option value=""></option><option value="1">1 - Sangat Jarang</option><option value="2">2 - Jarang</option><option value="3">3 - Kadang-kadang</option><option value="4">4 - Sering</option><option value="5">5 - Sangat Sering</option></select></td>
                  <td><select id="dampak" name="dampak" class="form-control dampak"><option value=""></option><option value="1">1 - Sangat Rendah</option><option value="2">2 - Rendah</option><option value="3">3 - Sedang</option><option value="4">4 - Tinggi</option><option value="5">5 - Sangat Tinggi</option></select></td>
                </tr>
                <tr style="background-color: grey; color: white;">
                  <th>Penyebab</th>
                  <th>Kategori</th>
                  <th>Pengendalian</th>
                  <th>Sisa Risiko</th>
                </tr>
                <tr>
                  <td><textarea id="deskripsi_cause" name="deskripsi_cause" class="form-control" style="height:100px"></textarea></td>
                  <td><select id="kategori_cause" name="kategori_cause" class="form-control"><option value="">--Pilih Kategori--</option><option value="Man">Man</option><option value="Money">Money</option><option value="Method">Method</option><option value="Machine">Machine</option><option value="Material">Material</option></select></td>
                  <td><textarea id="deskripsi_pengendalian" name="deskripsi_pengendalian" class="form-control" style="height:100px"></textarea></td>
                  <td><textarea id="sisa_risk" name="sisa_risk" class="form-control" style="height:100px"></textarea></td>
                </tr>
                <tr>
                  <td colspan="4">
                    <div class="pull-right">
                      <input type="hidden" name="id_sop" id="id_sop">
                      <button type="submit" name="submit" id="submit"></button>
                      <button type="button" class="btn btn-danger btn-md" id="cancelButton">Batal</button>
                    </div>
                  </td>
                </tr>
            </table>
          </form>
        </div>
        
        <div class="data">
            <div class="table-responsive">
                <table class="table table-bordered">
              <tr class="bg-blue">
                <th>No</th>
                <th>Indikator Kinerja</th>
                <th>Kegiatan</th>
                <th>Proses Bisnis</th>
                <th>Risiko</th>
                <th>Kemungkinan</th>
                <th>Dampak</th>
                <th>Tingkat Risiko</th>
                <th>Sisa Risiko</th>
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
                 <td><?= $sop->nama_risk ?></td>
                 <td><?= $sop->frekuensi ?></td>
                 <td><?= $sop->dampak ?></td>
                 <td><?= $sop->hitung ?></td>
                 <td><?= $sop->sisa_risk ?></td>
                 <td>
                     <?php if($sop->nama_risk == ''){ ?>
                          <a id="tambah" data-id_sop="<?= $sop->id_sop ?>" data-nama_sop="<?= $sop->nama_sop ?>" data-nama_risk="<?= $sop->nama_risk ?>" data-sisa_risk="<?= $sop->sisa_risk ?>" data-frekuensi="<?= $sop->frekuensi ?>" data-dampak="<?= $sop->dampak ?>" data-deskripsi_cause="<?= $sop->deskripsi_cause ?>" data-kategori_cause="<?= $sop->kategori_cause ?>" data-deskripsi_pengendalian="<?= $sop->deskripsi_pengendalian ?>" class="btn btn-info btn-sm pilih">Tambah Risiko</a>
                     <?php } else { ?>
                         <a id="edit" data-id_sop="<?= $sop->id_sop ?>" data-nama_sop="<?= $sop->nama_sop ?>" data-nama_risk="<?= $sop->nama_risk ?>" data-sisa_risk="<?= $sop->sisa_risk ?>" data-frekuensi="<?= $sop->frekuensi ?>" data-dampak="<?= $sop->dampak ?>" data-deskripsi_cause="<?= $sop->deskripsi_cause ?>" data-kategori_cause="<?= $sop->kategori_cause ?>" data-deskripsi_pengendalian="<?= $sop->deskripsi_pengendalian ?>" class="btn btn-success btn-sm pilih">Edit Risiko</a>
                     <?php } ?>

                 </td>
              </tr>
          <?php  } ?>
            </table>
            </div>
        </div>
        
<script type="text/javascript">
    $(function(){
        $('.form').hide();
        
        $(document).on('click', '.pilih', function(e){
            $('.form').slideDown();
            
            if($(this).attr('id') == "tambah")
                {
                    $('.data').hide();
                    $('.judul-form').text('Tambah Identifikasi Risiko');
                    $('#submit').removeClass().addClass('btn btn-md btn-info').text('Simpan');
                }
            else
                {
                    $('.judul-form').text('Edit Identifikasi Risiko');
                    $('#submit').removeClass().addClass('btn btn-md btn-success').text('Edit');
                }
            
            
            $('html, body').animate({
                scrollTop: $('.form').offset().top
            });
            
            $('#id_sop').val($(this).attr('data-id_sop'));
            $('#nama_sop').val($(this).attr('data-nama_sop'));
            $('#nama_risk').val($(this).attr('data-nama_risk'));
            $('#frekuensi').val($(this).attr('data-frekuensi'));
            $('#dampak').val($(this).attr('data-dampak'));
            $('#deskripsi_cause').val($(this).attr('data-deskripsi_cause'));
            $('#kategori_cause').val($(this).attr('data-kategori_cause'));
            $('#deskripsi_pengendalian').val($(this).attr('data-deskripsi_pengendalian'));
            $('#sisa_risk').val($(this).attr('data-sisa_risk'));     
        });
        
        $('#cancelButton').click(function(){
            $('.form').slideUp();
            $('.data').show();
        });
        
        $('.form-data').submit(function(){
            var link = '<?= base_url('unit_kerja/manajemen_risiko/proses_identifikasi/update') ?>';
           if($("#nama_risk").val() == '' || $("#frekuensi").val() == '' || $("#dampak").val() == '' || $("#deskripsi_cause").val() == '' || $("#kategori_cause").val() == '' || $("#deskripsi_pengendalian").val() == '' || $("#sisa_risk").val() == '')
              {
                toastr.error('Field tidak boleh kosong');
              }
            else
              {
                $.ajax({
                    url: link,
                    type: "POST",
                    data: $('.form-data').serialize(),
                    success: function(data)
                    {
                        if(data == "berhasil")
                        {
                            toastr.success('Berhasil Menambah Identifikasi Risiko');
                            $('#content').load('<?= base_url('unit_kerja/manajemen_risiko/identifikasi_risiko') ?>');
                        } else {
                            toastr.error('Berhasil Menambah Identifikasi Risiko');
                            $('#content').load('<?= base_url('unit_kerja/manajemen_risiko/identifikasi_risiko') ?>');
                        }
                    },
                    error: function(){
                        toastr.error('Berhasil Menambah Identifikasi Risiko');
                        $('#content').load('<?= base_url('unit_kerja/manajemen_risiko/identifikasi_risiko') ?>');
                    }
               
                });
              }
            
            return false;
        });
    });

</script>
        
       
