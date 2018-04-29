


    <div align="center">
        <img src="<?= base_url().'images/setwapres.png' ?>" height="60" width="60">
    </div>
  <h5 align="center">SISTEM INFORMASI MONITORING MANAJEMEN RISIKO</h5>
  <h5 align="center">SEKRETARIAT WAKIL PRESIDEN</h5>
  <hr style="margin-top: 2px;">

  <h5>DAFTAR RISIKO</h5>
  <h5>Nama Unit : <?php echo $this->session->userdata('nama_unit') ?></h5>

	<table style="width: 80%;border: solid 1px #5544DD; border-collapse: collapse" align="center">
          <tr style="background-color: rgb(162, 216, 250);">
            <th align="center">No</th>
            <th align="center">Indikator Kinerja</th>
            <th align="center">Kegiatan</th>
            <th align="center">Proses Bisnis</th>
            <th align="center">Risiko</th>
            <th align="center">Penyebab</th>
            <th align="center">Pengendalian Yang Sudah Ada</th>
            <th align="center">Sisa Risiko</th>
            <th align="center">Kemungkinan Kejadian</th>
            <th align="center">Dampak</th>

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

