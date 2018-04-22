<?php
	$nopk = 1;
  $noskp = 1;
  $nosop = 1;
	$jum = 1;
  $jum1 = 1;
	$no = 1;
?>
<div class="row">
  <div class="leftcolumn w3-animate-top">
    <div class="card">
      <div class="w3-panel" style="width:100%">
        <a href="<?= base_url('admin/kegiatanprosesbisnis/lihatpk/'. $this->session->userdata('session_unit'))  ?>"  class="w3-button w3-block w3-teal">Perjanjian Kinerja</a>
      </div>
      <div class="w3-panel" style="width:100%">
        <a href="<?= base_url('admin/kegiatanprosesbisnis/lihatskp/'. $this->session->userdata('session_unit'))  ?>"  class="w3-button w3-block w3-teal">Sasaran Kinerja Pegawai</a>
      </div>
      <div class="w3-panel" style="width:100%">
        <a href="<?= base_url('admin/kegiatanprosesbisnis/lihatsop/'.$this->session->userdata('session_unit'))  ?>"  class="w3-button w3-block w3-teal">Standar Operasionak Prosedur</a>
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
      <legend><h3>Sasaran Kerja Pegawai
       <div class="pull-right"><a href="<?= base_url('admin/kegiatanprosesbisnis/addSKP') ?>" class="btn btn-md btn-info">Tambah</a></div>
       </h3></legend>
			 <?php if($this->session->flashdata('notif') ){ ?>
			 <div class="callout callout-success" id="notifications">
			 <?php echo $this->session->flashdata('notif'); ?>
			 </div>
			 <?php } ?>
       <table class="table  table-bordered table-hover">
         <tr class="bg-blue">
           <th>No</th>
           <th>Indikator Kinerja</th>
           <th>Kegiatan</th>
           <th>Volume</th>
           <th>Mutu</th>
           <th>Waktu</th>
           <th>Biaya</th>
           <th>Aksi</th>
         </tr>

     <?php foreach ($showSKP as $skp) { ?>
         <tr>
           <?php

             if($jum <= 1)
             {
               $jmlrow = $skp->rowpk;
               if ($jmlrow == 0) {
                 $jmlrow = 1;
               }
           ?>
             <td rowspan="<?= $jmlrow ?>"><?= $noskp ?></td>
             <td rowspan="<?= $jmlrow ?>"><?= $skp->nama_ik ?></td>
           <?php
               $jum = $skp->rowpk;
               $noskp++;
             } else {
               $jum = $jum - 1;
             }
            ?>

            <td><?= $skp->nama_skp ?></td>
            <td><?= $skp->target_volume ?></td>
            <td><?= $skp->target_mutu ?></td>
            <td><?= $skp->target_waktu ?></td>
            <td><?= $skp->target_biaya ?></td>
            <td rowspan="">
             <a href="" class="btn btn-default btn-sm">Edit SKP</a>
            </td>

         </tr>
     <?php  } ?>
       </table>
     </div>
