<?php 
	class product{
		private $productID, $categoryID, $productName, $price;
		public function __construct($productID, $categoryID, $productName, $price){
			$this -> productID = $productID;
			$this -> categoryID = $categoryID;
			$this -> productName = $productName;
			$this -> price = $price;	
		}

		public function getproductID(){
			return $this -> productID;
		}
		public function getcategoryID(){
			return $this -> categoryID;
		}
		public function getproductName(){
			return $this -> productName;
		}
		public function getprice(){
			return $this -> price;
		}
		
		public function setproductID($productID){
			$this -> productID = $productID;
		}
		public function setcategoryID($categoryID){
			$this -> categoryID = $categoryID;
		}
		public function setproductName(){
			$this -> productName = $productName;
		}
		public function setprice(){
			$this -> price = $price;
		}
		
		
	}
	class productDB{
		// public static function getalcustomers(){
		// 	$db = Database::getDB();
		// 	$query = "SELECT * FROM customers";
		// 	$statement=$db->prepare($query);
		// 	$statement->execute();
		// 	$customers = $statement->fetchAll();
		// 	$statement->closeCursor();
		// 	foreach ($customers as $key => $value) {
		// 		$customers = new customers($value['customer_id'], $value['name'],$value['address'], $value['phone'], $value['discount']);
			
			
		// 		$result[] = $customers;
		// 	}
		// 	return $result;
		// }
		
		
	}
 ?>
