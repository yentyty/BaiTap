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
		<form action="" method="POST" role="form">
			<legend>Add Loại Tin</legend>
		
			<!-- <div class="form-group">
				<label for="">User ID</label>
				<input type="text" class="form-control" name="userid" id="" placeholder="User ID">
			</div> -->
			<div class="form-group">
				<label for="">Thể Loại</label>
				<input type="text" class="form-control" name="theloai" id="" placeholder="User Name" value="<?php echo $loaitin['theloai'] ?>">
			</div>
			<div class="form-group">
				<label for="">Mô Tả</label>
				<input type="text" class="form-control" name="mota" id="" placeholder="Mô tả" value="<?php echo $loaitin['mota'] ?>">
			</div>
			<div class="form-group">
				<label for="">Ngày Tạo</label>
				<input type="text" class="form-control" name="ngaytao" id="" placeholder="Ngày Tạo" value="<?php echo $loaitin['ngaytao'] ?>">
			</div>
			
			<button type="submit" class="btn btn-primary" name="action" value="update_loaitin">Update</button>

		</form>

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	</body>
</html>