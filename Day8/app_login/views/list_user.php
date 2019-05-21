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
				<legend>Search User</legend>
				<input type="search" name="search_value" id="input" class="form-control" value=""  title=""><br>
		
				<button type="submit" class="btn btn-primary" name="action" value="search">Search</button>
			</form><br><br>
			
			<a href="?action=adduser" class="btn btn-success">Add User</a>
			<thead>
				<tr>
					<th>UserID</th>
					<th>Username</th>
					<th>Password</th>
					<th>Email</th>
					<th>Phone</th>
					<th>Avatar</th>
					<th colspan="2">Action</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($users as $key => $value): ?>
				<tr>
					<td><?php echo $value->getuserid(); ?></td>
					<td><?php echo $value->getusername(); ?></td>
					<td><?php echo $value->getpassword(); ?></td>
					<td><?php echo $value->getemail(); ?></td>
					<td><?php echo $value->getphone(); ?></td>
					<td><?php echo $value->getavatar(); ?></td>
					<td><a href="?action=edit_user&userid=<?php echo $value -> getuserid() ?>">Edit</a></td>
					<td><a href="?action=delete_user&userid=<?php echo $value -> getuserid() ?>">Delete</a></td>
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