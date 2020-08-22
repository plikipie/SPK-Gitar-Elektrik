<?php
    include 'layout/header.php';
    ?>
<section id="services" >
        <div class="container">

            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">CONTOH PENGISIAN</h2>
                <p class="text-center wow fadeInDown">Dalam contoh di bawah ini di bawah ini, diisi persentase sebagai berikut.
                <br> Harga : 50, Berat : 10, Garansi : 15, Tingkat Keawetan : 20, Ketenaran Merek : 5 
                <br> Dalam hal ini, harga memliki persentase paling banyak dibandingkan kriteria yang lain.
                <br> Jadi, pencarian gitar diutamakan yang memliki harga murah, dan tidak peduli dengan merek apapun. 
                <br> <b> JUMLAH TOTAL PERSENTASE 50 + 10 + 15 + 20 + 5 = 100 . </b> 
                </p>
            </div>

            <div class="row">
                <div class="features">
                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-line-chart"></i>
                            </div>
                            <div class="media-body">
                                <fieldset disabled>
                                <h4 class="media-heading">Harga</h4>
                                <input type="text" class="form-control" required placeholder="50">
                                </fieldset>
                                <p>Semakin besar persentase yang anda berikan, semakin murah gitar yang anda inginkan.
                                </p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="100ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-cubes"></i>
                            </div>
                            <div class="media-body">
                                <fieldset disabled>
                                <h4 class="media-heading">Berat</h4>
                                <input type="text" class="form-control" required placeholder="10">
                                </fieldset>
                                <p>Semakin besar persentase yang anda berikan, semakin ringan gitar yang anda inginkan.</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="200ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-pie-chart"></i>
                            </div>
                            <div class="media-body">
                                <fieldset disabled>
                                <h4 class="media-heading">Garansi</h4>
                                <input type="text" class="form-control" required placeholder="15">
                                </fieldset>
                                <p>Semakin besar persentase yang anda berikan, semakin lama garansi gitar yang anda inginkan.</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->
                
                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="300ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-bar-chart"></i>
                            </div>
                            <div class="media-body">
                                <fieldset disabled>
                                <h4 class="media-heading">Tingkat Keawetan</h4>
                                <input type="text" class="form-control" required placeholder="20">
                                </fieldset>
                                <p>Semakin besar persentase yang anda berikan, berarti anda menginginkan gitar yang semakin awet.</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="400ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-language"></i>
                            </div>
                            <div class="media-body">
                                <fieldset disabled>
                                <h4 class="media-heading">Tingkat Ketenaran Merek</h4>
                                <input type="text" class="form-control" required placeholder="5">
                                </fieldset>
                                <p>Semakin besar persentase yang anda berikan, semakin terkenal merek gitar yang anda inginkan.</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->

                    
                </div>

            </div><!--/.row-->   
            <div class="text-center">
            <a class="btn btn-info" onclick="history.go(-1);"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> Kembali</a>
            </div> 
        </div><!--/.container-->
    </section><!--/#services-->
    <?php
    include 'layout/footer.php';
?>