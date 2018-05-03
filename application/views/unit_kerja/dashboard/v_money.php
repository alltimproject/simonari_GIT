        <div class="box">
           
            <div class="box-header with-border">
              <h3 class="box-title">
                 <div class="info-box" style="background-color: #46BFBD">
                    <span class="info-box-icon"><?= $jumlah ?></span>

                    <div class="info-box-content"><br/>
                      <span class="info-box-text"><h3>Penyebab Risiko - Money</h3></span>
                    </div>
                  </div>
              </h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" id="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            
            <div class="box-body">
              <table id="pernyataanRisk" class="table table-responsive table-striped table-hover table-bordered">
                 <thead>
                   <tr style="background-color: #46BFBD">
                     <th>No</th>
                     <th>Pernyataan Risiko</th>
                     <th>Penyebab</th>
                     <th>Kategori</th>
                     <th>Kemungkinan</th>
                     <th>Dampak</th>
                     <th>Tingkat</th>
                     <th>Rencana Penanganan</th>
                     <th>Mulai</th>
                     <th>Selesai</th>
                     <th>PIC</th>
                     <th>Status</th>
                   </tr>
                   </thead>
                   <tbody>
                    <?php
                        $no = 1;
                       foreach($data as $key ){ ?>
                         <tr>
                             <td> <?= $no++ ?> </td>
                             <td> <?= $key->nama_sop ?> </td>
                             <td> <?= $key->deskripsi_cause ?> </td>
                             <td> <?= $key->kategori_cause ?> </td>
                             <td> <?= $key->frekuensi ?> </td>
                             <td> <?= $key->dampak ?> </td>
                             <td> <?= $key->hitung ?> </td>
                             <td> <?= $key->deskripsi_rtp ?> </td>
                             <td> <?= $key->plan_mulai ?> </td>
                             <td> <?= $key->plan_selesai ?> </td>
                             <td> <?= $key->pic ?> </td>
                             <td> <?= $key->status ?> </td>
                         </tr>
                       <?php } ?>
                  </tbody>
              </table>
            </div>
            
          </div>
          
<script>
    $('#remove').click(function(){
       $('#content').slideUp(); 
    });
</script>