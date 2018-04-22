<div class="row">
<h1 class="w3-center w3-blue" >Manajemen Risiko</h1>
  <div class="leftcolumn w3-animate-top">

  </div>
  <div class="contentKegiatan">
    <div class="card">
      <h3 style="float:center">Cari Berdasarkan Unit Kerja:</h3>
      <br>
         </div>
         <!-- TAMPIL CARI pk-->
         <div class="box">
                 <div class="box-header">

                 </div>
                 <!-- /.box-header -->
                 <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped table-hover">
                      <thead>
                  <tr class="bg-blue">
                    <th>No</th>
                    <th>Unit</th>
                    <th>Unit Organisasi</th>
                    <th>Lihat PK</th>
                  </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                foreach($show as $keyunit):?>
                <tr>
                  <td><?= $no++ ?></td>
                  <td><?= $keyunit->nama_unit ?></td>
                  <td><?= $keyunit->nama_unor ?></td>
                  <td>
                    <a href="<?= base_url('admin/manajementrisk/lihatdetail/'.$keyunit->id_unit) ?>" class="btn btn-info">Lihat Detail</a>
                  </td>
                </tr>
               <?php endforeach ?>
              </tbody>
            </table>
          </div>
          </div>
        </div>
