<?php
class Kriteria{
	
	private $conn;
	private $table_name = "kriteria";
	
	public $kode_kri;
	public $nama_kri;
	public $tipe_kri;
	
	public $hasilkode;
	
	public function __construct($db){
		$this->conn = $db;
	}
	
	function insert(){
		
		$query = "insert into ".$this->table_name." values(?,?,?)";
		$stmt = $this->conn->prepare($query);
		$stmt->bindParam(1, $this->kode_kri);
		$stmt->bindParam(2, $this->nama_kri);
		$stmt->bindParam(3, $this->tipe_kri);
		if($stmt->execute()){
			
			return true;
		}else{
			return false;
		}
		
	}
	
	function readAll(){

		$query = "SELECT * FROM ".$this->table_name." ORDER BY kode_kri ASC";
		$stmt = $this->conn->prepare( $query );
		$stmt->execute();
		
		return $stmt;
	}

	function readJum(){

		$query = "SELECT count(kode_kri) as jum FROM ".$this->table_name;
		$stmt = $this->conn->prepare( $query );
		$stmt->execute();
		
		return $stmt;
	}
	
	// used when filling up the update product form
	function readOne(){
		
		$query = "SELECT * FROM " . $this->table_name . " WHERE kode_kri=? LIMIT 0,1";

		$stmt = $this->conn->prepare( $query );
		$stmt->bindParam(1, $this->kode_kri);
		$stmt->execute();

		$row = $stmt->fetch(PDO::FETCH_ASSOC);
		
		$this->kode_kri = $row['kode_kri'];
		$this->nama_kri = $row['nama_kri'];
		$this->tipe_kri = $row['tipe_kri'];
	}
	
	// update the product
	function update(){

		$query = "UPDATE 
					" . $this->table_name . " 
				SET 
					nama_kri = :nama_kri,
					tipe_kri = :tipe_kri
				WHERE
					kode_kri = :kode_kri";

		$stmt = $this->conn->prepare($query);

		$stmt->bindParam(':kode_kri', $this->kode_kri);
		$stmt->bindParam(':nama_kri', $this->nama_kri);
		$stmt->bindParam(':tipe_kri', $this->tipe_kri);
		
		// execute the query
		if($stmt->execute()){
			return true;
		}else{
			return false;
		}
	}
	
	// delete the product
	function delete(){
	
		$query = "DELETE FROM " . $this->table_name . " WHERE kode_kri = ?";
		
		$stmt = $this->conn->prepare($query);
		$stmt->bindParam(1, $this->kode_kri);

		if($result = $stmt->execute()){
			return true;
		}else{
			return false;
		}
	}

	function readCodeMax(){
		
		$query = "SELECT max(kode_kri) as kode_kri FROM " . $this->table_name;

		$stmt = $this->conn->prepare( $query );
		$stmt->execute();

		$row = $stmt->fetch(PDO::FETCH_ASSOC);
		
		$this->kode_kri = $row['kode_kri'];
	}

	function kodeOtomatis(){

		// $alt->idp = $id_pengguna;
    	$this->readCodeMax();

    	$tm_cari=$this->kode_kri;
    
    	$kode1=substr($tm_cari,3,3); //mengambil string mulai dari karakter pertama 'G' dan mengambil 3 karakter setelahnya. 
    	$kode=intval($kode1);
    	$tambah=$kode+1; //kode yang sudah di pecah di tambah 1
    
	    if($tambah<10){ //jika kode lebih kecil dari 10 (9,8,7,6 dst) maka

	        $this->hasilkode="C_00".$tambah;
	    
	    }else if ($tambah>=10&&$tambah<100) {
	    	$this->hasilkode="C_0".$tambah;
	    }else{
	     
	        $this->hasilkode="C_".$tambah;
	    
	    }

	}

}
?>