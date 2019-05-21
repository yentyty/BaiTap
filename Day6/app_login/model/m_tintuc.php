<?php 
	/**
	 * 
	 */
	class tintuc{
		private $idtintuc, $idloaitin, $tieude, $tomtat, $noidung, $hinh, $userid, $ngaytao;
		public function __construct($idtintuc, $idloaitin, $tieude, $tomtat, $noidung, $hinh,$userid, $ngaytao){
			$this -> idtintuc = $idtintuc;
			$this -> idloaitin = $idloaitin;
			$this -> tieude = $tieude;
			$this -> tomtat = $tomtat;
			$this -> noidung = $noidung;
			$this -> hinh = $hinh;
			$this -> userid = $userid;
			$this -> ngaytao = $ngaytao;
		}

		public function getidtintuc(){
			return $this -> idtintuc;
		}
		public function getidloaitin(){
			return $this -> idloaitin;
		}
		public function gettieude(){
			return $this -> tieude;
		}
		public function gettomtat(){
			return $this -> tomtat;
		}
		public function getnoidung(){
			return $this -> noidung;
		}
		public function gethinh(){
			return $this -> hinh;
		}
		public function getuserid(){
			return $this -> userid;
		}
		public function getngaytao(){
			return $this -> ngaytao;
		}

		public function setidtintuc($idtintuc){
			$this -> idtintuc = $idtintuc;
		}
		public function setidloaitin($idloaitin){
			$this -> idloaitin = $idloaitin;
		}
		public function settieude($tieude){
			$this -> tieude = $tieude;
		}
		public function settomtat($tomtat){
			$this -> tomtat = $tomtat;
		}
		public function setnoidung($noidung){
			$this -> noidung = $noidung;
		}
		public function sethinh($hinh){
			$this -> hinh = $hinh;
		}
		public function setuserid($userid){
			$this -> userid = $userid;
		}
		public function setngaytao($ngaytao){
			$this -> ngaytao = $ngaytao;
		}
	}

	class tintucDB{
		public static function getAlltintuc(){
			$db = Database::getDB();
			$query = "SELECT * FROM tintuc";
			$statement=$db->prepare($query);
			$statement->execute();
			$list_tintuc = $statement->fetchAll();
			$statement->closeCursor();
			foreach ($list_tintuc as $key => $value) {
				$tin = new tintuc( $value['idtintuc'], $value['idloaitin'], $value['tieude'],$value['tomtat'], $value['noidung'], $value['hinh'], $value['userid'], $value['ngaytao']);
				
				$result[] = $tin;
			}
			return $result;
		}

		public static function add_tintuc( $idloaitin, $tieude, $tomtat, $noidung, $hinh,$userid){
			$db = Database::getDB();
			try{
				$query = "INSERT INTO tintuc( idloaitin, tieude, tomtat, noidung, hinh, userid)
				VALUES (?,?,?,?,?,?)";
				$statement = $db->prepare($query);
				$statement -> bindParam(1,$idloaitin);
				$statement -> bindParam(2,$tieude);
				$statement -> bindParam(3,$tomtat);
				$statement -> bindParam(4,$noidung);
				$statement -> bindParam(5,$hinh);
				$statement -> bindParam(6,$userid);
				$statement -> execute();
				$statement->closeCursor();
			} catch(PDOException $e){
				$error_message = $e->getMessage();
				echo "<p>Error connecting to database: $error_message</p>";
				exit();
			}
		}
		
		public static function gettintucbyid($idtintuc){
			$db = Database::getDB();
			$query ="SELECT * FROM tintuc WHERE idtintuc = ?";
			$statement = $db->prepare($query);
			$statement -> bindParam(1,$idtintuc);
			$statement -> execute();
			$list_tintuc = $statement->fetch();
			$statement -> closeCursor();
			$result = new tintuc( $list_tintuc['idtintuc'], $list_tintuc['idloaitin'], $list_tintuc['tieude'],$list_tintuc['tomtat'], $list_tintuc['noidung'], $list_tintuc['hinh'], $list_tintuc['userid'], $list_tintuc['ngaytao']);
			return $result;
		}
		public static function updatetintuc($idtintuc, $idloaitin, $tieude, $tomtat, $noidung, $hinh,$userid){
			 $db = Database::getDB();
			$query = "UPDATE tintuc SET  idloaitin = :idloaitin, tieude = :tieude, tomtat = :tomtat, noidung = :noidung, hinh = :hinh, userid = :userid WHERE idtintuc = :idtintuc ";
			$statement = $db -> prepare($query);
			$statement -> bindValue(':idtintuc',$idtintuc);
			$statement -> bindValue(':idloaitin',$idloaitin);
			$statement -> bindValue(':tieude',$tieude);
			$statement -> bindValue(':tomtat',$tomtat);
			$statement -> bindValue(':noidung',$noidung);
			$statement -> bindValue(':hinh',$hinh);
			$statement -> bindValue(':userid',$userid);
			
			$statement -> execute();
			$statement -> closeCursor();

		}
		public static function delete($idtintuc){
			$db = Database::getDB();
			$query = "DELETE FROM tintuc WHERE idtintuc = :idtintuc";
			$statement = $db->prepare($query);
			$statement -> bindValue(':idtintuc',$idtintuc);
			$statement -> execute();
			$statement -> closeCursor();
		}
		public static function search_tintuc($search_value){
			 $db = Database::getDB();
			// $query = "SELECT * FROM tintuc WHERE (idtintuc = :search_value) OR (idloaitin LIKE :search_value) OR (tomtat LIKE :search_value) OR (noidung LIKE :search_value) ";
			$query = "SELECT * FROM tintuc WHERE (idtintuc = '$search_value') OR (idloaitin LIKE '$search_value') OR (tomtat LIKE '%$search_value%') OR (hinh LIKE '%$search_value%') OR (userid LIKE '%$search_value%') OR (ngaytao LIKE '%$search_value%')";
			$statement = $db -> prepare($query);
			// $statement -> bindValue(':search_value',$search_value);
			$statement -> execute();
			$list_tintuc = $statement->fetchAll();
			$statement -> closeCursor();
			$result = array();
			foreach ($list_tintuc as $key => $value) {
				$tin = new tintuc( $value['idtintuc'], $value['idloaitin'], $value['tieude'],$value['tomtat'], $value['noidung'], $value['hinh'], $value['userid'], $value['ngaytao']);
				
				$result[] = $tin;
			}
			return $result;
		}
	}
 ?>