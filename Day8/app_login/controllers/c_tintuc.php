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
		case 'add_tintuc':
			$loaitin = loaitinDB::getalloaitin();
			$userID = tintucDB::getAlltintuc();
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
			// upload hình

			if (isset($_FILES['hinh'])) {
				$tmp_name = $_FILES['hinh']['tmp_name'];
				$path = getcwd().DIRECTORY_SEPARATOR.'images';
				$name = $path.DIRECTORY_SEPARATOR.$_FILES['hinh']['name'];
				$success = move_uploaded_file($tmp_name, $name);
				// if ($success) {
				// 	$Upload_message = $name.'has been uploaded';
				// 	echo $Upload_message;
				// }
			}
			include('../views/list_tintuc.php');
			break;
		
		case 'edit_tintuc':
			$idtintuc = filter_input(INPUT_GET, 'idtintuc');
			$loaitin = loaitinDB::getalloaitin();
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