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
		<form action="" method="POST" role="form" >
			
			<legend>Edit tin tức</legend>
			
			<select name="idloaitin" id="inputIdloaitin" class="form-control"  value="<?php echo $tintuc -> getidloaitin() ?>" >
				<?php foreach ($loaitin as $key => $value): ?>
					<option value="<?php echo $value->getidloaitin(); ?>"><?php echo $value->gettheloai(); ?></option>
				<?php endforeach ?>
			</select>

			<div class="form-group">
				<label for="">Tiêu đề tin</label>
				<input type="text" class="form-control" name="tieude" id="" placeholder="User Name" value="<?php echo $tintuc -> gettieude() ?>">
			</div>
			<div class="form-group">
				<label for="">Tóm tắt</label>
				<textarea name="tomtat" id="inputTomtat" class="form-control" rows="3" required="required" value=""><?php echo $tintuc -> gettomtat() ?></textarea>
			</div>
			<div class="form-group">
				<label for="">Nội dung</label>
				<textarea name="noidung" id="inputNoidung" class="form-control" rows="8" required="required" value=""><?php echo $tintuc -> getnoidung() ?></textarea>
			</div>
			<div class="form-group">
				<label for="">Hình</label>
				<input type="file" class="form-control" name="hinh" id="" placeholder="Phone" value="<?php echo $tintuc -> gethinh() ?>">
			</div>
			
			<input type="hidden"  name="userid" id="" placeholder="" value="<?php echo $tintuc -> getuserid(); ?>">
			
			<div class="form-group">
				<button type="submit" class="btn btn-primary" name="action" value="update_tintuc">Update Tin</button>
			</div>

		</form>

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	</body>
</html>