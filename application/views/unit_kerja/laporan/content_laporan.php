
  <div class="leftcolumn w3-animate-bottom">
    <div class="card">
      <div class="w3-panel" style="width:100%">
        <a href="<?= base_url('unit_kerja/laporan/lap_daftar_risiko') ?>" class="w3-button w3-block w3-teal sidebar" id="default">Laporan Daftar Risiko</a>
      </div>
      <div class="w3-panel" style="width:100%">
        <a href="<?= base_url('unit_kerja/laporan/lap_rencana_penanganan') ?>" class="w3-button w3-block w3-teal sidebar">Laporan Rencana Penanganan Risiko</a>
      </div>
      <div class="w3-panel" style="width:100%">
        <a href="<?= base_url('unit_kerja/laporan/lap_realisasi_penanganan') ?>" class="w3-button w3-block w3-teal sidebar">Laporan Realisasi Penanganan Risiko</a>
      </div>
    </div>
    <div class="card">
    <div class="box box-primary">
        <div class="box-body box-profile">
            <?php foreach($showprofile as $key) : ?>
            <img class="profile-user-img img-responsive img-circle" src="<?= base_url('upload/'.$key->foto) ?>" alt="User profile picture">
            <?php endforeach; ?>
              <h3 class="profile-username text-center"><?= $this->session->userdata('nama_pegawai') ?></h3>

              <p class="text-muted text-center"><?= $this->session->userdata('nip') ?></p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b><i class="fa fa-black-tie"></i> Jabatan</b>
                    <p class="text-muted">
                        <?= $this->session->userdata('ket_jabatan') ?>
                    </p>
                </li>
                <li class="list-group-item">
                  <b><i class="fa fa-user"></i> Unit Kerja</b>
                  <p class="text-muted">
                        <?= $this->session->userdata('nama_unit') ?>
                    </p>
                </li>
                <li class="list-group-item">
                  <b><i class="fa fa-users"></i> Organisasi</b>
                  <p class="text-muted">
                        <?= $this->session->userdata('nama_unor') ?>
                    </p>
                </li>
              </ul>
              <div class="w3-panel" style="width:100%">
                <button type="button" class="w3-button w3-block w3-teal" data-toggle="modal" data-target="#myModal1">Ganti Foto</button>
              </div>

              <div class="w3-panel" style="width:100%">
                <button type="button" class="w3-button w3-block w3-teal" data-toggle="modal" data-target="#myModal">Ganti Password</button>
              </div>
            </div>
          </div>
    </div>
  </div>

  <div class="rightcolumn">
    <div class="card w3-animate-right">
        <div class="loader"></div>
        <div id="content"></div>
    </div>
  </div>

 <script type="text/javascript">
    $(document).ready(function(){
      $('#content').hide('fast', function(){
        $('#default').removeClass('w3-teal').addClass('activenav');
        $('.loader').fadeIn(function(){
          $('#content').load('<?= base_url('unit_kerja/laporan/lap_daftar_risiko') ?>', function(){
            $('#content').show('slow');
            $('.loader').fadeOut();
          });
        });

      });
      $('.sidebar').each(function(){
        $(this).click(function(){
          var link = $(this).attr('href');

          $('.sidebar').removeClass('activenav').addClass('w3-teal');
          $(this).removeClass('w3-teal').addClass('activenav');

          $('#content').hide('fast', function(){
            $('.loader').fadeIn(function(){
              $('#content').load(link, function(){
                $('#content').show('slow');
                $('.loader').fadeOut();
              });
            });
          });
          return false;
        });
      });
    });
</script>
