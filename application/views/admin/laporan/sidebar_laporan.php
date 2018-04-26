<div class="row">

  <div class="leftcolumn w3-animate-top">
    <div class="card">
      <div class="w3-panel" style="width:100%">
        <a href="<?= base_url('admin/laporan/daftarrisiko') ?>"  class="w3-button w3-block w3-teal">Laporan Daftar Risiko</a>
      </div>
      <div class="w3-panel" style="width:100%">
        <a href="<?= base_url('admin/laporan/daftarrencana') ?>"  class="w3-button w3-block w3-teal">Laporan Rencana Penanganan Risiko</a>
      </div>
      <div class="w3-panel" style="width:100%">
        <a href="<?= base_url('admin/laporan/daftarrealisasi') ?>"  class="w3-button w3-block w3-teal">Laporan Realisasi Penanganan Risiko</a>
      </div>
    </div>
  </div>
  
  <div class="rightcolumn">
      <div class="card">
          <div id="contentLap"></div>
      </div>
  </div>
  
  
<script type="text/javascript">
    $(document).ready(function(){
      $('#contentLap').hide('fast', function(){
        $('#contentLap').load('<?= base_url('admin/laporan/daftarrisiko') ?>', function(){
          $('#contentLap').slideDown('slow');
        });
      });
      $('.w3-button').each(function(){
        $(this).click(function(){
          var link = $(this).attr('href');
          $('#contentLap').hide('fast', function(){
            $('#contentLap').load(link, function(){
              $('#contentLap').slideDown('slow');
            });
          });
          return false;
        });
      });
    });
    </script>