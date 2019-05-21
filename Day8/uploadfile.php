<?php 
	if (isset($_FILES['file_anh'])) {
		$tmp_name = $_FILES['file_anh']['tmp_name'];
		$path = getcwd().DIRECTORY_SEPARATOR.'images';
		$name = $path.DIRECTORY_SEPARATOR.$_FILES['file_anh']['name'];
		$success = move_uploaded_file($tmp_name, $name);
		if ($success) {
			$Upload_message = $name.'has been uploaded';
			echo $Upload_message;
		}

	}
	
 ?>
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
				margin: 0 auto;
			}
		</style>
	</head>
	<body>
		<form action="" method="POST" role="form" enctype="multipart/form-data">
			<legend>Upload file to webserver</legend>
		
			<div class="form-group">
				<label for="">Chọn file:</label>
				<input type="file" name="file_anh" class="form-control" id="" placeholder="Input field">
			</div> 	
		
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	</body>
</html>