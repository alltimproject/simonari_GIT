<!DOCTYPE html>
<html>
<head>
	<title>Daftar Resiko</title>

</head>
<body>

<div id="wrapper">
	<h1>DAFTAR RISIKO</h1>
	<h2>Nama Unit : <?php echo $this->session->userdata('nama_unit') ?></h2>
	<table border="1" style="border: 1px solid black; border-top: 1px solid black">
          <tr style="background-color: rgb(162, 216, 250);">
            <th width="5%">No</th>
            <th width="15%">Indikator Kinerja</th>
            <th width="15%">Kegiatan</th>
            <th width="10%">Proses Bisnis</th>
            <th width="15%">Risiko</th>
            <th width="10%">Penyebab</th>
            <th width="10%">Pengendalian Yang Sudah Ada</th>
            <th width="10%">Sisa Risiko</th>
            <th width="5%">Kemungkinan Kejadian</th>
            <th width="5%">Dampak</th>

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
             <td valign="top" align="center"><?= $sop->frekuensi ?></td>
             <td valign="top" align="center"><?= $sop->dampak ?></td>


          </tr>
      <?php  } ?>
        </table>

    </div>
</body>
</html>
