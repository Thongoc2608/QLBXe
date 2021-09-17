<table style="border-color: red;" border="0.5px">
    <tr>
        <th style="width: 100px;">Hình Ảnh</th>
        <th style="width: 150px;">Giá</th>
        <th style="width: 50px">TK USER</th>
        <th style="width: 200px;">Trạng Thái</th>
        <th style="width: 200px;">Họ Tên</th>
        <th style="width: 250px;">Dịa Chỉ</th>
        <th style="width: 100px;">Sdt</th>
    </tr>
    <?php
    $sql = "SELECT * FROM hoadon";
    $query = mysqli_query($conn, $sql); //lay result trong database dk ket noi

    $i = 1;
    while ($row = mysqli_fetch_array($query)) { //tao mang ket qua vaf in ra
        echo "<tr>";
        $idpro = $row['id_product'];
        $s = "SELECT * FROM product WHERE id_product='$idpro'";
        $q = mysqli_query($conn, $s);
        $r = mysqli_fetch_array($q)
    ?>
        <td><img src="../<?php echo $r['img'] ?>" width="100px"></td>
        <td style="width: 150px;"><?Php echo $r['gia'] ?>.000Vnd</td>
        <td style="width: 50px"><?Php echo $row['id_user'] ?></td>
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