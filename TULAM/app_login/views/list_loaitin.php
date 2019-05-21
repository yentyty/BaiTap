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
			.table{
				width: 90%;
				margin: 0 auto;
			}
		</style>
	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<!-- <a class="navbar-brand" href="#">Navbar</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span> -->
		<!-- </button> -->

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Link</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Action
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="?action=show_user">List User</a>
						<a class="dropdown-item" href="?action=show_loaitin">List Loại Tin</a>
						<a class="dropdown-item" href="#">List Tin Tức</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Something else here</a>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link disabled" href="#">Disabled</a>
				</li>
			</ul>
			<form class="form-inline my-2 my-lg-0" action="" method="POST" >
				<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search_loaitin">
				<button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="action" value="search_loaitin">Search</button>
			</form>
		</div>
		</nav>	
		<table class="table table-hover">	
			
			<!-- <form action="" method="POST" role="form">
				<legend>Search User</legend>
				<input type="search" name="search_value" id="input" class="form-control" value=""  title=""><br>
		
				<button type="submit" class="btn btn-primary" name="action" value="search">Search</button>
			</form><br><br>
 -->
			
			<thead>
				<tr>
					<th>Id Loại Tin</th>
					<th>Thể Loại</th>
					<th>Mô Tả</th>
					<th>Ngày Tạo</th>
					
					<th colspan="2">Action</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($loaitin as $key => $value): ?>
					
				
				<tr>
					<td><?php echo $value['idloaitin']; ?></td>
					<td><?php echo $value['theloai']; ?></td>
					<td><?php echo $value['mota']; ?></td>
					<td><?php echo $value['ngaytao']; ?></td>
					
					<td><a href="?action=edit_loaitin&idloaitin=<?php echo $value['idloaitin'] ?>">Edit</a></td>
					<td><a href="?action=delete_loaitin&idloaitin=<?php echo $value['idloaitin'] ?>">Delete</a></td>
				</tr>
				<?php endforeach ?>
			</tbody>
		</table>
		<a href="?action=add_loaitin" class="btn btn-success">Add Loại Tin</a>
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	</body>
</html>