
  <div class="leftcolumn w3-animate-top">
    <div class="card">
      <div class="w3-panel" style="width:100%">
        <a id="unitKerja" class="w3-button w3-block w3-teal">Unit Kerja</a>
      </div>
      <div class="w3-panel" style="width:100%">
        <a id="dataPegawai" class="w3-button w3-block w3-teal">Pegawai</a>
      </div>
    </div>
    <div class="card">
      <?php foreach($showprofile as $key) : ?>
      <div class="box box-widget widget-user">
        <!-- Add the bg color to the header using any of the bg-* classes -->
        <div class="widget-user-header bg-black-active">
          <h4 class="widget-user-username"><?= $this->session->userdata('nama_pegawai') ?></h4>
          <small><?= $this->session->userdata('nip') ?></small>
        </div>

        <div class="widget-user-image">
          <img class="img-circle img-responsive" src="<?= base_url('upload/'.$key->foto) ?>" alt="User Avatar">
        </div>
      <?php endforeach; ?>
        <div class="box-footer no-padding">
          <ul class="nav nav-stacked">
            <br/><br/><br/>
            <li class="active"><a><?= $this->session->userdata('nama_jabatan') ?></a></li>
            <li class="active"><a><?= $this->session->userdata('nama_unit') ?></a></li>
            <li class="active"><a><?= $this->session->userdata('nama_unor') ?></a></li>
          </ul>
        </div>
      </div>

    <div class="w3-panel" style="width:100%">
      <button type="button" class="w3-button w3-block w3-teal" data-toggle="modal" data-target="#myModal1">Ganti Foto</button>
    </div>

    <div class="w3-panel" style="width:100%">
      <button type="button" class="w3-button w3-block w3-teal" data-toggle="modal" data-target="#myModal">Ganti Password</button>
    </div>

    
    </div>
  </div>
