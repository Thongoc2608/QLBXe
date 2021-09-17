<table>
    <tr>
        <th style="width: 100px;">img</th>
        <th style="width: 30px;">ID</th>
        <th style="width: 70px;">Tên Sản Phẩm</th>
        <th style="width: 70px;">Giá</th>
        <th style="width: 70px;">Dung Tích</th>
        <th style="width: 70px;">Kích Thước</th>
        <th style="width: 70px;">Trọng Lượng</th>
        <th style="width: 50px;">Danh Mục</th>
        <th style="width: 50px;">Hãng</th>
        <th style="width: 70px;">C Cao Yên</th>
        <th style="width: 70px;">KT Bánh Xe</th>
        <th style="width: 70px;">Động Cơ</th>
        <th style="width: 70px;">Hộp Số</th>
        <th style="width: 70px;">Phanh</th>
        <th style="width: 70px;">Công S Max</th>
        <th>-----</th>
    </tr>
    <tr>
        <form action="insert.php" method="POST" enctype="multipart/form-data">
            <td><input type="file" name="uploadFile"></td>
            <th><input type="text" name="idsp" style="width:30px;"></th>
            <td><input type="text" name="tensp" style="width: 70px;"></td>
            <td><input type="text" name="gia" style="width: 70px;"></td>
            <td><input type="text" name="dungt" style="width: 70px;"></td>
            <td><input type="text" name="kicht" style="width: 70px;"></td>
            <td><input type="text" name="trongl" style="width: 70px;"></td>
            <td><input type="text" name="danhmuc" style="width: 50px;"></td>
            <td><input type="text" name="hang" style="width: 50px;"></td>
            <td><input type="text" name="ccyen" style="width: 70px;"></td>
            <td><input type="text" name="ktbanhxe" style="width: 70px;"></td>
            <td><input type="text" name="dongco" style="width: 70px;"></td>
            <td><input type="text" name="hopso" style="width: 70px;"></td>
            <td><input type="text" name="phanh" style="width: 70px;"></td>
            <td><input type="text" name="csmax" style="width: 70px;"></td>
            <td><input type="submit" name="ispro" value="Thêm"></td>
        </form>
    </tr>
    <?php
    $sql = "SELECT * FROM product";
    $query = mysqli_query($conn, $sql); //lay result trong database dk ket noi

    $i = 1;
    while ($row = mysqli_fetch_array($query)) { //tao mang ket qua vaf in ra
        echo "<tr>";
    ?>
        <form action="update.php" method="POST">
            <td><img src="../<?php echo $row['img'] ?>" alt="<?php echo $row['tensp'] ?>" width="100px" height="70px"></td>
            <td><input type="text" name="id" value="<?php echo $row['id_product'] ?>" style="width: 30px;"></td>
            <td><input type="text" name="tensp" value="<?php echo $row['tensp'] ?>" style="width: 70px;"></td>
            <td><input type="text" name="gia" value="<?php echo $row['gia'] ?>" style="width: 70px;"></td>
            <td><input type="text" name="dungt" value="<?php echo $row['dungt'] ?>" style="width: 70px;"></td>
            <td><input type="text" name="kicht" value="<?php echo $row['kicht'] ?>" style="width: 70px;"></td>
            <td><input type="text" name="trongl" value="<?php echo $row['trongl'] ?>" style="width: 70px;"></td>
            <td><input type="text" name="danhmuc" value="<?php echo $row['id_danhmuc'] ?>" style="width: 50px;"></td>
            <td><input type="text" name="hang" value="<?php echo $row['id_hang'] ?>" style="width: 50px;"></td>
            <td><input type="text" name="ccyen" value="<?php echo $row['ccaoyen'] ?>" style="width: 70px;"></td>
            <td><input type="text" name="ktbanhxe" value="<?php echo $row['ktbanhxe'] ?>" style="width: 70px;"></td>
            <td><input type="text" name="dongco" value="<?php echo $row['dongco'] ?>" style="width: 70px;"></td>
            <td><input type="text" name="hopso" value="<?php echo $row['hopso'] ?>" style="width: 70px;"></td>
            <td><input type="text" name="phanh" value="<?php echo $row['phanh'] ?>" style="width: 70px;"></td>
            <td><input type="text" name="csmax" value="<?php echo $row['cstoida'] ?>" style="width: 70px;"></td>
            <td><input type="submit" name="uppro" value="Sửa"></td>
            <td><a href="?go=delete&table=pro&id=<?php echo $row['id_product'] ?>">xóa</a></td>
        </form>
    <?php
        $i++;
        echo "</tr>";
    }
    ?>
</table>