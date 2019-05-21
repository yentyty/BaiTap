<?php 
	$dsn = 'mysql:host=localhost;dbname=userphp27';
	$username='root';
	$password='';
	$options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8");
	try{
		$db = new PDO($dsn, $username, $password, $options);
	}
	catch(PDOException $e){
		$error_message = $e->getMessage();
		echo "<p>Error connecting to database: $error_message</p>";
		exit();
	}
	function getalluser(){
		global $db;
		try{
			$query = "SELECT * FROM usertable";
			$statement=$db->prepare($query);
			$statement->execute();
			$users = $statement->fetchAll();
			$statement->closeCursor();
			return $users;
		} catch(PDOException $e){
			$error_message = $e->getMessage();
			echo "<p>Error connecting to database: $error_message</p>";
			exit();
		}
	}
	function adduser($username, $password, $email, $phone, $avatar){
		global $db;
		try{
			$query = "INSERT INTO usertable(username, password, email, phone, avatar)
			VALUES (:username, :password, :email, :phone, :avatar)";
			$statement = $db->prepare($query);
			$statement -> bindValue(':username',$username);
			$statement -> bindValue(':password',$password);
			$statement -> bindValue(':email',$email);
			$statement -> bindValue(':phone',$phone);
			$statement -> bindValue(':avatar',$avatar);
			$statement -> execute();
			$statement->closeCursor();
		} catch(PDOException $e){
			$error_message = $e->getMessage();
			echo "<p>Error connecting to database: $error_message</p>";
			exit();
		}
	}
	function checkuser($username, $password){
		$users = getalluser();
		$result = false;
		foreach ($users as $key => $value) {
			if ($username == $value['username'] && $password == $value['password']) {
				$result = true;
				break;			
			}
		}
		return $result;
	}
 ?>