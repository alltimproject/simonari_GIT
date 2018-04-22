$(function(){
  $('.lapDR').show();
  $('.lapRencana').hide();
  $('.lapReal').hide();
  $('#navDR').removeClass('w3-teal').addClass('activenav');

  $('#navDR').click(function(){
    $('.lapDR').slideDown();
    $('.lapRencana').slideUp();
    $('.lapReal').slideUp();
    $('#navDR').removeClass('w3-teal').addClass('activenav');
    $('#navRcn').removeClass('activenav').addClass('w3-teal');
    $('#navReal').removeClass('activenav').addClass('w3-teal');
  });

  $('#navRcn').click(function(){
    $('.lapDR').slideUp();
    $('.lapRencana').slideDown();
    $('.lapReal').slideUp();
    $('#navRcn').removeClass('w3-teal').addClass('activenav');
    $('#navDR').removeClass('activenav').addClass('w3-teal');
    $('#navReal').removeClass('activenav').addClass('w3-teal');
  });

  $('#navReal').click(function(){
    $('.lapDR').slideUp();
    $('.lapRencana').slideUp();
    $('.lapReal').slideDown();
    $('#navReal').removeClass('w3-teal').addClass('activenav');
    $('#navRcn').removeClass('activenav').addClass('w3-teal');
    $('#navDR').removeClass('activenav').addClass('w3-teal');
  });
});
