<?php 
    foreach ($keterangan as $org)
    {
        $sasaran = $org->sasaran;
        $iku = $org->iku;
    }
?>
     
     <legend>Unit Kerja</legend>
             <form class="form-horizontal" id="form-edit">
                 <div class="form-group">
                   <label class="col-sm-2 control-label">Unit Kerja</label>
                   <div class="col-sm-8">
                     <input type="text" name="nama_unit" class="form-control" value="<?= $this->session->userdata('nama_unit') ?>" readonly>
                     <input type="hidden" name="id_unit" value="<?= $this->session->userdata('id_unit') ?>" id="id_unit">
                   </div>
                 </div>
                 <div class="form-group">
                   <label for="inputPassword3" class="col-sm-2 control-label">Deputi</label>
                   <div class="col-sm-8">
                     <input type="text" name="name_unor" class="form-control" value="<?= $this->session->userdata('nama_unor') ?>" readonly>
                     <input type="hidden" name="id_unor" value="<?= $this->session->userdata('id_unor') ?>">
                   </div>
                 </div>
                 <div class="form-group">
                   <label for="inputPassword3" class="col-sm-2 control-label">Sasaran</label>
                   <div class="col-sm-8">
                    <textarea name="sasaran" class="form-control" rows="4" disabled id="sasaran"><?= $sasaran ?></textarea>
                   </div>
                   <button type="button" name="edit" id="editSasaran" class="btn btn-md btn-success"><span class="fa fa-pencil"></span></button>
                 </div>

                 <div class="form-group">
                   <label for="inputPassword3" class="col-sm-2 control-label">Indikator Unit Kerja</label>
                   <div class="col-sm-8">
                    <textarea name="iku" class="form-control" rows="4" disabled id="iku"><?= $iku ?></textarea>
                   </div>
                   <button type="button" name="edit" id="editIKU" class="btn btn-md btn-success"><span class="fa fa-pencil"></span></button>
                 </div>

                 <center>
                  <button type="submit" name="updateB" id="updateB" class="btn btn-md btn-info">Simpan</button>
                  <button type="button" name="button" id="cancelB" class="btn btn-md btn-danger">Batal</button>
                </center>
             </form>
             
<script type="text/javascript">
    $(function(){
        $('#updateB').hide();
        $('#cancelB').hide();
        
        $('#editSasaran').click(function(){
            $('#sasaran').prop('disabled', false);
            $('#updateB').show();
            $('#cancelB').show();
            return false;
        });
        
        $('#editIKU').click(function(){
            $('#iku').prop('disabled', false);
            $('#updateB').show();
            $('#cancelB').show();
            return false;
        });
        
        $('#cancelB').click(function(){
            $('#content').load('<?= base_url('unit_kerja/organisasi/unit') ?>', function(){
            $('#content').show('slow');
            });
        });
        

        $('#form-edit').submit(function(){
            var sasaran = $('#sasaran').val();
            var iku = $('#iku').val();
            var id_unit = $('#id_unit').val();
            var link = '<?= base_url('unit_kerja/organisasi/proses/edit') ?>';
            
            if(sasaran == '' || iku == '')
                {
                    toastr.error('Field tidak boleh kosong', 'Gagal');
//                    $('#content').load('<?= base_url('unit_kerja/organisasi/unit') ?>', function(){
//                        $('#content').show('slow');
//                    });
                }
            else
                {
                    $.ajax({
                        url: link,
                        type: "POST",
                        data: {'id_unit': id_unit, 'iku': iku, 'sasaran': sasaran},
                        success: function(data){
                            if(data == "berhasil"){
                                toastr.success('Berhasil mengedit Unit Kerja');
                                $('#content').load('<?= base_url('unit_kerja/organisasi/unit') ?>', function(){
                                    $('#content').show('slow');
                                });
                            } else {
                                toastr.error('Gagal mengedit Unit Kerja');
                                 $('#content').load('<?= base_url('unit_kerja/organisasi/unit') ?>', function(){
                                    $('#content').show('slow');
                                });
                            }
                        },
                        error: function(){
                            toastr.error('Gagal mengedit Unit Kerja');
                        }
                    });
                }
      
            return false;
        });    
    });
</script>
             

      
     