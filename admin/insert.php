<?php
include('connect.php');
//Hãng 1
if (isset($_POST['ishang'])) {
    if ($_FILES['uploadFile']['name'] != NULL&&$_POST['tenhang']!=NULL) {// file k dk trống
        $tenhang = $_POST['tenhang'];
        // Kiểm tra file up lên có phải là ảnh không
        if ($_FILES['uploadFile']['type'] == "image/jpeg" || $_FILES['uploadFile']['type'] == "image/png" || $_FILES['uploadFile']['type'] == "image/gif") 
        {
            // Nếu là ảnh tiến hành code upload
            $path = "data/logo/"; // Ảnh sẽ lưu vào thư mục images
            $tmp_name = $_FILES['uploadFile']['tmp_name'];// dia chỉ hiện tại
            $name = $_FILES['uploadFile']['name'];//ten file
            // sao chép v
            move_uploaded_file($tmp_name,'../'. $path . $name);
            $image_url = $path . $name; // Đường dẫn ảnh lưu vào cơ sở dữ liệu
            // Insert ảnh vào cơ sở dữ liệu
            $sql = "INSERT INTO hangsx (tenhang ,img) VALUES ('$tenhang','$image_url')";
            mysqli_query($conn, $sql);
        } 
    }
}
//Danh Muc 2
if (isset($_POST['isdm'])) {
    $tendm = $_POST['tendm'];
            $sql = "INSERT INTO danhmuc (tendm) VALUES ('$tendm')";
            mysqli_query($conn, $sql);
        }
//SLIDE 3
if (isset($_POST['issl'])) {
    if ($_FILES['uploadFile']['name'] != NULL) { // file k dk trống
        // Kiểm tra file up lên có phải là ảnh không
        if ($_FILES['uploadFile']['type'] == "image/jpeg" || $_FILES['uploadFile']['type'] == "image/png" || $_FILES['uploadFile']['type'] == "image/gif") {
            // Nếu là ảnh tiến hành code upload
            $path = "data/slide/"; // Ảnh sẽ lưu vào thư mục images
            $tmp_name = $_FILES['uploadFile']['tmp_name']; // dia chỉ hiện tại
            $name = $_FILES['uploadFile']['name']; //ten file
            // sao chép v
            move_uploaded_file($tmp_name, '../' . $path . $name);
            $image_url = $path . $name; // Đường dẫn ảnh lưu vào cơ sở dữ liệu
            // Insert ảnh vào cơ sở dữ liệu
            $sql = "INSERT INTO slide (link) VALUES ('$image_url')";
            mysqli_query($conn, $sql);
        }
    }
}
//USER 4
if (isset($_POST['isuser'])) {
    $user = $_POST['username'];
    $pass = $_POST['pass'];
    $name = $_POST['name'];
    $gmail = $_POST['gmail'];
    $level = $_POST['level'];
    if ($_FILES['uploadFile']['name'] != NULL) { // file k dk trống
        // Kiểm tra file up lên có phải là ảnh không
        if ($_FILES['uploadFile']['type'] == "image/jpeg" || $_FILES['uploadFile']['type'] == "image/png" || $_FILES['uploadFile']['type'] == "image/gif") {
            // Nếu là ảnh tiến hành code upload
            $path = "data/user/"; // Ảnh sẽ lưu vào thư mục images
            $tmp_name = $_FILES['uploadFile']['tmp_name'];
            $name = $_FILES['uploadFile']['name'];
            // Upload ảnh vào thư mục images
            move_uploaded_file($tmp_name,'../'. $path . $name);
            $image_url = $path . $name; // Đường dẫn ảnh lưu vào cơ sở dữ liệu
        }
    }
    $sql = "INSERT INTO user (username ,pass ,img ,name, level ,gmail) VALUES ('$user','$pass','$image_url','$name','$level','$gmail')";
    mysqli_query($conn, $sql);
}

//Product 5
if (isset($_POST['ispro'])) {
    $tensp = $_POST['tensp'];
    $gia = $_POST['gia'];
    $dungt = $_POST['dungt'];
    $kicht = $_POST['kicht'];
    $trongl = $_POST['trongl'];
    $danhmuc = $_POST['danhmuc'];
    $hang = $_POST['hang'];
    $ccyen = $_POST['ccyen'];
    $ktbanhxe = $_POST['ktbanhxe'];
    $dongco = $_POST['dongco'];
    $hopso = $_POST['hopso'];
    $phanh = $_POST['phanh'];
    $csmax = $_POST['csmax'];
    if ($_FILES['uploadFile']['name'] != NULL) { // file k dk trống
        // Kiểm tra file up lên có phải là ảnh không
        if ($_FILES['uploadFile']['type'] == "image/jpeg" || $_FILES['uploadFile']['type'] == "image/png" || $_FILES['uploadFile']['type'] == "image/gif") {
            // Nếu là ảnh tiến hành code upload
            $path = "data/imgproduct/"; // Ảnh sẽ lưu vào thư mục images
            $tmp_name = $_FILES['uploadFile']['tmp_name'];
            $name = $_FILES['uploadFile']['name'];
            // Upload ảnh vào thư mục images
            move_uploaded_file($tmp_name, '../' . $path . $name);
            $image_url = $path . $name; // Đường dẫn ảnh lưu vào cơ sở dữ liệu
            // Insert ảnh vào cơ sở dữ liệu
            $sql = "INSERT INTO product (tensp ,img ,gia ,dungt ,kicht ,trongl ,id_danhmuc ,id_hang ,ccaoyen ,ktbanhxe ,dongco ,hopso ,phanh ,cstoida) VALUES ('$tensp','$image_url','$gia','$dungt','$kicht','$trongl','$danhmuc','$hang','$ccyen','$ktbanhxe','$dongco','$hopso','$phanh','$csmax')";
            mysqli_query($conn, $sql);
        }
    }
}
header('Location: ' . $_SERVER['HTTP_REFERER']);
exit;
?>