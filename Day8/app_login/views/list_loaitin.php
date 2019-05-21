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
			
			<form action="" method="POST" role="form">
				<legend>Search Loại Tin</legend>
				<input type="search" name="search_value" id="input" class="form-control" value=""  title=""><br>
		
				<button type="submit" class="btn btn-primary" name="action" value="search">Search</button>
			</form><a href="?action=add_loaitin" class="btn btn-success">Add Loại Tin</a>
			
			
			<thead>
				<tr>
				
					<th>Id loại tin</th>
					<th>Thể loại</th>
					<th>Mô tả</th>
					<th>Ngày tạo</th>
					<th colspan="2">Action</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($list_loaitin as $key => $value): ?>
				<tr>
					<td><?php echo $value->getidloaitin(); ?></td>
					<td><?php echo $value->gettheloai(); ?></td>
					<td><?php echo $value->getmota(); ?></td>
					<td><?php echo $value->getngaytao(); ?></td>
					<td><a href="?action=edit_loaitin&idloaitin=<?php echo $value->getidloaitin() ?>">Edit</a></td>
					<td><a href="?action=delete_loaitin&idloaitin=<?php echo $value->getidloaitin() ?>">Delete</a></td>
				</tr>
				<?php endforeach ?>
			</tbody>

		</table>


		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	</body>
</html>