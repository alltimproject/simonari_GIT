  

  <div class="rightcolumn">
    <div class="card">
      <div class="box">
        <div class="box-header">
            <legend>
              <h3>Laporan Daftar Resiko
                <div class="pull-right">
                    <a href="<?= base_url('unit_kerja/laporan/printdaftarresikopdf')  ?>" target="_blank" class="btn btn-info">Print PDF</a>
                <a href="<?= base_url('unit_kerja/laporan/printdaftarresiko')  ?>" target="_blank" class="btn btn-info">Print Excel</a>
                </div>
              </h3>
            </legend>

                
        </div>
        <div class="box-body">
          <table class="table table-bordered">
          <tr class="bg-blue">
            <th>No</th>
            <th>Indikator Kinerja</th>
            <th>Kegiatan</th>
            <th>Proses Bisnis</th>
            <th>Risiko</th>
            <th>Penyebab</th>
            <th>Pengendalian Yang Sudah Ada</th>
            <th>Sisa Risiko</th>
            <th>Kemungkinan Kejadian</th>
            <th>Dampak</th>
            
          </tr>

      <?php $nosop = 1; $jum1 = 1; $jum2 = 1; ?>
      <?php foreach ($dataSOP as $sop) { ?>
          <tr>
            <?php

              if($jum2 <= 1)
              {
                $jmlpk = $sop->rowpk;
                if ($jmlpk == 0) {
                  $jmlpk = 1;
                }
            ?>
              <td rowspan="<?= $jmlpk ?>" align="center"><?= $nosop ?></td>
              <td rowspan="<?= $jmlpk ?>"><?= $sop->nama_ik ?></td>
            <?php
                $jum2 = $sop->rowpk;
                $nosop++;
              } else {
                $jum2 = $jum2 - 1;
              }
             ?>

            <?php

              if($jum1 <= 1)
              {
                $jmlsop = $sop->rowskp;
                if ($jmlsop == 0) {
                  $jmlsop = 1;
                }
            ?>
              <td rowspan="<?= $jmlsop ?>"><?= $sop->nama_skp ?></td>
            <?php
                $jum1 = $sop->rowskp;
              } else {
                $jum1 = $jum1 - 1;
              }
             ?>

             <td><?= $sop->nama_sop ?></td>
             <td><?= $sop->nama_risk ?></td>
             <td><?= $sop->deskripsi_cause ?></td>
             <td><?= $sop->deskripsi_pengendalian ?></td>
             <td><?= $sop->sisa_risk ?></td>
             <td><?= $sop->frekuensi ?></td>
             <td><?= $sop->dampak ?></td>
             

          </tr>
      <?php  } ?>
        </table>
        </div>

      </div>

    </div>
  </div>











       
  