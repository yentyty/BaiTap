<?php 
	class customers{
		private $customer_id, $name, $address, $phone, $discount;
		public function __construct($customer_id, $name, $address, $phone, $discount){
			$this -> customer_id = $customer_id;
			$this -> name = $name;
			$this -> address = $address;
			$this -> phone = $phone;
			$this -> discount = $discount;	
		}

		public function getcustomer_id(){
			return $this -> customer_id;
		}
		public function getname(){
			return $this -> name;
		}
		public function getaddress(){
			return $this -> address;
		}
		public function getdaily_rate(){
			return $this -> daily_rate;
		}
		public function getdiscount(){
			return $this -> discount;
		}
		

		public function setcustomer_id($customer_id){
			$this -> car_reg_no = $car_reg_no;
		}
		public function setname($name){
			$this -> name = $name;
		}
		public function setaddress($address){
			$this -> address = $address;
		}
		public function setdaily_rate($daily_rate){
			$this -> daily_rate = $daily_rate;
		}
		public function setdiscount($discount){
			$this -> discount = $discount;
		}
		
	}
	class CustomersDB{
		public static function getalcustomers(){
			$db = Database::getDB();
			$query = "SELECT * FROM customers";
			$statement=$db->prepare($query);
			$statement->execute();
			$customers = $statement->fetchAll();
			$statement->closeCursor();
			foreach ($customers as $key => $value) {
				$customers = new customers($value['customer_id'], $value['name'],$value['address'], $value['phone'], $value['discount']);
			
			
				$result[] = $customers;
			}
			return $result;
		}
		
	}
 ?>