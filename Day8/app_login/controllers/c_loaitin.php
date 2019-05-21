<?php 
	include('../model/m_database.php');
	include('../model/m_loaitin.php');
	$action = filter_input(INPUT_POST, 'action');
	if (empty($action)) {
		$action = filter_input(INPUT_GET, 'action');
		if (empty($action)){
			$action = 'show_list_loaitin';
		}
	}
	switch ($action) {
		case 'show_list_loaitin':
			$list_loaitin = loaitinDB::getAlloaitin();
			include('../views/list_loaitin.php');
			break;
		case 'add_loaitin':
			include('../views/add_loaitin.php');
			break;
		case 'save_loaitin':
			$idloaitin = filter_input(INPUT_POST, 'idloaitin');
			$theloai = filter_input(INPUT_POST, 'theloai');
			$mota = filter_input(INPUT_POST, 'mota');	
			loaitinDB::add_loaitin( $idloaitin, $theloai, $mota);
			$list_loaitin = loaitinDB::getAlloaitin();
			include('../views/list_loaitin.php');
			break;
		default:
			# code...
			break;
	}
 ?>