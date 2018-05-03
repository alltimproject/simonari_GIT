
   <legend><h3>Rencana Penanganan Risiko </h3></legend>

     <div class="form" style="margin-bottom: 10px;">
     <div class="row">
         <h4 class="pull-right judul-form"></h4>
     </div>
      
      
        <div class="row">
         <form class="form-data">
          <div class="col-md-6">
            <input type="hidden" name="id_unit" value="<?= $this->session->userdata('id_unit') ?>">
            <div class="form-group">
              <label>SOP</label>
              <textarea class="form-control" readonly="" id="nama_sop"></textarea>
              <input name="id_sop" type="hidden" value="" id="id_sop">
              <input name="action" type="hidden" value="" id="action">
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
          <div class="col-md-6">
            <div class="form-group">
              <label>Deskripsi RTP</label>
              <textarea name="deskripsi_rtp" class="form-control" id="deskripsi_rtp"></textarea>
            </div>
            <div class="form-group">
              <label>Plan Mulai</label>
              <input type="date" class="form-control" name="plan_mulai" id="plan_mulai">
            </div>
            <div class="form-group">
              <label>Plan Selesai</label>
              <input type="date" class="form-control" name="plan_selesai" id="plan_selesai">
            </div>
            <div class="form-group">
              <label>Indikator Output</label>
              <input type="text" class="form-control" name="indikator_output" id="indikator_output">
            </div>
            <div class="form-group">
              <label>PIC</label>
              <select class="form-control" name="pic" id="pic">
                <option value=""> -- Pilih -- </option>
                <?php
                foreach($pegawai as $karyawan){
                  echo "<option value='$karyawan->nama_pegawai'> $karyawan->nama_pegawai </option>";
                }
                 ?>
              </select>
            </div>
            <div class="form-group">
              <label>Status</label>
              <input type="text" class="form-control" name="status" id="status" readonly="">
            </div>
          </div>
          <div class="pull-right">
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
             <th>Penyebab</th>
             <th>Tingkat Risiko</th>
             <th>Penanganan Yang Sudah Ada</th>
             <th>Rencana Penanganan</th>
             <th>Mulai</th>
             <th>Selesai</th>
             <th>Indikator Output</th>
             <th>PIC</th>
             <th>Anggaran</th>
             <th>Aksi</th>
          </tr>

        <?php $nortp = 1; ?>
       <?php foreach ($rencana as $rtp): ?>
             <tr>
               <td><?= $nortp++ ?></td>
               <td><?= $rtp->nama_risk ?></td>
               <td><?= $rtp->deskripsi_cause ?></td>
               <td><?= $rtp->hitung ?></td>
               <td><?= $rtp->deskripsi_pengendalian ?></td>
               <td><?= $rtp->deskripsi_rtp ?></td>
               <td><?= $rtp->plan_mulai ?></td>
               <td><?= $rtp->plan_selesai ?></td>
               <td><?= $rtp->indikator_output ?></td>
               <td><?= $rtp->pic ?></td>
               <td><?= $rtp->anggaran ?></td>
               <td><?php if(!isset($rtp->deskripsi_rtp)){ ?>
                     <button id="tambah" class="btn btn-sm btn-info pilih" data-id_sop="<?= $rtp->id_sop ?>" data-nama_sop="<?= $rtp->nama_sop ?>" data-nama_risk="<?= $rtp->nama_risk ?>" data-cause="<?= $rtp->deskripsi_cause ?>" data-pengendalian="<?= $rtp->deskripsi_pengendalian ?>" data-rencana="<?= $rtp->deskripsi_rtp ?>" data-plan_mulai="<?= $rtp->plan_mulai ?>" data-plan_selesai="<?= $rtp->plan_selesai ?>" data-output="<?= $rtp->indikator_output ?>" data-pic="<?= $rtp->pic ?>" data-status="<?= $rtp->status ?>" data-action="tambah">Buat Rencana</button>
                   <?php } else { ?>
                     <button id="edit" class="btn btn-sm btn-success pilih" data-id_sop="<?= $rtp->id_sop ?>" data-nama_sop="<?= $rtp->nama_sop ?>" data-nama_risk="<?= $rtp->nama_risk ?>" data-cause="<?= $rtp->deskripsi_cause ?>" data-pengendalian="<?= $rtp->deskripsi_pengendalian ?>" data-rencana="<?= $rtp->deskripsi_rtp ?>" data-plan_mulai="<?= $rtp->plan_mulai ?>" data-plan_selesai="<?= $rtp->plan_selesai ?>" data-output="<?= $rtp->indikator_output ?>" data-pic="<?= $rtp->pic ?>" data-status="<?= $rtp->status ?>" data-action="edit">Edit Rencana</button>
                   <?php } ?>
               </td>
           </tr>
       <?php  endforeach ?>
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
            if($('#status').val() == '')
                {
                    $('#status').val('Open');
                }
            else
                {
                    $('#status').val($(this).attr('data-status'));
                }
            
            
        });
        
        $('#cancelButton').click(function(){
            $('.form').slideUp();
            $('.data').show();
        });
        
        $('.form-data').submit(function(){
            var action = $('#action').val();
            
            if(action == "tambah")
                {
                   var link = '<?= base_url('unit_kerja/manajemen_risiko/proses_rencana/tambah') ?>'; 
                }
            else
                {
                    var link = '<?= base_url('unit_kerja/manajemen_risiko/proses_rencana/edit') ?>'; 
                }
            
           if($('#deskripsi_rtp').val() == '' || $('#plan_mulai').val() == '' || $('#plan_selesai').val() == '' || $('#indikator_output').val() == '' || $('#pic').val() == '')
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
                            toastr.info('Berhasil Menambah Rencana Penanganan Risiko');
                            $('#content').load('<?= base_url('unit_kerja/manajemen_risiko/rencana_penanganan') ?>');
                        }
                        else if(data == "berhasil edit")
                        {
                            toastr.success('Berhasil Mengedit Rencana Penanganan Risiko');
                            $('#content').load('<?= base_url('unit_kerja/manajemen_risiko/rencana_penanganan') ?>');
                        }
                        else 
                        {
                            toastr.error('Tidak Berhasil Menambah / Mengedit Rencana Penanganan Risiko');
                            $('#content').load('<?= base_url('unit_kerja/manajemen_risiko/rencana_penanganan') ?>');
                        }
                    },
                    error: function(){
                        toastr.error('Berhasil Menambah Rencana Penanganan Risiko');
                        $('#content').load('<?= base_url('unit_kerja/manajemen_risiko/rencana_penanganan') ?>');
                    }
               
                });
              }
            
            return false;
        });
    });

</script>