
    <div class="box">
        <div class="box-header">
          <legend>
            <h3>Laporan Rencana Penanganan Resiko</h3>
          </legend>
        </div>
        <div class="box-body">
          <form class="" action="<?= base_url('admin/laporan/exportrencana') ?>" target="__blank" method="post">
            <div class="col-md-4">
                <label for="">Pilih Unit Kerja</label>
                <div class="input-group input-group-md">
                    <select class="form-control select" name="id_unit" id="selectUnit">
                        <option value="">-- Semua Unit -- </option>
                          <?php foreach ($select as $unit): ?>
                            <?php echo $unit->id_unit; ?>
                            <option value="<?= $unit->id_unit ?>"><?= $unit->nama_unit ?></option>
                          <?php endforeach; ?>
                    </select>
                </div>
            </div>
              
            <div class="col-md-4">
              <label for="">Pilih Tahun Perjanjian Kinerja</label>
              <div class="input-group input-group-md">
                <select class="form-control select" name="tahun_pk" id="selectTahun">
                    <option value="">-- Semua Tahun -- </option>
                    <?php foreach ($selectT as $tahun): ?>
                            <?php echo $tahun->tahun_pk; ?>
                            <option value="<?= $tahun->tahun_pk ?>"><?= $tahun->tahun_pk ?></option>
                    <?php endforeach; ?>
                </select>
                        <span class="input-group-btn">
                          <button type="submit" name="RCNpdf" class="btn btn-info">Export PDF</button>
                          <button type="submit" name="RCNexcel" class="btn btn-info">Export Excel</button>
                        </span>
              </div>
            </div>
          </form><br><br><br><br>

        <div class="table-responsive">
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
                var id_unit = $('#selectUnit').val();
                var tahun_pk = $('#selectTahun').val();
                var link = "<?= base_url('admin/laporan/getRencana') ?>"
              
                $.ajax({
                    url: link,
                    type: "POST",
                    data: {'id_unit': id_unit, 'tahun_pk': tahun_pk},
                    dataType: "JSON",
                    success: function(data){
                        $('#tb_lapRcn').html(data);
                    },
                    error: function(){
                         $('#tb_lapRcn').html('<tr> <td colspan="13"><center>Tidak ada Data </center></td></tr>');
                    }
                });
              });
              
              $('.select').on('change', function(){
                var id_unit = $('#selectUnit').val();
                var tahun_pk = $('#selectTahun').val();
                var link = "<?= base_url('admin/laporan/getRencana') ?>"
                
                $.ajax({
                    url: link,
                    type: "POST",
                    data: {'id_unit': id_unit, 'tahun_pk': tahun_pk},
                    dataType: "JSON",
                    success: function(data){
                        $('#tb_lapRcn').html(data);
                    },
                    error: function(){
                         $('#tb_lapRcn').html('<tr> <td colspan="13"><center>Tidak ada Data </center></td></tr>');
                    }
                });
              });
          });
      </script>
  
