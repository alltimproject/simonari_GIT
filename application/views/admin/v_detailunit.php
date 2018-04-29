<?php
foreach($detailunit as $keyeditunit){?>

<div class="row">

  <div class="leftcolumn w3-animate-top">
    <div class="card">
      <div class="w3-panel" style="width:100%">
        <a href="<?= base_url('admin/organisasi/hapusunit/'.$keyeditunit->id_unit)  ?>" onclick="return confirm('Apakah anda yakin ingin Mengahapus ? ')" class="w3-button w3-block w3-red">Hapus Unit</a>
      </div>
      <div class="w3-panel" style="width:100%">
        <a href="<?= base_url('admin/organisasi?unit')  ?>"  class="w3-button w3-block w3-yellow">Kembali</a>
      </div>
      </div>
    </div>
  <div class="rightcolumn">
    <div class="card">



           <div class="box box-danger">
             <div class="box-header with-border">
               <h3 class="box-title">Edit Data Unit</h3>
             </div>
             <div class="box-body">
                   <div class="row">
                      <form action="<?= base_url('admin/organisasi/updateunit') ?>" method="post" enctype="multipart/form-data" >
                         <input type="hidden" name="id_unit" value="<?= $keyeditunit->id_unit ?>">
                           <div class="col-xs-3">
                             <label>Nama Unit</label>
                             <input type="text" class="form-control" name="nm_unit" value="<?= $keyeditunit->nama_unit ?>">
                           </div>
                           <div class="col-xs-5">
                             <label>Organisasi</label>
                             <select class="form-control" name="organisasi">
                               <?php
                               foreach ($showorganisasi as $keyorg ) {
                                 if($keyorg->id_unor == $keyeditunit->id_unor){
                                   echo "<option value='$keyorg->id_unor' selected> $keyorg->nama_unor </option>";
                                 }else{
                                   echo "<option value='$keyorg->id_unor'> $keyorg->nama_unor</option>";
                                 }
                               }
                                ?>
                             </select>
                           </div>
                    </div>


                   <div class="row">
                     <div class="col-xs-6">
                       <label>Sasaran</label><br>
                        <textarea name="sasaran" rows="8" cols="150"><?= $keyeditunit->sasaran ?></textarea>
                       <label>IKU</label>

                        <textarea name="iku" rows="8" cols="150"><?= $keyeditunit->iku ?></textarea>
                     </div>
                  </div>
                   <br>
                      <input type="submit" name="editunit" class="btn btn-info btn-sm" value="Update">
                      <a href="<?= base_url('admin/organisasi?unit') ?>" class="btn btn-warning btn-sm">Batal</a>

                   </form>

             </div>
           </div>
         </div>
         <!-- TAMPIL CARI pk-->


         <!--modal upload->
         <div class="modal fade" id="myModal" role="dialog">
           <div class="modal-dialog">
    <!-- Modal content-->
        <div class="modal fade" id="myModal" role="dialog">
          <div class="modal-dialog">
             <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Upload Foto</h4>
                </div>
             <div class="modal-body">
               <form action="<?= base_url().'admin/organisasi/uploadfoto' ?>" method="post" enctype="multipart/form-data">
                 <input type="hidden" name="nip" value="<?= $keyedit->nip ?>">
                 <div class="form-group">
                   <label>Foto</label>
                   <input type="file" name="foto" class="form-control">
                 </div>
               </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-default">Simpan</button>
              </div>
             </form>
             </div>
            </div>
          </div>
         </div>
         <!-- en modal -->
           <?php } ?>
