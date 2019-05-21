<?php 
	include("../model/m_database.php");
	include('../model/m_user.php');
	include('../model/m_tintuc.php');
	include('../model/m_loaitin.php');
	$action = filter_input(INPUT_POST, 'action');
	if (empty($action)) {
		$action = filter_input(INPUT_GET, 'action');
		if (empty($action)){
			$action = 'show_list_tintuc';
		}
	}
	switch ($action) {
		case 'show_list_tintuc':
			$list_tintuc = tintucDB::getAlltintuc();
			include('../views/list_tintuc.php');
			break;
		case 'addtintuc':
			$loaitin = loaitinDB::getloaitin();
			include('../views/add_tintuc.php');
			break;
		case 'save_tintuc':
			$idloaitin = filter_input(INPUT_POST, 'idloaitin');
			$tieude = filter_input(INPUT_POST, 'tieude');
			$tomtat = filter_input(INPUT_POST, 'tomtat');
			$noidung = filter_input(INPUT_POST, 'noidung');
			$hinh = filter_input(INPUT_POST,'hinh');
			$userid = filter_input(INPUT_POST, 'userid');
			tintucDB::add_tintuc( $idloaitin, $tieude, $tomtat, $noidung, $hinh,$userid);
			$list_tintuc = tintucDB::getAlltintuc();
			include('../views/list_tintuc.php');
			break;
		// case 'check_login':
		// 	$username = filter_input(INPUT_POST, 'username');
		// 	$password = filter_input(INPUT_POST, 'password');
		// 	if (userDB::checkuser($username, $password)) {
		// 		$users = userDB::getalluser();
		// 		include('../views/list_user.php');
		// 	}
		// 	else{
		// 		include('../views/login.php');
		// 		echo "<br>Username or password invalid";
		// 	}
		// 	break;
		case 'edit_tintuc':
			$idtintuc = filter_input(INPUT_GET, 'idtintuc');
			$loaitin = loaitinDB::getloaitin();
			$tintuc = tintucDB::gettintucbyid($idtintuc);
			include('../views/edit_tintuc.php');
			break;
		case 'update_tintuc':
			$idtintuc = filter_input(INPUT_GET, 'idtintuc');
			$idloaitin = filter_input(INPUT_POST, 'idloaitin');
			$tieude = filter_input(INPUT_POST, 'tieude');
			$tomtat = filter_input(INPUT_POST, 'tomtat');
			$noidung = filter_input(INPUT_POST, 'noidung');
			$hinh = filter_input(INPUT_POST,'hinh');
			$userid = filter_input(INPUT_POST, 'userid');
			tintucDB::updatetintuc( $idtintuc, $idloaitin, $tieude, $tomtat, $noidung, $hinh,$userid);
			$list_tintuc = tintucDB::getAlltintuc();
			include('../views/list_tintuc.php');
			break;
		case 'delete_tintuc':
			$idtintuc = filter_input(INPUT_GET, 'idtintuc');
			tintucDB::delete($idtintuc);
			$list_tintuc = tintucDB::getAlltintuc();
			include('../views/list_tintuc.php');
			break;
		case 'search':
			$search_value = addslashes(filter_input(INPUT_POST, 'search_value'));
			if (!empty($search_value)) {
				$list_tintuc = tintucDB::search_tintuc($search_value);
			}
			else{
				$list_tintuc = tintucDB::getAlltintuc();
			}
			include('../views/list_tintuc.php');
			break;
		default:
			# code...
			break;
	}
 ?>