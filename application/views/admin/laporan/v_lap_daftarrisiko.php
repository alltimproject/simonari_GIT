    <div class="box">
        <div class="box-header">
            <legend>
              <h3>Laporan Daftar Resiko</h3>
            </legend>
        </div>
        <div class="box-body">
          <form class="" action="<?= base_url('admin/laporan/exportdaftarrisiko') ?>" target="__blank" method="post">
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
                          <button type="submit" name="DRpdf" class="btn btn-info">Export PDF</a>
                          <button type="submit" name="DRexcel" class="btn btn-info">Export Excel</a>
                        </span>
              </div>
            </div>
          </form><br><br><br><br>
            
            <div class="table-responsive">
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
      
     <script type="text/javascript">
         $(document).ready(function(){
            $('#tbDR').each(function(){
               var id_unit = $('#selectUnit').val();
               var tahun_pk = $('#selectTahun').val();
               var link = "<?= base_url('admin/laporan/getDR') ?>"
               
               $.ajax({
                  url: link,
                   type: "POST",
                   data: {'id_unit': id_unit, 'tahun_pk': tahun_pk},
                   dataType: 'JSON',
                   success: function(data){
                        var no = 1;
                        var jum1 = 1;
                        var jum2 = 1;
                        var i;
                        var html = '';

                        for(i=0, no=1;i<data.length;i++)
                        {
                          if(jum2 <= 1)
                          {
                            var jmlpk = data[i].rowpk;
                            if (jmlpk == 0)
                               {
                                  jmlpk = 1;
                                }
                            html += '<tr><td rowspan="'+jmlpk+'">'+ no++ +'</td>';
                            html += '<td rowspan="'+jmlpk+'">'+ data[i].nama_ik +'</td>';
                            jum2 = data[i].rowpk;
                          } else {
                            jum2 = jum2 - 1;
                          }

                          if(jum1 <= 1)
                          {
                            var jmlskp = data[i].rowskp;
                            if (jmlskp == 0)
                               {
                                  jmlskp = 1;
                                }
                            html += '<td rowspan="'+jmlskp+'">'+ data[i].nama_skp +'</td>';
                            jum1 = data[i].rowskp;
                          } else {
                            jum1 = jum1 - 1;
                          }

                          html += '<td>'+ data[i].nama_sop +'</td>';
                          html += '<td>'+ data[i].nama_risk +'</td>';
                          html += '<td>'+ data[i].deskripsi_cause +'</td>';
                          html += '<td>'+ data[i].deskripsi_pengendalian +'</td>';
                          html += '<td>'+ data[i].sisa_risk +'</td>';
                          html += '<td>'+ data[i].frekuensi +'</td>';
                          html += '<td>'+ data[i].dampak +'</td></tr>';
                        }

                        $('#tb_lapDR').html(html);
                   },
                   error: function(){
                       $('#tb_lapDR').html('<tr> <td colspan="13"><center>Tidak ada Data </center></td></tr>');
                   }
               });
            });
             
            $('.select').on('change', function(){
                var id_unit = $('#selectUnit').val();
                var tahun_pk = $('#selectTahun').val();
                var link = "<?= base_url('admin/laporan/getDR') ?>"
                
                $.ajax({
                    url: link,
                    type: "POST",
                    data: {'id_unit': id_unit, 'tahun_pk': tahun_pk},
                    dataType: "JSON",
                    success: function(data){
                        var no = 1;
                      var jum1 = 1;
                      var jum2 = 1;
                      var i;
                      var html = '';

                      for(i=0, no=1;i<data.length;i++)
                      {
                        if(jum2 <= 1)
                        {
                          var jmlpk = data[i].rowpk;
                          if (jmlpk == 0)
                             {
                                jmlpk = 1;
                              }
                          html += '<tr><td rowspan="'+jmlpk+'">'+ no++ +'</td>';
                          html += '<td rowspan="'+jmlpk+'">'+ data[i].nama_ik +'</td>';
                          jum2 = data[i].rowpk;
                        } else {
                          jum2 = jum2 - 1;
                        }

                        if(jum1 <= 1)
                        {
                          var jmlskp = data[i].rowskp;
                          if (jmlskp == 0)
                             {
                                jmlskp = 1;
                              }
                          html += '<td rowspan="'+jmlskp+'">'+ data[i].nama_skp +'</td>';
                          jum1 = data[i].rowskp;
                        } else {
                          jum1 = jum1 - 1;
                        }

                        html += '<td>'+ data[i].nama_sop +'</td>';
                        html += '<td>'+ data[i].nama_risk +'</td>';
                        html += '<td>'+ data[i].deskripsi_cause +'</td>';
                        html += '<td>'+ data[i].deskripsi_pengendalian +'</td>';
                        html += '<td>'+ data[i].sisa_risk +'</td>';
                        html += '<td>'+ data[i].frekuensi +'</td>';
                        html += '<td>'+ data[i].dampak +'</td></tr>';
                      }

                      $('#tb_lapDR').html(html);

                    },
                    error: function(){
                      $('#tb_lapDR').html('<tr> <td colspan="13"><center>Tidak ada Data </center></td></tr>');
                    }
                });
            });
         });
            
     </script>