
$(function(){
$(document).on('click', '#editRisiko', function(e) {
    $('.contentRISK').slideUp();
    $('.editRisiko').slideDown();
    $('.contentRealisasi').slideUp();
    $('.contentRTP').slideUp();
    $('.contentTambahRTP').slideUp();
    $('.identifikasiRisk').slideDown();
    $('.AddRealisasi').slideUp();
    $('#alertRisiko').hide();
    $('#idenRisk').removeClass('w3-teal').addClass('activenav');
    $('#daftarRisk').removeClass('activenav').addClass('w3-teal');
    $('#rencanaRisk').removeClass('activenav').addClass('w3-teal');
    $('#realisasiRisk').removeClass('activenav').addClass('w3-teal');

    $('#submitRisiko').removeClass('btn-info').addClass('btn-success').text('Edit');
    $('#judulRisiko').text('Edit Identifikasi Risiko');

  $('html, body').animate({
    scrollTop: $('.editRisiko').offset().top
  });

      document.getElementById("iden-nama_sop").value = $(this).attr('iden-nama_sop');
      document.getElementById("iden-nama_risk").value = $(this).attr('iden-nama_risk');
      document.getElementById("iden-frekuensi").value = $(this).attr('iden-frekuensi');
      document.getElementById("iden-dampak").value = $(this).attr('iden-dampak');
      document.getElementById("iden-deskripsi_cause").value = $(this).attr('iden-deskripsi_cause');
      document.getElementById("iden-kategori_cause").value = $(this).attr('iden-kategori_cause');
      document.getElementById("iden-deskripsi_pengendalian").value = $(this).attr('iden-deskripsi_pengendalian');
      document.getElementById("iden-sisa_risk").value = $(this).attr('iden-sisa_risk');
      document.getElementById("iden-id_sop").value = $(this).attr('iden-id_sop');
});

    $(document).on('click', '#tambahRisiko', function(e) {
        $('.contentRISK').slideUp();
        $('.editRisiko').slideDown();
        $('.contentRealisasi').slideUp();
        $('.contentRTP').slideUp();
        $('.contentTambahRTP').slideUp();
        $('.identifikasiRisk').slideDown();
        $('.AddRealisasi').slideUp();
        $('#alertRisiko').hide();
        $('#idenRisk').removeClass('w3-teal').addClass('activenav');
        $('#daftarRisk').removeClass('activenav').addClass('w3-teal');
        $('#rencanaRisk').removeClass('activenav').addClass('w3-teal'); $('#realisasiRisk').removeClass('activenav').addClass('w3-teal');
        $('#submitRisiko').removeClass('btn-success').addClass('btn-info').text('Simpan');
        $('#judulRisiko').text('Tambah Identifikasi Risiko');


          $('html, body').animate({
            scrollTop: $('.editRisiko').offset().top
          });

          document.getElementById("iden-nama_sop").value = $(this).attr('iden-nama_sop');
          $("#iden-nama_risk").val('');
          $("#iden-frekuensi").val('');
          $("#iden-dampak").val('');
          $("#iden-deskripsi_cause").val('');
          $("#iden-kategori_cause").val('');
          $("#iden-deskripsi_pengendalian").val('');
          $("#iden-sisa_risk").val('');
          document.getElementById("iden-id_sop").value = $(this).attr('iden-id_sop');

    });

    $('.formRisiko').submit(function(){
        if($("#iden-nama_risk").val() == '' || $("#iden-frekuensi").val() == '' || $("#iden-dampak").val() == '' || $("#iden-deskripsi_cause").val() == '' || $("#iden-kategori_cause").val() == '' || $("#iden-deskripsi_pengendalian").val() == '' || $("#iden-sisa_risk").val() == '')
        {
           $('#alertRisiko').fadeIn('slow').delay(3000).fadeOut('fast').text('Field tidak boleh Kosong');
           return false;
        } else {
           return true;
        }
    });

    $('#cancelRisiko').click(function(){
        $('.editRisiko').slideUp();
        $('.identifikasiRisk').slideDown();
    });
});
