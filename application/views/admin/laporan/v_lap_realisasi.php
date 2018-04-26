<div class="box">
        <div class="box-header">
          <legend>
            <h3>Laporan Rencana Penanganan Resiko</h3>
          </legend>
        </div>
        <div class="box-body">
          <form class="" action="" target="__blank" method="post">
            <div class="col-md-4">
              <label for="">Pilih Unit Kerja</label>
              <div class="input-group input-group-md">
                <select class="form-control" name="id_unit" id="selectUnit">
                  <option value="">-- Semua -- </option>
                  <?php foreach ($select as $unit): ?>
                    <?php echo $unit->id_unit; ?>
                    <option value="<?= $unit->id_unit ?>"><?= $unit->nama_unit ?></option>
                  <?php endforeach; ?>
                </select>
                        <span class="input-group-btn">
                          <button type="submit" name="DRpdf" class="btn btn-info">Export PDF</a>
                          <button type="submit" name="DRexcel" class="btn btn-info">Export Excel</a>
                        </span>
              </div>
            </div>
          </form><br><br><br><br>
          
          <div class="table-responsive">
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
                    <th>Keterangan</th>
                  </tr>
                </thead>
                <tbody id="tb_lapReal"></tbody>
              </table>
          </div>
          
        </div>
      </div>
      
     <script type="text/javascript">
        $(document).ready(function(){
          $('#tbReal').each(function(){
            var id_unit = $('#selectUnit').val();
            var link = "<?= base_url('admin/laporan/getReal') ?>"

            $.ajax({
              url: link,
              type: "POST",
              data: {'id_unit': id_unit},
              dataType: 'JSON',
              success: function(data){
                $('#tb_lapReal').html(data);
                //alert('Berhasil');
              },
                error: function(){
                    alert("Tidak ada data");
                }
            });
          });

          $('#selectUnit').on('change', function(){
            var id_unit = $('#selectUnit').val();
            var link = "<?= base_url('admin/laporan/getReal') ?>"

            $.ajax({
              url: link,
              type: "POST",
              data: {'id_unit': id_unit},
              dataType: 'JSON',
              success: function(data){
                $('#tb_lapReal').html(data);
                //alert('Berhasil');
              },
                error: function(){
                  alert("Tidak ada data");
                }
              });
            });
        });
    </script>