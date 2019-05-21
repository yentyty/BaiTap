<?php 
	include("../models/m_database.php");
	include('../models/m_order.php');
	include('../models/m_product.php');
	include('../models/m_categorie.php');

	$action = filter_input(INPUT_POST, 'action');
	if (empty($action)) {
		$action = filter_input(INPUT_GET, 'action');
		if (empty($action)){
			$action = 'show_list_shop';
		}
	}
	switch ($action) {
		case 'show_list_shop':
			$list_category = categorieDB::getallcategory();
			include('../views/list_category.php');
			break;

		case 'viewdetail':
			$categoryID = filter_input(INPUT_GET, 'categoryID');
			$list_product = categorieDB::view_product($categoryID);
			include('../views/viewdetail.php');
			break;
		case 'return':
			$list_category = categorieDB::getallcategory();
			include('../views/list_category.php');
			break;
		// case 'Add_rental_records':
		// 	$list_customer = CustomersDB::getalcustomers();
		// 	$list_car = carDB::getalcar();
		// 	include('../views/add_rental_records.php');
		// 	break;
		// case 'save_rental':
		// 	$car_reg_no = filter_input(INPUT_POST, 'car_reg_no');
		// 	$customer_id = filter_input(INPUT_POST, 'customer_id');
		// 	$start_date = filter_input(INPUT_POST, 'start_date');
		// 	$end_date = filter_input(INPUT_POST, 'end_date');
		// 	$lastUpdated = filter_input(INPUT_POST, 'lastUpdated');
		// 	$rental_records = Rental_recordDB::add_rental( $car_reg_no,  $customer_id,  $start_date, $end_date, $lastUpdated);
		// 	$list_car = carDB::getalcar();
		// 	include('../views/list_car.php');
		// 	break;
		default:
			# code...
			break;
	}
 ?>