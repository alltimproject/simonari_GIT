<?php

              if($jum1 <= 1)
              {
                $jmlsop = $sop->rowskp;
                if ($jmlsop == 0) {
                  $jmlsop = 1;
                }
            ?>
              <td rowspan="<?= $jmlsop ?>"><?= $nosop ?></td>
              <td rowspan="<?= $jmlsop ?>"><?= $sop->nama_skp ?></td>
            <?php
                $jum1 = $sop->rowskp;
                $nosop++;
              } else {
                $jum1 = $jum1 - 1;
              }
             ?>