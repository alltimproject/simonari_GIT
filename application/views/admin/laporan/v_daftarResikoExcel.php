<?php
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=Daftar_Risiko.xls");//ganti nama sesuai keperluan
header("Pragma: no-cache");
header("Expires: 0");
//disini script laporan anda
?>

	<h1>DAFTAR RISIKO</h1>
	<table border="1">
          <tr style="height: 70px; background-color: rgb(162, 216, 250);">
            <th width="5%">No</th>
            <th width="13%">Indikator Kinerja</th>
            <th width="13%">Kegiatan</th>
            <th width="13%">Proses Bisnis</th>
            <th width="13%">Risiko</th>
            <th width="12%">Penyebab</th>
            <th width="12%">Pengendalian Yang Sudah Ada</th>
            <th width="15%">Sisa Risiko</th>
            <th width="5%">Kemungkinan Kejadian</th>
            <th width="5%">Dampak</th>
            
          </tr>

      <?php $nosop = 1; $jum1 = 1; $jum2 = 1; ?>
      <?php foreach ($dataSOP as $sop) { ?>
          <tr style="height: 150px">
            <?php

              if($jum2 <= 1)
              {
                $jmlpk = $sop->rowpk;
                if ($jmlpk == 0) {
                  $jmlpk = 1;
                }
            ?>
              <td rowspan="<?= $jmlpk ?>" align="center" valign="top"><?= $nosop ?></td>
              <td rowspan="<?= $jmlpk ?>" valign="top"><?= $sop->nama_ik ?></td>
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
              <td rowspan="<?= $jmlsop ?>" valign="top"><?= $sop->nama_skp ?></td>
            <?php
                $jum1 = $sop->rowskp;
              } else {
                $jum1 = $jum1 - 1;
              }
             ?>

             <td valign="top"><?= $sop->nama_sop ?></td>
             <td valign="top"><?= $sop->nama_risk ?></td>
             <td valign="top"><?= $sop->deskripsi_cause ?></td>
             <td valign="top"><?= $sop->deskripsi_pengendalian ?></td>
             <td valign="top"><?= $sop->sisa_risk ?></td>
             <td valign="top"><?= $sop->frekuensi ?></td>
             <td valign="top"><?= $sop->dampak ?></td>
             

          </tr>
      <?php  } ?>
        </table>

