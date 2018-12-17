<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
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

						</nav>
				</div>
			</div>
		</div>
	</div>

	<div  class="container">
		<div class="row">
			<?php foreach ($listlaptop as $value) {
				
			 ?>
			 <div class="col-lg-3">

          <img class="card-img-top img-fluid" style="width: 18rem;" src="<?php echo(base_url()) ?><?php echo($value['avatar']); ?>" alt="" >
          <a  class="btn btn-primary" href="<?php echo(base_url()) ?>index.php/c_laptop">Back</a>

        </div>

			 <div class="col-sm-9">
			 <ul class="list-group">
			 	
			  <li class="list-group-item list-group-item-success">Hãng: <?php echo($value['hangsanxuat']) ?></li>
			  <li class="list-group-item">Tên sản phẩm: <?php echo($value['ten']) ?></li>
			  <li class="list-group-item">Số lượng: <?php echo($value['qty']) ?></li>
			  <li class="list-group-item">Giá thành: <?php echo($value['gia']) ?>VNĐ</li>
			  <li class="list-group-item">Hệ điều hành: <?php echo($value['hedieuhanh']) ?></li>
			  <li class="list-group-item">Pin: <?php echo($value['pin']) ?></li>
			  <li class="list-group-item">Khối Lượng: <?php echo($value['khoiluong']) ?></li>
			  <li class="list-group-item">Kích Thước: <?php echo($value['kichthuoc']) ?></li>
			  <li class="list-group-item">CPU: <?php echo($value['CPU']) ?></li>
			  <li class="list-group-item">RAM: "<?php echo($value['RAM']) ?></li>
			  <li class="list-group-item">Màn hình: <?php echo($value['manhinh']) ?></li>
			  <li class="list-group-item">Chip đồ họa: <?php echo($value['chipdohoa']) ?></li>
			  <li class="list-group-item">SSD: <?php echo($value['SSD']) ?></li>
			  <li class="list-group-item">HDD: <?php echo($value['HDD']) ?></li>
			  <li class="list-group-item">Keyboard: <?php echo($value['Keyboard']) ?></li>
			  <li class="list-group-item">Cổng kết nối: <?php echo($value['congketnoi']) ?></li>
			  <li class="list-group-item">Kết nối không dây: <?php echo($value['ketnoikoday']) ?></li>
			  <li class="list-group-item">Sô khe cắm Ram: <?php echo($value['sokhecam']) ?></li>
			  <li class="list-group-item">Webcam: <?php echo($value['webcam']) ?></li>
			  

			</ul>
</div>
<?php } ?>
		</div>
	</div>
</body>
</html>