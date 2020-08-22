<?php
    include 'layout/header.php';
    include_once 'controller/c_kriteria.php';


    $stmt = $eks->readAll();

    $m = isset($_GET['m']) ? $_GET['m'] : null;
    if ($m == true) {
        ?>
        <div class="alert alert-danger alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <strong>Gagal!</strong> Jumlah bobot tidak 100, silahkan periksa kembali.
        </div>
        <?php
    } else{
        $m == false;
    }

?>
    <section id="services" >
        <div class="container">

            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Petunjuk</h2>
                <p class="text-center wow fadeInDown">Masukkan persentase / bobot kepentingan dari setiap kriteria di bawah ini.<br> Persentase berupa angka dari 0 sampai 100 
                <br> Semakin besar angka, maka semakin penting. 
                <br> <b> JUMLAH TOTAL PRESENTASE HARUS = 100 . </b> 
                <br> Jika petunjuk di atas dirasa kurang membantu, <a href="petunjuk.php">klik disini</a> </p>
            </div>
            
            <form method="post" action="hasil.php">
            <div class="form-group">
            <div class="row">
                <div class="features">
                <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)){ ?>
                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-line-chart"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading"><?php echo $row['nama_kri'] ?></h4>
                                <input type="text" class="form-control" id="bobot[]" name="bobot[]" required placeholder="angka 0-100">
                                <p>Seberapa penting kriteria <?php echo $row['nama_kri'] ?> bagi anda? Semakin besar angka persentase, maka kriteria ini semakin penting.
                                </p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->
                <?php } ?>
                </div>
            </div><!--/.row-->
            </div>
            <div class="text-center">
            <button type="submit" class="btn btn-primary">Temukan Gitarku!</button>
            </div>
            </form>    
        </div><!--/.container-->
    </section>
<?php
    include 'layout/footer.php';
?>