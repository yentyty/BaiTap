<?php 
	include("../models/m_database.php");
	include('../models/m_car.php');
	include('../models/m_customers.php');
	include('../models/m_rental_records.php');

	$action = filter_input(INPUT_POST, 'action');
	if (empty($action)) {
		$action = filter_input(INPUT_GET, 'action');
		if (empty($action)){
			$action = 'show_list_car';
		}
	}
	switch ($action) {
		case 'show_list_car':
			$list_car = carDB::getalcar();
			include('../views/list_car.php');
			break;
		case 'viewdetails':
			$car_reg_no = filter_input(INPUT_GET, 'car_reg_no');
			$list_car = carDB::viewdetail($car_reg_no);
			include('../views/viewdetail.php');
			break;
		case 'return':
			$list_car = carDB::getalcar();
			include('../views/list_car.php');
			break;
		case 'Add_rental_records':
			$list_customer = CustomersDB::getalcustomers();
			$list_car = carDB::getalcar();
			include('../views/add_rental_records.php');
			break;
		case 'save_rental':
			$car_reg_no = filter_input(INPUT_POST, 'car_reg_no');
			$customer_id = filter_input(INPUT_POST, 'customer_id');
			$start_date = filter_input(INPUT_POST, 'start_date');
			$end_date = filter_input(INPUT_POST, 'end_date');
			$lastUpdated = filter_input(INPUT_POST, 'lastUpdated');
			$rental_records = Rental_recordDB::add_rental( $car_reg_no,  $customer_id,  $start_date, $end_date, $lastUpdated);
			$list_car = carDB::getalcar();
			include('../views/list_car.php');
			break;
		default:
			# code...
			break;
	}
 ?>