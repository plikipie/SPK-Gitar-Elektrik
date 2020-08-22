<?php
class Alternatif{
	
	private $conn;
	private $table_name = "alternatif";
	
	public $id_gitar;
	public $merk;
	public $jeniskayu;
	public $fret;
	public $seri;
	public $deskripsi;
	public $hasilkode;
	public $foto;

	public function __construct($db){
		$this->conn = $db;
	}
	
	function insert(){
		
		$query = "insert into ".$this->table_name." values(?,?,?,?,?,?,?)";
		$stmt = $this->conn->prepare($query);
		$stmt->bindParam(1, $this->id_gitar);
		$stmt->bindParam(2, $this->merk);
		$stmt->bindParam(3, $this->jeniskayu);
		$stmt->bindParam(4, $this->fret);
		$stmt->bindParam(5, $this->seri);
		$stmt->bindParam(6, $this->deskripsi);
		$stmt->bindParam(7, $this->foto);
		if($stmt->execute()){
			return true;
		}else{
			return false;
		}
		
	}
	
	function UploadImage($fupload_name){
  				//direktori gambar
  				$vdir_upload = "Upload/";
  				$vfile_upload = $vdir_upload . $fupload_name;

  				//Simpan gambar dalam ukuran sebenarnya
  				move_uploaded_file($_FILES["foto"]["tmp_name"], $vfile_upload);

  				//identitas file asli
  				$im_src = imagecreatefromjpeg($vfile_upload);
  				$src_width = imageSX($im_src);
  				$src_height = imageSY($im_src);

  				//Simpan dalam versi small 110 pixel
  				//Set ukuran gambar hasil perubahan
  				$dst_width = 110;
  				$dst_height = ($dst_width/$src_width)*$src_height;

  				//proses perubahan ukuran
  				$im = imagecreatetruecolor($dst_width,$dst_height);
  				imagecopyresampled($im, $im_src, 0, 0, 0, 0, $dst_width, $dst_height, $src_width, $src_height);

  				//Simpan gambar
  				imagejpeg($im,$vdir_upload . "small_" . $fupload_name);
  
  				//Hapus gambar di memori komputer
  				imagedestroy($im_src);
  				imagedestroy($im);
           }


	function readAll(){

		$query = "SELECT * FROM ".$this->table_name." ORDER BY id_gitar ASC";
		$stmt = $this->conn->prepare( $query );
		$stmt->execute();
		
		return $stmt;
	}

	function readJum(){

		$query = "SELECT count(id_gitar) as jum FROM ".$this->table_name;
		$stmt = $this->conn->prepare( $query );
		$stmt->execute();
		
		return $stmt;
	}
	
	// used when filling up the update product form
	function readOne(){
		
		$query = "SELECT * FROM " . $this->table_name . " WHERE id_gitar=? LIMIT 0,1";

		$stmt = $this->conn->prepare( $query );
		$stmt->bindParam(1, $this->id_gitar);
		$stmt->execute();

		$row = $stmt->fetch(PDO::FETCH_ASSOC);
		
		$this->id_gitar = $row['id_gitar'];
		$this->merk = $row['merk'];
		$this->jeniskayu = $row['jeniskayu'];
		$this->fret = $row['fret'];
		$this->seri = $row['seri'];
		$this->deskripsi = $row['deskripsi'];
		$this->foto = $row['foto'];
	}
	
	// update the product
	function update(){

		$query = "UPDATE 
					" . $this->table_name . " 
				SET 
					merk = :merk,
					jeniskayu = :jeniskayu,
					fret = :fret,  
					seri = :seri,
					deskripsi = :deskripsi,
					foto = :foto
				WHERE
					id_gitar = :id_gitar";

		$stmt = $this->conn->prepare($query);

		$stmt->bindParam(':id_gitar', $this->id_gitar);
		$stmt->bindParam(':merk', $this->merk);
		$stmt->bindParam(':jeniskayu', $this->jeniskayu);
		$stmt->bindParam(':fret', $this->fret);
		$stmt->bindParam(':seri', $this->seri);
		$stmt->bindParam(':deskripsi', $this->deskripsi);
		$stmt->bindParam(':foto', $this->foto);
		
		// execute the query
		if($stmt->execute()){
			return true;
		}else{
			return false;
		}
	}
	
	// delete the product
	function delete(){
	
		$query = "DELETE FROM " . $this->table_name . " WHERE id_gitar = ?";
		
		$stmt = $this->conn->prepare($query);
		$stmt->bindParam(1, $this->id_gitar);

		if($result = $stmt->execute()){
			return true;
		}else{
			return false;
		}
	}

function readCodeMax(){
		
		$query = "SELECT max(id_gitar) as id_gitar FROM " . $this->table_name;

		$stmt = $this->conn->prepare( $query );
		$stmt->execute();

		$row = $stmt->fetch(PDO::FETCH_ASSOC);
		
		$this->id_gitar = $row['id_gitar'];
	}

	function kodeOtomatis(){

		// $alt->idp = $id_pengguna;
    	$this->readCodeMax();

    	$tm_cari=$this->id_gitar;
    
    	$kode1=substr($tm_cari,3,3); //mengambil string mulai dari karakter pertama 'G' dan mengambil 4 karakter setelahnya. 
    	$kode=intval($kode1);
    	$tambah=$kode+1; //kode yang sudah di pecah di tambah 1
    
	    if($tambah<10){ //jika kode lebih kecil dari 10 (9,8,7,6 dst) maka

	        $this->hasilkode="G_00".$tambah;
	    
	    }else if ($tambah>=10&&$tambah<100) {
	    	$this->hasilkode="G_0".$tambah;
	    }else{
	     
	        $this->hasilkode="G_".$tambah;
	    
	    }

	}

}
?>