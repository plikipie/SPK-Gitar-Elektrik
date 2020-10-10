<?php

    include_once 'layout/header.php';
?>

<section id="meet-team">
    <div class="container">

        <!-- <div class="divider"></div> -->

        <div class="row">
<!--             <div class="col-sm-4">
                <h3 class="column-title">Tentang Tugas Akhir</h3>
                <strong>Nama</strong>
                <div class="progress">
                    <div class="progress-bar progress-bar-primary" role="progressbar" data-width="85">85%</div>
                </div>
                <strong>WEB DESIGN</strong>
                <div class="progress">
                    <div class="progress-bar progress-bar-primary" role="progressbar" data-width="70">70%</div>
                </div>
                <strong>WORDPRESS DEVELOPMENT</strong>
                <div class="progress">
                    <div class="progress-bar progress-bar-primary" role="progressbar" data-width="90">90%</div>
                </div>
                <strong>JOOMLA DEVELOPMENT</strong>
                <div class="progress">
                    <div class="progress-bar progress-bar-primary" role="progressbar" data-width="65">65%</div>
                </div>
            </div> -->

            <div class="col-sm-4">
                <h3 class="column-title">Tentang Sistem</h3>
                <div role="tabpanel">
                    <ul class="nav main-tab nav-justified" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#tab1" role="tab" data-toggle="tab" aria-controls="tab1" aria-expanded="true">Versi</a>
                        </li>
                        <li role="presentation">
                            <a href="#tab2" role="tab" data-toggle="tab" aria-controls="tab2" aria-expanded="false">SPK</a>
                        </li>
                        <li role="presentation">
                            <a href="#tab3" role="tab" data-toggle="tab" aria-controls="tab3" aria-expanded="false">TOPSIS</a>
                        </li>
                    </ul>
                    <div id="tab-content" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade active in" id="tab1" aria-labelledby="tab1">
                            <center><p>SPK Pemilihan Gitar Elektrik</p></center>
                            <center><p>V.1.0</p></center>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab2" aria-labelledby="tab2">
                            <p>SPK adalah singkatan dari Sstem Pendukung Keputusan</p>
                            <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters readable English.</p>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab3" aria-labelledby="tab3">
                            <p>Metode TOPSIS adalah salah satu metode dalam SPK</p>
                            <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters readable English.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <h3 class="column-title">Syarat & Ketentuan</h3>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    Syarat
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body">
                                Belum ada syarat
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Ketentuan
                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="panel-body">
                                Baca halaman bantuan untuk mendapakan informasi cara menggunakan sistem
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section><!--/#meet-team-->

<?php

    include 'layout/footer.php';

?>
