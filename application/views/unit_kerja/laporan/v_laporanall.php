

<div class="rightcolumn">
  <div class="card">

    <div class="lapDR">
      <div class="box">
        <div class="box-header">
            <legend>
              <h3>Laporan Daftar Resiko</h3>
            </legend>
        </div>
        <div class="box-body">
          <form class="" action="<?= base_url('unit_kerja/laporan/exportdaftarrisiko')  ?>" target="__blank" method="post">
            <div class="col-md-4">
              <label for="">Pilih Tahun</label>
              <div class="input-group input-group-md">
                <select class="form-control" name="tahun_pk" id="selectTahunDR">
                  <option value="">-- Semua -- </option>
                  <?php foreach ($select as $periode): ?>
                    <?php echo $periode->tahun_pk; ?>
                    <option value="<?= $periode->tahun_pk ?>"><?= $periode->tahun_pk ?></option>
                  <?php endforeach; ?>
                </select>
                        <span class="input-group-btn">
                          <button type="submit" name="DRpdf" class="btn btn-info">Export PDF</a>
                          <button type="submit" name="DRexcel" class="btn btn-info">Export Excel</a>
                        </span>
              </div>
            </div>
          </form><br><br><br><br>

          <table class="table table-bordered" id="tbDR">
            <thead>
              <tr class="bg-blue">
                <th>No</th>
                <th>Indikator Kinerja</th>
                <th>Kegiatan</th>
                <th>Proses Bisnis</th>
                <th>Risiko</th>
                <th>Penyebab</th>
                <th>Pengendalian Yang Sudah Ada</th>
                <th>Sisa Risiko</th>
                <th>Kemungkinan Kejadian</th>
                <th>Dampak</th>
              </tr>
            </thead>
            <tbody id="tb_lapDR"></tbody>
        </table>
        </div>
      </div>
    </div>

    <div class="lapRencana">
      <div class="box">
        <div class="box-header">
          <legend>
            <h3>Laporan Rencana Penanganan Resiko</h3>
          </legend>
        </div>
        <div class="box-body">
          <form class="" action="<?= base_url('unit_kerja/laporan/exportrencana')  ?>" target="__blank" method="post">
            <div class="col-md-4">
              <label for="">Pilih Tahun</label>
              <div class="input-group input-group-md">
                <select class="form-control" name="tahun_pk" id="selectTahunRcn">
                  <option value="">-- Semua -- </option>
                  <?php foreach ($select as $periode): ?>
                    <?php echo $periode->tahun_pk; ?>
                    <option value="<?= $periode->tahun_pk ?>"><?= $periode->tahun_pk ?></option>
                  <?php endforeach; ?>
                </select>
                        <span class="input-group-btn">
                          <button type="submit" name="RCNpdf" class="btn btn-info">Export PDF</a>
                          <button type="submit" name="RCNexcel" class="btn btn-info">Export Excel</a>
                        </span>
              </div>
            </div>
          </form><br><br><br><br>

          <table class="table table-responsive table-striped table-hover table-bordered" id="tbRencana">
            <thead>
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
            </thead>
            <tbody id="tb_lapRcn"></tbody>
          </table>

        </div>
      </div>

    </div>


    <div class="lapReal">
      <div class="box">
        <div class="box-header">
          <legend>
            <h3>Laporan Rencana Penanganan Resiko</h3>
          </legend>
        </div>
        <div class="box-body">
          <form class="" action="<?= base_url('unit_kerja/laporan/exportrealisasi')  ?>" target="__blank" method="post">
            <div class="col-md-4">
              <label for="">Pilih Tahun</label>
              <div class="input-group input-group-md">
                <select class="form-control" name="tahun_pk" id="selectTahunReal">
                  <option value="">-- Semua -- </option>
                  <?php foreach ($select as $periode): ?>
                    <?php echo $periode->tahun_pk; ?>
                    <option value="<?= $periode->tahun_pk ?>"><?= $periode->tahun_pk ?></option>
                  <?php endforeach; ?>
                </select>
                        <span class="input-group-btn">
                          <button type="submit" name="REALpdf" class="btn btn-info">Export PDF</a>
                          <button type="submit" name="REALexcel" class="btn btn-info">Export Excel</a>
                        </span>
              </div>
            </div>
          </form><br><br><br><br>

          <table class="table table-responsive table-striped table-hover table-bordered" id="tbReal">
            <thead>
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
            </thead>
            <tbody id="tb_lapReal"></tbody>
          </table>
        </div>
      </div>

    </div>
  </div>
</div>

<script type="text/javascript" src="<?= base_url().'assets1/includeJS/laporan.js' ?>"></script>
