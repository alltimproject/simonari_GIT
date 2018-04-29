<?php
	$nopk = 1;
  $noskp = 1;
  $nosop = 1;
	$jum = 1;
  $jum1 = 1;
	$no = 1;
	$numberskp = 1;
?>
<div class="row">
	<?php $this->load->view('admin/include/sidebar_kegProses'); ?>
</div>

  <div class="rightcolumn">
    <div class="card">
      <legend><h3>
				<div class="col-md-6 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><?= $jumlahSKPunit ?></span>

            <div class="info-box-content">
              <span class="info-box-text"><h4>Sasaran Kerja Pegawai</h4></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
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
		 
		 <script type="text/javascript" src="<?= base_url().'assets1/includeJS/admin/sidebarkegProses.js' ?>"></script>
