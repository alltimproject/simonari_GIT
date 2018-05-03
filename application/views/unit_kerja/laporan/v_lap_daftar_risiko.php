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
              <label for="">Pilih Tahun  </label>
              <div class="input-group input-group-md">
                <select class="form-control" name="tahun_pk" id="selectTahunDR">
                  <option value="">-- Semua -- </option>
                  <?php foreach ($select as $periode): ?>
                    <?php echo $periode->tahun_pk; ?>
                    <option value="<?= $periode->tahun_pk ?>"><?= $periode->tahun_pk ?></option>
                  <?php endforeach; ?>
                </select>
                        <span class="input-group-btn">
                          <button type="submit" name="DRpdf" class="btn btn-info">Export PDF</button>
                          <button type="submit" name="DRexcel" class="btn btn-info">Export Excel</button>
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
    
<script type="text/javascript">
$(document).ready(function(){
  $('#tbDR').each(function(){
    var tahun_pk = $('#selectTahunDR').val();
    var link = "<?= base_url('unit_kerja/laporan/getDR') ?>"

    $.ajax({
      url: link,
      type: "POST",
      data: {'tahun_pk': tahun_pk},
      dataType: 'JSON',
      success: function(data){
        //alert(data.length);
        // $('#tb_lapDR').html(data);
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
            $('#tb_lapDR').html('<tr><td colspan="10"> Tidak Ada Data </td></tr>');
        }
    });
  });

  $('#selectTahunDR').on('change', function(){
    var tahun_pk = $('#selectTahunDR').val();
    var link = "<?= base_url('unit_kerja/laporan/getDR') ?>"


      $.ajax({
        url: link,
        type: "POST",
        data: {'tahun_pk': tahun_pk},
        dataType: 'JSON',
        success: function(data){
          // $('#tb_lapDR').html(data);
          //alert('Berhasil');
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
          $('#tb_lapDR').html('<tr><td colspan="10"> Tidak Ada Data </td></tr>');
        }
      });
    });
});
</script>

    
   
  