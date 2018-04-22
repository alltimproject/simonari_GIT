<!DOCTYPE html>
<html>
<head>
	<title>Report Rencana Penanganan</title>
</head>
<body>

	<h1>DAFTAR RENCANA PENANGANAN</h1>
	<h2>Nama Unit : <?php echo $this->session->userdata('nama_unit') ?></h2>
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
</body>
</html>
