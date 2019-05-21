<?php 
	include("../model/model_database.php");
	include("../model/model_loaitin.php");
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
		case 'show_user':
			$users = getalluser();
			include('../views/list_user.php');
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
				include('../views/show.php');
			}
			else{
				include('../views/login.php');
				echo "<br>Username or password invalid";
			}
			break;
		case 'edit_user':
			$userid = filter_input(INPUT_GET, 'userid');
			$user = getuserbyid($userid);
			include('../views/edit_user.php');
			break;
		case 'update_user':
			$userid = filter_input(INPUT_GET, 'userid');
			$username = filter_input(INPUT_POST, 'username');
			$password = filter_input(INPUT_POST, 'password');
			$email = filter_input(INPUT_POST, 'email');
			$phone = filter_input(INPUT_POST, 'phone');
			$avatar = filter_input(INPUT_POST,'avatar');
			updateuser($userid, $username, $password, $email, $phone, $avatar);
			$users = getalluser();
			include('../views/list_user.php');
			break;
		case 'delete_user':
			$userid = filter_input(INPUT_GET, 'userid');
			delete($userid);
			$users = getalluser();
			include('../views/list_user.php');
			break;
		case 'search':
			$search_value = addslashes(filter_input(INPUT_POST, 'search_value'));
			if (!empty($search_value)) {
				$users = search_user($search_value);
			}
			else{
				$users = getalluser();
			}
			include('../views/list_user.php');
			break;
		case 'show_loaitin':
			$loaitin = getalloaitin();
			include('../views/list_loaitin.php');
			break;
		case 'add_loaitin':
			include('../views/add_loaitin.php');
			break;
		case 'save_loaitin':
			$theloai = filter_input(INPUT_POST, 'theloai');
			$mota = filter_input(INPUT_POST, 'mota');
			$ngaytao = filter_input(INPUT_POST, 'ngaytao');
			addloaitin($theloai, $mota, $ngaytao);
			$loaitin = getalloaitin();
			include('../views/list_loaitin.php');
			break;
		case 'edit_loaitin':
			$idloaitin = filter_input(INPUT_GET, 'idloaitin');
			$loaitin = getloaitinbyid($idloaitin);
			include('../views/edit_loaitin.php');
			break;
		case 'update_loaitin':
			$idloaitin = filter_input(INPUT_GET, 'idloaitin');
			$theloai = filter_input(INPUT_POST, 'theloai');
			$mota = filter_input(INPUT_POST, 'mota');
			$ngaytao = filter_input(INPUT_POST, 'ngaytao');
			updateloaitin($idloaitin, $theloai, $mota, $ngaytao);
			$loaitin = getalloaitin();
			include('../views/list_loaitin.php');
			break;
		case 'delete_loaitin':
			$idloaitin = filter_input(INPUT_GET, 'idloaitin');
			deleteloaitin($idloaitin);
			$loaitin = getalloaitin();
			include('../views/list_loaitin.php');
			break;
		case 'search_loaitin':
			$search_loaitin = addslashes(filter_input(INPUT_POST, 'search_loaitin'));
			if (!empty($search_loaitin)) {
				$loaitin = search_loaitin($search_loaitin);
			}
			else{
				$loaitin = getalloaitin();
			}
			include('../views/list_loaitin.php');
			break;
		
		default:
			# code...
			break;
	}
 ?>