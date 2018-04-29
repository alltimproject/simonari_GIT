$(document).ready(function(){
  $('.editPK').hide();
  $('.editSKP').hide();
  $('.editSOP').hide();
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

$(document).on('click', '#cancelUpdatePK', function(e){
  $('.editPK').slideUp();
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


//----------------- SKP ---------------------
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
$(document).on('click', '#cancelUpdateSKP', function(e){
  $('.editSKP').slideUp();
});
$(document).on('click', '#cancelUpdateSOP', function(e){
  $('.editSOP').slideUp();
});






//-------------- SOP --------------------------
$(document).on('click', '#pilihSOP', function(e) {
  $('.editSOP').slideDown();
  $('html, body').animate({
    scrollTop: $('.editSOP').offset().top
  });
  document.getElementById("nama_sop").value = $(this).attr('data-nama_sop');
  document.getElementById("id_sop").value = $(this).attr('data-id_sop');
});


$(function(){
  $('#alertSOP').hide();
  $('.editsop').submit(function(){
    if($('#nama_sop').val() == '')
    {
        $('#alertSOP').fadeIn('slow').delay(3000).fadeOut('fast').text('Field Tidak Boleh Kosong');
        return false;
    } else {
        return true;
    }
  });
});

$(document).ready(function(){
  var count = 1;
  $('#add-sop').click(function(){
    count = count + 1;
    var html_code = "<tr id='baris"+count+"'>";
    html_code += "<td style='background-color: grey; color: white;'></td>";
    html_code += "<td><textarea name='nama_sop[]' class='form-control' style='height:100px' required></textarea></td>";
    html_code += "<td><center><button id='"+count+"' type='button' name='remove' class='btn btn-danger btn-md remove'> - </button></center></td>";
    html_code += "</tr>";
    $('#tb-sop').append(html_code);
  });
  $(document).on('click', '.remove', function(){
    var button_id = $(this).attr("id");
    $('#baris'+button_id+'').remove();
  });
});
