<?php

$config = new koneksi();
$db = $config -> getConnection();

include_once 'model/m_nilai.php';


$id = isset($_GET['id']) ? $_GET['id'] : null;
$del = isset($_GET['del']) ? $_GET['del'] : null;


    include_once 'model/m_alternatif.php';
    $pro5 = new Alternatif($db);
    $stmt5 = $pro5->readAll();
    $stmt5x = $pro5->readAll();
    $pro5->id_gitar=$id;
    $pro5->readOne();

    include_once 'model/m_kriteria.php';
    $pro6 = new Kriteria($db);
    $stmt6 = $pro6->readAll();
    $stmt6x = $pro6->readAll();
    $sql_kri = $pro6->readAll();

    include_once 'model/m_nilai.php';
    $pro7 = new Nilai($db);
    $stmt7 = $pro7->readKhusus();
    $pro7->ig = $id;
    $nil = $pro7->readNilai();
    $sql_nil = $pro7->readAll();
    $pro7->readOne();

    $pro7->kodeOtomatis();
    $hasil = $pro7->hasilkode;



if ($id==null) {
    # code...
    $tombol="Simpan";
}else{
    $tombol="Ubah";
    $hasil = $id;
}


if ($pro7->ig=$del) {
    # code...
    $pro7->delete();
    header("location: nilai.php");
}


if($_POST){
      $nilai = $_POST['nilai']; 
      echo $jum = count($nilai);

        if ($tombol == "Simpan") {
            
                  for ($i=0; $i < $jum; $i++) { 
                      $row[$i] = $sql_kri->fetch(PDO::FETCH_ASSOC); 
                      $pro7->ig= $_POST['ig'];
                      $pro7->kk = $row[$i]['kode_kri']; 
                      $pro7->nilai =$nilai[$i]; 
                      $pro7->insert(); 
                  }
                  
              
       
        }elseif($tombol == "Ubah"){
            
                for ($i=0 ; $i < $jum ; $i++ ) {
                  $pro7->id_gitar=$id;
                  $row[$i] = $sql_nil->fetch(PDO::FETCH_ASSOC);
                  $pro7->kk = $row[$i]['kode_kri'];
                  $pro7->nilai = $nilai[$i];
                  $pro7->update();
                  }
        }
    }
 ?>