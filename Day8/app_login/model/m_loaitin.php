<?php 
	/**
	 * 
	 */
	class loaitin{
		private $idloaitin, $theloai, $mota, $ngaytao;
		public function __construct($idloaitin, $theloai, $mota, $ngaytao){
			$this -> idloaitin = $idloaitin;
			$this -> theloai = $theloai;
			$this -> mota = $mota;
			$this -> ngaytao = $ngaytao;
		}

		
		public function getidloaitin(){
			return $this -> idloaitin;
		}
		public function gettheloai(){
			return $this -> theloai;
		}
		public function getmota(){
			return $this -> mota;
		}
		public function getngaytao(){
			return $this -> ngaytao;
		}
		

		
		public function setidloaitin($idloaitin){
			$this -> idloaitin = $idloaitin;
		}
		public function settheloai($theloai){
			$this -> theloai = $theloai;
		}
		public function setmota($mota){
			$this -> mota = $mota;
		}
		public function setngaytao($ngaytao){
			$this -> ngaytao = $ngaytao;
		}
		
	}

	class loaitinDB{
		public static function getalloaitin(){
			$db = Database::getDB();
			$query = "SELECT * FROM loaitin";
			$statement=$db->prepare($query);
			$statement->execute();
			$loaitins = $statement->fetchAll();
			$statement->closeCursor();
			foreach ($loaitins as $key => $value) {
				$loaitin = new loaitin($value['idloaitin'], $value['theloai'],$value['mota'], $value['ngaytao']);
			
				
				$result[] = $loaitin;
			}
			return $result;
		}

		public static function add_loaitin($idloaitin, $theloai, $mota){
			$db = Database::getDB();
			try{
			$query = "INSERT INTO loaitin(idloaitin, theloai, mota, ngaytao)
			VALUES (?,?,?,?)";
			$statement = $db->prepare($query);
			$statement -> bindParam(1,$idloaitin);
			$statement -> bindParam(2,$theloai);
			$statement -> bindParam(3,$mota);
			$statement -> bindParam(4,$ngaytao);
			
			$statement -> execute();
			$statement->closeCursor();
			} catch(PDOException $e){
				$error_message = $e->getMessage();
				echo "<p>Error connecting to database: $error_message</p>";
				exit();
			}
		}
		// public static function checkloaitin($idloaitin, $theloai){
		// 	$loaitins = self::getallloaitin();
		// 	$result = false;
		// 	foreach ($loaitin as $key => $value) {
		// 		if ($idloaitin == $value -> getidloaitin() && $theloai == $value -> gettheloai()) {
		// 			$result = true;
		// 			break;			
		// 		}
		// 	}
		// 	return $result;
		// } 
		// public static function getloaitinbyid($loaitinid){
		// 	 $db = Database::getDB();
		// 	$query ="SELECT * FROM loaitin WHERE idloaitin = ?";
		// 	$statement = $db->prepare($query);
		// 	$statement -> bindParam(1,$idloaitin);
		// 	$statement->execute();
		// 	$loaitin = $statement->fetch();
		// 	$statement->closeCursor();
		// 	$result = new loaitin($loaitin['idloaitin'], $loaitin['theloai'], $loaitin['mota'], $loaitin['ngaytao']);
		// 	$result -> setloaitinid($loaitin['idloaitin']);
			
			
		// 	return $result;
		// }
		// public static function updateloaitin( $idloaitin, $theloai, $mota, $ngaytao){
		// 	 $db = Database::getDB();
		// 	$query = "UPDATE loaitin SET theloai = :theloai, mota = :mota, ngaytao = :ngaytao WHERE idloaitin = :idloaitin ";
		// 	$statement = $db -> prepare($query);
			
		// 	$statement -> bindValue(':idloaitin',$idloaitin);
		// 	$statement -> bindValue(':theloai',$theloai);
		// 	$statement -> bindValue(':mota',$mota);
		// 	$statement -> bindValue(':ngaytao',$ngaytao);
		// 	$statement -> execute();
		// 	$statement -> closeCursor();

		// }
		// public static function delete($idloaitin){
		// 	 $db = Database::getDB();
		// 	$query = "DELETE FROM loaitin WHERE idloaitin = :idloaitin";
		// 	$statement = $db->prepare($query);
		// 	$statement -> bindValue(':idloaitin',$idloaitin);
		// 	$statement -> execute();
		// 	$statement -> closeCursor();
		// }
		// public static function search_loaitin($search_value){
		// 	 $db = Database::getDB();
		// 	// $query = "SELECT * FROM loaitintable WHERE (loaitinID = :search_value) OR (idloaitin LIKE :search_value) OR (mota LIKE :search_value) OR (ngaytao LIKE :search_value) ";
		// 	$query = "SELECT * FROM loaitin WHERE (idloaitin LIKE '%$search_value%') OR (mota LIKE '$search_value') OR (ngaytao LIKE '$search_value') ";
		// 	$statement = $db -> prepare($query);
		// 	// $statement -> bindValue(':search_value',$search_value);
		// 	$statement -> execute();
		// 	$loaitin = $statement -> fetchAll();
		// 	$statement -> closeCursor();
		// 	$result = array();
		// 	foreach ($loaitin as $key => $value) {
		// 		$loaitin = new loaitin($value['idloaitin'], $value['theloai'],$value['mota'], $value['ngaytao']);
				
		// 		$result[] = $loaitin;
		// 	}
		// 	return $result;
		// }
	}
 ?>