<?php 
	class Student{
		private $studentID, $name, $email, $phone, $courcesID;
		public function __construct($studentID, $name, $email, $phone, $courcesID){
			$this -> studentID = $studentID;
			$this -> name = $name;
			$this -> email = $email;
			$this -> phone = $phone;
			$this -> courcesID = $courcesID;
				
		}

		public function getstudentID(){
			return $this -> studentID;
		}
		public function getname(){
			return $this -> name;
		}
		public function getemail(){
			return $this -> email;
		}
		public function getphone(){
			return $this -> phone;
		}
		public function getcourcesID(){
			return $this -> courcesID;
		}
		
		

		public function setstudentID($studentID){
			$this -> studentID = $studentID;
		}
		public function setname($name){
			$this -> name = $name;
		}
		public function setemail($email){
			$this -> email = $email;
		}
		public function setphonee($phone){
			$this -> phone = $phone;
		}
		public function setcourcesID($courcesID){
			$this -> courcesID = $courcesID;
		}
		
		
	}
	class StudentDB{
		public static function view_student($courcesID){
			$db = Database::getDB();
			$query = "SELECT * FROM `student`INNER JOIN enrollment on student.studentID = enrollment.studentID INNER JOIN cource ON enrollment.courcesID = cource.courcesID WHERE enrollment.courcesID = :courcesID;";
			$statement=$db->prepare($query);
			$statement -> bindValue(':courcesID',$courcesID);

			$statement->execute();
			$list_student = $statement->fetchAll();
			$statement->closeCursor();
			foreach ($list_student as $key => $value) {
				$list_student = new Student($value['studentID'], $value['name'], $value['email'],$value['phone'], $value['courcesID']);
			
				
				$result[] = $list_student;
			}
			return $result;
		
		}
	}
	
 ?>