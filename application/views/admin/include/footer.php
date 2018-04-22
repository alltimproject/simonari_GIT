</div>
</div>
<div class="footer">
  <h5 class="w3-text-white" >Copyright © 2018 simonari. All rights reserved. </h5>
</div>

<script src="<?= base_url().'assets1/js/bootstrap.min.js' ?>"></script>
<script src="<?= base_url().'assets1/chart.js/Chart.js' ?>"></script>
<script src="<?= base_url().'assets1/js/adminlte.min.js' ?>"></script>
<script src="<?= base_url().'assets1/datatables.net/js/jquery.dataTables.min.js' ?>"></script>
<script src="<?= base_url().'assets1/datatables.net-bs/js/dataTables.bootstrap.min.js' ?>"></script>

<script type="text/javascript">
  $(document).ready(function(){
    var count = 1;
    $('#add-pk').click(function(){
      count = count + 1;
      var html_code = "<tr id='baris"+count+"'>";
      html_code += "<td><textarea name='nama_ik[]' class='form-control' style='height: 80px'></textarea></td>";
      html_code += "<td><textarea name='target[]' class='form-control' style='height: 80px'></textarea></td>";
      html_code += "<td><input type='number' class='form-control' name='anggaran[]'></td>";
      html_code += "<td><input type='date' class='form-control' name='tahun_pk[]'></td>";
      html_code += "<td><button id='"+count+"' type='button' name='remove' class='btn btn-danger btn-md remove'>-</button></td>";
      html_code += "</tr>";
      $('#tb-pk').append(html_code);
    });
    $(document).on('click', '.remove', function(){
      var button_id = $(this).attr("id");
      $('#baris'+button_id+'').remove();
    });
  });
</script>

<script type="text/javascript">
  $(document).ready(function(){
    var count = 1;
    $('#add-skp').click(function(){
      count = count + 1;
      var html_code = "<tr id='baris"+count+"'>";
      html_code += "<td></td>";
      html_code += "<td><textarea name='nama_skp[]' class='form-control' style='height:100px;'></textarea></td>";
      html_code += "<td><textarea name='target_volume[]' class='form-control' style='height:100px;'></textarea></td>";
      html_code += "<td><textarea name='target_mutu[]' class='form-control' style='height:100px;'></textarea></td>";
      html_code += "<td><textarea name='target_waktu[]' class='form-control' style='height:100px;'></textarea></td>";
      html_code += "<td><input type='text' class='form-control' name='target_biaya[]'></td>";
      html_code += "<td><button id='"+count+"' type='button' name='remove' class='btn btn-danger btn-md remove'> - </button></td>";
      html_code += "</tr>";
      $('#tb-skp').append(html_code);
    });
    $(document).on('click', '.remove', function(){
      var button_id = $(this).attr("id");
      $('#baris'+button_id+'').remove();
    });
  });
</script>

<script type="text/javascript">
  $(document).ready(function(){
    var count = 1;
    $('#add-sop').click(function(){
      count = count + 1;
      var html_code = "<tr id='baris"+count+"'>";
      html_code += "<td><textarea name='nama_sop[]' class='form-control' style='height:100px'></textarea></td>";
      html_code += "<td><textarea name='nama_risk[]' class='form-control' style='height:100px'></textarea></td>";
      html_code += '<td><select name="frekuensi[]" class="form-control frekuensi"><option value=""></option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option></select></td>';
      html_code += '<td><select name="dampak[]" class="form-control dampak"><option value=""></option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option></select></td>';
      html_code += "<td><textarea name='deskripsi_cause[]' class='form-control' style='height:100px'></textarea></td>";
      html_code += '<td><select name="kategori_cause[]" class="form-control"><option value="">--Pilih Kategori--</option><option value="Man">Man</option><option value="Money">Money</option><option value="Method">Method</option><option value="Machine">Machine</option><option value="Material">Material</option></select></td>';
      html_code += "<td><textarea name='deskripsi_p_exist[]' class='form-control' style='height:100px'></textarea></td>";
      html_code += "<td><textarea name='sisa_risk[]' class='form-control' style='height:100px'></textarea></td>";
      html_code += "<td><button id='"+count+"' type='button' name='remove' class='btn btn-danger btn-md remove'> - </button></td>";
      html_code += "</tr>";
      $('#tb-sop').append(html_code);
    });
    $(document).on('click', '.remove', function(){
      var button_id = $(this).attr("id");
      $('#baris'+button_id+'').remove();
    });
  });
</script>

<script type="text/javascript">
  $(document).ready(function(){
    $('#selectPK').on('change', function(){
      var id_pk = $(this).val();
      if (id_pk == '') {
        $('#selectSKP').prop('disabled', true);
      } else {
        $('#selectSKP').prop('disabled', false);
        var link = "<?= base_url('admin/kegiatanprosesbisnis/getSKP') ?>"
        $.ajax({
          url: link,
          type: "POST",
          data: {'id_pk': id_pk},
          dataType: 'json',
          success: function(data){
            $('#selectSKP').html(data);
          },
          error: function(){
            alert("Belum ada SKP");
          }
        });
      }
    });
  });
</script>
<script>
$(function () {
  $('#example1').DataTable()
  $('#example2').DataTable({
    'paging'      : true,
    'lengthChange': false,
    'searching'   : false,
    'ordering'    : true,
    'info'        : true,
    'autoWidth'   : false
  })
})
</script>
<script>
$('#notifications').slideDown('slow').delay(2500).slideUp('slow');
</script>
<script type="text/javascript">
$(function(){
  $('.contentTambahRTP').hide();
  $(document).on('click', '#buatRTP', function(e) {
    $('.contentRISK').hide();
    $('.contentRealisasi').hide();
    $('.contentRTP').hide();
    $('.contentTambahRTP').slideDown();
    $('.AddRealisasi').hide();
    $('#rencanaRisk').removeClass('w3-teal').addClass('activenav');
    $('#daftarRisk').removeClass('activenav').addClass('w3-teal');
    $('#realisasiRisk').removeClass('activenav').addClass('w3-teal');
    $('.judulForm').text('Tambah RTP');
    $('#submitRTP').removeClass().addClass('btn btn-info btn-md').text('Simpan');

    $('html, body').animate({
      scrollTop: $('.contentTambahRTP').offset().top
    });

    document.getElementById("nama_sop").value = $(this).attr('data-nama_sop');
    document.getElementById("nama_risk").value = $(this).attr('data-nama_risk');
    document.getElementById("deskripsi_cause").value = $(this).attr('data-cause');
    document.getElementById("deskripsi_pengendalian").value = $(this).attr('data-pengendalian');
    document.getElementById("id_sop").value = $(this).attr('data-id_sop');
    document.getElementById("action").value = "tambah";
    $('#deskripsi_rtp').val('');
    $('#plan_mulai').val('');
    $('#plan_selesai').val('');
    $('#indikator_output').val('');
    $('#pic').val('');
  });

  $(document).on('click', '#editRTP', function(e) {
    $('.contentRISK').hide();
    $('.contentRealisasi').hide();
    $('.AddRealisasi').hide();
    $('.contentRTP').slideDown();
    $('.judulForm').text('Edit RTP');
    $('#submitRTP').removeClass().addClass('btn btn-success btn-md').text('Edit');

    $('.contentTambahRTP').slideDown();
    $('#rencanaRisk').removeClass('w3-teal').addClass('activenav');
    $('#daftarRisk').removeClass('activenav').addClass('w3-teal');
    $('#realisasiRisk').removeClass('activenav').addClass('w3-teal');

    $('html, body').animate({
      scrollTop: $('.contentTambahRTP').offset().top
    });

    document.getElementById("nama_sop").value = $(this).attr('data-nama_sop');
    document.getElementById("nama_risk").value = $(this).attr('data-nama_risk');
    document.getElementById("deskripsi_cause").value = $(this).attr('data-cause');
    document.getElementById("deskripsi_pengendalian").value = $(this).attr('data-pengendalian');
    document.getElementById("id_sop").value = $(this).attr('data-id_sop');
    document.getElementById("action").value = "edit";
    document.getElementById("deskripsi_rtp").value = $(this).attr('data-rencana');
    document.getElementById("plan_mulai").value = $(this).attr('data-plan_mulai');
    document.getElementById("plan_selesai").value = $(this).attr('data-plan_selesai');
    document.getElementById("indikator_output").value = $(this).attr('data-output');
    document.getElementById("pic").value = $(this).attr('data-pic');
  });

  $('#cancelRTP').click(function(){
    $('.contentTambahRTP').slideUp();
    $('.contentRTP').slideDown();
  });

  $('.formRTP').submit(function(){
    if($('#deskripsi_rtp').val() == '' || $('#plan_mulai').val() == '' || $('#plan_selesai').val() == '' || $('#indikator_output').val() == '' || $('#pic').val() == '')
    {
        $('#alertRTP').fadeIn('slow').delay(3000).fadeOut('fast').text('Field Tidak Boleh Kosong');
        return false;
    } else {
        return true;
    }
  });
});
</script>

<script type="text/javascript">
$(function(){
  $('#alertReal').hide();
  $('.AddRealisasi').hide();
  $(document).on('click', '#buatRealisasi', function(e) {
    $('.contentRISK').hide();
    $('.contentRealisasi').hide();
    $('.contentRTP').hide();
    $('.contentTambahRTP').hide();
    $('.AddRealisasi').slideDown();
    $('#realisasiRisk').removeClass('w3-teal').addClass('activenav');
    $('#daftarRisk').removeClass('activenav').addClass('w3-teal');
    $('#rencanaRisk').removeClass('activenav').addClass('w3-teal');

    document.getElementById("real_nama_sop").value = $(this).attr('real-nama_sop');
    document.getElementById("real_nama_risk").value = $(this).attr('real-nama_risk');
    document.getElementById("real_deskripsi_cause").value = $(this).attr('real-cause');
    document.getElementById("real_deskripsi_pengendalian").value = $(this).attr('real-pengendalian');
    document.getElementById("real_id_sop").value = $(this).attr('real-id_sop');
    document.getElementById("real_deskripsi_rtp").value = $(this).attr('real-rencana');
    document.getElementById("real_plan_mulai").value = $(this).attr('real-plan_mulai');
    document.getElementById("real_plan_selesai").value = $(this).attr('real-plan_selesai');
    document.getElementById("real_indikator_output").value = $(this).attr('real-output');
    document.getElementById("real_pic").value = $(this).attr('real-pic');
  });

  $('#cancelReal').click(function(){
    $('.AddRealisasi').slideUp();
    $('.contentRealisasi').slideDown();
  });

  $('.formReal').submit(function(){
    if($('#real_mulai').val() == '' || $('#real_selesai').val() == '' || $('#hambatan').val() == '')
    {
        $('#alertReal').fadeIn('slow').delay(3000).fadeOut('fast').text('Field Tidak Boleh Kosong');
        return false;
    } else {
        return true;
    }
  });
});

</script>

</body>
</html>
