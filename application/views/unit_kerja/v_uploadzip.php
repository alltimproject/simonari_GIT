<div class="rightcolumn">
  <div class="card">
    <legend>Pilih Daftar Risiko</legend>
    <div class="table-responsive">
      <table class="table table-bordered table-hover">
        <tr class="bg-blue">
          <th>No</th>
          <th>Risiko</th>
          <th>Penyebab</th>
          <th>Pengendalian Yang Sudah Ada</th>
          <th>Rencana Penanganan</th>
          <th>Mulai</th>
          <th>Selesai</th>
          <th>Output</th>
          <th>PIC</th>
          <th>Anggaran</th>
          <th>Berkas</th>
          <th>Aksi</th>
        </tr>
   <?php $noreal = 1; ?>
    <?php foreach ($dataclose as $real): ?>
          <tr>
            <td><?= $noreal++ ?></td>
            <td><?= $real->nama_risk ?></td>
            <td><?= $real->deskripsi_cause ?></td>
            <td><?= $real->deskripsi_pengendalian ?></td>
            <td><?= $real->deskripsi_rtp ?></td>
            <td><?= $real->plan_mulai ?></td>
            <td><?= $real->plan_selesai ?></td>
            <td><?= $real->indikator_output ?></td>
            <td><?= $real->pic ?></td>
            <td><?= $real->anggaran ?></td>
            <td> <?php
            if($real->berkas == ''){
              echo '<p class="w3-text-red">Belum Ada File </p>';
            }else{
              echo $real->berkas;
            } ?> </td>
            <td><a class="btn btn-info btn-md" href="">UPLOAD ZIP</a></td>
        </tr>
    <?php  endforeach ?>
      </table>
    </div>










  </div>
</div>
<script type="text/javascript" src="<?= base_url().'assets1/includeJS/manajemenrisk.js' ?>"></script>
