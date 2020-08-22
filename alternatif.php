<?php
   
    include_once 'admin/header.php';
    include_once 'controller/c_alternatif.php';
    

?>

<section id="portfolio">
    <div class="container">
        <div class="section-header">
          <div class="row wow fadeInDown">
            <div class="col-md-4">
              <h1 class="page-head-line">Form Alternatif</h1>
            </div>
            <div class="col-md-4">
              <h1 class="page-head-line">Tabel Alternatif </h1>
            </div>
            <div class="col-md-2">
              <button type="reset" class="btn btn-default" onclick="location.href='kriteria.php'" title="Menuju halaman kriteria">Halaman Kriteria <i class="glyphicon glyphicon-chevron-right"></i></button>
            </div>
            <div class="col-md-2">
              <button type="reset" class="btn btn-default" onclick="location.href='nilai.php'" title="Menuju halaman nilai">Halaman nilai <i class="glyphicon glyphicon-chevron-right"></i></button>
            </div>
          </div>
        </div>
            <div class="row wow fadeInUp">
              <div class="col-md-4">
                  <div class="panel panel-default">
                      <div class="panel-heading">
                         MASUKKAN DATA ALTERNATIF
                      </div>
                      <div class="panel-body">
                          <form method="POST" enctype="multipart/form-data">
                              <div class="form-group">

                                <fieldset disabled>
                                <label for="disabledTextInput">ID Gitar</label>
                                    <input type="text" id="disabledTextInput" class="form-control" value="<?php echo $hasil ?>">
                                </fieldset>

                                    <label for="merk">Merk</label>
                                    <input type="text" class="form-control" id="merk" name="merk" required placeholder="Masukkan merk gitar" value="<?php echo $eks->merk; ?>">

                                    <label for="seri">Seri gitar</label>
                                    <input type="text" class="form-control" id="seri" name="seri" required placeholder="Masukkan seri gitar" value="<?php echo $eks->seri; ?>">
                                
                                    <label for="jeniskayu">Jenis Kayu</label>
                                    <input type="text" class="form-control" id="jeniskayu" name="jeniskayu" required placeholder="Masukkan jeniskayu gitar" value="<?php echo $eks->jeniskayu; ?>">

                                    <label for="fret">Jumlah Fret</label>
                                    <input type="text" class="form-control" id="fret" name="fret" required placeholder="Masukkan jumlah fret gitar" value="<?php echo $eks->fret; ?>">
                                
                                    <label for="deskripsi">Deksripsi</label>
                                    <textarea class="form-control" rows="5" id="deskripsi" name="deskripsi" required placeholder="Deskripsi"><?php echo $eks->deskripsi; ?></textarea>

                                
                                <label for="exampleInputFile">Masukkan gambar</label>
                                    <input type="file" id="foto" name="foto" /><img src="Upload/small_<?php echo $eks->foto;?>">
                                <p class="help-block">Silahkan pilih dan masukkan gambar gitar.</p>
                                
                            </div>

                              <button type="submit" class="btn btn-success"><i class="glyphicon glyphicon-<?php echo $icon ?>"></i> <?php echo $tombol; ?></button>
                              <button type="reset" class="btn btn-danger" onclick="location.href='alternatif.php'">Batal</button>
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
                                    <th>Merk</th>
                                    <th>Seri</th>
                                    
                                    <th width="140px">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                    <?php
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                    ?>
                                <tr>
                                    <td width="30px"><?php echo $no++; ?></td>         
                                    <td><?php echo $row['merk'] ?></td>
                                    <td><?php echo $row['seri'] ?></td>
                                    
                                    <td class="text-center">
                                        <a href="?id=<?php echo $row['id_gitar'] ?>" class="btn btn-warning"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                                        <a href="?del=<?php echo $row['id_gitar'] ?>" onclick="return confirm('Yakin ingin menghapus data')" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                                        <a href="lihatdatagitar.php?id=<?php echo $row['id_gitar'] ?>" class="btn btn-info"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>

                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        </div>
                      </div>
                  </div>
</section><!--/#portfolio-->

<?php include 'admin/footer.php'; ?>
