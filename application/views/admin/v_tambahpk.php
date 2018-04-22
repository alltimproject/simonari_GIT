<br/><br/>
<div class="box box-info">
  <div class="box-header">
    <div class="box-title"><h3>Tambah Perjanjian Kinerja </h3></div>
  </div>
  <div class="box-body">
    <div class="table-responsive">
      <form class="form-pk" action="<?= base_url('admin/kegiatanprosesbisnis/savePK') ?>" method="post">
        <table class="table table-bordered table-responsive" id="tb-pk">
          <tr style="background-color: grey; color: white">
              <th width="40%">IK</th>
              <th width="30%">Target</th>
              <th width="20%">Anggaran</th>
              <th width="10%">Tahun PK</th>
              <th width="5%"><button type="button" name="add" id="add-pk" class="btn btn-success btn-md">+</button></th>
          </tr>
          <tr>
              <td class="ik"><textarea name="nama_ik[]" class="form-control" style="height: 80px" required ></textarea></td>
              <td class="target"><textarea name="target[]" class="form-control" style="height: 80px" required></textarea></td>
              <td class="anggaran"><input type="number" class="form-control" name="anggaran[]" required></td>
              <td class="tahun_pk"><input type="number" class="form-control" name="tahun_pk[]" maxlength="4"></td>
              <td></td>
          </tr>
        </table>
        <div class="form-group">
          <center>
              <button type="submit" name="submit" class="btn btn-info btn-md">Save</button>
          </center>
        </div>
      </form>
    </div>
  </div>
</div>
