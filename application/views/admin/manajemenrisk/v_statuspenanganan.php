<div class="row">
  <?php $this->load->view('admin/include/sidebar_Manajemenrisk') ?>
  </div>
    <div class="rightcolumn">
      <div class="card">

        <div class="contentRTP">
            <legend><h3>Status Penanganan
          </div>
      		<?php if($this->session->flashdata('notif') ){ ?>
      		<div class="callout callout-success" id="notifications">
      		<?php echo $this->session->flashdata('notif'); ?>
      		</div>
      		<?php } ?>
               <!-- TAMPIL CARI pk-->

         <div class="box">
           <div class="col-md-6 col-sm-6 col-xs-12">
             <div class="info-box">
               <span class="info-box-icon bg-red"><?= $jumlahClose ?><i class="ion ion-ios-gear-outline"></i></span>
               <div class="info-box-content">
                 <span class="info-box-text"> <h1>Close</h1> </span>
               </div>
               <!-- /.info-box-content -->
             </div>
             <!-- /.info-box -->
           </div>
                 <div class="box-header">
                 </div>
                 <!-- /.box-header -->
                 <div class="box-body">
                    <table class="table table-bordered table-striped table-hover table-responsive">
                      <thead>
                  <tr class="bg-blue">
                    <th>No</th>
                     <th>Risiko</th>
                     <th>Penyebab</th>
                     <th>Tingkat Risiko</th>
                     <th>Penanganan Yang Sudah Ada</th>
                     <th>Rencana Penanganan</th>
                     <th>Mulai</th>
                     <th>Selesai</th>
                     <th>Indikator Output</th>
                     <th>PIC</th>
                     <th>Anggaran</th>
                     <th>Berkas</th>
                     <th>Aksi</th>

                  </tr>
                </tr>
                      <?php $nortp = 1; ?>
                     <?php foreach ($realisasi as $rtp): ?>
                           <tr>
                             <td><?= $nortp++ ?></td>
                             <td><?= $rtp->nama_risk ?></td>
                             <td><?= $rtp->deskripsi_cause ?></td>
                             <td><?= $rtp->hitung ?></td>
                             <td><?= $rtp->deskripsi_pengendalian ?></td>
                             <td><?= $rtp->deskripsi_rtp ?></td>
                             <td><?= $rtp->plan_mulai ?></td>
                             <td><?= $rtp->plan_selesai ?></td>
                             <td><?= $rtp->indikator_output ?></td>
                             <td><?= $rtp->pic ?></td>
                             <td><?= $rtp->anggaran ?></td>
                             <td>
                               <?php
                               if($rtp->berkas == "")
                               {
                                 echo "<p class='w3-red'> Belum Ada File </p> ";
                               }else{
                                 echo " <a class='btn btn-info btn-xs' href=".base_url('uploadzip/'.$rtp->berkas).">Download <span class='fa fa-download'></span> </a> ";
                               }

                                ?>
                             </td>
                             <td><?php if(!isset($rtp->deskripsi_rtp)){ ?>
                                   <button id="buatRTP" class="btn btn-sm btn-info" data-id_sop="<?= $rtp->id_sop ?>" data-nama_sop="<?= $rtp->nama_sop ?>" data-nama_risk="<?= $rtp->nama_risk ?>" data-cause="<?= $rtp->deskripsi_cause ?>" data-pengendalian="<?= $rtp->deskripsi_pengendalian ?>">Buat Rencana</button>
                                 <?php } else { ?>
                                   <button id="editRTP"  class="btn btn-sm btn-success" data-id_sop="<?= $rtp->id_sop ?>" data-nama_sop="<?= $rtp->nama_sop ?>" data-nama_risk="<?= $rtp->nama_risk ?>" data-cause="<?= $rtp->deskripsi_cause ?>" data-pengendalian="<?= $rtp->deskripsi_pengendalian ?>" data-rencana="<?= $rtp->deskripsi_rtp ?>" data-plan_mulai="<?= $rtp->plan_mulai ?>" data-plan_selesai="<?= $rtp->plan_selesai ?>" data-output="<?= $rtp->indikator_output ?>" data-pic="<?= $rtp->pic ?>">Edit Rencana</button>
                                 <?php } ?>
                             </td>
                         </tr>
                     <?php  endforeach ?>
                  </table>
                </div>
                </div>
              </div>
            </div>

            <script type="text/javascript" src="<?= base_url().'assets1/includeJS/admin/sidebarkegProses.js' ?>"></script>
