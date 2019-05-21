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
 ?>