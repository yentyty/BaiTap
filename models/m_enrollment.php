<?php 
	class enrollment{
		private $enrollmentID, $studentID, $courcesID, $enrollmentForm,$enrollmentTo;
		public function __construct($enrollmentID, $studentID, $courcesID, $enrollmentForm,$enrollmentTo){
			$this -> enrollmentID = $enrollmentID;
			$this -> categoryID = $categoryID;
			$this -> courcesID = $courcesID;
			$this -> enrollmentForm = $enrollmentForm;
			$this -> enrollmentTo = $enrollmentTo;	
		}

		public function getenrollmentID(){
			return $this -> enrollmentID;
		}
		public function getstudentID(){
			return $this -> studentID;
		}
		public function getcourcesID(){
			return $this -> courcesID;
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
		public function setstudentID($studentID){
			$this -> studentID = $studentID;
		}
		public function setcourcesID(){
			$this -> courcesID = $courcesID;
		}
		public function setenrollmentForm(){
			$this -> enrollmentForm = $enrollmentForm;
		}
		public function setenrollmentTo(){
			$this -> enrollmentTo = $enrollmentTo;
		}
		
		
	}
	class EnrollmentDB{
		
		
		
	}
 ?>
