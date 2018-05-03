<head>
	<title>Report Rencana Penanganan</title>
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
                    Rencana Penanganan Risiko - <?php echo $this->session->userdata('nama_unit') ?>
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
         <tr style="background-color: aqua">
            <th align="center" width="3%" height="40">No</th>
            <th align="center">Risiko</th>
            <th align="center">Penyebab</th>
            <th align="center">Kemungkinan</th>
            <th align="center">Dampak</th>
            <th align="center">Tingkat Risiko</th>
            <th align="center">Penanganan Yang Sudah Ada</th>
            <th align="center">Rencana Penanganan</th>
            <th align="center">Mulai</th>
            <th align="center">Selesai</th>
            <th align="center">Indikator Output</th>
            <th align="center">PIC</th>
            <th align="center">Anggaran</th>
         </tr>
        </thead>
        <tbody>
        
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
       </tbody>
    </table>
        
    </body>


