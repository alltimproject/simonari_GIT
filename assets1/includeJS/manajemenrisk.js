$(function(){

  var halaman = $('.callout').attr('data-MR');

  if(halaman == 'okreal')
  {
    $('.contentRISK').hide();
    $('.contentRTP').hide();
    $('.contentRealisasi').slideDown();
    $('.contentTambahRTP').hide();
    $('.AddRealisasi').hide();
    $('#realisasiRisk').removeClass('w3-teal').addClass('activenav');
    $('#alertReal').hide();
    $('#alertRTP').hide();
    $('.contentUploadzip').show();
  } else if(halaman == 'okrtp')
  {
    $('.contentRISK').hide();
    $('.contentRTP').slideDown();
    $('.contentRealisasi').hide();
    $('.contentTambahRTP').hide();
    $('.AddRealisasi').hide();
    $('#rencanaRisk').removeClass('w3-teal').addClass('activenav');
    $('#alertReal').hide();
    $('#alertRTP').hide();
  } else
  {
    $('#daftarRisk').removeClass('w3-teal').addClass('activenav');
    $('.contentRTP').hide();
    $('.contentRealisasi').hide();
    $('.contentTambahRTP').hide();
    $('.AddRealisasi').hide();
    $('#alertReal').hide();
    $('#alertRTP').hide();
  }

  $('#daftarRisk').click(function(){
    $('.contentRISK').slideDown();
    $('.contentRTP').slideUp();
    $('.contentRealisasi').slideUp();
    $('.contentTambahRTP').hide();
    $('.AddRealisasi').hide();
    $('#daftarRisk').removeClass('w3-teal').addClass('activenav');
    $('#rencanaRisk').removeClass('activenav').addClass('w3-teal');
    $('#realisasiRisk').removeClass('activenav').addClass('w3-teal');

    // $('.editPK').hide();
    // $('.editSKP').hide();
    // $('.editSOP').hide();
  });
  $('#rencanaRisk').click(function(){
    $('.contentRISK').slideUp();
    $('.contentRealisasi').slideUp();
    $('.contentRTP').slideDown();
    $('.contentTambahRTP').hide();
    $('.AddRealisasi').hide();
    $('#rencanaRisk').removeClass('w3-teal').addClass('activenav');
    $('#daftarRisk').removeClass('activenav').addClass('w3-teal');
    $('#realisasiRisk').removeClass('activenav').addClass('w3-teal');

    // $('.editPK').hide();
    // $('.editSKP').hide();
    // $('.editSOP').hide();
  });
  $('#realisasiRisk').click(function(){
    $('.contentRISK').slideUp();
    $('.contentRealisasi').slideDown();
    $('.contentRTP').slideUp();
    $('.contentTambahRTP').hide();
    $('.AddRealisasi').hide();
    $('#realisasiRisk').removeClass('w3-teal').addClass('activenav');
    $('#daftarRisk').removeClass('activenav').addClass('w3-teal');
    $('#rencanaRisk').removeClass('activenav').addClass('w3-teal');

    // $('.editPK').hide();
    // $('.editSKP').hide();
    // $('.editSOP').hide();
  });

  $('#uploadZip').click(function(){
    $('.contentUploadzip').slideDown();
    $('.contentRISK').slideUp();
    $('.contentRealisasi').slideUp();
    $('.contentRTP').slideUp();
    $('.contentTambahRTP').hide();
    $('.AddRealisasi').hide();
    $('#uploadZip').removeClass('w3-teal').addClass('activenav');
    $('#daftarRisk').removeClass('activenav').addClass('w3-teal');
    $('#rencanaRisk').removeClass('activenav').addClass('w3-teal');

  });

});

$(function(){
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
    document.getElementById("status").value = "Open";
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
    document.getElementById("status").value = $(this).attr('data-status');
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

$(function(){
  $(document).on('click', '#buatRealisasi', function(e) {
    $('.contentRISK').hide();
    $('.contentRealisasi').hide();
    $('.contentRTP').hide();
    $('.contentTambahRTP').hide();
    $('.AddRealisasi').slideDown();
    $('#realisasiRisk').removeClass('w3-teal').addClass('activenav');
    $('#daftarRisk').removeClass('activenav').addClass('w3-teal');
    $('#rencanaRisk').removeClass('activenav').addClass('w3-teal');

    $('html, body').animate({
      scrollTop: $('.contentTambahRTP').offset().top
    });

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
