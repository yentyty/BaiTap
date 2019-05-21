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
				width: 70%;
				margin: 1em auto;
			}
		</style>
	</head>
	<body>
		<form action="" method="POST" role="form" enctype="multipart/form-data">
			<legend>Add rental records</legend>
			<label for="">car_reg_no</label>
			<select name="car_reg_no" id="inputIdloaitin" class="form-control" required="required">
				<?php foreach ($list_car as $key => $value): ?>
					<option value="<?php echo $value->getcar_reg_no(); ?>"><?php echo $value->getcar_reg_no(); ?></option>
				<?php endforeach ?>
			</select><br>
			<label for="">customer_id</label>
			<select name="customer_id" id="inputIdloaitin" class="form-control" required="required">
				<?php foreach ($list_customer as $key => $value): ?>
					<option value="<?php echo $value->getcustomer_id(); ?>"><?php echo $value->getcustomer_id(); ?></option>
				<?php endforeach ?>
			</select>
			<div class="form-group">
				<label for="">start_date</label>
				<input type="date" class="form-control" name="start_date" id="" placeholder="User Name">
			</div>
			<div class="form-group">
				<label for="">end_date</label>
				<input type="date" class="form-control" name="end_date" id="" placeholder="User Name">
			</div>
			<div class="form-group">
				<label for="">lastUpdated</label>
				<input type="text" class="form-control" name="lastUpdated" id="" placeholder="User Name">
			</div>
			
			
			<br>
			<button type="submit" class="btn btn-primary" name="action" value="save_rental">Save</button>


		</form>

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	</body>
</html>