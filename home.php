<?php
include("productnew.php");
?>
<div class="product">
    <?php
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    } else {
        $page = 1;
    }
    $rowPerPage = 24;
    $perRow = $page * $rowPerPage - $rowPerPage;
    $sql = "SELECT * FROM product LIMIT $perRow,$rowPerPage";
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
            <?php if (isset($_SESSION['id_user'])) { ?>
                <a href="./vnpay_php/index.php?tien=<?php echo $row['gia'] ?>&idpro=<?php echo $row['id_product'] ?>&iduser=<?php echo $_SESSION['id_user'] ?>">
                    <button class="buy">Mua</button>
                </a>
            <?php
            } else { ?>
                <a href="#" onclick="document.getElementById('id01').style.display='block'""><button class="buy">Mua</button></a>
            <?php } ?>
            
        </div>

</div>
<?php
    }
?>
</div>
<div>
    <?php
    $sql = "SELECT * FROM product ";
    $query = mysqli_query($conn, $sql);
    $rowtotal = mysqli_num_rows($query);
    $totalPage = ceil($rowtotal / $rowPerPage);
    $listPage = "";
    for ($a = 1; $a <= $totalPage; $a++) {
        if ($a == $page) {
            echo '<a class="active">' . $a . '</a>';
        } else {
            echo '<a class="pt" href="?go=home&page=' . $a . '">' . $a . '</a>';
        }
    }
    if ($page == 1) {
        $page = $totalPage;
        echo '<a class="pt" href="?go=home&page=' . $page . '">&laquo;</a>';
    } else {
        $page = $page - 1;
        echo '<a class="pt" href="?go=home&page=' . $page . '">&laquo;</a>';
    }

    ?>
</div>