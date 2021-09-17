<?php
$status = "Thanh Toán Khi Nhận Hàng";
$vnp_OrderInfo = $_POST['order_desc'];
$vnp_addr = $_POST['txt_billing_addr1'];
$vnp_Bill_Mobile = $_POST['txt_billing_mobile'];
$vnp_TxnRef = $_POST['order_id'];
include('../connect.php');
$sql = "UPDATE hoadon SET status='$status',hotennn='$vnp_OrderInfo',diachi='$vnp_addr',sdt='$vnp_Bill_Mobile' WHERE id_hoadon='$vnp_TxnRef'";
mysqli_query($conn, $sql);
echo "Bạn Sẽ Nhận Được Hàng Trong Thời Gian Gần Nhất";
?>
<a href="../"><button>Trở Về</button></a>