$(function(){
  $('#pernyataanRisk').DataTable({
    'paging'      : true,
    'lengthChange': true,
    'searching'   : true,
    'ordering'    : true,
    'info'        : true,
    'autoWidth'   : false
  });
});

$(document).ready(function(){
    //alert(modal);
    $('#modalWelcome').modal('show');
});
