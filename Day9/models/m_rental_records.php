<?php 
	class rental{
		private  $rental_id, $car_reg_no,   $customer_id,  $start_date, $end_date, $lastUpdated ;
		public function __construct($rental_id, $car_reg_no,   $customer_id, $start_date, $end_date, $lastUpdate){
			$this -> car_reg_no = $car_reg_no;
			$this -> rental_id = $rental_id;
			$this -> customer_id = $customer_id;
			$this -> start_date = $start_date;
			$this -> end_date = $end_date;
			$this -> lastUpdate = $lastUpdated;
		}
		
		public function getrental_id(){
			return $this -> rental_id;
		}
		public function getcar_reg_no(){
			return $this -> car_reg_no;
		}
		public function getcustomer_id(){
			return $this -> customer_id;
		}
		public function getstart_date(){
			return $this -> start_date;
		}
		public function getend_date(){
			return $this -> end_date;
		}
		public function getlastUpdated(){
			return $this -> lastUpdated;
		}
		

		
		
		public function setrental_id($rental_id){
			$this -> rental_id = $rental_id;
		}
		public function setcar_reg_no($car_reg_no){
			$this -> car_reg_no = $car_reg_no;
		}
		public function setcustomer_id($customer_id){
			$this -> customer_id = $customer_id;
		}
		public function setstart_date($start_date){
			$this -> start_date = $start_date;
		}
		public function setend_date($end_date){
			$this -> end_date = $end_date;
		}
		public function setlastUpdate($lastUpdated){
			$this -> lastUpdate = $lastUpdated;
		}
	}
	class Rental_recordDB {
		public static function add_rental( $car_reg_no,  $customer_id,  $start_date, $end_date, $lastUpdate){
				$db = Database::getDB();
				try{
					$query = "INSERT INTO rental_records ( car_reg_no,  customer_id,  start_date, end_date, lastUpdated)
					VALUES (?,?,?,?,?)";
					$statement = $db->prepare($query);
					$statement -> bindParam(1,$car_reg_no);
					$statement -> bindParam(2,$customer_id);
					$statement -> bindParam(3,$start_date);
					$statement -> bindParam(4,$end_date);
					$statement -> bindParam(5,$lastUpdate);
					$statement -> execute();
					$statement->closeCursor();
				} catch(PDOException $e){
					$error_message = $e->getMessage();
					echo "<p>Error connecting to database: $error_message</p>";
					exit();
				}
			}
	}
 ?>