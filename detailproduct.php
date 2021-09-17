<?php
$idsp = $_GET['idsp'];
$tablesp = "product";
$id = "WHERE id_product=$idsp";
function truyvan($conn, $table, $id)
{
    $sql = "SELECT * FROM $table $id";
    $query = mysqli_query($conn, $sql);
    return $query;
}
$datasp = truyvan($conn, $tablesp, $id);
$rowsp = mysqli_fetch_array($datasp); {
?>
    <table style="width: 100%;">
        <tr>
            <td style="width: 30%;">
                <img src="<?php echo $rowsp['img'] ?>" alt="Avatar" width="300px">
            </td>
            <td>
                <table>
                    <tr>
                        <td style="color: blue;"> Tên Xe :<?php echo $rowsp['tensp'] ?></td>
                    </tr>
                    <tr>
                        <td style="color:red">Giá :<?php echo $rowsp['gia'] ?>.000 Vnd</td>
                    </tr>
                    <tr>
                        <td>Dung Tích :<?php echo $rowsp['dungt'] ?></td>
                    </tr>
                    <tr>
                        <td>Kích Thước :<?php echo $rowsp['kicht'] ?></td>
                    </tr>
                    <tr>
                        <td>Trọng Lượng :<?php echo $rowsp['trongl'] ?></td>
                    </tr>
                    <tr>
                        <td>
                            <?php if (isset($_SESSION['id_user'])) { ?>
                                <a href="./vnpay_php/index.php?tien=<?php echo $rowsp['gia'] ?>&idpro=<?php echo $rowsp['id_product'] ?>&iduser=<?php echo $_SESSION['id_user'] ?>">
                                    <button class="buy">Mua</button>
                                </a>
                            <?php
                            } else { ?>
                                <a href="#" onclick="document.getElementById('id01').style.display='block'""><button class=" buy">Mua</button></a>
                            <?php } ?>
                        </td>
                    </tr>
                </table>
            </td>
            <td>
                <table>
                    <tr>
                        <td> Chiều Cao Yên :<?php echo $rowsp['ccaoyen'] ?></td>
                    </tr>
                    <tr>
                        <td>Kích Thước Bánh Xe :<?php echo $rowsp['ktbanhxe'] ?></td>
                    </tr>
                    <tr>
                        <td>Loại Động Cơ :<?php echo $rowsp['dongco'] ?></td>
                    </tr>
                    <tr>
                        <td>Hộp Số :<?php echo $rowsp['hopso'] ?></td>
                    </tr>
                    <tr>
                        <td>Phanh :<?php echo $rowsp['phanh'] ?></td>
                    </tr>
                    <tr>
                        <td>Công Suât Tối Đa :<?php echo $rowsp['cstoida'] ?></td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>


<?php
}
?>