<?php 
	class car{
		private $car_reg_no, $category, $brand, $daily_rate ;
		public function __construct($car_reg_no, $category, $brand, $daily_rate){
			$this -> car_reg_no = $car_reg_no;
			$this -> category = $category;
			$this -> brand = $brand;
			$this -> daily_rate = $daily_rate;
			
		}

		
		public function getcar_reg_no(){
			return $this -> car_reg_no;
		}
		public function getcategory(){
			return $this -> category;
		}
		public function getbrand(){
			return $this -> brand;
		}
		public function getdaily_rate(){
			return $this -> daily_rate;
		}
		

		public function setcar_reg_no($car_reg_no){
			$this -> car_reg_no = $car_reg_no;
		}
		public function setcategory($category){
			$this -> category = $category;
		}
		public function setbrand($brand){
			$this -> brand = $brand;
		}
		public function setdaily_rate($daily_rate){
			$this -> daily_rate = $daily_rate;
		}
		
	}
	class view{
		private $rental_id, $car_reg_no,   $customer_id, $name, $start_date, $end_date, $lastUpdated ;
		public function __construct($rental_id, $car_reg_no,   $customer_id, $name, $start_date, $end_date, $lastUpdated){
			
			$this -> rental_id = $rental_id;
			$this -> car_reg_no = $car_reg_no;
			$this -> customer_id = $customer_id;
			$this -> name =$name;
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
		public function getname(){
			return $this -> name;
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

		public function setname($name){
			$this -> name = $name;
		}
		public function setstart_date($start_date){
			$this -> start_date = $start_date;
		}
		public function setend_date($end_date){
			$this -> end_date = $end_date;
		}
		public function setlastUpdate($lastUpdated){
			$this -> lastUpdated = $lastUpdated;
		}
}
	
	class CarDB{
		public static function getalcar(){
			$db = Database::getDB();
			$query = "SELECT * FROM car";
			$statement=$db->prepare($query);
			$statement->execute();
			$cars = $statement->fetchAll();
			$statement->closeCursor();
			foreach ($cars as $key => $value) {
				$car = new car($value['car_reg_no'], $value['category'],$value['brand'], $value['daily_rate']);
			
				
				$result[] = $car;
			}
			return $result;
		}
		public static function viewdetail($car_reg_no){
			$db = Database::getDB();
			$query = "SELECT rental_id, car.car_reg_no, customers.customer_id, name, start_date, end_date, lastUpdated FROM car INNER JOIN rental_records ON car.car_reg_no = rental_records.car_reg_no INNER JOIN customers ON rental_records.customer_id = customers.customer_id WHERE car.car_reg_no = :car_reg_no";
			$statement=$db->prepare($query);
			$statement -> bindValue(':car_reg_no',$car_reg_no);

			$statement->execute();
			$cars = $statement->fetchAll();
			$statement->closeCursor();
			foreach ($cars as $key => $value) {
				$car = new view($value['rental_id'], $value['car_reg_no'], $value['customer_id'],$value['name'], $value['start_date'], $value['end_date'], $value['lastUpdated']);
			
				
				$result[] = $car;
			}
			return $result;
		}

	}
 ?>