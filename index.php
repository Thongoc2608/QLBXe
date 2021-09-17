<!DOCTYPE html>
<html>
<?php
include_once('connect.php');
session_start();

?>

<head>
    <title>Moto</title>
    <link rel="stylesheet" href="asset/style.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.3-web/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="asset/main.js"></script>
</head>

<body>
    <?php
    include('header.php');
    include('slide.php');
    include('link.php');
    include('footer.php');
    if (isset($_SESSION['notification'])) {
        echo $_SESSION['notification'];
        unset($_SESSION['notification']);
    }
    $sql = "DELETE FROM hoadon WHERE status ='0'";
    $query = mysqli_query($conn, $sql);
    ?>