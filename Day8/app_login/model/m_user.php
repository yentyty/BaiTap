<?php 
	/**
	 * 
	 */
	class user{
		private $userID, $username, $password, $email, $phone, $avatar;
		public function __construct($username, $password, $email, $phone){
			$this -> username = $username;
			$this -> password = $password;
			$this -> email = $email;
			$this -> phone = $phone;
		}

		public function getuserid(){
			return $this -> userID;
		}
		public function getusername(){
			return $this -> username;
		}
		public function getpassword(){
			return $this -> password;
		}
		public function getemail(){
			return $this -> email;
		}
		public function getphone(){
			return $this -> phone;
		}
		public function getavatar(){
			return $this -> avatar;
		}

		public function setuserid($userID){
			$this -> userID = $userID;
		}
		public function setusername($username){
			$this -> username = $username;
		}
		public function setpassword($password){
			$this -> password = $password;
		}
		public function setemail($email){
			$this -> email = $email;
		}
		public function setphone($phone){
			$this -> phone = $phone;
		}
		public function setavatar($avatar){
			$this -> avatar = $avatar;
		}
	}

	class userDB{
		public static function getAllUser(){
			$db = Database::getDB();
			$query = "SELECT * FROM usertable";
			$statement=$db->prepare($query);
			$statement->execute();
			$users = $statement->fetchAll();
			$statement->closeCursor();
			foreach ($users as $key => $value) {
				$user = new user($value['username'], $value['password'],$value['email'], $value['phone']);
				$user -> setuserid($value['userID']);
				$user -> setavatar($value['avatar']);
				$result[] = $user;
			}
			return $result;
		}

		public static function adduser($username, $password, $email, $phone, $avatar){
			$db = Database::getDB();
			try{
			$query = "INSERT INTO usertable(username, password, email, phone, avatar)
			VALUES (?,?,?,?,?)";
			$statement = $db->prepare($query);
			$statement -> bindParam(1,$username);
			$statement -> bindParam(2,$password);
			$statement -> bindParam(3,$email);
			$statement -> bindParam(4,$phone);
			$statement -> bindParam(5,$avatar);
			$statement -> execute();
			$statement->closeCursor();
			} catch(PDOException $e){
				$error_message = $e->getMessage();
				echo "<p>Error connecting to database: $error_message</p>";
				exit();
			}
		}
		public static function checkuser($username, $password){
			$users = self::getalluser();
			$result = false;
			foreach ($users as $key => $value) {
				if ($username == $value -> getusername() && $password == $value -> getpassword()) {
					$result = true;
					break;			
				}
			}
			return $result;
		} 
		public static function getuserbyid($userid){
			 $db = Database::getDB();
			$query ="SELECT * FROM usertable WHERE userID = ?";
			$statement = $db->prepare($query);
			$statement -> bindParam(1,$userid);
			$statement->execute();
			$user = $statement->fetch();
			$statement->closeCursor();
			$result = new user($user['username'], $user['password'], $user['email'], $user['phone']);
			$result -> setuserid($user['userID']);
			$result -> setavatar($user['avatar']);
			
			return $result;
		}
		public static function updateuser($userid, $username, $password, $email, $phone, $avatar){
			 $db = Database::getDB();
			$query = "UPDATE usertable SET username = :username, password = :password, email = :email, phone = :phone, avatar = :avatar WHERE userID = :userid ";
			$statement = $db -> prepare($query);
			$statement -> bindValue(':userid',$userid);
			$statement -> bindValue(':username',$username);
			$statement -> bindValue(':password',$password);
			$statement -> bindValue(':email',$email);
			$statement -> bindValue(':phone',$phone);
			$statement -> bindValue(':avatar',$avatar);
			$statement -> execute();
			$statement -> closeCursor();

		}
		public static function delete($userid){
			 $db = Database::getDB();
			$query = "DELETE FROM usertable WHERE userID = :userid";
			$statement = $db->prepare($query);
			$statement -> bindValue(':userid',$userid);
			$statement -> execute();
			$statement -> closeCursor();
		}
		public static function search_user($search_value){
			 $db = Database::getDB();
			// $query = "SELECT * FROM usertable WHERE (userID = :search_value) OR (username LIKE :search_value) OR (email LIKE :search_value) OR (phone LIKE :search_value) ";
			$query = "SELECT * FROM usertable WHERE (userID = '$search_value') OR (username LIKE '%$search_value%') OR (email LIKE '$search_value') OR (phone LIKE '$search_value') ";
			$statement = $db -> prepare($query);
			// $statement -> bindValue(':search_value',$search_value);
			$statement -> execute();
			$users = $statement -> fetchAll();
			$statement -> closeCursor();
			$result = array();
			foreach ($users as $key => $value) {
				$user = new user($value['username'], $value['password'],$value['email'], $value['phone']);
				$user -> setuserid($value['userID']);
				$user -> setavatar($value['avatar']);
				$result[] = $user;
			}
			return $result;
		}
	}
 ?>