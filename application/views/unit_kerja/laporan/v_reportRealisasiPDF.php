<!DOCTYPE html>
<html>
<head>
	<title>Report Realisasi</title>
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


	<h4>DAFTAR REALISASI</h4>
	<h5>Nama Unit : <?php echo $this->session->userdata('nama_unit') ?></h5>

	 <table class="table table-bordered table-responsive">
            <tr>
              <th rowspan="2" align="center" width="5%" style="background-color: aqua;">No</th>
              <th rowspan="2" align="center" style="background-color: aqua;">Risiko</th>
              <th colspan="6" align="center" style="background-color: aqua;" height="20">Rencana Penanganan</th>
              <th colspan="6" align="center" style="background-color: aqua;">Realisasi</th>
              <th rowspan="2" align="center" style="background-color: aqua;">Hambatan</th>
            </tr>
            <tr>
              <th align="center" style="background-color: aqua;" height="30">Penanganan Yang Akan Dilakukan</th>
              <th align="center" style="background-color: aqua;">Mulai</th>
              <th align="center" style="background-color: aqua;">Selesai</th>
              <th align="center" style="background-color: aqua;">Indikator Output</th>
              <th align="center" style="background-color: aqua;">PIC</th>
              <th align="center" style="background-color: aqua;">Anggaran</th>
              <th align="center" style="background-color: aqua;">Penanganan Yang Telah Dilakukan</th>
              <th align="center" style="background-color: aqua;">Real Mulai</th>
              <th align="center" style="background-color: aqua;">Real Selesai</th>
              <th align="center" style="background-color: aqua;">Indikator Output</th>
              <th align="center" style="background-color: aqua;">PIC</th>
              <th align="center" style="background-color: aqua;">Anggaran</th>
            </tr>
            <?php $no = 1; ?>
            <?php foreach ($data as $key): ?>
              <tr>
                <td align="center" height="100" valign="top"><?= $no++ ?></td>
                <td valign="top"><?= $key->nama_risk ?></td>
                <td valign="top"><?= $key->deskripsi_rtp ?></td>
                <td valign="top"><?= $key->plan_mulai ?></td>
                <td valign="top"><?= $key->plan_selesai ?></td>
                <td valign="top"><?= $key->indikator_output ?></td>
                <td valign="top"><?= $key->pic ?></td>
                <td valign="top" align="center"><?= $key->anggaran ?></td>
                <td valign="top"><?= $key->deskripsi_rtp ?></td>
                <td valign="top"><?= $key->real_mulai ?></td>
                <td valign="top"><?= $key->real_selesai ?></td>
                <td valign="top"><?= $key->indikator_output ?></td>
                <td valign="top"><?= $key->pic ?></td>
                <td valign="top" align="center"><?= $key->anggaran ?></td>
                <td valign="top"><?= $key->hambatan ?></td>
              </tr>
            <?php endforeach; ?>

        </table>
</body>
</html>
