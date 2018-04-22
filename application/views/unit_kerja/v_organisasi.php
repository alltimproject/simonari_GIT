

  <div class="rightcolumn">
    <div class="card">

      <?php foreach ($keterangan as $org){
        $sasaran = $org->sasaran;
        $iku = $org->iku;
      } ?>



      <div class="contentUnit">
        <legend>Unit Kerja</legend>
        <div class="alert alert-danger" id="alertOrg"></div>
             <form class="form-horizontal" id="form-org" action="<?= base_url('unit_kerja/organisasi/editUnit') ?>" method="post">
                 <div class="form-group">
                   <label class="col-sm-2 control-label">Unit Kerja</label>
                   <div class="col-sm-8">
                     <input type="text" name="nama_unit" class="form-control" value="<?= $this->session->userdata('nama_unit') ?>" readonly>
                     <input type="hidden" name="id_unit" value="<?= $this->session->userdata('id_unit') ?>">
                   </div>
                 </div>
                 <div class="form-group">
                   <label for="inputPassword3" class="col-sm-2 control-label">Deputi</label>
                   <div class="col-sm-8">
                     <input type="text" name="name_unor" class="form-control" value="<?= $this->session->userdata('nama_unor') ?>" readonly>
                     <input type="hidden" name="id_unor" value="<?= $this->session->userdata('id_unor') ?>">
                   </div>
                 </div>
                 <div class="form-group">
                   <label for="inputPassword3" class="col-sm-2 control-label">Sasaran</label>
                   <div class="col-sm-8">
                    <textarea name="sasaran" class="form-control" rows="4" disabled="" id="sasaran"><?= $sasaran ?></textarea>
                   </div>
                   <button type="button" name="edit" id="editSasaran" class="btn btn-md btn-success"><span class="fa fa-pencil"></span></button>
                 </div>

                 <div class="form-group">
                   <label for="inputPassword3" class="col-sm-2 control-label">Indikator Unit Kerja</label>
                   <div class="col-sm-8">
                    <textarea name="iku" class="form-control" rows="4" disabled id="ikuForm"><?= $iku ?></textarea>
                   </div>
                   <button type="button" name="edit" id="editIKU" class="btn btn-md btn-success"><span class="fa fa-pencil"></span></button>
                 </div>

                 <center>
                  <button type="submit" name="updateB" id="updateB" class="btn btn-md btn-success">Update <span class="fa fa-pencil"></span></button>
                  <button type="button" name="button" id="cancelB" class="btn btn-md btn-danger">Cancel <span class="fa fa-close"></span></button>
                </center>
             </form>
      </div>

<?php $no = 1; ?>
      <div class="contentPegawai">
        <legend>Daftar Pegawai</legend>
        <h4>Unit Kerja : <?= $this->session->userdata('nama_unit') ?></h4> <br/>
        <div class="table-responsive">
          <table id="pegawai" class="table table-bordered table-striped table-hover">
              <thead>
  	           <tr class="bg-blue">
                <th>No</th>
  							<th>NIP</th>
  							<th>Nama</th>
  							<th>Jabatan</th>
  						</tr>
  					</thead>
  					<tbody>
  					<?php foreach ($data as $key): ?>
  						<tr>
                <td><?= $no++ ?></td>
  							<td><?= $key->nip ?></td>
  							<td><?= $key->nama_pegawai ?></td>
  							<td><?= $key->nama_jabatan ?></td>
  						</tr>
  					<?php endforeach ?>
  					</tbody>
  				</table>
      </div>
    </div>
  </div>
</div>

<?php if($this->session->flashdata('notif') ){ ?>
              <div class="callout callout-<?= $this->session->flashdata('class'); ?>" id="notifications" data-halaman="<?= $this->session->flashdata('halaman'); ?>">
              <?= $this->session->flashdata('notif'); ?>
              </div>
              <?php } ?>

<script type="text/javascript" src="<?= base_url().'assets1/includeJS/organisasi.js' ?>"></script>
