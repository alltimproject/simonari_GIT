

  <div class="rightcolumn">
    <div class="card">
      <div class="box">
        <div class="box-header">
            <legend>
              <h3>Laporan Realisasi Penanganan Risiko
                <div class="pull-right">
                    <a href="<?= base_url('unit_kerja/laporan/reportRealisasiPDF')  ?>" target="_blank" class="btn btn-info">Print PDF</a>
                <a href="<?= base_url('unit_kerja/laporan/reportRealisasiExcel')  ?>" target="_blank" class="btn btn-info">Print Excel</a>
                </div>
              </h3>
            </legend>


        </div>
        <div class="box-body">
          <table class="table table-responsive table-striped table-hover table-bordered">
            <tr class="bg-blue">
              <th>No</th>
              <th>Risiko</th>
              <th>Rencana Penanganan</th>
              <th>Mulai</th>
              <th>Selesai</th>
              <th>Indikator Output</th>
              <th>PIC</th>
              <th>Anggaran</th>
              <th>Real Mulai</th>
              <th>Real Selesai</th>
              <th>Hambatan</th>
            </tr>
            <?php $no = 1; ?>
            <?php foreach ($data as $key): ?>
              <tr>
                <td><?= $no++ ?></td>
                <td><?= $key->nama_risk  ?></td>
                <td><?= $key->deskripsi_cause ?></td>
                <td><?= $key->plan_mulai ?></td>
                <td><?= $key->plan_selesai ?></td>
                <td><?= $key->indikator_output ?></td>
                <td><?= $key->pic ?></td>
                <td><?= $key->anggaran ?></td>
                <td><?= $key->real_mulai ?></td>
                <td><?= $key->real_selesai ?></td>
                <td><?= $key->hambatan ?></td>
              </tr>
            <?php endforeach; ?>

        </table>
        </div>

      </div>

    </div>
  </div>
