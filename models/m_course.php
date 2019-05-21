<?php 
	class cource{
		private $courcesID, $courcesName;
		public function __construct($courcesID, $courcesName){
			$this -> courcesID = $courcesID;
			$this -> courcesName = $courcesName;	
		}

		public function getcourcesID(){
			return $this -> courcesID;
		}
		public function getcourcesName(){
			return $this -> courcesName;
		}
		
		public function setcourcesID($courcesID){
			$this -> courcesID = $courcesID;
		}
		public function setcourcesName($courcesName){
			$this -> courcesName = $courcesName;
		}
		
	}
	class view{
		private $enrollmentID, $courcesID, $courcesName, $enrollmentForm, $enrollmentTo;
		public function __construct($enrollmentID, $courcesID, $courcesName, $enrollmentForm, $enrollmentTo){
			$this -> enrollmentID = $enrollmentID;
			$this -> courcesID = $courcesID;
			$this -> courcesName = $courcesName;
			$this -> enrollmentForm = $enrollmentForm;
			$this -> enrollmentTo = $enrollmentTo;	
		}

		public function getenrollmentID(){
			return $this -> enrollmentID;
		}
		public function getcourcesID(){
			return $this -> courcesID;
		}
		public function getcourcesName(){
			return $this -> courcesName;
		}
		public function getenrollmentForm(){
			return $this -> enrollmentForm;
		}
		public function getenrollmentTo(){
			return $this -> enrollmentTo;
		}
		
		
		public function setenrollmentID($enrollmentID){
			$this -> enrollmentID = $enrollmentID;
		}
		public function setcourcesID($courcesID){
			$this -> courcesID = $courcesID;
		}
		public function setcourcesName($courcesName){
			$this -> courcesName = $courcesName;
		}
		public function setenrollmentForm($enrollmentForm){
			$this -> enrollmentForm = $enrollmentForm;
		}
		public function setenrollmentTo($enrollmentTo){
			$this -> enrollmentTo = $enrollmentTo;
		}
		
	}
	class CourceDB{
		public static function getallcource(){
			$db = Database::getDB();
			$query = "SELECT * FROM cource";
			$statement=$db->prepare($query);
			$statement->execute();
			$cource = $statement->fetchAll();
			$statement->closeCursor();
			foreach ($cource as $key => $value) {
				$cource = new cource($value['courcesID'], $value['courcesName']);
				$result[] = $cource;
			}
			return $result;
		}
		public static function view_cources($courcesID){
			$db = Database::getDB();
			$query = "SELECT enrollmentID, Cource.courcesID, courcesName, enrollmentForm, enrollmentTo
						FROM Enrollment
						INNER JOIN Cource ON
						Cource.courcesID = Enrollment.courcesID
						WHERE Cource.courcesID = :courcesID;";
			$statement=$db->prepare($query);
			$statement -> bindValue(':courcesID',$courcesID);
			$statement->execute();
			$list_view = $statement->fetchAll();
			$statement->closeCursor();
			foreach ($list_view as $key => $value) {
				$list_view = new view ($value['enrollmentID'], $value['courcesID'], $value['courcesName'], $value['enrollmentForm'], $value['enrollmentTo']);
				$result[] = $list_view;

			}
			return $result;
		
		}


	}
?>