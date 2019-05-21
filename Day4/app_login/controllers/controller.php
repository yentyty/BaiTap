<?php 
	include("../model/model_database.php");
	$action = filter_input(INPUT_POST, 'action');
	if (empty($action)) {
		$action = filter_input(INPUT_GET, 'action');
		if (empty($action)){
			$action = 'show_list_user';
		}
	}
	switch ($action) {
		case 'show_list_user':
			$users = getalluser();
			include('../views/login.php');
			break;
		case 'adduser':
			include('../views/add_user.php');
			break;
		case 'save_user':
			$username = filter_input(INPUT_POST, 'username');
			$password = filter_input(INPUT_POST, 'password');
			$email = filter_input(INPUT_POST, 'email');
			$phone = filter_input(INPUT_POST, 'phone');
			$avatar = filter_input(INPUT_POST,'avatar');
			adduser($username, $password, $email, $phone, $avatar);
			$users = getalluser();
			include('../views/list_user.php');
			break;
		case 'check_login':
			$username = filter_input(INPUT_POST, 'username');
			$password = filter_input(INPUT_POST, 'password');
			if (checkuser($username, $password)) {
				$users = getalluser();
				include('../views/list_user.php');
			}
			else{
				include('../views/login.php');
				echo "<br>Username or password invalid";
			}
			break;
		default:
			# code...
			break;
	}
 ?>