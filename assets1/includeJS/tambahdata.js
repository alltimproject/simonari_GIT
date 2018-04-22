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
    html_code += "<td><textarea name='nama_sop[]' class='form-control' style='height:100px' required></textarea></td>";
    html_code += "<td><textarea name='nama_risk[]' class='form-control' style='height:100px' required></textarea></td>";
    html_code += '<td><select name="frekuensi[]" class="form-control frekuensi" required><option value=""></option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option></select></td>';
    html_code += '<td><select name="dampak[]" class="form-control dampak" required><option value=""></option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option></select></td>';
    html_code += "<td><textarea name='deskripsi_cause[]' class='form-control' style='height:100px' required></textarea></td>";
    html_code += '<td><select name="kategori_cause[]" class="form-control" required><option value="">--Pilih Kategori--</option><option value="Man">Man</option><option value="Money">Money</option><option value="Method">Method</option><option value="Machine">Machine</option><option value="Material">Material</option></select></td>';
    html_code += "<td><textarea name='deskripsi_p_exist[]' class='form-control' style='height:100px' required></textarea></td>";
    html_code += "<td><textarea name='sisa_risk[]' class='form-control' style='height:100px' required></textarea></td>";
    html_code += "<td><button id='"+count+"' type='button' name='remove' class='btn btn-danger btn-md remove'> - </button></td>";
    html_code += "</tr>";
    $('#tb-sop').append(html_code);
  });
  $(document).on('click', '.remove', function(){
    var button_id = $(this).attr("id");
    $('#baris'+button_id+'').remove();
  });
});
