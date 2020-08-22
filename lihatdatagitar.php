<?php 
include_once 'layout/header.php';
include_once 'controller/c_alternatif.php';
include_once 'controller/c_nilai.php'; ?>

<section id="portfolio">
    <div class="container">
        <div class="section-header">
          <div class="row wow fadeInDown">
            <div class="row">
                <div class="col-md-12">
                    <!-- TABEL -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <center><h4>Data Gitar</h4></center>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <center>
                                    <img class = "img-thumbnail" src = "Upload/<?php echo $eks->foto; ?>"> <!-- Iki sing dinggo menampilkan foto --> 
                                </center>
                                <hr>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <td style="width:250px">Merk Gitar</td>
                                            <td>:</td>
                                            <td><?php echo $eks->merk; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Seri Gitar</td>
                                            <td>:</td>
                                            <td><?php echo $eks->seri; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Jenis Kayu</td>
                                            <td>:</td>
                                            <td><?php echo $eks->jeniskayu; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Jumlah Fret Gitar</td>
                                            <td>:</td>
                                            <td><?php echo $eks->fret; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Deskripsi Gitar</td>
                                            <td>:</td>
                                            <td><?php echo $eks->deskripsi; ?></td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php  
                                        while ($row2 = $stmt6x->fetch(PDO::FETCH_ASSOC)) {
                                            $row3 = $nil->fetch(PDO::FETCH_ASSOC)
                                    ?>
                                        <tr>
                                            <td><?php echo $row2['nama_kri'] ?></td>
                                            <td>:</td>
                                            <td><strong><?php echo $row3['nilai'] ?></strong></td>
                                        </tr>
                                    <?php  
                                        }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                            <hr>

                            <center>
                                <a class="btn btn-info" onclick="history.go(-1);"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> Kembali</a>
                            </center>

                        </div>


                    </div>
                    <div class="col-sm-4">
                <h3 class="column-title">Keterangan Tingkat Keawetan dan Merek</h3>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    Tingkat Keawetan
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body">
                                1 = Sangat tidak awet <br>
                                Semakin besar angka maka semakin awet.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Tingkat Ketenaran Merek
                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="panel-body">
                                1 = Sangat Terkenal <br>
                                Semakin besar angka maka semakin kurang terkenal Merek tersebut.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                    <!-- end tabel -->
                </div>

            </div>
          </div>
        </div>

    </div>
</section>

<?php

    include 'layout/footer.php';

?>