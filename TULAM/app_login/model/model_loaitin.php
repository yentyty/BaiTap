<?php 
	function getalloaitin(){
		global $db;
		try{
			$query = "SELECT * FROM loaitin";
			$statement=$db->prepare($query);
			$statement->execute();
			$loaitin = $statement->fetchAll();
			$statement->closeCursor();
			return $loaitin;
		} catch(PDOException $e){
			$error_message = $e->getMessage();
			echo "<p>Error connecting to database: $error_message</p>";
			exit();
		}
	}
	function addloaitin($theloai, $mota, $ngaytao){
		global $db;
		try{
			$query = "INSERT INTO loaitin(theloai, mota, ngaytao)
			VALUES (:theloai, :mota, :ngaytao)";
			$statement = $db->prepare($query);
			$statement -> bindValue(':theloai', $theloai);
			$statement -> bindValue(':mota', $mota);
			$statement -> bindValue(':ngaytao', $ngaytao);
			$statement -> execute();
			$statement -> closeCursor();
		}
		catch(PDOException $e){
			$error_message = $e->getMessage();
			echo "<p>Error connecting to database: $error_message</p>";
			exit();
		}
	}
	function getloaitinbyid($idloaitin){
		global $db;
		$query = "SELECT * FROM loaitin WHERE idloaitin = :idloaitin";
		$statement = $db->prepare($query);
		$statement -> bindValue(":idloaitin",$idloaitin);
		$statement->execute();
		$loaitin = $statement->fetch();
		$statement->closeCursor();
		return $loaitin;
	}
	function updateloaitin($idloaitin, $theloai, $mota, $ngaytao ){
		global $db;
		$query = "UPDATE loaitin SET theloai = :theloai, mota = :mota, ngaytao = :ngaytao WHERE idloaitin = :idloaitin";
		$statement = $db->prepare($query);
		$statement -> bindValue(":idloaitin",$idloaitin);
		$statement -> bindValue(':theloai', $theloai);
		$statement -> bindValue(':mota', $mota);
		$statement -> bindValue(':ngaytao', $ngaytao);
		$statement -> execute();
		$statement->closeCursor();
	}
	function deleteloaitin($idloaitin){
		global $db;
		$query = "DELETE FROM loaitin WHERE idloaitin = :idloaitin";
		$statement = $db->prepare($query);
		$statement -> bindValue(':idloaitin',$idloaitin);
		$statement->execute();
		$statement->closeCursor();
	}
	function search_loaitin($search_loaitin){
		global $db;
		$query = "SELECT * FROM loaitin WHERE ( idloaitin = '$search_loaitin') OR (theloai LIKE '%$search_loaitin%') OR (mota LIKE '%$search_loaitin%') OR (ngaytao LIKE '%$search_loaitin%')" ;
		$statement = $db -> prepare($query);
		
		$statement->execute();
		$loaitin = $statement->fetchAll();
		$statement->closeCursor();
		return $loaitin;
	}
 ?>