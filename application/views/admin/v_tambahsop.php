<br/><br/>
<div class="box box-info">
  <div class="box-header">
    <div class="box-title"> <h3>Tambah SOP </h3></div>
  </div>
  <div class="box-body">
    <div class="table-responsive">
        <form class="form-sop" action="<?= base_url('admin/kegiatanprosesbisnis/saveSOP') ?>" method="post">
          <table class="table table-bordered" id="tb-sop">
            <tr>
              <th>Indikator Kinerja & Kegiatan</th>
              <td colspan="4">
                <select class="form-control" name="id_pk" id="selectPK">
                  <option value="">-- Pilih PK --</option>
                  <?php foreach ($select as $option): ?>
                    <?php echo $option->id_pk; ?>
                    <option value="<?= $option->id_pk ?>"><?= $option->nama_ik ?></option>
                  <?php endforeach; ?>
                </select>
              </td>
                      <td colspan="4">
                          <select class="form-control" name="id_skp" id="selectSKP" disabled="">
                            <option value="">--Pilih Kegiatan --</option>
                         </select>
                      </td>
                      <td></td>
            </tr>
              <tr class="w3-dark-grey">
              <th width="15%">Proses Bisnis</th>
              <th width="15%">Risiko</th>
              <th width="5%">Kemungkinan</th>
              <th width="5%">Dampak</th>
              <th width="15%">Penyebab Risiko</th>
              <th width="10%">Kategori Penyebab</th>
              <th width="15%">Penanganan Yang Sudah ada</th>
              <th width="10%">Sisa Risiko</th>
                <th width="5%"><center><button type="button" name="add" id="add-sop" class="btn btn-success btn-md"> + </button></center></th>
              </tr>
              <tr>
                <td><textarea name="nama_sop[]" class="form-control" style="height:100px"></textarea></td>
              <td><textarea name="nama_risk[]" class="form-control" style="height:100px"></textarea></td>
                <td><select name="frekuensi[]" class="form-control frekuensi"><option value=""></option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option></select></td>
                <td><select name="dampak[]" class="form-control dampak"><option value=""></option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option></select></td>
              <td><textarea name="deskripsi_cause[]" class="form-control" style="height:100px"></textarea></td>
              <td><select name="kategori_cause[]" class="form-control"><option value="">--Pilih Kategori--</option><option value="Man">Man</option><option value="Money">Money</option><option value="Method">Method</option><option value="Machine">Machine</option><option value="Material">Material</option></select></td>
              <td><textarea name="deskripsi_p_exist[]" class="form-control" style="height:100px"></textarea></td>
                <td><textarea name="sisa_risk[]" class="form-control" style="height:100px"></textarea></td>
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

<
