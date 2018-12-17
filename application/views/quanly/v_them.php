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
			<div class="col-sm-12 push-3">
				<form action="<?php echo(base_url()) ?>index.php/c_laptop/them" method="POST" enctype="multipart/form-data">
  <h1>Thêm Sản Phẩm</h1>

  <div class="form-group col-md-6">
      <label for="inputEmail4">Hãng</label>
      <input type="Text" class="form-control" name="hangsanxuat" >
    </div>

<div class="form-group col-md-6">
      <label for="inputEmail4">Tên sản phẩm</label>
      <input type="Text" class="form-control" name="ten">
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Số Lượng</label>
      <input type="Text" class="form-control" name="qty">
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Giá thành</label>
      <input type="Text" class="form-control" name="gia">
    </div>

<div class="form-group col-md-6">
      <label for="inputEmail4">Hệ điều hành</label>
      <input type="Text" class="form-control" name="hedieuhanh">
    </div>

    <div class="form-group col-md-6">
      <label for="inputEmail4">pin</label>
      <input type="Text" class="form-control" name="pin">
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Khối lượng</label>
      <input type="Text" class="form-control" name="khoiluong">
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Kích Thước</label>
      <input type="Text" class="form-control" name="kichthuoc">
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">CPU</label>
      <input type="Text" class="form-control" name="CPU">
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">RAM</label>
      <input type="Text" class="form-control" name="RAM">
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Màn hình</label>
      <input type="Text" class="form-control" name="manhinh">
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Chip đồ họa</label>
      <input type="Text" class="form-control" name="chipdohoa">
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">SSD</label>
      <input type="Text" class="form-control" name="SSD">
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">HDD</label>
      <input type="Text" class="form-control" name="HDD">
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Keyboard</label>
      <input type="Text" class="form-control" name="Keyboard">
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Cổng Kết Nối</label>
      <input type="Text" class="form-control" name="congketnoi">
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Kết nối không dây</label>
      <input type="Text" class="form-control" name="ketnoikoday">
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">số khe cắm ram</label>
      <input type="Text" class="form-control" name="sokhecam">
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Webcam</label>
      <input type="Text" class="form-control" name="webcam">
    </div>
    <div class="form-group col-md-6">
      <label for="avatar">Ảnh</label>
      <input  type="file" class="form-control" id="avatar" name="avatar">
    </div>
      
  
  <button type="submit" name="BTN" class="btn btn-primary">Thêm</button>
  </form>
   			</div>
			
		</div>
	</div>
</body>
</html>