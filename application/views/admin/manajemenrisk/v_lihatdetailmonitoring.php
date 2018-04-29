<?php

  $jum1 = 1;
  $nosop = 1;

 ?>

<div class="row">
<?php $this->load->view('admin/include/sidebar_Manajemenrisk'); ?>
</div>

  <div class="rightcolumn">
    <div class="card">
      <legend><h3>Daftar Risiko
    </div>
		<?php if($this->session->flashdata('notif') ){ ?>
		<div class="callout callout-success" id="notifications">
		<?php echo $this->session->flashdata('notif'); ?>
		</div>
		<?php } ?>
         <!-- TAMPIL CARI pk-->
         <div class="box">
                 <div class="box-header">
                 </div>
                 <!-- /.box-header -->
                 <div class="box-body">
                    <table class="table table-bordered table-striped table-hover">
                      <thead>
                  <tr class="bg-blue">
                    <th>No</th>
                    <th width="35%">Kegiatan</th>
                    <th>Proses Bisnis</th>
                    <th>Risiko</th>
                    <th>Penyebab</th>
										<th>Penanganan Yang Sudah Ada</th>
                    <th>Sisa Risiko</th>
                    <th>Kemungkinan</th>
                    <th>Dampak</th>
                    <th>Tingkat Risiko</th>
                    <th>Keterangan</th>

                  </tr>

                        <?php foreach ($data as $risk) { ?>
                            <tr>
                              <?php

                                if($jum1 <= 1)
                                {
                                  $jmlsop = $risk->rowskp;
                                  if ($jmlsop == 0) {
                                    $jmlsop = 1;
                                  }
                              ?>
                                <td rowspan="<?= $jmlsop ?>"><?= $nosop ?></td>
                                <td rowspan="<?= $jmlsop ?>"><?= $risk->nama_skp ?></td>
                              <?php
                                  $jum1 = $risk->rowskp;
                                  $nosop++;
                                } else {
                                  $jum1 = $jum1 - 1;
                                }
                               ?>

                               <td><?= $risk->nama_sop ?></td>
                               <td><?= $risk->nama_risk ?></td>
                               <td><?= $risk->deskripsi_cause ?></td>
                               <td><?= $risk->deskripsi_pengendalian ?></td>
                               <td><?= $risk->sisa_risk ?></td>
                               <td><?= $risk->frekuensi ?></td>
                               <td><?= $risk->dampak ?></td>
                               <td><?= $risk->hitung ?></td>
                               <td>
                                  <?php

                                      if($risk->hitung == 0)
                                      {
                                        echo "<small>NULL</small>";
                                      }elseif($risk->hitung >= 1 && $risk->hitung <= 5 && $risk->dampak != 5)
                                      {
                                        echo "<small class='label pull-right bg-blue'>Sangat Rendah</small>";
                                      } elseif ($risk->hitung >= 6 && $risk->hitung <= 11 && $risk->dampak != 5)
                                      {
                                        echo "<small class='label pull-right bg-green'>Rendah</small>";
                                      } elseif ($risk->hitung >= 12 && $risk->hitung <= 15 && $risk->dampak != 5)
                                      {
                                        echo "<small class='label pull-right bg-yellow'>Sedang</small>";
                                      } elseif ($risk->hitung >= 16 && $risk->hitung <= 19 && $risk->dampak != 5) {
                                        echo "<small class='label pull-right bg-green'>Tinggi</small>";
                                      } else
                                      {
                                        echo "<small class='label pull-right bg-red'>Sangat Tinggi</small>";
                                      }
                                  ?>
                               </td>
                            </tr>
                        <?php  } ?>
              </tbody>
            </table>
          </div>
          </div>
        </div>
        <script type="text/javascript" src="<?= base_url().'assets1/includeJS/admin/sidebarkegProses.js' ?>"></script>
