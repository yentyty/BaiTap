<?php 
	/**
	 * 
	 */
	class Database
	{
		private static $dsn = 'mysql:host=localhost;dbname=car_rental_db';
		private static $username = 'root';
		private static $password = '';
		private static $db;
		private static $option = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8");
		private function __construct(){}

		public static function getDB(){
			if (!isset(self::$db)) {
				try{
					self::$db = new PDO( self:: $dsn, self::$username, self::$password, self::$option);
				}
				catch(PDOException $e){
					$error_message = $e->getMessage();
					echo "<p>Error connecting to database: $error_message</p>";
					exit();
				}
			}
			return self::$db;
		}
	
	}
 ?>