<?php 
	include("../models/m_database.php");
	include('../models/m_course.php');
	include('../models/m_student.php');
	include('../models/m_enrollment.php');

	$action = filter_input(INPUT_POST, 'action');
	if (empty($action)) {
		$action = filter_input(INPUT_GET, 'action');
		if (empty($action)){
			$action = 'show_list_cources';
		}
	}
	switch ($action) {
		case 'show_list_cources':
			$list_cource = CourceDB::getallcource();
			include('../views/list_cource.php');
			break;
		case 'viewdetail':
			$courcesID = filter_input(INPUT_GET, 'courcesID');
			$list_view = CourceDB::view_cources($courcesID);
			include('../views/viewdetail.php');
			break;
		case 'viewstudent':
			$courcesID = filter_input(INPUT_GET, 'courcesID');
			$list_student = StudentDB::view_student($courcesID);
			include('../views/viewstudent.php');
			break;
		case 'return':
			$list_cource = CourceDB::getallcource();
			include('../views/list_cource.php');
			break;
		default:
			# code...
			break;
	}
?>