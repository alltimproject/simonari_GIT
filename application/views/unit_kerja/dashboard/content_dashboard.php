<?php $no = 1; ?>

  <br/><br/>
  
<div class="w3-animate-bottom">
  <div class="row">
    <div class="col-md-4">
      <div class="box">
        <div class="box-header">
          <center><div class="box-title"><h3>Tingkat Risiko</h3></div></center>
        </div>
        <div class="box-body">
          <center>
            <div id="canvas-holder">
              <canvas id="chartK_Risk" width="300" height="300"/>
            </div>
          </center>
        </div>
        <div class="box-footer">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-4">
                <a href="<?= base_url('unit_kerja/dashboard/tingkat_risiko/1') ?>" class="btn btn-lg bg-blue btn-load"></a><small>Sangat Rendah</small><br/>
                <a href="<?= base_url('unit_kerja/dashboard/tingkat_risiko/2') ?>" class="btn btn-lg btn-load" style="background-color: green"></a><small> Rendah</small><br/>
              </div>
              <div class="col-sm-4">
                <a href="<?= base_url('unit_kerja/dashboard/tingkat_risiko/3') ?>" class="btn btn-lg btn-load" style="background-color: yellow"></a><small> Sedang</small><br/>
                <a href="<?= base_url('unit_kerja/dashboard/tingkat_risiko/4') ?>" class="btn btn-lg bg-yellow btn-load"></a><small> Tinggi</small><br/>
              </div>
              <div class="col-sm-4">
                <a href="<?= base_url('unit_kerja/dashboard/tingkat_risiko/5') ?>" class="btn btn-lg bg-red btn-load"></a><small> Sangat Tinggi</small><br/>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="box">
        <div class="box-header">
          <center><div class="box-title"><h3>Penyebab Risiko</h3></div></center>
        </div>
        <div class="box-body">
          <center>
            <div id="canvas-holder">
			         <canvas id="chartKategori" width="300" height="300"/>
		         </div>
          </center>
        </div>
        <div class="box-footer">
          <div class="row">
            <div class="col-sm-4">
              <a href="<?= base_url('unit_kerja/dashboard/kategori_risiko/man') ?>" class="btn btn-lg btn-load" style="background-color: #F7464A"></a><small> Man</small> <br/>
              <a href="<?= base_url('unit_kerja/dashboard/kategori_risiko/money') ?>" class="btn btn-lg btn-load" style="background-color: #46BFBD"></a><small> Money</small>  <br/>
            </div>
            <div class="col-sm-4">
              <a href="<?= base_url('unit_kerja/dashboard/kategori_risiko/method') ?>" class="btn btn-lg btn-load" style="background-color: #FDB45C"></a><small> Method</small> <br/>
              <a href="<?= base_url('unit_kerja/dashboard/kategori_risiko/machine') ?>" class="btn btn-lg btn-load" style="background-color: #949FB1"></a><small> Machine</small>  <br/>
            </div>
            <div class="col-sm-4">
              <a href="<?= base_url('unit_kerja/dashboard/kategori_risiko/material') ?>" class="btn btn-lg btn-load" style="background-color: #4D5360"></a><small> Material</small>  <br/>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="box">
        <div class="box-header">
          <center><div class="box-title"><h3>Status Penanganan Risiko</h3></div></center>
        </div>
        <div class="box-body">
            <center>
              <div id="canvas-holder">
                <canvas id="chartP_Risk" width="300" height="300"/>
              </div>
            </center>
        </div>
        <div class="box-footer">
            <a href="<?= base_url('unit_kerja/dashboard/status_risiko/open') ?>" class="btn btn-lg btn-success btn-load"></a><small> Open</small><br/>
            <a href="<?= base_url('unit_kerja/dashboard/status_risiko/close') ?>" class="btn btn-lg btn-danger btn-load"></a><small> Close</small>
        </div>
      </div>
    </div>
  </div>

<!-- -->
    <div id="content" class="w3-animate-botton"></div>
<!-- -->

    <div class="box">
      <div class="box-header">
        <div class="box-title">
          <h3>Progres Penanganan Risiko</h3>
        </div>
      </div>
      <div class="box-body">
        <div class="table-responsive">
        <table  id="pernyataanRisk" class="table-header table table-responsive table-striped table-hover table-bordered">
          <thead>
            <tr class="bg-blue">
              <th>No</th>
              <th>Pernyataan Risiko</th>
              <th>Penyebab</th>
              <th>Kategori</th>
              <th>Kemungkinan</th>
              <th>Dampak</th>
              <th>Tingkat</th>
              <th> Rencana Penanganan</th>
              <th>Mulai</th>
              <th>Selesai</th>
              <th>PIC</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody class="table-conntent">
            <?php foreach ($data as $key): ?>
              <tr>
                <td><?= $no++ ?></td>
                <td><?= $key->nama_sop  ?></td>
                <td><?= $key->deskripsi_cause ?></td>
                <td><?= $key->kategori_cause ?></td>
                <td><?= $key->frekuensi ?></td>
                <td><?= $key->dampak ?></td>
                <td><?= $key->hitung ?></td>
                <td><?= $key->deskripsi_rtp ?></td>
                <td><?= $key->plan_mulai ?></td>
                <td><?= $key->plan_selesai ?></td>
                <td><?= $key->pic ?></td>
                <td><?= $key->status ?></td>
              </tr>
            <?php endforeach; ?>
          </tbody>

        </table>
        </div>
      </div>
    </div>

    <?php if($this->session->flashdata('modal') ){ ?>
      <div class="modal fade" id="modalWelcome" role="dialog">
        <div class="modal-dialog" style="width: 800px; height: 2000px; margin-top: 100px">
          <div class="modal-content">
             <div class="modal-header bg-white">
               <center><h1>Hallo <?= $this->session->userdata('nama_pegawai') ?></h1></center>
               <button type="button" class="close" data-dismiss="modal">&times;</button>
             </div>
             <img src="<?= base_url('images/popup.jpeg')  ?>" width="800px" alt="">
             <div class="modal-body">
                   <div class="box box-primary" style="border-top: 2px solid rgb(55, 84, 210)">
                     <div class="box-footer">
                     </div>
                   </div>
                   <h4 class="w3-center">Silahkan klik <a href="<?= base_url('unit_kerja/tentang') ?>" style="color: rgb(65, 70, 186)" target="__blank"><b>disini</b></a> untuk Tutorial Aplikasi ini.</h4>
             </div>
          </div>
        </div>
      </div>
    <?php } ?>
</div>

<script type="text/javascript">

var config =
{
  option: {
    responsive: true
  }
};

var katRisk = [
    {
      value: <?= $man ?>,
      color:"#F7464A",
      highlight: "#FF5A5E",
      label: "Man "
    },
    {
      value: <?= $money ?>,
      color: "#46BFBD",
      highlight: "#5AD3D1",
      label: "Money "
    },
    {
      value: <?= $method ?>,
      color: "#FDB45C",
      highlight: "#FFC870",
      label: "Method "
    },
    {
      value: <?= $machine ?>,
      color: "#949FB1",
      highlight: "#A8B3C5",
      label: "Machine "
    },
    {
      value: <?= $material ?>,
      color: "#4D5360",
      highlight: "#616774",
      label: "Material "
    }
  ];


    var pRisk = [
        {
          value: <?= $jmlopen ?>,
          color: "green",
          highlight: "#616774",
          label: "Open ",
        },
        {
          value: <?= $jmlclose ?>,
          color:"red",
          highlight: "#616774",
          label: "Closed "
        }


      ];

      var kRisk = [
        {
          value: <?= $sgtrendah ?>,
          color:"blue",
          highlight: "#616774",
          label: "Sangat Rendah "
        },
        {
          value: <?= $rendah ?>,
          color: "green",
          highlight: "#616774",
          label: "Rendah "
        },
        {
          value: <?= $sedang ?>,
          color: "yellow",
          highlight: "#616774",
          label: "Sedang "
        },
        {
          value: <?= $tinggi ?>,
          color: "orange",
          highlight: "#616774",
          label: "Tinggi "
        },
        {
          value: <?= $sgttinggi ?>,
          color: "red",
          highlight: "#616774",
          label: "Sangat Tinggi "
        }

      ];

      window.onload = function(){
        var chart2 = document.getElementById("chartK_Risk").getContext("2d");
        var chart1 = document.getElementById("chartP_Risk").getContext("2d");
        var chart3 = document.getElementById("chartKategori").getContext("2d");

				window.myPie = new Chart(chart3, config).Pie(katRisk);
        window.myPie = new Chart(chart2, config).Pie(kRisk);
        window.myPie = new Chart(chart1, config).Pie(pRisk);

      };
  </script>

<script type="text/javascript">
    
$(function(){
  $('#pernyataanRisk').DataTable({
    'fixedHeader' : true,
    'paging'      : true,
    'lengthChange': true,
    'searching'   : true,
    'ordering'    : true,
    'info'        : true,
    'autoWidth'   : false

  });
  $('#modalWelcome').modal('show');
});

 $(document).ready(function(){
      $('.btn-load').each(function(){
        $(this).click(function(){
          var link = $(this).attr('href');
          $('#content').hide('fast', function(){
            $('#content').load(link, function(){
              $('#content').show('slow');
            });
          });
          return false;
        });
      });
    });   
</script>
