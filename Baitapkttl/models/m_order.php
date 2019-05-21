<?php 
	class orderItem{
		private $orderID, $itemID, $productID, $itemPrice, $quantity;
		public function __construct($orderID, $itemID, $productID, $itemPrice, $quantity){
			$this -> orderID = $orderID;
			$this -> itemID = $itemID;
			$this -> productID = $productID;
			$this -> itemPrice = $itemPrice;
			$this -> quantity = $quantity;	
		}

		public function getorderID(){
			return $this -> orderID;
		}
		public function getitemID(){
			return $this -> itemID;
		}
		public function getproductID(){
			return $this -> productID;
		}
		public function getitemPrice(){
			return $this -> itemPrice;
		}
		public function getquantity(){
			return $this -> quantity;
		}
		

		public function setorderID($orderID){
			$this -> orderID = $orderID;
		}
		public function setitemID($itemID){
			$this -> itemID = $itemID;
		}
		public function setproductID($productID){
			$this -> productID = $productID;
		}
		public function setitemPrice($itemPrice){
			$this -> itemPrice = $itemPrice;
		}
		public function setquantity($quantity){
			$this -> quantity = $quantity;
		}
		
	}
	class orderItemDB{
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