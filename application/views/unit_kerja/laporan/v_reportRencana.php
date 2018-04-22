  

  <div class="rightcolumn">
    <div class="card">
      <div class="box">
        <div class="box-header">
            <legend>
              <h3>Laporan Rencana Penanganan Risiko
                <div class="pull-right">
                    <a href="<?= base_url('unit_kerja/laporan/printrencanaPDF')  ?>" target="_blank" class="btn btn-info">Print PDF</a>
                <a href="<?= base_url('unit_kerja/laporan/printrencanaExcel')  ?>" target="_blank" class="btn btn-info">Print Excel</a>
                </div>
              </h3>
            </legend>

                
        </div>
        <div class="box-body">
          <table class="table table-bordered table-hover">
         <tr class="bg-blue">
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
              <td><?= $no++ ?></td>
              <td><?= $rtp->nama_risk ?></td>
              <td><?= $rtp->deskripsi_cause ?></td>
              <td><?= $rtp->frekuensi ?></td>
              <td><?= $rtp->dampak ?></td>
              <td><?= $rtp->hitung ?></td>
              <td><?= $rtp->deskripsi_pengendalian ?></td>
              <td><?= $rtp->deskripsi_rtp ?></td>
              <td><?= $rtp->plan_mulai ?></td>
              <td><?= $rtp->plan_selesai ?></td>
              <td><?= $rtp->indikator_output ?></td>
              <td><?= $rtp->pic ?></td>
              <td><?= $rtp->anggaran ?></td>
          </tr>
      <?php  endforeach ?>
        </table>
        </div>

      </div>

    </div>
  </div>











       
  