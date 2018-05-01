
<head>
	<title>Report Realisasi Penanganan</title>
    <link rel="stylesheet" href="<?= base_url().'assets1/css/mpdfstyletables.css' ?>">
    <style>
        body {
            font-family: sans-serif;
            font-size: 10pt;
        }
        p {	margin: 0pt; }
        table.items {
            border: 0.1mm solid #000000;
        }
        td { vertical-align: top;}
        .items td {
            border-left: 0.1mm solid #000000;
            border-right: 0.1mm solid #000000;
            border-top: 0.1mm solid #000000;
            border-bottom: 0.1mm solid #000000;
        }
        .items th {
            border-left: 0.1mm solid #000000;
            border-right: 0.1mm solid #000000;
            border-top: 0.1mm solid #000000;
            border-bottom: 0.1mm solid #000000;
        }
        table thead td { background-color: #EEEEEE;
            text-align: center;
            border: 0.1mm solid #000000;
            font-variant: small-caps;
        }



</style>
</head>
<body>
  
<!--mpdf
    <htmlpageheader name="myheader">
        <table width="100%" style="font-size: 9pt; padding-top: 1mm; border-bottom: 1px solid #000000;">
            <tr>
                <td rowspan="2" width="6%" align="center">
                    <img src="<?= base_url().'images/setwapres.png' ?>" height="50" width="50">
                </td>
                <td style="vertical-align: bottom;">
                    SEKRETARIAT WAKIL PRESIDEN
               </td>
                <td>
                    
                </td>
            </tr>
            <tr>
                <td>
                    SISTEM INFORMASI MONITORING MANAJEMEN RISIKO
                </td>
                <td style="text-align: right;">
                    Realisasi Penanganan Risiko - <?php echo $this->session->userdata('nama_unit') ?>
                </td>
            </tr>
        </table>
    </htmlpageheader>
    
    <htmlpagefooter name="myfooter">
    <div style="border-top: 1px solid #000000; font-size: 9pt; text-align: center; padding-top: 3mm; ">
    Page {PAGENO} of {nb}
    </div>
    </htmlpagefooter>

    <sethtmlpageheader name="myheader" value="on" show-this-page="1" />
    <sethtmlpagefooter name="myfooter" value="on" />
mpdf-->

	 <table class="items" width="100%" autosize="1.8" style="font-size: 9pt; border-collapse: collapse; " cellpadding="8">
           <thead>
            <tr>
              <th rowspan="2" align="center" width="5%" style="background-color: aqua; vertical-align: center;">No</th>
              <th rowspan="2" align="center" style="background-color: aqua; vertical-align: center;">Risiko</th>
               <th align="center" style="background-color: aqua;" height="30" rowspan="2">Penanganan Yang Akan Dilakukan</th>
              <th colspan="2" align="center" style="background-color: aqua;" height="20">Rencana</th>
              <th colspan="2" align="center" style="background-color: aqua;">Realisasi</th>
              <th align="center" style="background-color: aqua;" rowspan="2">Indikator Output</th>
              <th align="center" style="background-color: aqua;" rowspan="2">PIC</th>
              <th align="center" style="background-color: aqua;" rowspan="2">Anggaran</th>
              <th rowspan="2" align="center" style="background-color: aqua; vertical-align: center;">Hambatan</th>
              <th rowspan="2" align="center" style="background-color: aqua; vertical-align: center;">Keterangan</th>
            </tr>
           
            
            <tr>
              <th align="center" style="background-color: aqua;">Mulai</th>
              <th align="center" style="background-color: aqua;">Selesai</th>
              <th align="center" style="background-color: aqua;">Mulai</th>
              <th align="center" style="background-color: aqua;">Selesai</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($data as $key): ?>
              <tr>
                <td align="center" height="90" valign="top"><?= $no++ ?></td>
                <td valign="top"><?= $key->nama_risk ?></td>
                <td valign="top"><?= $key->deskripsi_rtp ?></td>
                <td valign="top"><?= $key->plan_mulai ?></td>
                <td valign="top"><?= $key->plan_selesai ?></td>
                <td valign="top"><?= $key->real_mulai ?></td>
                <td valign="top"><?= $key->real_selesai ?></td>
                <td valign="top"><?= $key->indikator_output ?></td>
                <td valign="top"><?= $key->pic ?></td>
                <td valign="top" align="center"><?= $key->anggaran ?></td>
                <td valign="top"><?= $key->hambatan ?></td>
                <td valign="top"><?= $key->keterangan ?></td>
              </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
</body>

