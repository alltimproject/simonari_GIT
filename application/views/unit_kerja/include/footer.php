<input type="button" value="Scroll Top" id="tombolScrollTop" onclick="scrolltotop()">
<div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
           <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal">&times;</button>
             <h4 class="modal-title w3-center">Ganti Password</h4>
           </div>
           <div class="modal-body">
             <input type="hidden" name="nip" value="<?= $this->session->userdata('nip') ?>">
             <div class="alert alert-danger" id="alertPass"></div>
             <form action="<?= base_url().'unit_kerja/organisasi/ubahpassword' ?>" method="post" class="formPass">
               <div class="form-group">
                 <label>Password Lama</label>
                 <input type="password" class="form-control" name="pass_lama" id="pass_lama">
               </div>
               <div class="form-group">
                 <label>Password Baru</label>
                 <input type="password" class="form-control" name="pass_baru" id="pass_baru" id="pass_baru">
               </div>
               <div class="form-group">
                 <label>Konfirmasi Password</label>
                 <input type="password" class="form-control" name="kon_pass" id="kon_pass" id="kon_pass">
                 <input type="hidden" value="<?= current_url(); ?>" name="redirect">
               </div>
               <div class="form-group">
                 <input type="checkbox" id="show"><small>Show Password</small>
               </div>

            <div class="modal-footer">
              <button type="submit" class="btn btn-info">Ganti Password</button>
            </div>
           </form>
         </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="myModal1" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
           <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal">&times;</button>
             <h4 class="modal-title w3-center">Ganti Foto</h4>
           </div>
           <div class="modal-body">
             <input type="hidden" name="nip" value="<?= $this->session->userdata('nip') ?>">
             <div class="alert alert-danger" id="alertFoto"></div>
             <form action="<?= base_url().'unit_kerja/organisasi/uploadfoto' ?>" method="post" enctype="multipart/form-data" class="formFoto">
               <div class="form-group">
                 <label>Pilih Foto</label>
                 <input type="file" class="form-control" name="foto" id="foto">
                 <input type="hidden" value="<?= current_url(); ?>" name="redirect">
               </div>

            <div class="modal-footer">
              <button type="submit" name="submit" class="btn btn-info">Ganti Foto</button>
            </div>
           </form>
         </div>
        </div>
      </div>
    </div>

</div>
</div>
<div class="footer">
  <img src="<?= base_url('images/logo.svg')  ?>" width="50px" alt="setwapres"><br>
  <h6>SIMONARI</h6>
  <h5>Sistem Informasi Monitoring Manajemen Risiko</h5>
  <h5 class="w3-text-white" >Copyright © 2018 Tim Satgas SPIP Sekretariat Wakil Presiden. All rights reserved. </h5>
</div>
<script type="text/javascript">
$(document).ready(function(){
	$(window).scroll(function(){
		if ($(window).scrollTop() > 100) {
			$('#tombolScrollTop').fadeIn();
		} else {
			$('#tombolScrollTop').fadeOut();
		}
	});
});

function scrolltotop()
{
	$('html, body').animate({scrollTop : 0},500);
}
</script>



<script src="<?= base_url().'assets1/js/bootstrap.min.js' ?>"></script>
<script src="<?= base_url().'assets1/js/adminlte.min.js' ?>"></script>
<script src="<?= base_url().'assets1/chart.js/Chart.js' ?>"></script>
<script src="<?= base_url().'assets1/datatables.net/js/jquery.dataTables.js' ?>"></script>
<script src="<?= base_url().'assets1/datatables.net-bs/js/dataTables.bootstrap.min.js' ?>"></script>

<script type="text/javascript">
$(document).ready(function(){
  $('#selectPK').on('change', function(){
    var id_pk = $(this).val();
    if (id_pk == '') {
      $('#selectSKP').prop('disabled', true);
    } else {
      $('#selectSKP').prop('disabled', false);
      var link = "<?= base_url('unit_kerja/kegiatanproses/getSKP') ?>"
      $.ajax({
        url: link,
        type: "POST",
        data: {'id_pk': id_pk},
        dataType: 'json',
        success: function(data){
          $('#selectSKP').html(data);
        },
        error: function(){
          alert("Belum ada Kegiatan");
        }
      });
    }
  });
});
</script>

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

<script type="text/javascript">
$(document).ready(function(){
  $('#tbReal').each(function(){
    var tahun_pk = $('#selectTahunReal').val();
    var link = "<?= base_url('unit_kerja/laporan/getReal') ?>"

    $.ajax({
      url: link,
      type: "POST",
      data: {'tahun_pk': tahun_pk},
      dataType: 'JSON',
      success: function(data){
        $('#tb_lapReal').html(data);
        //alert('Berhasil');
      },
        error: function(){
         $('#tb_lapReal').html('<tr><td colspan="12"> Tidak Ada Data </td></tr>');
        }
    });
  });

  $('#selectTahunReal').on('change', function(){
    var tahun_pk = $('#selectTahunReal').val();
    var link = "<?= base_url('unit_kerja/laporan/getReal') ?>"

      $.ajax({
        url: link,
        type: "POST",
        data: {'tahun_pk': tahun_pk},
        dataType: 'JSON',
        success: function(data){
          $('#tb_lapReal').html(data);
          //alert('Berhasil');
        },
        error: function(){
         $('#tb_lapReal').html('<tr><td colspan="12"> Tidak Ada Data </td></tr>');
        }
      });
    });
});
</script>

<script>
  $('#notifications').slideDown('slow').delay(4000).slideUp('slow');
</script>

<script type="text/javascript">
  $(document).ready(function(){
    var path = window.location.href;
    $('.navigasi').each(function()
    {
       if(this.href === path)
       {
         $(this).addClass('activecore');
       }
    });
  });
</script>

<script type="text/javascript">
  $(function(){
    $('#alertPass').hide();
    $('.formPass').submit(function(){
      if($('#pass_lama').val() == '' || $('#pass_baru').val() == '' || $('#kon_pass').val() == '')
      {
        $('#alertPass').fadeIn().text('Field Tidak Boleh Kosong');
        return false;
      } else if($('#pass_baru').val() != $('#kon_pass').val())
      {
        $('#alertPass').fadeIn().text('Konfirmasi Password tidak sama dengan Password Baru');
        return false;
      } else if($('#pass_lama').val() == $('#pass_baru').val()){
        $('#alertPass').fadeIn().text('Password Baru tidak boleh sama dengan Password Sebelumnya');
        return false;
      } else {
        return true;
      }
    });
  });
</script>

<script type="text/javascript">
  $(function(){
    $('#alertFoto').hide();
    $('.formFoto').submit(function(){
      if($('#foto').val() == '')
      {
        $('#alertFoto').fadeIn().text('Silahkan Pilih Foto');
        return false;
      } else {
        return true;
      }
    });
  });
</script>

<script type="text/javascript">
  $(function(){
    $('#show').click(function(){
      if($(this).is(':checked'))
      {
        $('#pass_lama').attr('type', 'text');
        $('#pass_baru').attr('type', 'text');
        $('#kon_pass').attr('type', 'text');
      } else {
        $('#pass_lama').attr('type', 'password');
        $('#pass_baru').attr('type', 'password');
        $('#kon_pass').attr('type', 'password');
      }
    });
  });
</script>
<script type="text/javascript">
  $('.hideform').fadeIn();
</script>

</body>
</html>
