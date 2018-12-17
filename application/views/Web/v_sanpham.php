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
          <ul class="navbar-nav ml-auto" style="margin-top: 12.5px;">
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

          <?php if (isset($_SESSION['admin_login'])) :
                  $login = $_SESSION['admin_login'];
           ?>
           <li class="nav-item">
                <a class="nav-link" href="<?php echo(base_url()) ?>index.php/c_laptop/giohang">Giỏ hàng</a>
              </li>
           <li class="nav-item">
                <p class="navbar-text" style="color: #fff;">Hi <?php echo $login['username']; ?></p>
              </li>
              <li class="nav-item">
              <a class="nav-link" href="<?php echo(base_url()) ?>index.php/c_laptop/dangxuat">Đăng xuất</a>
            </li>
              <?php else : ?>
          <li class="nav-item">
              <a class="nav-link" href="<?php echo(base_url()) ?>index.php/c_laptop/themTaiKhoanview">Đăng ký</a>
            </li>
            <li class="nav-item" >
              <a class="nav-link" href="<?php echo(base_url()) ?>index.php/c_laptop/dangnhap">Đăng nhập</a>
            </li>
            <?php endif; ?>
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
      	<?php foreach ($listlaptop as $value) {
      		
      	 ?>

        <div class="col-lg-4">
          <div class="card mt-4">
            
            <img class="card-img-top img-fluid" style="width:70rem; height:30rem " src="<?php echo(base_url()) ?><?php echo($value['avatar']); ?>" alt="" >
            <div class="card-body">
              <h3 class="card-title"><?php echo($value['ten']) ?></h3>
              <h2><?php echo($value['gia']) ?></h2>
              
              <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</span>
              4.0 stars
            </div>
          </div>
        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-8">

          
          <!-- /.card -->

          <div class="card card-outline-secondary my-4">
            <div class="card-header">
               Reviews
            </div>
            <div class="card-body">
              <p>Hệ điều hành: <?php echo($value['hedieuhanh']) ?></p>
              
              <hr>
              <p>Pin: <?php echo($value['pin']) ?></p>
              <hr>
              <p>Khối Lượng: <?php echo($value['khoiluong']) ?></p>
              <hr>
              <p>Kích Thước: <?php echo($value['kichthuoc']) ?></p>
              <hr>
              <p>CPU: <?php echo($value['CPU']) ?></p>
              <hr>
              <p>RAM: <?php echo($value['RAM']) ?></p>
              <hr>
              <p>Màn hình: <?php echo($value['manhinh']) ?></p>
              <hr>
              <p>Chip đồ họa: <?php echo($value['chipdohoa']) ?></p>
              <hr>
              <p>SSD: <?php echo($value['SSD']) ?></p>
              <hr>
              <p>HDD: <?php echo($value['HDD']) ?></p>
              <hr>
              <p>Keyboard: <?php echo($value['Keyboard']) ?></p>
              <hr>
              <p>Cổng kết nối: <?php echo($value['congketnoi']) ?></p>
              <hr>
              <p>Kết nối không dây: <?php echo($value['ketnoikoday']) ?></p>
              <hr>
              <p>Số khe cắm Ram: <?php echo($value['sokhecam']) ?></p>
              <hr>
              <p>Webcam: <?php echo($value['webcam']) ?></p>
              <hr>
              <a href="<?php echo(base_url()) ?>index.php/c_laptop/themgiohang" class="btn btn-success">ADD CART</a>
            </div>
          </div>
          <!-- /.card -->

        </div>
        <!-- /.col-lg-9 -->

		<?php } ?>

      </div>

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




















