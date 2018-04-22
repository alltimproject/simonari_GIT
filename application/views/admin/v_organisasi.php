<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <div class="w3-panel" style="width:100%">
        <a href="<?= base_url('admin/organisasi?organisasi') ?>" class="w3-button w3-block w3-teal">Unit Organisasi</a>
      </div>
      <div class="w3-panel" style="width:100%">
        <a href="<?= base_url('admin/organisasi?unit') ?>" class="w3-button w3-block w3-teal"> Unit Kerja</a>
      </div>
      <div class="w3-panel" style="width:100%">
        <a href="<?= base_url('admin/organisasi?pegawai')  ?>" class="w3-button w3-block w3-teal">Daftar Pegawai</a>
      </div>
  </div>
  </div>
  <!--- Cari Unit -->
  <?php if(isset($_GET['organisasi'])) :  ?>
    <div class="rightcolumn">
          <div class="box">
                <?php if($this->session->flashdata('notif') ){ ?>
                <div class="callout callout-success" id="notifications">
                <?php echo $this->session->flashdata('notif'); ?>
                </div>
                <?php } ?>


              <div class="box-header">
                  <h4>Unit Organisasi</h4>
                  <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal">Tambah Unit Organisasi</button>
              </div>

              <!-- /.box-header -->
              <div class="box-body">
                <table id="example1" class="table table-bordered table-striped table-hover">
                    <thead>
                    <tr class="bg-blue">
                      <th>No</th>
                      <th>Unit Organisasi</th>
                      <td></td>
                    </tr>
                    </thead>
                    <tbody>
                      <?php
                      $no = 1;
                      foreach ($showorganisasi as $key_org):?>
                      <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $key_org->nama_unor ?></td>
                        <td>
                          <a href="<?= base_url('admin/organisasi/detailorganisasi/'.$key_org->id_unor) ?>" class="btn btn-info btn-xs">Detail</a>
                        </td>
                      </tr>
                    <?php endforeach ?>
            </tbody>
          </table>

          <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
     <!-- Modal content-->
              <div class="modal-content">
                 <div class="modal-header">
                   <button type="button" class="close" data-dismiss="modal">&times;</button>
                   <h4 class="modal-title">Tambah Organisasi</h4>
                 </div>
              <div class="modal-body">
                <form action="<?= base_url().'admin/organisasi/addorg' ?>" method="post">
                  <div class="form-group">
                    <label>Nama Organisasi</label>
                    <input type="text" class="form-control" name="nama_org">
                  </div>
               <div class="modal-footer">
                 <button type="submit" class="btn btn-default">Simpan</button>
               </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


<?php endif ?>
<!--- Cari Unit -->
<?php if(isset($_GET['unit'])) :  ?>
  <div class="rightcolumn">
    <?php if($this->session->flashdata('notif') ){ ?>
    <div class="callout callout-success" id="notifications">
    <?php echo $this->session->flashdata('notif'); ?>
    </div>
    <?php } ?>
    <div class="card">
         <div class="box">
           <h4>Daftar Unit Kerja</h4>
           <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal">Tambah Unit Kerja</button>

             <div class="box-header">
             </div>
             <!-- /.box-header -->
             <div class="box-body">
               <table id="example1" class="table table-bordered table-striped table-hover">
                   <thead>
                   <tr class="bg-blue">
                     <th width="5%">No</th>
                     <th width="20%">Unit Kerja</th>
                     <th width="20%">Unit Organisasi</th>
                     <th width="25%">Sasaran</th>
                     <th width="25%">Indikator Kinerja Utama</th>
                     <td></td>
                   </tr>
                   </thead>
                   <tbody>
                    <?php
                    $no = 1;
                    foreach($showorganisasiunit as $keyorgunit):?>
                    <tr>
                      <td><?= $no++ ?></td>
                      <td><?= $keyorgunit->nama_unit ?></td>
                      <td><?= $keyorgunit->nama_unor ?></td>
                      <td><?= $keyorgunit->sasaran ?></td>
                      <td><?= $keyorgunit->iku ?></td>

                      <td>
                        <a href="<?= base_url('admin/organisasi/detailunit/'.$keyorgunit->id_unit)?>" class="btn btn-info btn-xs">Detail</a>

                      </td>
                    </tr>
                  <?php endforeach; ?>
                   </tbody>
                 </table>
                 <div class="modal fade" id="myModal" role="dialog">
                   <div class="modal-dialog">
            <!-- Modal content-->
                     <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Tambah Unit Kerja</h4>
                        </div>
                     <div class="modal-body">
                       <form action="<?= base_url().'admin/organisasi/addunit' ?>" method="post">
                         <div class="form-group">
                           <label>Nama Unit</label>
                           <input type="text" class="form-control" name="nama_unit">
                         </div>
                         <div class="form-group">
                           <label>Sasaran</label>
                           <textarea name="sasaran" class="form-control" rows="8" cols="80"></textarea>
                         </div>
                         <div class="form-group">
                           <label>IKU</label>
                           <textarea name="iku" class="form-control" rows="8" cols="80"></textarea>
                         </div>
                         <div class="form-group">
                           <label>Organisasi</label>
                           <select class="form-control" name="organisasi">
                             <option value="">--Pilih--</option>
                             <?php
                               foreach($showorganisasi as $keyorg){
                                 echo "<option value=$keyorg->id_unor> $keyorg->nama_unor</option> ";
                               }
                              ?>
                           </select>
                         </div>

                      <div class="modal-footer">
                        <button type="submit" class="btn btn-default">Simpan</button>
                      </div>
                     </form>
                   </div>
                 </div>
               </div>
             </div>
           </div>
         </div>

<?php endif ?>
<!----------------------------------------------------------------------------->
<?php if(isset($_GET['pegawai'])) : ?>
  <div class="rightcolumn">
    <div class="card">

      <?php if($this->session->flashdata('notif') ){ ?>
      <div class="callout callout-success" id="notifications">
      <?php echo $this->session->flashdata('notif'); ?>
      </div>
      <?php } ?>

      <h4>Daftar Pegawai</h4>
          <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal">Tambah Pegawai</button>
          <div class="box">
              <div class="box-header">
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped table-hover">
                    <thead>
              <tr class="bg-blue">
                <th>NIP</th>
                <th>Nama</th>
                <th>Keterangan Eselon</th>
                <th>Jabatan</th>
                <th>Unit</th>
                <th>Unit Organisasi</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              foreach ($showpegawai as $key):?>
              <tr>
                <td><?= $key->nip ?></td>
                <td><?= $key->nama_pegawai ?></td>
                <td><?= $key->nama_jabatan ?></td>
                <td><?= $key->ket_jabatan ?></td>
                <td><?= $key->nama_unit ?></td>
                <td><?= $key->nama_unor ?></td>
                <td>
                  <a href="<?= base_url().'admin/organisasi/editpeg/'.$key->nip?> " class="btn btn-info btn-xs">Detail</a>
                </td>
              </tr>
            <?php endforeach ?>
            </tbody>
          </table>
          <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
     <!-- Modal content-->
              <div class="modal-content">
                 <div class="modal-header">
                   <button type="button" class="close" data-dismiss="modal">&times;</button>
                   <h4 class="modal-title">Tambah Pegawai</h4>
                 </div>
              <div class="modal-body">
                <form action="<?= base_url().'admin/organisasi/addpegawai' ?>" method="post">
                  <div class="form-group">
                    <label>NIP</label>
                    <input type="text" class="form-control" name="nip">
                  </div>
                  <div class="form-group">
                    <label>Nama Pegawai</label>
                    <input type="text" class="form-control" name="nm_pegawai">
                  </div>
                  <div class="form-group">
                    <label>Jabatan</label>
                    <input type="text" class="form-control" name="ket_jabatan">
                  </div>

                  <div class="form-group">
                    <label>Keterangan Eselon</label>
                    <select class="form-control"  name="jabatan">
                      <option value="">-- Pilih -- </option>
                      <?php
                      foreach($showjabatan as $keyjb){
                        echo "<option value='$keyjb->id_jabatan'> $keyjb->nama_jabatan </option> ";
                      }

                       ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Unit Kerja</label>
                    <select class="form-control" name="unit_kerja">
                      <option value="">-- Pilih -- </option>
                      <?php
                      foreach ($showunit as $keyunit ) {
                        echo "<option value='$keyunit->id_unit'> $keyunit->nama_unit </option>";
                      }

                       ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Organisasi</label>
                    <select class="form-control" name="unit_org">
                      <option value="">--Pilih--</option>
                      <?php
                        foreach($showorganisasi as $keyorg){
                          echo "<option value=$keyorg->id_unor> $keyorg->nama_unor</option> ";
                        }
                       ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control">
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



      </div>
<?php endif ?>
<!----------------------------------------------------------------------------->
<?php if(isset($_GET['iku'])) : ?>
  <div class="rightcolumn">
    <div class="card">
      <h2>Iku dan Sasaran</h2>
      <h5>Title description, Dec 7, 2017</h5>
      <div class="fakeimg" style="height:200px;">Image</div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
    </div>
    <div class="card">
      <h2>TITLE HEADING</h2>
      <h5>Title description, Sep 2, 2017</h5>
      <div class="fakeimg" style="height:200px;">Image</div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
    </div>
  </div>
<?php endif ?>

</div>
