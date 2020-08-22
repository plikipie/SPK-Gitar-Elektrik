<?php
if($_POST){

	$bobot = $_POST['bobot'];
	if (array_sum($bobot) == 100) {


	include 'controller/koneksi.php';
	$config = new koneksi();
	$db = $config->getConnection();
	include 'model/m_nilai.php';
	include 'model/m_alternatif.php';
	include 'model/m_kriteria.php';

		$ez = new Nilai($db);
		$ez1 = $ez->readAll();
		$ez2 = new alternatif($db);
		$all = $ez2->readAll();

		$alternatif = array();
		$id_alt = array(); // iki gunane dinggo nyekel id gitar ke dalam array
		$i=0;
		while ($dataalternatif = $all->fetch(PDO::FETCH_ASSOC))
		{
			$alternatif[$i] = $dataalternatif['merk']." ".$dataalternatif['seri'];
			$id_alt[$i] = $dataalternatif['id_gitar']; // iki dinggo nglebokke id gitar ke array ke-i
			$i++;
		}


		$ez3 = new kriteria($db);
		$ez3x = $ez3->readAll();

		$kriteria = array();
		$i=0;
		while ($datakriteria = $ez3x->fetch(PDO::FETCH_ASSOC))
		{
			$kriteria[$i] = $datakriteria['nama_kri'];
			$i++;
		}


		$bobot = $_POST['bobot'];

   	$hasil = array(); //menghitung Vi.
	
	for ($i=0;$i<count($alternatif);$i++)
	{
		$hasil[$i] = 0;
		for ($j=0;$j<count($kriteria);$j++)
		{
			$row1 = $ez1->fetch(PDO::FETCH_ASSOC);
			$hasil[$i] = $hasil[$i] + ($row1['normalisasi'] * $bobot[$j]);
		} 
	} 


	$alternatifrangking = array(); //
	$id_altrank = array(); // iki gunane dinggo nyekel id gitar ke dalam array
	$hasilrangking = array();
	
	for ($i=0;$i<count($alternatif);$i++)
	{
		$hasilrangking[$i] = $hasil[$i];
		$alternatifrangking[$i] = $alternatif[$i];
		$id_altrank[$i] = $id_alt[$i]; // iki dinggo memindahkan nilai2 idgitar seko array id_alt ke id_altrank
	}

	
	for ($i=0;$i<count($alternatif);$i++)
	{
		for ($j=$i;$j<count($alternatif);$j++)
		{
			if ($hasilrangking[$j] > $hasilrangking[$i])
			{
				$tmphasil = $hasilrangking[$i];
				$tmpalternatif = $alternatifrangking[$i];
				$tmpidrank = $id_altrank[$i]; // iki gawe variabel temporary (tmpidrank) nggo nampung idgitar selama diurutkan
				$hasilrangking[$i] = $hasilrangking[$j];
				$alternatifrangking[$i] = $alternatifrangking[$j];
				$id_altrank[$i] = $id_altrank[$j]; // iki set variabel array id_altrank ke-i dengan nilai variabel id_altrank ke-j
				$hasilrangking[$j] = $tmphasil;
				$alternatifrangking[$j] = $tmpalternatif;
				$id_altrank[$j] = $tmpidrank; // iki set variabel array id_altrank ke-j sama dengan nilai variabel tmpidrank
			}
		}
	} 
	

	// header("location:hasil.php?m=true");
	}else{
		header("location:pengguna.php?m=true");
	}
}else{
	"wrong";
}
?>