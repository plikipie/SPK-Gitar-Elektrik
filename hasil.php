<?php 
include_once 'layout/header.php';
include 'controller/c_hitung.php'; ?>

<section id="portfolio">
    <div class="container">
        <div class="section-header">
          <div class="row wow fadeInDown">
            <div class="row">
                <div class="col-md-12">
                    <!-- TABEL -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <center>Hasil</center>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                     <!-- <table width="500" border="0" cellspacing="1" cellpadding="3" bgcolor="#000099"> -->
                                    <tr>
                                        <td bgcolor="#FFFFFF">Ranking</td>
                                        
                                        <td bgcolor="#FFFFFF">Alternatif</td>
                                        <td bgcolor="#FFFFFF">Nilai</td>
                                        <td width="140px">Lihat Gitar</td>
                                    </tr>
                                        <?php
                                    for ($i=0;$i<3;$i++)
                                    {   
                                        ?>
                                    <tr>
                                        <td bgcolor="#FFFFFF"><?php echo ($i+1); ?></td>
                                        
                                        <td bgcolor="#FFFFFF"><?php echo $alternatifrangking[$i]; ?></td>
                                        <td bgcolor="#FFFFFF"><?php echo $hasilrangking[$i]; ?></td>
                                        <td class="text-center">
                                        <a href="lihatdatagitar.php?id=<?php echo $id_altrank[$i] ?>" class="btn btn-info"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>

                                    </td>
                                    </tr>
                                        <?php
                                    }
                                        ?>
                                </table>
                                <center>
                                <a class="btn btn-info" onclick="location.href='pengguna.php'"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> Cari Lagi!</a>
                                </center>
                            </div>
                        </div>
                    </div>
                    <!-- end tabel -->
                </div>


                <!-- tabel ketentuan -->
                
                <!-- end tabelK -->

            </div>
          </div>
        </div>
    </div>
</section>

<?php

    include 'layout/footer.php';

?>