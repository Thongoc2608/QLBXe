<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Tạo mới đơn hàng</title>
    <!-- Bootstrap core CSS -->
    <link href="./assets/bootstrap.min.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="./assets/jumbotron-narrow.css" rel="stylesheet">
    <script src="./assets/jquery-1.11.3.min.js"></script>
</head>

<body>
    <?php require_once("./config.php"); ?>
    <?php
    $tien = $_GET['tien'];
    include('../connect.php');
    $idpro = $_GET['idpro'];
    $iduser = $_GET['iduser'];
    $sql = "SELECT * FROM hoadon ORDER BY id_hoadon DESC LIMIT 1";
    $query = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($query);
    $ram = random_int(11,200);
    $idhd = $row['id_hoadon'] + $ram;
    $sql = "INSERT INTO hoadon (id_hoadon ,id_user ,id_product ,status ,hotennn ,diachi ,sdt) VALUES ('$idhd','$iduser','$idpro','0','0','0','0')";
    $query = mysqli_query($conn, $sql);
    ?>
    <div class="container">
        <div class="header clearfix">
            <h3 class="text-muted">VNPAY DEMO</h3>
        </div>
        <h3>Tạo mới đơn hàng</h3>
        <div class="table-responsive">
            <form action="./vnpay_create_payment.php" id="create_form" method="post">

                <div class="form-group">
                    <label for="language">Loại hàng hóa </label>
                    <select name="order_type" id="order_type" class="form-control">
                        <option value="billpayment">Thanh toán hóa đơn</option>
                        <option value="topup">Nạp tiền điện thoại</option>
                        <option value="fashion">Thời trang</option>
                        <option value="other">Khác - Xem thêm tại VNPAY</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="order_id">Mã Hóa Đơn</label>
                    <input class="form-control" id="order_id" name="order_id" type="text" value="<?php echo $idhd ?>" />
                </div>
                <div class="form-group">
                    <label for="amount">Tổng Tiền</label>
                    <input class="form-control" type="number" value="<?php echo $tien * 1000 ?>" />
                </div>
                <div class="form-group">
                    <label for="order_desc">Họ Và Tên Người Nhận</label>
                    <textarea class="form-control" cols="20" id="order_desc" name="order_desc" rows="2">Bạn Có Thể Ghi Chi Tiết</textarea>
                </div>
                <div class="form-group">
                    <label for="bank_code">Ngân hàng</label>
                    <select name="bank_code" id="bank_code" class="form-control">
                        <option value="">Không chọn</option>
                        <option value="NCB"> Ngan hang NCB</option>
                        <option value="AGRIBANK"> Ngan hang Agribank</option>
                        <option value="SCB"> Ngan hang SCB</option>
                        <option value="SACOMBANK">Ngan hang SacomBank</option>
                        <option value="EXIMBANK"> Ngan hang EximBank</option>
                        <option value="MSBANK"> Ngan hang MSBANK</option>
                        <option value="NAMABANK"> Ngan hang NamABank</option>
                        <option value="VNMART"> Vi dien tu VnMart</option>
                        <option value="VIETINBANK">Ngan hang Vietinbank</option>
                        <option value="VIETCOMBANK"> Ngan hang VCB</option>
                        <option value="HDBANK">Ngan hang HDBank</option>
                        <option value="DONGABANK"> Ngan hang Dong A</option>
                        <option value="TPBANK"> Ngân hàng TPBank</option>
                        <option value="OJB"> Ngân hàng OceanBank</option>
                        <option value="BIDV"> Ngân hàng BIDV</option>
                        <option value="TECHCOMBANK"> Ngân hàng Techcombank</option>
                        <option value="VPBANK"> Ngan hang VPBank</option>
                        <option value="MBBANK"> Ngan hang MBBank</option>
                        <option value="ACB"> Ngan hang ACB</option>
                        <option value="OCB"> Ngan hang OCB</option>
                        <option value="IVB"> Ngan hang IVB</option>
                        <option value="VISA"> Thanh toan qua VISA/MASTER</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="language">Ngôn ngữ</label>
                    <select name="language" id="language" class="form-control">
                        <option value="vn">Tiếng Việt</option>
                        <option value="en">English</option>
                    </select>
                </div>


                <div class="form-group">
                    <label>Email (*)</label>
                    <input class="form-control" id="txt_billing_email" name="txt_billing_email" type="text" value="xonv@vnpay.vn" />
                </div>
                <div class="form-group">
                    <label>Số điện thoại (*)</label>
                    <input class="form-control" id="txt_billing_mobile" name="txt_billing_mobile" type="text" value="0934998386" />
                </div>
                <div class="form-group">
                    <label>Địa chỉ (*)</label>
                    <input class="form-control" id="txt_billing_addr1" name="txt_billing_addr1" type="text" value="22 Lang Ha" />
                </div>

                <!-- <button type="submit" class="btn btn-primary" id="btnPopup">Thanh toán Post</button> -->
                <button type="submit" name="redirect" id="redirect" class="btn btn-default">Thanh toán BanKing</button>


            </form>
        </div>
        <a href="pay_nh.php?idhd=<?php echo $idhd ?>&tien=<?php echo $tien ?>"><button>Thanh Toán Khi Nhận Hàng</button></a>
        <p>
            &nbsp;
        </p>
        <footer class="footer">
            <p>&copy; VNPAY <?php echo date('Y') ?></p>
        </footer>
    </div>




</body>

</html>