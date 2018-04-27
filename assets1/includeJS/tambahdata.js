$(document).ready(function(){
  var count = 1;
  $('#add-pk').click(function(){
    count = count + 1;
    var html_code = "<tr id='baris"+count+"'>";
    html_code += "<td><textarea name='nama_ik[]' class='form-control' style='height: 80px' id='nama_ik' required></textarea></td>";
    html_code += "<td><textarea name='target[]' class='form-control' style='height: 80px' id='target' required></textarea></td>";
    html_code += "<td><input type='number' class='form-control' name='anggaran[]' id='anggaran' required></td>";
    html_code += "<td><input type='number' class='form-control' name='tahun_pk[]' maxlength='4' id='tahun_pk' required></td>";
    html_code += "<td><button id='"+count+"' type='button' name='remove' class='btn btn-danger btn-md remove'>-</button></td>";
    html_code += "</tr>";
    $('#tb-pk').append(html_code);
  });
  $(document).on('click', '.remove', function(){
    var button_id = $(this).attr("id");
    $('#baris'+button_id+'').remove();
  });
});

$(document).ready(function(){
  var count = 1;
  $('#add-skp').click(function(){
    count = count + 1;
    var html_code = "<tr id='baris"+count+"'>";
    html_code += "<td></td>";
    html_code += "<td><textarea name='nama_skp[]' class='form-control' style='height:100px;' required></textarea></td>";
    html_code += "<td><input name='target_volume[]' class='form-control' style='width:150px;' required></td>";
    html_code += "<td><input name='target_mutu[]' class='form-control' style='width:150px;' required></td>";
    html_code += "<td><input name='target_waktu[]' class='form-control' style='width:150px;' required></td>";
    html_code += "<td><input type='number' class='form-control' name='target_biaya[]' required></td>";
    html_code += "<td><button id='"+count+"' type='button' name='remove' class='btn btn-danger btn-md remove'> - </button></td>";
    html_code += "</tr>";
    $('#tb-skp').append(html_code);
  });
  $(document).on('click', '.remove', function(){
    var button_id = $(this).attr("id");
    $('#baris'+button_id+'').remove();
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
