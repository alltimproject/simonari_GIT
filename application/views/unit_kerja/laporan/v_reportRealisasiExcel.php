<?php
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=Realisasi_Penanganan.xls");//ganti nama sesuai keperluan
header("Pragma: no-cache");
header("Expires: 0");
//disini script laporan anda
?>

	<h1>DAFTAR REALISASI PENANGANAN RISIKO</h1>
	<h2>Nama Unit : <?php echo $this->session->userdata('nama_unit') ?></h2>
	 <table border="1">
            <tr>
              <th rowspan="2">No</th>
              <th rowspan="2">Risiko</th>
              <th colspan="6">Rencana Penanganan</th>
              <th colspan="6">Realisasi</th>
              <th rowspan="2">Hambatan</th>
            </tr>
            <tr class="bg-blue">
              <th>Penanganan Yang Akan Dilakukan</th>
              <th>Mulai</th>
              <th>Selesai</th>
              <th>Indikator Output</th>
              <th>PIC</th>
              <th>Anggaran</th>
              <th>Penanganan Yang Telah Dilakukan</th>
              <th>Real Mulai</th>
              <th>Real Selesai</th>
              <th>Indikator Output</th>
              <th>PIC</th>
              <th>Anggaran</th>
            </tr>
            <?php $no = 1; ?>
            <?php foreach ($data as $key): ?>
              <tr>
                <td><?= $no++ ?></td>
                <td><?= $key->nama_risk ?></td>
                <td><?= $key->deskripsi_rtp ?></td>
                <td><?= $key->plan_mulai ?></td>
                <td><?= $key->plan_selesai ?></td>
                <td><?= $key->indikator_output ?></td>
                <td><?= $key->pic ?></td>
                <td><?= $key->anggaran ?></td>
                <td><?= $key->deskripsi_rtp ?></td>
                <td><?= $key->real_mulai ?></td>
                <td><?= $key->real_selesai ?></td>
                <td><?= $key->indikator_output ?></td>
                <td><?= $key->pic ?></td>
                <td><?= $key->anggaran ?></td>
                <td><?= $key->hambatan ?></td>
              </tr>
            <?php endforeach; ?>

        </table>

