<?php

include_once 'controller/koneksi.php';
include_once 'model/m_alternatif.php';


$id = isset($_GET['id']) ? $_GET['id'] : null;
$del = isset($_GET['del']) ? $_GET['del'] : null;
$config = new koneksi();
$db = $config -> getConnection();
$eks = new Alternatif($db);
$eks->id_gitar = $id;
$eks->readOne();
$id_gitar=$eks->id_gitar;
$eks->kodeOtomatis();
$hasil = $eks->hasilkode;

if ($id==null) {
    # code...
    $tombol="Simpan";
}else{
    $tombol="Ubah";
    $hasil = $id;
}


if ($eks->id_gitar=$del) {
    # code...
    $eks->delete();
    header("location: alternatif.php");
}

if($_POST){

    $lokasi_file = $_FILES['foto']['tmp_name'];
    $tipe_file= $_FILES['foto']['type'];
    $nama_file = $_FILES['foto']['name'];
    $acak = rand(1,99);
    $nama_file_unik= $acak . $nama_file;
    
    $eks->UploadImage($nama_file_unik);
    $eks->id_gitar = $hasil;
    $eks->merk = $_POST['merk'];
    $eks->jeniskayu = $_POST['jeniskayu'];
    $eks->fret = $_POST['fret'];
    $eks->seri = $_POST['seri'];
    $eks->deskripsi = $_POST['deskripsi'];
    $eks->foto     = $nama_file_unik;

    if ($tombol=="Simpan") {
        # code...
        // $eks->insert();
         if($eks->insert()){
            // 
        ?>
        <div class="alert alert-success alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <strong>Berhasil Tambah Data!</strong>
        </div>

        <?php
            header("location: alternatif.php");}
            
            else{
        ?>
        <div class="alert alert-danger alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <strong>Gagal Tambah Data!</strong> Terjadi kesalahan, coba sekali lagi.
        </div>
        <?php
            }

    }else{
        $eks->update();
        header("location: alternatif.php");
        }
} ?>