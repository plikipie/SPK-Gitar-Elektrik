<?php

    include_once 'admin/header.php';
    include_once 'controller/c_nilai.php';
?>


<section id="portfolio">
    <div class="container">
<!--         <div class="section-header">
          <div class="row wow fadeInDown">
          </div>
        </div> -->
              <div class="row">
                <div class="col-sm-12">
                    <!-- <h3 class="column-title">Our History</h3> -->
                    <div role="tabpanel">
                        <ul class="nav main-tab nav-justified" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#tab1" role="tab" data-toggle="tab" aria-controls="tab1" aria-expanded="true">Data Nilai</a>
                            </li>

                            <li role="presentation">
                                <a href="#tab3" role="tab" data-toggle="tab" aria-controls="tab3" aria-expanded="false">Normalisasi</a>
                            </li>

                        </ul>
                        <div id="tab-content" class="tab-content">
                            <div role="tabpanel" class="tab-pane fade active in" id="tab1" aria-labelledby="tab1">
                            <!-- DATA NILAI -->
                                <div class="row wow fadeInUp">
                                <div class="col-md-4">
                                <h5 class="page-head-line">Form Nilai </h5>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                          NILAI ALTERNATIF SETIAP KRITERIA
                                        </div>
                                        <div class="panel-body">
                                            <form method="post">
                                                <div class="form-group">
                                                  <label for="ig">Alternatif</label>
                                                  <select class="form-control" id="ig" name="ig">
                                                    <option value=""><?php echo $pro5->merk." ".$pro5->seri ?></option>
                                                  <?php
                                                  $stmt2 = $pro5->readAll();
                                                  while ($row2 = $stmt2->fetch(PDO::FETCH_ASSOC)){
                                                  extract($row2);
                                                  
                                                  echo "<option value='{$id_gitar}'>{$merk} {$seri} </option>";

                                                  } ?>
                                                  </select>
                                     
                                                    <?php 
                                                    while ($row2 = $stmt6->fetch(PDO::FETCH_ASSOC)){ 
                                                          $row3 = $nil->fetch(PDO::FETCH_ASSOC);
                                                    ?>
                                                    <label for="ig"><?php echo $row2['nama_kri'] ?></label>
                                                    <input type="text" class="form-control" id="nilai[]" name="nilai[]" required placeholder="Masukkan nilai" value="<?php echo $row3['nilai']; ?>">
                                                    <?php 
                                                    } ?>
                                                </div>
                                                <button type="submit" class="btn btn-primary"><?php echo $tombol; ?></button>
                                                <button type="reset" class="btn btn-primary" onclick="location.href='nilai.php'">Batal</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <?php $no=1; ?>
                                <div class='col-md-8'>
                                <h5 class="page-head-line">Tabel Nilai </h5>
                                                    <table width="100%" class="table table-striped table-bordered">
                                                      <thead>
                                                          <tr>
                                                              <th rowspan="2" style="vertical-align: middle" class="text-center">Alternatif</th>
                                                              <th colspan="<?php echo $stmt6->rowCount()+1; ?>" class="text-center">Kriteria</th>
                                                          </tr>
                                                          <tr>
                                                          <?php
                                                          while ($row2 = $stmt6x->fetch(PDO::FETCH_ASSOC)){
                                                          ?>
                                                              <th><?php echo $row2['nama_kri'] ?></th>
                                                          <?php
                                                          }
                                                          ?>
                                                          <th width="100px">Aksi</th>
                                                          </tr>
                                                      </thead>
                        
                                                      <tbody>
                                                        <?php
                                                        while ($row1 = $stmt5x->fetch(PDO::FETCH_ASSOC)){
                                                        ?>
                                                          <tr>
                                                              <th><?php echo $row1['merk']  ?> <?php echo $row1['seri']  ?></th>
                                                              <?php
                                                              $a= $row1['id_gitar'];
                                                              $stmtr = $pro7->readR($a);
                                                              while ($rowr = $stmtr->fetch(PDO::FETCH_ASSOC)){

                                                        
                                                        ?>
                                                              <td>
                                                                <?php 
                                                                  echo $rowr ['nilai'];
                                                                ?>
                                                              </td>
                                                              <?php  } ?>
                                                              <td class="text-center">
                                                              <a href="?id=<?php echo $row1['id_gitar'] ?>" class="btn btn-warning"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                                                              <a href="?del=<?php echo $row1['id_gitar'] ?>" onclick="return confirm('Yakin ingin menghapus data')" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                                                          

                                                              </td>
                                                          </tr>
                                                        <?php  } ?>
                                                      </tbody>
                                                    </table>
                                </div>
                                </div>
        <!-- TUTUP NILAI -->
                            </div>
                            
                            <div role="tabpanel" class="tab-pane fade" id="tab3" aria-labelledby="tab3">
                                <!-- NORMALISASI -->
                                <table width="100%" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th rowspan="2" style="vertical-align: middle" class="text-center">Alternatif</th>
                                            <th colspan="<?php echo $stmt6->rowCount(); ?>" class="text-center">Kriteria</th>
                                        </tr>
                                        <tr>
                                        <?php
                                        while ($row2 = $stmt6->fetch(PDO::FETCH_ASSOC)){
                                        ?>
                                            <th><?php echo $row2['nama_kri'] ?></th>
                                        <?php
                                        }
                                        ?>
                                        </tr>
                                    </thead>
      
                                    <tbody>
                                      <?php
                                      while ($row1 = $stmt5->fetch(PDO::FETCH_ASSOC)){
                                      ?>
                                        <tr>
                                            <th><?php echo $row1['merk']  ?> <?php echo $row1['seri']  ?></th>
                                            <?php
                                            $a= $row1['id_gitar'];
                                            $stmtr = $pro7->readR($a);
                                            while ($rowr = $stmtr->fetch(PDO::FETCH_ASSOC)){
                                            $b = $rowr['kode_kri'];
                                            $tipe = $rowr['tipe_kri'];
                                      // $bobot = $rowr['bobot_kriteria'];
                                      ?>
                                            <td>
                                              <?php 
                                              if($tipe=='benefit'){
                                                $stmtmax = $pro7->readMax($b);
                                                $maxnr = $stmtmax->fetch(PDO::FETCH_ASSOC);
                                                echo $nor = number_format($rowr['nilai']/$maxnr['mnr1'],4);
                                              } else{
                                                $stmtmin = $pro7->readMin($b);
                                                $minnr = $stmtmin->fetch(PDO::FETCH_ASSOC);
                                                echo $nor = number_format($minnr['mnr2']/$rowr['nilai'],4);

                                                    }
                                                      $pro7->ig = $a;
                                                      $pro7->kk = $b;
                                                      $pro7->nn2 = $nor;
                                                      // $pro->nn3 = $bobot*$nor;
                                                      $pro7->normalisasi();
                                              ?>
                                            </td>
                                            <?php  } ?>
                                        </tr>
                                      <?php  } ?>
                                    </tbody>
                                  </table>


                            </div>

                        </div>
                    </div>
                </div>
              </div>


     </div> <!-- tutup div 1 -->
</section> <!-- tutup section -->


<?php
    include 'admin/footer.php';
?>