<?php
if (isset($_SESSION['id_user'])) {
  $id = $_SESSION['id_user'];
  $sql = "SELECT * FROM user WHERE id_user = '$id'";
  $query = mysqli_query($conn, $sql);
  while ($row = mysqli_fetch_array($query)) {;
    if($row['img']==NULL){
      $img ="data/user/macdinh.jpg";
    }else{
      $img = $row['img'];
    }
?>
    <div class="use" align="center">
      <img src="<?php echo $img ?>" alt="<?php echo $_SESSION['name'] ?>" width="150px" height="150px" style="border-radius: 50%;">
      <p>
      <h2><?php echo $_SESSION['name'] ?></h2>
      <h4>Gmail :<?php echo $row['gmail'] ?></h4>
      </p>
    <?php
    if ($row['level'] == 1) {
      echo '<button><a href="admin" style="color:blue;">Quyền Truy Cập Tối Thượng</a></button>';
    }
  }
    ?>
    <a href="logout.php"><button>Đăng Xuất</button></a>
    <table style="border-color: yellow;" border="1px">
      <tr>
        <th style="width: 100px;">Hình Ảnh</th>
        <th style="width: 120px;">Giá</th>
        <th style="width: 200px;">Trạng Thái</th>
        <th style="width: 200px;">Họ Tên</th>
        <th style="width: 250px;">Dịa Chỉ</th>
        <th style="width: 100px;">Sdt</th>
      </tr>
      <?php
      $sql = "SELECT * FROM hoadon WHERE id_user='$id'";
      $query = mysqli_query($conn, $sql); //lay result trong database dk ket noi

      $i = 1;
      while ($row = mysqli_fetch_array($query)) { //tao mang ket qua vaf in ra
        echo "<tr>";
        $idpro = $row['id_product'];
        $s = "SELECT * FROM product WHERE id_product='$idpro'";
        $q = mysqli_query($conn, $s);
        $r = mysqli_fetch_array($q)
      ?>
        <td><img src="<?php echo $r['img'] ?>" width="100px"></td>
        <td style="width: 120px;"><?Php echo $r['gia'] ?>.000Vnd</td>
        <td style="width: 200px;"><?Php echo $row['status'] ?></td>
        <td style="width: 200px;"><?Php echo $row['hotennn'] ?></td>
        <td style="width: 250px;"><?Php echo $row['diachi'] ?></td>
        <td style="width: 100px;"><?Php echo $row['sdt'] ?></td>
      <?php
        $i++;
        echo "</tr>";
      }
      ?>
    </table>
  <?php
}
  ?>
    </div>