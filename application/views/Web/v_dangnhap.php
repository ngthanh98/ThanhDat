<?php 
  $conn = mysqli_connect('localhost','root','','laptop');
  mysqli_set_charset($conn,'utf8');
  if (isset($_POST['login'])) {
    $User = $_POST['username'];
    $Pass = $_POST['password'];
    $query_kt = mysqli_query($conn,"SELECT * FROM dangnhap WHERE username = '$User' AND pass = '$Pass'");
    if(mysqli_num_rows($query_kt) == 1){
      $u = mysqli_fetch_assoc($qer); // duyệt dữ liệu  => mảng
      $_SESSION['admin_login'] = [
        'username' => $_POST['username'],
        'password' => $_POST['password']
      ]; // lưu mảng thông tin vào session
      header('location: webview');
    }else{
      echo '<div class="alert">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong>Sai tài khoản hoặc mật khẩu!!!</strong>
  </div>'; 
    }
  }
 ?>

 

<!DOCTYPE html>
<html lang="en">

  <head>
  	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SHOP LAPTOP</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo(base_url()) ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo(base_url()) ?>css/shop-homepage.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="<?php echo(base_url()) ?>index.php/c_laptop/webview">Thanh Laptop</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo(base_url()) ?>index.php/c_laptop/webview">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <div class="dropdown">
  <a class="nav-link" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Sản phẩm
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="<?php echo(base_url()) ?>index.php/c_laptop/webhangsanxuatview">Laptop MSI</a>
    <a class="dropdown-item" href="#">Laptop Acer</a>
    <a class="dropdown-item" href="#">Laptop Dell</a>
  </div>
</div>

          <li class="nav-item">
              <a class="nav-link" href="<?php echo(base_url()) ?>index.php/c_laptop/themTaiKhoanview">Đăng ký</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo(base_url()) ?>index.php/c_laptop/dangnhap">Đăng nhập</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="<?php echo(base_url()) ?>index.php/c_laptop/giohang">Giỏ hàng</a>
            </li>
            
          </ul>
          <form action="<?php echo(base_url()) ?>index.php/c_laptop/timkiemwebview" class="form-inline navbar-form pull-right" method="POST">
          <input class="form-control" name="ten" type="text" placeholder="Thông tin tìm kiếm">
          <input  class="btn btn-success-outline" type="submit" value="Tìm Kiếm">
        </form>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        
        <!-- /.col-lg-3 -->

        <div class="col-lg-12">

          

        <div class="header-bottom">
				<div class="header-right w3agile">
					
					<div class="header-left-bottom agileinfo">
						
					 <form action="#" method="post">
            <div class="form-group">
              <label for="username">Tên tài khoản</label>
              <input type="text" class="form-control" placeholder="Tài khoản"  value="" name="username"/>
            </div>
						<div class="form-group">
              <label for="password">Mật khẩu</label>
              <input type="password" class="form-control" placeholder="Mật khẩu"  value="" name="password"/>      
            </div>
						
						
					   
						<input type="submit" value="Đăng nhập" name="login">
					</form>	
					
						
				</div>
				</div>
			  
			</div>
          <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>




