<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<style type="text/css" >
	body{
		background-color: lightgray;
	}
</style>
<body>
	<div class="container text-center">
		<div class="row">
			<div class="col-sm-12">
			<div class="alert " >
					<h1 class="card-info text-sm-center">Quản Lý Sản Phẩm</h1>
						<nav class="navbar navbar-expand-lg navbar-dark bg-dark">					
							
				<ul class="nav navbar-nav">
					<a class="navbar-brand" href="<?php echo(base_url()) ?>index.php/c_laptop">Trang chủ</a>
						<li class="nav-item active">
					<a class="nav-link" href="<?php echo(base_url()) ?>index.php/c_laptop/themview">Thêm</a>
					</li>
				</ul>
				<form action="<?php echo(base_url()) ?>index.php/c_laptop/timkiemview" class="form-inline navbar-form pull-right" method="POST">
					<input class="form-control" name="ten" type="text" placeholder="Thông tin tìm kiếm">
					<input  class="btn btn-success-outline" type="submit" value="Tìm Kiếm">
				</form>

						</nav>
				</div>
			<table class="table table-hover">
				<thead>
					<tr>
						<th scope="col">Hãng sản Xuất</th>
						<th scope="col">Tên Sản Phẩm</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($listlaptop as $value) {
			
 					?>
					<tr>
						<td scope="col"><?php echo($value['hangsanxuat']) ?></td>
						<td scope="col"><?php echo($value['ten']) ?></td>
						<td><a href="<?php echo(base_url()) ?>index.php/c_laptop/xoa/<?php echo($value['id'])?>" class="btn btn-warning">Xóa</a></td>
						<td><a href="<?php echo(base_url()) ?>index.php/c_laptop/capnhatview/<?php echo($value['id']); ?>" class="btn btn-primary">Cập nhật</a></td>
						<td><a href="<?php echo(base_url()) ?>index.php/c_laptop/fullview/<?php echo($value['id']); ?>" class="btn btn-primary">Chi tiết</a></td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
			</div>
		</div>
	</div>
</body>
</html>