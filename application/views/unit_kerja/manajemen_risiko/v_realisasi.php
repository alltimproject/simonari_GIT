
   <legend><h3>Realisasi Penanganan Risiko</h3></legend>

   <div class="form" style="margin-bottom: 10px;">
       <div class="row">
           <h4 class="pull-right judul-form"></h4>
       </div>
      <div class="row">
       <form class="form-data">
        <div class="col-md-4">
            <div class="form-group">
              <label>SOP</label>
              <textarea class="form-control" readonly="" id="nama_sop"></textarea>
            </div>
            <div class="form-group">
              <label>Risiko</label>
              <textarea class="form-control" readonly="" id="nama_risk"></textarea>
            </div>
            <div class="form-group">
              <label>Penyebab</label>
              <textarea class="form-control" readonly="" id="deskripsi_cause"></textarea>
            </div>
            <div class="form-group">
              <label>Penanganan Yang Sudah Ada</label>
              <textarea class="form-control" readonly="" id="deskripsi_pengendalian"></textarea>
            </div>
        </div>

        <div class="col-md-4">
          <div class="form-group">
              <label>Deskripsi RTP</label>
              <textarea name="deskripsi_rtp" class="form-control" id="deskripsi_rtp" readonly=""></textarea>
            </div>
            <div class="form-group">
              <label>Plan Mulai</label>
              <input type="date" class="form-control" name="plan_mulai" id="plan_mulai" readonly="">
            </div>
            <div class="form-group">
              <label>Plan Selesai</label>
              <input type="date" class="form-control" name="plan_selesai" id="plan_selesai" readonly="">
            </div>
            <div class="form-group">
              <label>Indikator Output</label>
              <input type="text" class="form-control" name="indikator_output" id="indikator_output" readonly="">
            </div>
            <div class="form-group">
              <label>PIC</label>
              <select class="form-control" name="pic" id="pic" disabled="">
                <option value=""> -- Pilih -- </option>
                <?php
                foreach($pegawai as $karyawan){
                  echo "<option value='$karyawan->nama_pegawai'> $karyawan->nama_pegawai </option>";
                }
                 ?>
              </select>
            </div>
        </div>

        <div class="col-md-4">
          <div class="form-group">
            <label>Real Mulai</label>
            <input type="date" class="form-control" name="real_mulai" id="real_mulai">
          </div>
          <div class="form-group">
            <label>Real Selesai</label>
            <input type="date" class="form-control" name="real_selesai" id="real_selesai">
          </div>
          <div class="form-group">
            <label>Hambatan</label>
            <textarea class="form-control" name="hambatan" id="hambatan"></textarea>
          </div>
          <div class="form-group">
            <label>Keterangan</label>
            <textarea class="form-control" name="keterangan" id="keterangan"></textarea>
          </div>
        </div>
        <div class="pull-right">
          <input name="id_sop" type="hidden" id="id_sop">
          <input type="hidden" name="action" id="action">
          <button type="submit" name="submit" id="submit"></button>
          <button type="button" name="cancel" class="btn btn-md btn-danger" id="cancelButton">Batal</button>
        </div>
       </form>
      </div>
 
    </div>


    <div class="data">
      <div class="table-responsive">
        <table class="table table-bordered table-hover">
          <tr class="bg-blue">
            <th>No</th>
            <th>Risiko</th>
            <th>Rencana Penanganan</th>
            <th>Mulai</th>
            <th>Selesai</th>
            <th>Output</th>
            <th>PIC</th>
            <th>Anggaran</th>
            <th>Real Mulai</th>
            <th>Real Selesai</th>
            <th>Hambatan</th>
            <th>Keterangan</th>
            <th>File</th>
            <th>Aksi</th>
          </tr>
     <?php $noreal = 1; ?>
      <?php foreach ($realisasi as $real): ?>
            <tr>
              <td><?= $noreal++ ?></td>
              <td><?= $real->nama_risk ?></td>
              <td><?= $real->deskripsi_rtp ?></td>
              <td><?= $real->plan_mulai ?></td>
              <td><?= $real->plan_selesai ?></td>
              <td><?= $real->indikator_output ?></td>
              <td><?= $real->pic ?></td>
              <td><?= $real->anggaran ?></td>
              <td><?= $real->real_mulai ?></td>
              <td><?= $real->real_selesai ?></td>
              <td><?= $real->hambatan ?></td>
              <td><?= $real->keterangan ?></td>
              <td>
                <?php if($real->status == "Close") {
                            if($real->berkas == "") { ?>
                                <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#uploadzip" id="upload" data-id_upload="<?= $real->id_sop ?>">Upload <span class="fa fa-upload"></span> </button>
                                
                <?php       } else { ?>
                                <a class="btn btn-danger btn-sm" href="<?= base_url('uploadzip/'.$real->berkas)?>">Download<span class="fa fa-download"></span></a>
                <?php       }
                    } else {
                        echo "";
                    } ?>   
              </td>

              <td>
                <?php if($real->status == "Open"){ ?>
                 
                  <a class="btn btn-info btn-sm pilih" id="tambah" data-id_sop="<?= $real->id_sop ?>" data-nama_sop="<?= $real->nama_sop ?>" data-nama_risk="<?= $real->nama_risk ?>" data-cause="<?= $real->deskripsi_cause ?>" data-pengendalian="<?= $real->deskripsi_pengendalian ?>" data-rencana="<?= $real->deskripsi_rtp ?>" data-plan_mulai="<?= $real->plan_mulai ?>" data-plan_selesai="<?= $real->plan_selesai ?>" data-output="<?= $real->indikator_output ?>" data-pic="<?= $real->pic ?>" data-real_mulai="<?= $real->real_mulai ?>" data-real_selesai="<?= $real->real_selesai ?>" data-hambatan="<?= $real->hambatan ?>" data-keterangan="<?= $real->keterangan ?>" data-berkas="<?= $real->berkas ?>" data-action="tambah"> Buat Realisasi </a>
                  
                <?php } else { ?>
                 
                  <a class="btn btn-success btn-sm pilih" id="edit" data-id_sop="<?= $real->id_sop ?>" data-nama_sop="<?= $real->nama_sop ?>" data-nama_risk="<?= $real->nama_risk ?>" data-cause="<?= $real->deskripsi_cause ?>" data-pengendalian="<?= $real->deskripsi_pengendalian ?>" data-rencana="<?= $real->deskripsi_rtp ?>" data-plan_mulai="<?= $real->plan_mulai ?>" data-plan_selesai="<?= $real->plan_selesai ?>" data-output="<?= $real->indikator_output ?>" data-pic="<?= $real->pic ?>" data-real_mulai="<?= $real->real_mulai ?>" data-real_selesai="<?= $real->real_selesai ?>" data-hambatan="<?= $real->hambatan ?>" data-keterangan="<?= $real->keterangan ?>" data-berkas="<?= $real->berkas ?>" data-action="edit"> Edit Realisasi </a>
                  
                <?php } ?>
             </td>
            
          </tr>
      <?php  endforeach ?>
        </table>
      </div>
    </div>
    
    <!-- Modal -->
    <div class="modal fade" id="uploadzip" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Upload Zip
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </h5>   
                </div>

                <form class="form-upload" enctype="multipart/form-data">
                <div class="modal-body">
                    <input type="hidden" name="id_sop" id="upload_id">
                    <div class="form-group">
                        <label> Pilih File ZIP </label>
                        <input type="file" name="zip_file" class="form-control" required/>
                    </div>
                 </div>

                 <div class="modal-footer">
                    <button type="submit" name="submit" class="btn btn-primary">Upload</button>
                 </div>
                </form>
            </div>
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
                    $('.judul-form').text('Tambah Rencana Penanganan Risiko');
                    $('#submit').removeClass().addClass('btn btn-md btn-info').text('Simpan');
                }
            else
                {
                    $('.judul-form').text('Edit Rencana Penanganan Risiko');
                    $('#submit').removeClass().addClass('btn btn-md btn-success').text('Edit');
                }
            
            
            $('html, body').animate({
                scrollTop: $('.form').offset().top
            });
            
            $('#id_sop').val($(this).attr('data-id_sop'));
            $('#nama_sop').val($(this).attr('data-nama_sop'));
            $('#nama_risk').val($(this).attr('data-nama_risk'));
            $('#deskripsi_cause').val($(this).attr('data-cause'));
            $('#deskripsi_pengendalian').val($(this).attr('data-pengendalian'));
            $('#action').val($(this).attr('data-action'));
            
            $('#deskripsi_rtp').val($(this).attr('data-rencana'));
            $('#plan_mulai').val($(this).attr('data-plan_mulai'));
            $('#plan_selesai').val($(this).attr('data-plan_selesai'));
            $('#indikator_output').val($(this).attr('data-output'));
            $('#pic').val($(this).attr('data-pic'));
            $('#status').val($(this).attr('data-status'));
            
            $('#real_mulai').val($(this).attr('data-real_mulai'));
            $('#real_selesai').val($(this).attr('data-real_selesai'));
            $('#hambatan').val($(this).attr('data-hambatan'));
            $('#keterangan').val($(this).attr('data-keterangan'));
            $('#action').val($(this).attr('data-action'));
            
            
        });
        
        $('#cancelButton').click(function(){
            $('.form').slideUp();
            $('.data').show();
        });
        
        $('.form-data').submit(function(){
            var link = '<?= base_url('unit_kerja/manajemen_risiko/proses_realisasi/update') ?>';
            
           if($('#real_mulai').val() == '' || $('#real_selesai').val() == '' || $('#hambatan').val() == '')
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
                        if(data == "berhasil tambah")
                        {
                            toastr.info('Berhasil Menambah Realisasi Penanganan Risiko');
                            $('#content').load('<?= base_url('unit_kerja/manajemen_risiko/realisasi_penanganan') ?>');
                        }
                        else if(data == "berhasil edit")
                        {
                            toastr.success('Berhasil Mengedit Realisasi Penanganan Risiko');
                            $('#content').load('<?= base_url('unit_kerja/manajemen_risiko/realisasi_penanganan') ?>');
                        }
                        else 
                        {
                            toastr.error('Tidak Berhasil Menambah / Mengedit Realisasi Penanganan Risiko');
                            $('#content').load('<?= base_url('unit_kerja/manajemen_risiko/realisasi_penanganan') ?>');
                        }
                    },
                    error: function(){
                        toastr.error('Berhasil Menambah Realisasi Penanganan Risiko');
                        $('#content').load('<?= base_url('unit_kerja/manajemen_risiko/realisasi_penanganan') ?>');
                    }
               
                });
              }
            
            return false;
        });
    });
    
    $(function(){
       $(document).on('click', '#upload', function(e){
           $('#upload_id').val($(this).attr('data-id_upload'));
           $('#alertUpload').hide();
       });
        
       $('.form-upload').submit(function(){
           var link = '<?= base_url('unit_kerja/manajemen_risiko/proses_realisasi/upload') ?>';
           
           $.ajax({
               url: link,
               type: "POST",
               data: new FormData(this),
               contentType: false,
               cache: false,
               processData: false,
               success: function(data){
                   if(data == "berhasil"){
                       toastr.success('Berhasil Upload Berkas');
                       $('#content').hide(function(){
                            $('#content').load('<?= base_url('unit_kerja/manajemen_risiko/realisasi_penanganan') ?>', function(){
                                $('#content').show('slow');
                            });
                        });
                       $('#uploadzip').modal('hide');
                   } else {
                       toastr.error('Tidak Berhasil Upload Berkas');
                       $('#content').hide(function(){
                            $('#content').load('<?= base_url('unit_kerja/manajemen_risiko/realisasi_penanganan') ?>', function(){
                                $('#content').show('slow');
                            });
                        });
                       $('#uploadzip').modal('hide');
                   }
               },
               error: function(){
                   toastr.error('Tidak Berhasil Upload Berkas');
                   $('#content').hide(function(){
                            $('#content').load('<?= base_url('unit_kerja/manajemen_risiko/realisasi_penanganan') ?>', function(){
                                $('#content').show('slow');
                            });
                        });
                   $('#uploadzip').modal('hide');
               }
           });
           return false;
       });
    });

</script>
    
   