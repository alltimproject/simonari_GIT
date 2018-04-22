<?php
foreach($showpeg as $keyedit){?>

<div class="row">

  <div class="leftcolumn w3-animate-top">
    <div class="card">
      <div class="w3-panel" style="width:100%">
        <a href="#"  class="w3-button w3-block w3-teal">Ubah Password</a>
      </div>
      <div class="w3-panel" style="width:100%">
        <a href="<?= base_url('admin/organisasi/hapuspeg/'.$keyedit->nip)?>" onclick="return confirm('Apakah Anda Yakin Ingin Mengahpus ? ')"  class="w3-button w3-block w3-red">Hapus Pegawai</a>
      </div>


    </div>

  </div>
  <div class="rightcolumn">
    <div class="card">
      <div class="w3-green">
        <?php
          echo $this->session->flashdata('notif');
        ?>
      </div>
           <div class="box box-danger">
             <div class="box-header with-border">
               <h3 class="box-title">Edit Data Pegawai</h3>
             </div>
             <div class="box-body">
                   <div class="row">
                     <form action="<?= base_url('admin/organisasi/updatePegawai') ?>" method="post" enctype="multipart/form-data" >
                       <input type="hidden" name="nip" value="<?= $keyedit->nip ?>">
                     <div class="col-xs-3">
                       <label>Nama Pegawai</label>
                       <input type="text" class="form-control" name="nm_pegawai" value="<?= $keyedit->nama_pegawai ?>" placeholder="Nama Pegawai">
                     </div>
                     <div class="col-xs-4">
                       <label>Jabatan</label>
                       <select class="form-control" name="jabatan">
                         <?php
                         foreach ($showjabatan as $keyjabatan ) {
                           if($keyjabatan->id_jabatan == $keyedit->id_jabatan){
                             echo "<option value='$keyjabatan->id_jabatan' selected> $keyjabatan->nama_jabatan </option>";
                           }else{
                             echo "<option value='$keyjabatan->id_jabatan'> $keyjabatan->nama_jabatan </option>";
                           }
                         }
                          ?>
                       </select>
                     </div>
                     <div class="col-xs-5">
                       <label>Unit</label>
                       <select class="form-control" name="unit">
                         <?php
                         foreach ($showunit as $keyunit ) {
                           if($keyunit->id_unit == $keyedit->id_unit){
                             echo "<option value='$keyunit->id_unit' selected> $keyunit->nama_unit </option>";
                           }else{
                             echo "<option value='$keyunit->id_unit'> $keyunit->nama_unit </option>";
                           }
                         }
                          ?>
                       </select>
                       </div>
                     <div class="col-xs-5">
                       <label>Organisasi</label>
                       <select class="form-control" name="organisasi">
                         <?php
                         foreach ($showorganisasi as $keyorg ) {
                           if($keyorg->id_unor == $keyedit->id_unor){
                             echo "<option value='$keyorg->id_unor' selected> $keyorg->nama_unor </option>";
                           }else{
                             echo "<option value='$keyorg->id_unor'> $keyorg->nama_unor</option>";
                           }
                         }
                          ?>
                       </select>
                     </div>



                     <div class="col-xs-3">
                       <label>Upload Foto</label>
                       <input type="file" class="form-control" name="nm_pegawai" value="" placeholder="Nama Pegawai"><br>
                       <img src="<?= base_url('upload/'.$keyedit->foto)  ?>" alt="" width="50%">
                     </div>

                   </div>
                   <br>
                      <input type="submit" name="editpeg" class="btn btn-info btn-sm" value="Update">
                      <a href="<?= base_url('admin/organisasi?pegawai') ?>" class="btn btn-warning btn-sm">Batal</a>
                   </form>

             </div>
             <!-- /.box-body -->
           </div>
           <!-- /.box -->
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
