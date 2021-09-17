<?php
    session_start();
    if($_SESSION['level']==1){
    ?>
<!DOCTYPE html>
<html>

<head>
  <?php
  require_once("connect.php");
  ?>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Trang Quản Trị</title>
  <link rel="stylesheet" href="../asset/style.css">
  <link rel="stylesheet" href="../fontawesome-free-5.15.3-web/css/all.min.css">
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

  <h2>Chào Quản trị Viên</h2>


  <div class="row">
    <div class="left" style="background-color:#bbb;">
      <h2>Menu</h2>
      <ul id="myMenu">
        <li><a href="https://sandbox.vnpayment.vn/merchantv2/">Đã Thanh Toán online</a></li>
        <li><a href="?go=user">Người Dùng</a></li>
        <li><a href="?go=donhang">Đơn Hàng</a></li>
        <li><a href="?go=sanpham">Sản Phẩm</a></li>
        <li><a href="?go=danhmuc">Danh Mục</a></li>
        <li><a href="?go=hang">Hãng </a></li>
        <li><a href="?go=slide">Slide</a></li>
      </ul>

    </div>

    <div class="right" style="background-color:#ddd;">
    
      <?php
      include('link.php');
      ?>
    </div>
  </div>
  <?php
  include('../footer.php');
  ?>
</body>

</html>
<?php }else{
  header('location: https://www.facebook.com/');
  exit;
  }?>