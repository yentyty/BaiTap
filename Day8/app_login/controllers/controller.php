<?php 
	include("../model/m_database.php");
	include('../model/m_user.php');
	$action = filter_input(INPUT_POST, 'action');
	if (empty($action)) {
		$action = filter_input(INPUT_GET, 'action');
		if (empty($action)){
			$action = 'show_list_user';
		}
	}
	switch ($action) {
		case 'show_list_user':
			$users = userDB::getalluser();
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
			userDB::adduser($username, $password, $email, $phone, $avatar);
			$users = userDB::getalluser();
			include('../views/list_user.php');
			break;
		case 'check_login':
			$username = filter_input(INPUT_POST, 'username');
			$password = filter_input(INPUT_POST, 'password');
			if (userDB::checkuser($username, $password)) {
				$users = userDB::getalluser();
				include('../views/list_user.php');
			}
			else{
				include('../views/login.php');
				echo "<br>Username or password invalid";
			}
			break;
		case 'edit_user':
			$userid = filter_input(INPUT_GET, 'userid');
			$user = userDB::getuserbyid($userid);
			include('../views/edit_user.php');
			break;
		case 'update_user':
			$userid = filter_input(INPUT_GET, 'userid');
			$username = filter_input(INPUT_POST, 'username');
			$password = filter_input(INPUT_POST, 'password');
			$email = filter_input(INPUT_POST, 'email');
			$phone = filter_input(INPUT_POST, 'phone');
			$avatar = filter_input(INPUT_POST,'avatar');
			userDB::updateuser($userid, $username, $password, $email, $phone, $avatar);
			$users = userDB::getalluser();
			include('../views/list_user.php');
			break;
		case 'delete_user':
			$userid = filter_input(INPUT_GET, 'userid');
			userDB::delete($userid);
			$users = userDB::getalluser();
			include('../views/list_user.php');
			break;
		case 'search':
			$search_value = addslashes(filter_input(INPUT_POST, 'search_value'));
			if (!empty($search_value)) {
				$users = userDB::search_user($search_value);
			}
			else{
				$users = userDB::getalluser();
			}
			include('../views/list_user.php');
			break;
		default:
			# code...
			break;
	}
 ?>