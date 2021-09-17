<style>
    .banner h2 {
        color: red;
    }
</style>
<div class="banner">
    <p>
    <h2>Các Sản Phẩm Mới</h2>
    </p>
</div>
<div class="product">
    <?php
    include("connect.php");
    $sql = "SELECT * FROM product ORDER BY id_product DESC LIMIT 12";
    $query = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($query)) {
    ?>
        <div class="container">
            <a href="?goto=detailproduct&idsp=<?php echo $row['id_product'] ?>">
                <img class="zoom" src="<?php echo $row['img'] ?>" alt="Avatar">
                <div align="center">
                    <h4 style="color: red"><?php echo $row['tensp'] ?></h4>
                    <h5 style="color: blue;"><?php echo $row['gia'] ?>.000 Vnd</h5>
            </a>
            <?php if (isset($_SESSION['id_user'])) {
                $iduser = $_SESSION['id_user'] ?>
                <a href="./vnpay_php/index.php?tien=<?php echo $row['gia'] ?>&idpro=<?php echo $row['id_product'] ?>&iduser=<?php echo $iduser ?>">
                    <button class="buy">Mua</button>
                </a>
            <?php
            } else { ?>
                <a href="#" onclick="document.getElementById('id01').style.display='block'""><button class=" buy">Mua</button></a>
            <?php } ?>
            <div class="ov"><img src="https://eco.hcmuaf.edu.vn/data/new.png" width="80px" height="50pxpx"></div>
        </div>

</div>
<?php
    }
?>
</div>
<div class="banner">
    <p>
    <h2>Tất Cả Các Sản Phẩm</h2>
    </p>
</div>