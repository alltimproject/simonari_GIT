<?php

  $jum1 = 1;
  $nosop = 1;

 ?>

<div class="row">
  <div class="leftcolumn w3-animate-top">
    <div class="card">
      <div class="w3-panel" style="width:100%">
        <a href="<?= base_url('admin/manajementrisk/lihatdetail/'.$this->session->userdata('session_unit')) ?>"  class="w3-button w3-block w3-teal">Daftar Risiko</a>
      </div>
      <div class="w3-panel" style="width:100%">
        <a href="<?= base_url('admin/manajementrisk/lihatrencana/'.$this->session->userdata('session_unit'))  ?>"  class="w3-button w3-block w3-teal">Rencana Penanganan Risiko</a>
      </div>
      <div class="w3-panel" style="width:100%">
        <a href="<?= base_url('admin/manajementrisk/lihatrealisasi/'.$this->session->userdata('session_unit'))  ?>"  class="w3-button w3-block w3-teal">Realisasi Penanganan Risiko</a>
      </div>
    </div>
		<div class="card">
			<legend class="w3-center w3-black">Unit</legend>
			<?php
			foreach ($showunitID as $key):?>
			<p class="w3-center"><?= $key->nama_unit ?></p>
			<legend class="w3-center w3-black">Organisasi</legend>
			<p class="w3-center"><?= $key->nama_unor ?></p>
		  <?php endforeach; ?>
		</div>

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
