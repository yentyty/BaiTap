<?php 
	class categorie{
		private $categoryID, $categoryName;
		public function __construct($categoryID, $categoryName){
			$this -> categoryID = $categoryID;
			$this -> categoryName = $categoryName;	
		}

		public function getcategoryID(){
			return $this -> categoryID;
		}
		public function getcategoryName(){
			return $this -> categoryName;
		}
		
		public function setcategoryID($categoryID){
			$this -> categoryID = $categoryID;
		}
		public function setcategoryName($categoryName){
			$this -> categoryName = $categoryName;
		}
		
		
	}
	class view{
		private $productID, $categoryID, $categoryName, $productName, $price;
		public function __construct($productID, $categoryID, $categoryName, $productName, $price){
			$this -> productID = $productID;
			$this -> categoryID = $categoryID;
			$this -> categoryName = $categoryName;
			$this -> productName = $productName;
			$this -> price = $price;	
		}

		public function getproductID(){
			return $this -> productID;
		}
		public function getcategoryID(){
			return $this -> categoryID;
		}
		public function getcategoryName(){
			return $this -> categoryName;
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
		public function setcategoryName($categoryName){
			$this -> categoryName = $categoryName;
		}
		public function setproductName($productName){
			$this -> productName = $productName;
		}
		public function setprice($price){
			$this -> price = $price;
		}
	}
	class categorieDB{
		public static function getallcategory(){
			$db = Database::getDB();
			$query = "SELECT * FROM categories";
			$statement=$db->prepare($query);
			$statement->execute();
			$categorie = $statement->fetchAll();
			$statement->closeCursor();
			foreach ($categorie as $key => $value) {
				$categorie = new categorie($value['categoryID'], $value['categoryName']);
				$result[] = $categorie;
			}
			return $result;
		}
		public static function view_product($categoryID){
			$db = Database::getDB();
			$query = "SELECT productID, categories.categoryID, categoryName, productName, price
						FROM products
						INNER JOIN categories ON
						products.categoryID = categories.categoryID
						WHERE categories.categoryID = :categoryID;";
			$statement=$db->prepare($query);
			$statement -> bindValue(':categoryID',$categoryID);

			$statement->execute();
			$list_product = $statement->fetchAll();
			$statement->closeCursor();
			foreach ($list_product as $key => $value) {
				$list_product = new view($value['productID'], $value['categoryID'], $value['categoryName'],$value['productName'], $value['price']);
			
				
				$result[] = $list_product;
			}
			return $result;
		
		}
		
	}
 ?>
