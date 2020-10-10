<?php
class Nilai{
	
	private $conn;
	private $table_name = "nilai";
	
	public $in;
	public $ig;
	public $kk;
	public $nilai;
	public $nn2;
	public $nn3;
	public $mnr1;
	public $mnr2;
	public $has;
	public $norm;

	
	public function __construct($db){
		$this->conn = $db;
	}
	
	function insert(){
		
		$query = "insert into ".$this->table_name." values('',?,?,?,0)";
		$stmt = $this->conn->prepare($query);
		// $stmt->bindParam(1, $this->in);
		$stmt->bindParam(1, $this->ig);
		$stmt->bindParam(2, $this->kk);
		$stmt->bindParam(3, $this->nilai);
		// $stmt->bindParam(5, $this->norm);
		
		if($stmt->execute()){
			return true;
		}else{
			return false;
		}
		
	}
	
	function readAll(){

		$query = "SELECT * FROM ".$this->table_name;
		$stmt = $this->conn->prepare( $query );
		$stmt->bindParam(1, $this->ig);
		$stmt->execute();
		
		return $stmt;
	}

	function readNilai(){

		$query = "SELECT * FROM ".$this->table_name . " where id_gitar=?";
		$stmt = $this->conn->prepare( $query );
		$stmt->bindParam(1, $this->ig);
		$stmt->execute();
		
		return $stmt;
	}
	
	function readKhusus(){

		$query = "SELECT * FROM alternatif a, kriteria b, nilai c where a.id_gitar=c.id_gitar and b.kode_kri=c.kode_kri order by c.id_nilai asc";
		$stmt = $this->conn->prepare( $query );
		$stmt->execute();
		
		return $stmt;
	}
	
	function readR($a){

		$query = "SELECT * FROM alternatif a, kriteria b, nilai c where a.id_gitar=c.id_gitar and b.kode_kri=c.kode_kri and c.id_gitar='$a'";
		$stmt = $this->conn->prepare( $query );
		$stmt->execute();
		
		return $stmt;
	}
	
	function readMax($b){
		
		$query = "SELECT max(nilai) as mnr1 FROM " . $this->table_name . " WHERE kode_kri='$b' LIMIT 0,1";

		$stmt = $this->conn->prepare( $query );
		$stmt->execute();

		return $stmt;
	}
	
	function readMin($b){
		
		$query = "SELECT min(nilai) as mnr2 FROM " . $this->table_name . " WHERE kode_kri='$b' LIMIT 0,1";

		$stmt = $this->conn->prepare( $query );
		$stmt->execute();

		return $stmt;
	}
	
	
	function readHasil($a){
		
		$query = "SELECT sum(bobot_normalisasi) as bbn FROM " . $this->table_name . " WHERE id_alternatif='$a' LIMIT 0,1";

		$stmt = $this->conn->prepare( $query );
		$stmt->execute();

		return $stmt;
	}
	
	// used when filling up the update product form
	// function readOne(){
		
	// 	// $query = "SELECT * FROM " . $this->table_name . " WHERE id_nilai=?";
	// 	$query = "SELECT c.nilai, a.merk, a.seri, b.nama_kri FROM " . $this->table_name . " c, alternatif a, kriteria b WHERE c.id_nilai=? and c.id_gitar=a.id_gitar and c.kode_kri=b.kode_kri";
	// 	$stmt = $this->conn->prepare( $query );
	// 	$stmt->bindParam(1, $this->in);
	// 	// $stmt->bindParam(2, $this->ig);
	// 	$stmt->execute();

	// 	$row = $stmt->fetch(PDO::FETCH_ASSOC);
		
	// 	// $this->in = $row['id_nilai'];
	// 	$this->ig = $row['merk'];
	// 	$this->kk = $row['nama_kri'];
	// 	$this->nilai = $row['nilai'];
	// }
	

	function readOne(){
		
		// $query = "SELECT * FROM " . $this->table_name . " WHERE id_nilai=?";
		$query = "SELECT * from ". $this->table_name." where id_gitar = ?";
		$stmt = $this->conn->prepare( $query );
		$stmt->bindParam(1, $this->ig);
		// $stmt->bindParam(2, $this->ig);
		$stmt->execute();

		$row = $stmt->fetch(PDO::FETCH_ASSOC);
		if($row) {
		// $this->in = $row['id_nilai'];
		// $this->merk = $row['merk'];
		// $this->kk = $row['nama_kri'];
		$this->nilai = $row['nilai'];
		}
	}

	// update the product
	function update(){

		$query = "UPDATE 
					" . $this->table_name . " 
				SET 
					nilai = :nilai
				WHERE
					id_gitar = :ig
					and 
					kode_kri = :kk";

		$stmt = $this->conn->prepare($query);

		$stmt->bindParam(':nilai', $this->nilai);
		$stmt->bindParam(':ig', $this->id_gitar);
		$stmt->bindParam(':kk', $this->kk);
		
		// execute the query
		if($stmt->execute()){
			return true;
		}else{
			return false;
		}
	}
	
	function normalisasi(){

		$query = "UPDATE 
					" . $this->table_name . " 
				SET 
					normalisasi = :nn2
					
				WHERE
					id_gitar = :ig 
				AND
					kode_kri = :kk";

		$stmt = $this->conn->prepare($query);

		$stmt->bindParam(':nn2', $this->nn2);
		$stmt->bindParam(':ig', $this->ig);
		$stmt->bindParam(':kk', $this->kk);
		
		// execute the query
		if($stmt->execute()){
			return true;
		}else{
			return false;
		}
	}
	
	// function hasil(){

	// 	$query = "UPDATE 
	// 				alternatif
	// 			SET 
	// 				hasil_alternatif = :has
	// 			WHERE
	// 				id_alternatif = :ia";

	// 	$stmt = $this->conn->prepare($query);

	// 	$stmt->bindParam(':has', $this->has);
	// 	$stmt->bindParam(':ia', $this->ia);
		
	// 	// execute the query
	// 	if($stmt->execute()){
	// 		return true;
	// 	}else{
	// 		return false;
	// 	}
	// }
	// iki opooo???^^^
	
	// delete the product
	function delete(){
	
		$query = "DELETE FROM " . $this->table_name . " WHERE id_gitar = ?";
		
		$stmt = $this->conn->prepare($query);
		$stmt->bindParam(1, $this->ig);
		// $stmt->bindParam(2, $this->ik);

		if($result = $stmt->execute()){
			return true;
		}else{
			return false;
		}
	}

		function readCodeMax(){
		
		$query = "SELECT max(id_nilai) as id_nilai FROM " . $this->table_name;

		$stmt = $this->conn->prepare( $query );
		$stmt->execute();

		$row = $stmt->fetch(PDO::FETCH_ASSOC);
		
		$this->in = $row['id_nilai'];
	}

	function kodeOtomatis(){

		// $alt->idp = $id_pengguna;
    	$this->readCodeMax();

    	$tm_cari=$this->in;
    
    	$kode1=substr($tm_cari,3,3); //mengambil string mulai dari karakter pertama 'G' dan mengambil 4 karakter setelahnya. 
    	$kode=intval($kode1);
    	$tambah=$kode+1; //kode yang sudah di pecah di tambah 1
    
	    if($tambah<10){ //jika kode lebih kecil dari 10 (9,8,7,6 dst) maka

	        $this->hasilkode="N_00".$tambah;
	    
	    }else if ($tambah>=10&&$tambah<100) {
	    	$this->hasilkode="N_0".$tambah;
	    }else{
	     
	        $this->hasilkode="N_".$tambah;
	    
	    }

	}

}
?>