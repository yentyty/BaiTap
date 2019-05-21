<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Page Title</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
		<style type="text/css">
			body{
				width: 90%;
				margin: 0 auto;
			}
		</style>
	</head>
	<body>
		<table class="table table-hover">
			<h1>List All Car</h1>
			<thead>
				<tr>
					<th>car_reg_no</th>
					<th>category</th>
					<th>brand</th>
					<th>daily_rate</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($list_car as $key => $value): ?>
				<tr>
					<td><?php echo $value->getcar_reg_no(); ?></td>
					<td><?php echo $value->getcategory(); ?></td>
					<td><?php echo $value->getbrand(); ?></td>
					<td><?php echo $value->getdaily_rate(); ?></td>
					<td><a href="?action=viewdetails&car_reg_no=<?php echo $value -> getcar_reg_no(); ?>">ViewDetails</a></td>
					
				</tr>
				<?php endforeach ?>
			</tbody>

		</table>
		<a href="?action=Add_rental_records" class="btn btn-success">Add rental_records</a>


		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	</body>
</html>