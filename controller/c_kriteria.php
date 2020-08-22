<?php
include_once 'model/m_kriteria.php';
include_once 'koneksi.php';

$id = isset($_GET['id']) ? $_GET['id'] : null;
$del = isset($_GET['del']) ? $_GET['del'] : null;
$config = new koneksi();

$db = $config -> getConnection();
$eks = new Kriteria($db);
$eks->kode_kri = $id;
$eks->readOne();
$eks->kodeOtomatis();
$hasil = $eks->hasilkode;


if ($id==null) {
    # code...
    $tombol="Simpan";
}else{
    $tombol="Ubah";
    $hasil = $id;
}


if ($eks->kode_kri=$del) {
    # code...
    $eks->delete();
    header("location: Kriteria.php");
}
if($_POST){
 
    $eks->kode_kri = $hasil;
    $eks->nama_kri = $_POST['nama_kri'];
    $eks->tipe_kri = $_POST['tipe_kri'];

    if ($tombol=="Simpan") {
        # code...
        // $eks->insert();
         if($eks->insert()){
?>
        <div class="alert alert-success alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <strong>Berhasil Tambah Data!</strong>
        </div>

<?php
    header("location: Kriteria.php");}
    
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
        header("location: Kriteria.php");
        }
}
?>
