<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Page Edit</title>

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
			<legend>Edit User</legend>
			<input type="hidden" name="userid" value="<?php echo $user->getuserid() ?>">
			<div class="form-group">
				<label for="">User Name</label>
				<input type="text" class="form-control" name="username" id="" placeholder="User Name" value="<?php echo $user->getusername() ?>">
			</div>
			<div class="form-group">
				<label for="">Password</label>
				<input type="password" class="form-control" name="password" id="" placeholder="Password" value="<?php echo $user->getpassword()?>" >
			</div>
			<div class="form-group">
				<label for="">Email</label>
				<input type="email" class="form-control" name="email" id="" placeholder="Email" value="<?php echo $user->getemail() ?>">
			</div>
			<div class="form-group">
				<label for="">Phone</label>
				<input type="text" class="form-control" name="phone" id="" placeholder="Phone" value="<?php echo $user->getphone() ?>">
			</div>
			<div class="form-group">
				<label for="">Avatar</label>
				<input type="file" class="form-control" name="avatar" id="" placeholder="avatar" value="<?php echo $user->getavatar() ?>">
			</div>
			<button type="submit" class="btn btn-primary" name="action" value="update_user">Update</button>

		</form>

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	</body>
</html>