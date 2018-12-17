<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
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
		<div class="container">
      <div class="row">
        <?php       
          foreach ($listlaptop as $value) {
        ?>
        <form action="<?php echo(base_url())?>index.php/c_laptop/capnhat" method="POST" enctype="multipart/form-data" >
          <div class="form-group">
            <label></label>
            <input type="hidden" style="width: 500px;" type="text" class="form-control" placeholder="id" name="id" value="<?php echo($value['id']) ?>" >
          </div>

          <div class="form-group">
            <label>Hãng</label>
            <input style="width: 500px;" type="text" class="form-control"  placeholder="Hãng" name="hangsanxuat" value="<?php echo($value['hangsanxuat']) ?>">
          </div>

          <div class="form-group">
            <label>Tên sản phẩm</label>
            <input style="width: 500px;" type="text" class="form-control"  placeholder="Tên" name="ten" value="<?php echo($value['ten']) ?>">
          </div>
          <div class="form-group">
            <label>Số Lượng</label>
            <input style="width: 500px;" type="text" class="form-control"  placeholder="qty" name="qty" value="<?php echo($value['qty']) ?>">
          </div>
          <div class="form-group">
            <label>Giá thành</label>
            <input style="width: 500px;" type="text" class="form-control"  placeholder="Giá thành" name="gia" value="<?php echo($value['gia']) ?>">
          </div>

          <div class="form-group">
            <label>Hệ điều hành</label>
            <input style="width: 500px;" type="text" name="hedieuhanh" class="form-control" placeholder="Hệ điều hành" value="<?php echo($value['hedieuhanh']) ?>">


          <div class="form-group">
            <label>pin</label>
            <input style="width: 500px;" type="text" name="pin" class="form-control" placeholder="pin" value="<?php echo($value['pin']) ?>">


          <div class="form-group">
            <label>Khối lượng</label>
            <input style="width: 500px;" type="text" name="khoiluong" class="form-control" placeholder="Khối lượng" value="<?php echo($value['khoiluong']) ?>">


          <div class="form-group">
            <label>Kích Thước</label>
            <input style="width: 500px;" type="text" name="kichthuoc" class="form-control" placeholder="Kích Thước" value="<?php echo($value['kichthuoc']) ?>">


          <div class="form-group">
            <label>CPU</label>
            <input style="width: 500px;" type="text" name="CPU" class="form-control" placeholder="CPU" value="<?php echo($value['CPU']) ?>">

            <div class="form-group">
            <label>RAM</label>
            <input style="width: 500px;" type="text" name="RAM" class="form-control" placeholder="RAM" value="<?php echo($value['RAM']) ?>">

            <div class="form-group">
            <label>Màn hình</label>
            <input style="width: 500px;" type="text" name="manhinh" class="form-control" placeholder="Màn hình" value="<?php echo($value['manhinh']) ?>">

            <div class="form-group">
            <label>Chip đồ họa</label>
            <input style="width: 500px;" type="text" name="chipdohoa" class="form-control" placeholder="Chip đồ họa" value="<?php echo($value['chipdohoa']) ?>">

            <div class="form-group">
            <label>SSD</label>
            <input style="width: 500px;" type="text" name="SSD" class="form-control" placeholder="SSD" value="<?php echo($value['SSD']) ?>">

            <div class="form-group">
            <label>HDD</label>
            <input style="width: 500px;" type="text" name="HDD" class="form-control" placeholder="HDD" value="<?php echo($value['HDD']) ?>">

            <div class="form-group">
            <label>Keyboard</label>
            <input style="width: 500px;" type="text" name="Keyboard" class="form-control" placeholder="Keyboard" value="<?php echo($value['Keyboard']) ?>">

            <div class="form-group">
            <label>Cổng Kết Nối</label>
            <input style="width: 500px;" type="text" name="congketnoi" class="form-control" placeholder="Cổng Kết Nối" value="<?php echo($value['congketnoi']) ?>">

            <div class="form-group">
            <label>Kết nối không dây</label>
            <input style="width: 500px;" type="text" name="ketnoikoday" class="form-control" placeholder="Kết nối dây" value="<?php echo($value['ketnoikoday']) ?>">

            <div class="form-group">
            <label>số khe cắm ram</label>
            <input style="width: 500px;" type="text" name="sokhecam" class="form-control" placeholder="số khe cắm ram" value="<?php echo($value['sokhecam']) ?>">

            <div class="form-group">
            <label>Webcam</label>
            <input style="width: 500px;" type="text" name="webcam" class="form-control" placeholder="Webcam" value="<?php echo($value['webcam']) ?>">

            <div class="form-group col-md-12">
         <input type="file"
                name="avatar"

                value="<?php echo(base_url()) ?>uploads/<?php echo($value['avatar']); ?>" />
         </div>

          <button type="submit" class="btn btn-success">Cập nhật</button>
        </form>
        <?php 
      } ?>
      </div>
  </div>

</body>
</html>