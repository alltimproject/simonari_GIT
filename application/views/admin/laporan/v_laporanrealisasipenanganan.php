<div class="row">

  <div class="leftcolumn w3-animate-top">
    <div class="card">
      <div class="w3-panel" style="width:100%">
        <a href="<?= base_url('admin/laporan/printdaftarresiko')  ?>"  class="w3-button w3-block w3-teal">Laporan Daftar Risiko</a>
      </div>
      <div class="w3-panel" style="width:100%">
        <a href="<?= base_url('admin/laporan/printreportpenangaan')  ?>"  class="w3-button w3-block w3-teal">Laporan Rencana Penanganan Risiko</a>
      </div>
      <div class="w3-panel" style="width:100%">
        <a href="<?= base_url('admin/laporan/printrealisasipenanganan')  ?>"  class="w3-button w3-block w3-teal">Laporan Realisasi Penanganan Risiko</a>
      </div>
    </div>
  </div>

  <div class="rightcolumn">
    <div class="card">
      <div class="box">
        <div class="box-header">
          <div class="box-title">
            <h3>Laporan Realisasi Penanganan</h3>
          </div>
        </div>
        <div class="box-body">
          <form class="" action="index.html" method="post">
            <form role="form">
                <div class="box-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Pilih Unit Kerja</label>
                    <select class="form-control" name="">
                      <option value=""> --Pilih-- </option>
                      <?php
                      foreach($showunit as $unit){
                        echo "<option value='$unit->id_unit'>$unit->nama_unit</option>";
                      }
                       ?>
                    </select>
                  </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                  <input type="submit" class="btn btn-primary" value="PRINT"></button>
                </div>
              </form>
          </form>
        </div>

      </div>

    </div>
  </div>
