<!DOCTYPE html>
<html>
<head>
	<title>Report Rencana Penanganan</title>
  <link rel="stylesheet" href="<?= base_url().'assets1/css/bootstrap.min.css' ?>">
    <style type="text/css">
    body {font-size: 10px;}
    td {padding-left: 3px;}
    </style>
</head>
<body>

  <div align="center">
    <img class="img img-responsive" src="<?= base_url().'images/setwapres.png' ?>" height="60" width="60">
  </div>
  <h5 align="center">SISTEM INFORMASI MONITORING MANAJEMEN RISIKO</h5>
  <h5 align="center">SEKRETARIAT WAKIL PRESIDEN</h5>
  <hr style="margin-top: 2px;">

	<h4>DAFTAR RENCANA PENANGANAN</h4>
	<h5>Nama Unit : <?php echo $this->session->userdata('nama_unit') ?></h5>
	<table class="table table-bordered table-responsive">
         <tr stye="background-color: blue">
            <th align="center" style="background-color: aqua;" width="3%" height="40">No</th>
            <th align="center" style="background-color: aqua;">Risiko</th>
            <th align="center" style="background-color: aqua;">Penyebab</th>
            <th align="center" style="background-color: aqua; font-size: 8px;">Kemungkinan</th>
            <th align="center" style="background-color: aqua;">Dampak</th>
            <th align="center" style="background-color: aqua;">Tingkat Risiko</th>
            <th align="center" style="background-color: aqua;">Penanganan Yang Sudah Ada</th>
            <th align="center" style="background-color: aqua;">Rencana Penanganan</th>
            <th align="center" style="background-color: aqua;">Mulai</th>
            <th align="center" style="background-color: aqua;">Selesai</th>
            <th align="center" style="background-color: aqua;">Indikator Output</th>
            <th align="center" style="background-color: aqua;">PIC</th>
            <th align="center" style="background-color: aqua;">Anggaran</th>
         </tr>

      <?php $no = 1; ?>
      <?php foreach ($rencana as $rtp): ?>
            <tr>
              <td valign="top" height="100" align="center"><?= $no++ ?></td>
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
              <td valign="top" align="center"><?= $rtp->anggaran ?></td>
          </tr>
      <?php  endforeach ?>
        </table>
</body>
</html>
