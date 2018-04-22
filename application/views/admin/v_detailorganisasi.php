<?php
foreach($detailorganisasi as $keyeditorg){?>
<div class="row">

  <div class="leftcolumn w3-animate-top">
    <div class="card">
      <div class="w3-panel" style="width:100%">
        <a href="<?= base_url('admin/organisasi/hapusorg/'.$keyeditorg->id_unor)  ?>" onclick="return confirm('Apakah anda yakin ingin Mengahapus ? ')" class="w3-button w3-block w3-red">Hapus Organisasi</a>
      </div>
      <div class="w3-panel" style="width:100%">
        <a href="<?= base_url('admin/organisasi?organisasi') ?>" class="w3-button w3-block w3-yellow">Kembali</a>
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
               <h3 class="box-title">Edit Data Organisasi</h3>
             </div>
             <div class="box-body">
                   <div class="row">
                     <form action="<?= base_url('admin/organisasi/updateorganisasi') ?>" method="post" enctype="multipart/form-data">
                       <input type="hidden" name="id_unor" value="<?= $keyeditorg->id_unor ?>">
                     <div class="col-xs-3">
                       <label>Nama Organisasi</label>
                       <input type="text" class="form-control" name="nm_org" value="<?= $keyeditorg->nama_unor ?>">
                     </div>

                   <br>
                      <input type="submit" name="editunit" class="btn btn-info btn-sm" value="Update">
                      <a href="<?= base_url('admin/organisasi?organisasi') ?>" class="btn btn-warning btn-sm">Batal</a>
                   </form>
             </div>
           </div>
         </div></div>
         <!-- TAMPIL CARI pk-->
       <?php } ?>
