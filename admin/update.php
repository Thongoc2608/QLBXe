<?php
include('connect.php');
if (isset($_POST['upuser'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $name = $_POST['name'];
    $gmail = $_POST['gmail'];
    $level = $_POST['level'];
    $id=$_POST['id'];
    $sql = "UPDATE user SET username='$user' ,pass='$pass' ,name='$name', level='$level' ,gmail='$gmail' WHERE id_user='$id'";
    mysqli_query($conn, $sql);  
}
if (isset($_POST['updm'])) {
    $tendm = $_POST['tendm'];
    $id = $_POST['id'];
    $sql = "UPDATE danhmuc SET tendm='$tendm' WHERE id_danhmuc='$id'";
    mysqli_query($conn, $sql);
}
if (isset($_POST['uphang'])) {
    $tenhang = $_POST['tenhang'];
    $id = $_POST['id'];
    $sql = "UPDATE hangsx SET tenhang='$tenhang' WHERE id_hang='$id'";
    mysqli_query($conn, $sql);
}
if (isset($_POST['uppro'])) {
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
    $id = $_POST['id'];
    $sql = "UPDATE product SET tensp='$tensp',gia='$gia',dungt='$dungt',kicht='$kicht',trongl='$trongl',id_danhmuc='$danhmuc',id_hang='$hang',ccaoyen='$ccyen',ktbanhxe='$ktbanhxe',dongco='$dongco',hopso='$hopso',phanh='$phanh',cstoida='$csmax' WHERE id_product='$id'";
    mysqli_query($conn, $sql);
}
header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
?>