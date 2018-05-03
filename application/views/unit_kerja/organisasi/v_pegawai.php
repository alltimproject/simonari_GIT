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
    
<script>
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

</script>