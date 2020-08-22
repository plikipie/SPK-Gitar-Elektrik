<?php

    include 'Admin/header.php';

?>
<section id="features">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Selamat datang Admin!</h2>
                <p class="text-center wow fadeInDown">Anda dapat mengelola data gitar, kriteria, dan nilai dari setiap alternatif. <br> (tambahi keterangan opo iki isih kosong)</p>
            </div>
            <div class="row">
                <div class="col-sm-6 wow fadeInLeft">
                    <img class="img-responsive" src="assets/images/progitar.jpg" alt="">
                </div>
                <div class="col-sm-6">
                    <div class="media service-box wow fadeInRight">
                        <a href="alternatif.php">
                        <div class="pull-left">
                            <i class="glyphicon glyphicon-music"></i>
                        </div>
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading">Alternatif</h4>
                            <p>Anda dapat menambah, mengubah, menghapus, dan melihat data - data gitar.</p>
                        </div>
                    </div>

                    <div class="media service-box wow fadeInRight">
                        <a href="kriteria.php">
                        <div class="pull-left">
                            <i class="fa fa-cubes"></i>
                        </div>
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading">Kriteria</h4>
                            <p>Anda dapat menambah, mengubah, menghapus, dan melihat data - data kriteria.</p>
                        </div>
                    </div>

                    <div class="media service-box wow fadeInRight">
                        <a href="nilai.php">
                        <div class="pull-left">
                            <i class="fa fa-pie-chart"></i>
                        </div>
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading">Nilai</h4>
                            <p>Anda dapat memberi nilai kriteria untuk masing - masing data gitar yang ada.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php

    include 'Admin/footer.php';

?>