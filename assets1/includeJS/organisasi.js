$(function(){
  $('#pegawai').DataTable({
    'paging'      : false,
    'lengthChange': false,
    'searching'   : true,
    'ordering'    : true,
    'info'        : true,
    'autoWidth'   : false
  });
});

$(function(){
  $('#alertOrg').hide();
  $('#updateB').hide();
  $('#cancelB').hide();

  $('#editSasaran').click(function(){
    $('#sasaran').prop('disabled', false);
    $('#updateB').show();
    $('#cancelB').show();
    return false;
  });
  $('#editIKU').click(function(){
    $('#ikuForm').prop('disabled', false);
    $('#updateB').show();
    $('#cancelB').show();
    return false;
  });
  $('#cancelB').click(function(){
    $('#sasaran').prop('disabled', true);
    $('#ikuForm').prop('disabled', true);
    $('#updateB').hide();
    $('#cancelB').hide();
    return false;
  });
  $('#form-org').submit(function(){

    if($('#sasaran').val() == '' || $('#ikuForm').val() == '')
    {
      $('#alertOrg').fadeIn().text('Field tidak boleh kosong');
      return false;
    } else
    {
      $('#sasaran').prop('disabled', false);
      $('#ikuForm').prop('disabled', false);
      return true;
    }
  });
});

$(function(){
  $('.contentPegawai').hide();
  $('#unitKerja').removeClass('w3-teal').addClass('activenav');

  $('#unitKerja').click(function(){
    $('.contentPegawai').slideUp();
    $('.contentUnit').slideDown();
    $(this).removeClass('w3-teal').addClass('activenav');
    $('#dataPegawai').removeClass('activenav').addClass('w3-teal');
  });
  $('#dataPegawai').click(function(){
    $('.contentUnit').slideUp();
    $('.contentPegawai').slideDown();
    $(this).removeClass('w3-teal').addClass('activenav');
    $('#unitKerja').removeClass('activenav').addClass('w3-teal');
  });
});
