$(document).ready(function(){
  $('.editPK').hide();
  $('.editSKP').hide();
  $('.editSOP').hide();
});


$(document).on('click', '#pilihPK', function(e) {
  $('.editPK').slideDown();
  $('html, body').animate({
    scrollTop: $('.editPK').offset().top
  });
  document.getElementById("nama_ik").value = $(this).attr('data-nama_ik');
  document.getElementById("target").value = $(this).attr('data-target');
  document.getElementById("anggaran").value = $(this).attr('data-anggaran');
  document.getElementById("tahun_pk").value = $(this).attr('data-tahun_pk');
  document.getElementById("id_pk").value = $(this).attr('data-id_pk');

});

$(document).on('click', '#pilihSKP', function(e) {
  $('.editSKP').slideDown();
  $('html, body').animate({
    scrollTop: $('.editSKP').offset().top
  });
  document.getElementById("nama_skp").value = $(this).attr('data-nama_skp');
  document.getElementById("target_volume").value = $(this).attr('data-target_volume');
  document.getElementById("target_mutu").value = $(this).attr('data-target_mutu');
  document.getElementById("target_waktu").value = $(this).attr('data-target_waktu');
  document.getElementById("target_biaya").value = $(this).attr('data-target_biaya');
  document.getElementById("id_skp").value = $(this).attr('data-id_skp');

});

$(document).on('click', '#pilihSOP', function(e) {
  $('.editSOP').slideDown();
  $('html, body').animate({
    scrollTop: $('.editSOP').offset().top
  });
  document.getElementById("nama_sop").value = $(this).attr('data-nama_sop');
  document.getElementById("nama_risk").value = $(this).attr('data-nama_risk');
  document.getElementById("sisa_risk").value = $(this).attr('data-sisa_risk');
  document.getElementById("frekuensi").value = $(this).attr('data-frekuensi');
  document.getElementById("dampak").value = $(this).attr('data-dampak');
  document.getElementById("deskripsi_cause").value = $(this).attr('data-deskripsi_cause');
  document.getElementById("kategori_cause").value = $(this).attr('data-kategori_cause');
  document.getElementById("deskripsi_pengendalian").value = $(this).attr('data-deskripsi_pengendalian');
  document.getElementById("id_sop").value = $(this).attr('data-id_sop');
});

$(document).on('click', '#cancelUpdatePK', function(e){
  $('.editPK').slideUp();
});
$(document).on('click', '#cancelUpdateSKP', function(e){
  $('.editSKP').slideUp();
});
$(document).on('click', '#cancelUpdateSOP', function(e){
  $('.editSOP').slideUp();
});

$(function(){

  var halaman = $('.callout').attr('data-halaman');

  if(halaman == 'okpk')
  {
    $('.contentPK').slideDown();
    $('.contentSOP').hide();
    $('.contentSKP').hide();
    $('#PK').removeClass('w3-teal').addClass('activenav');
  } else if(halaman == 'okskp')
  {
    $('.contentPK').hide();
    $('.contentSOP').hide();
    $('.contentSKP').slideDown();
    $('#SKP').removeClass('w3-teal').addClass('activenav');
  } else if(halaman == 'oksop')
  {
    $('.contentPK').hide();
    $('.contentSOP').slideDown();
    $('.contentSKP').hide();
    $('#SOP').removeClass('w3-teal').addClass('activenav');
  } else
  {
    $('#PK').removeClass('w3-teal').addClass('activenav');
    $('.contentSOP').hide();
    $('.contentSKP').hide();
  }

  $('#PK').click(function(){
    $('.contentPK').slideDown();
    $('.contentSOP').slideUp();
    $('.contentSKP').slideUp();
    $(this).removeClass('w3-teal').addClass('activenav');
    $('#SKP').removeClass('activenav').addClass('w3-teal');
    $('#SOP').removeClass('activenav').addClass('w3-teal');

    $('.editPK').hide();
    $('.editSKP').hide();
    $('.editSOP').hide();
  });
  $('#SKP').click(function(){
    $('.contentPK').slideUp();
    $('.contentSOP').slideUp();
    $('.contentSKP').slideDown();
    $(this).removeClass('w3-teal').addClass('activenav');
    $('#PK').removeClass('activenav').addClass('w3-teal');
    $('#SOP').removeClass('activenav').addClass('w3-teal');

    $('.editPK').hide();
    $('.editSKP').hide();
    $('.editSOP').hide();
  });
  $('#SOP').click(function(){
    $('.contentPK').slideUp();
    $('.contentSOP').slideDown();
    $('.contentSKP').slideUp();
    $(this).removeClass('w3-teal').addClass('activenav');
    $('#SKP').removeClass('activenav').addClass('w3-teal');
    $('#PK').removeClass('activenav').addClass('w3-teal');

    $('.editPK').hide();
    $('.editSKP').hide();
    $('.editSOP').hide();
  });
});

$(function(){
  $('#alertPK').hide();
  $('.editpk').submit(function(){
    if($('#nama_ik').val() == '' || $('#target').val() == '' || $('#anggaran').val() == '' || $('#tahun_pk').val() == '')
    {
        $('#alertPK').fadeIn('slow').delay(3000).fadeOut('fast').text('Field Tidak Boleh Kosong');
        return false;
    } else {
        return true;
    }
  });
});

$(function(){
  $('#alertSKP').hide();
  $('.editskp').submit(function(){
    if($('#nama_skp').val() == '' || $('#target_volume').val() == '' || $('#target_mutu').val() == '' || $('#target_waktu').val() == '' || $('#target_biaya').val() == '')
    {
        $('#alertSKP').fadeIn('slow').delay(3000).fadeOut('fast').text('Field Tidak Boleh Kosong');
        return false;
    } else {
        return true;
    }
  });
});

$(function(){
  $('#alertSOP').hide();
  $('.editsop').submit(function(){
    if($('#nama_sop').val() == '' || $('#nama_risk').val() == '' || $('#frekuensi').val() == '' || $('#dampak').val() == '' || $('#deskripsi_cause').val() == '' || $('#kategori_cause').val() == '' || $('#deskripsi_pengendalian').val() == '' || $('#sisa_risk').val() == '')
    {
        $('#alertSOP').fadeIn('slow').delay(3000).fadeOut('fast').text('Field Tidak Boleh Kosong');
        return false;
    } else {
        return true;
    }
  });
});
