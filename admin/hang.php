<table>
    <tr>
        <th>IMG</th>
        <th style="width: 30px;">ID</th>
        <th style="width: 120px;">Tên Hãng</th>
        <th>-----</th>
    </tr>
    <?php
    ?>
    <tr>
        <form action="insert.php" method="POST" enctype="multipart/form-data">
            <td><input type="file" name="uploadFile"></td>
            <td><input type="text" name="idhang" style="width: 30px;"></td>
            <td><input type="text" name="tenhang" style="width: 120px;"></td>
            <td><input type="submit" name="ishang" value="Thêm"></td>
        </form>
    </tr>
    <?php
    $sql = "SELECT * FROM hangsx";
    $query = mysqli_query($conn, $sql); //lay result trong database dk ket noi

    $i = 1;
    while ($row = mysqli_fetch_array($query)) { //tao mang ket qua vaf in ra
        echo "<tr>";
    ?>
        <form action="update.php" method="POST">
            <td><img src="../<?php echo $row['img'] ?>" alt="<?Php echo $row['tenhang'] ?>" width="100px" height="35px" style="border-radius: 10px;"></td>
            <td><input type="text" name="id" value="<?Php echo $row['id_hang'] ?>" style="width: 30px;"></td>
            <td><input type="text" name="tenhang" value="<?Php echo $row['tenhang'] ?>" style="width: 120px;"></td>
            <td><input type="submit" name="uphang" value="Sửa"></td>
            <td><a href="?go=delete&table=hang&id=<?php echo $row['id_hang'] ?>">xóa</a></td>
        </form>
    <?php
        $i++;
        echo "</tr>";
    }
    ?>
</table>