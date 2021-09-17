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
    <?php
    $tien = $_GET['tien'];
        $idhd = $_GET['idhd'];       
    ?>
    <div class="container">
        <div class="header clearfix">
            <h3 class="text-muted">VNPAY DEMO</h3>
        </div>
        <h3>Tạo mới đơn hàng</h3>
        <div class="table-responsive">
            <form action="./xuli.php" method="post">

                <div class="form-group">
                    <label for="order_id">Mã Hóa Đơn</label>
                    <input class="form-control" name="order_id" type="text" value="<?php echo $idhd ?>" />
                </div>
                <div class="form-group">
                    <label for="amount">Tổng Tiền</label>
                    <input class="form-control" name="amount" type="number" value="<?php echo $tien*1000 ?>" />
                </div>
                <div class="form-group">
                    <label for="order_desc">Họ Và Tên Người Nhận</label>
                    <textarea class="form-control" cols="20" name="order_desc" rows="2">Bạn Có Thể Ghi Chi Tiết</textarea>
                </div>
                <div class="form-group">
                    <label>Số điện thoại (*)</label>
                    <input class="form-control" name="txt_billing_mobile" type="text" value="0934998386" />
                </div>
                <div class="form-group">
                    <label>Địa chỉ (*)</label>
                    <input class="form-control" name="txt_billing_addr1" type="text" value="22 Lang Ha" />
                </div>

                <!-- <button type="submit" class="btn btn-primary" id="btnPopup">Thanh toán Post</button> -->
                <button type="submit" name="redirect">Mua</button>

            </form>
        </div>
        <p>
            &nbsp;
        </p>
        <footer class="footer">
            <p>&copy; VNPAY <?php echo date('Y') ?></p>
        </footer>
    </div>




</body>

</html>