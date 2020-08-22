<?php

    include_once 'admin/header.php';
    include_once 'controller/c_kriteria.php';
    

?>

<section id="portfolio">
    <div class="container">
        <div class="section-header">
          <div class="row wow fadeInDown">
            <div class="col-md-4">
              <h5 class="page-head-line">Form Kriteria </h5>
            </div>
            <div class="col-md-4">
              <h5 class="page-head-line">Tabel Kriteria </h5>
            </div>
            <div class="col-md-2">
              <button type="reset" class="btn btn-default" onclick="location.href='alternatif.php'" title="Menuju halaman alternatif">Halaman Alternatif <i class="glyphicon glyphicon-chevron-right"></i></button>
            </div>
            <div class="col-md-2">
              <button type="reset" class="btn btn-default" onclick="location.href='nilai.php'" title="Menuju halaman nilai">Halaman Nilai <i class="glyphicon glyphicon-chevron-right"></i></button>
            </div>
          </div>
        </div>

            <div class="row wow fadeInUp">
              <div class="col-md-4">
                  <div class="panel panel-default">
                      <div class="panel-heading">
                         MASUKKAN DATA KRITERIA
                      </div>
                      <div class="panel-body">

                          <form method="post">
                              <div class="form-group">
                                    <fieldset disabled>
                                    <label for="kode_kri">Kode Kriteria</label>
                                    <input type="text" class="form-control" id="kode_kri" required placeholder="Masukkan kode kriteria" value="<?php echo $hasil ?>">
                                    </fieldset>
                                
                                    <label for="nama_kri">Nama Kriteria</label>
                                    <input type="text" class="form-control" id="nama_kri" name="nama_kri" required placeholder="Masukkan nama kriteria" value="<?php echo $eks->nama_kri; ?>">

                                    <label for="tp">Tipe Kriteria</label>
                                        <select class="form-control" id="tipe_kri" name="tipe_kri">
                                            <option><?php echo $eks->tipe_kri; ?></option>
                                            <option value='benefit'>Benefit</option>
                                            <option value='cost'>Cost</option>
                                        </select>
                            </div>
                            <button type="submit" class="btn btn-primary"><?php echo $tombol; ?></button>
                            <button type="reset" class="btn btn-primary" onclick="location.href='kriteria.php'">Batal</button>


                          </form>

                      </div>
                  </div>
              </div>

              
<?php
// $pro = new Alternatif($db);
$no=1;
$stmt = $eks->readAll();
?>
    <div class='col-md-8'>
    <table class="table table-striped table-bordered" id="tabeldata">
        <thead>
            <tr>
                <th width="30px">No</th>
                <th>Kode Kriteria</th>
                <th>Nama Kriteria</th>
                <th>Tiper Kriteria</th>
                <th width="100px">Aksi</th>
            </tr>
        </thead>

        <tbody>
<?php
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
?>
            <tr>
                <th width="30px"><?php echo $no++; ?></th>
                <td><?php echo $row['kode_kri'] ?></td>
                <td><?php echo $row['nama_kri'] ?></td>
                <td><?php echo $row['tipe_kri'] ?></td>
                <td class="text-center">
                    <a href="?id=<?php echo $row['kode_kri'] ?>" class="btn btn-warning"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                    <a href="?del=<?php echo $row['kode_kri'] ?>" onclick="return confirm('Yakin ingin menghapus data')" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                </td>
               
            </tr>
            <?php
}
?>
        </tbody>

    </table>
    </div>
       
            </div>


    </div><!--/.container-->
</section><!--/#portfolio-->

<?php

    include 'admin/footer.php';

?>
