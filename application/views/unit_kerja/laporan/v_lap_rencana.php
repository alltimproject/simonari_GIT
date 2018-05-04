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
                          <button type="submit" name="RCNpdf" class="btn btn-info">Export PDF</button>
                            <button type="submit" name="RCNexcel" class="btn btn-info">Export Excel</button>
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

<script type="text/javascript">
$(document).ready(function(){
  $('#tbRencana').each(function(){
    var tahun_pk = $('#selectTahunRcn').val();
    var link = "<?= base_url('unit_kerja/laporan/getRencana') ?>"

    $.ajax({
      url: link,
      type: "POST",
      data: {'tahun_pk': tahun_pk},
      dataType: 'JSON',
      success: function(data){
        $('#tb_lapRcn').html(data);
        //alert('Berhasil');
      },
        error: function(){
          $('#tb_lapRcn').html('<tr><td colspan="13"> Tidak Ada Data </td></tr>');
        }
    });
  });

  $('#selectTahunRcn').on('change', function(){
    var tahun_pk = $('#selectTahunRcn').val();
    var link = "<?= base_url('unit_kerja/laporan/getRencana') ?>"

      $.ajax({
        url: link,
        type: "POST",
        data: {'tahun_pk': tahun_pk},
        dataType: 'JSON',
        success: function(data){

          $('#tb_lapRcn').html(data);
          //alert('Berhasil');
        },
        error: function(){
          $('#tb_lapRcn').html('<tr><td colspan="13"> Tidak Ada Data </td></tr>');
        }
      });
    });
});
</script>
