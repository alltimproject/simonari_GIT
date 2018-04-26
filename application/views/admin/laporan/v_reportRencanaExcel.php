<?php
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=Rencana_Penanganan.xls");//ganti nama sesuai keperluan
header("Pragma: no-cache");
header("Expires: 0");
//disini script laporan anda
?>

<h1>DAFTAR RENCANA</h1>

  <table border="1">
         <tr stye="background-color: blue">
           <th>No</th>
            <th>Risiko</th>
            <th>Penyebab</th>
            <th>Kemungkinan</th>
            <th>Dampak</th>
            <th>Tingkat Risiko</th>
            <th>Penanganan Yang Sudah Ada</th>
            <th>Rencana Penanganan</th>
            <th>Mulai</th>
            <th>Selesai</th>
            <th>Indikator Output</th>
            <th>PIC</th>
            <th>Anggaran</th>
         </tr>
       
      <?php $no = 1; ?>
      <?php foreach ($rencana as $rtp): ?>
            <tr>
              <td valign="top"><?= $no++ ?></td>
              <td valign="top"><?= $rtp->nama_risk ?></td>
              <td valign="top"><?= $rtp->deskripsi_cause ?></td>
              <td valign="top" align="center"><?= $rtp->frekuensi ?></td>
              <td valign="top" align="center"><?= $rtp->dampak ?></td>
              <td valign="top" align="center"><?= $rtp->hitung ?></td>
              <td valign="top"><?= $rtp->deskripsi_pengendalian ?></td>
              <td valign="top"><?= $rtp->deskripsi_rtp ?></td>
              <td valign="top"><?= $rtp->plan_mulai ?></td>
              <td valign="top"><?= $rtp->plan_selesai ?></td>
              <td valign="top"><?= $rtp->indikator_output ?></td>
              <td valign="top"><?= $rtp->pic ?></td>
              <td valign="top"><?= $rtp->anggaran ?></td>
          </tr>
      <?php  endforeach ?>
        </table>

