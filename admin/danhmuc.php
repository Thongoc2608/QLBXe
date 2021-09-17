<table>
    <tr>
        <th style="width: 30px;">ID</th>
        <th style="width: 120px;">Tên Danh Mục</th>
        <th>-----</th>
    </tr>
    <tr>
        <form action="insert.php" method="POST">
            <td><input type="text" name="iddm" style="width: 30px;"></td>
            <td><input type="text" name="tendm" style="width: 120px;"></td>
            <td><input type="submit" name="isdm" value="Thêm"></td>
        </form>
    </tr>
    <?php
    $sql = "SELECT * FROM danhmuc";
    $query = mysqli_query($conn, $sql); //lay result trong database dk ket noi

    $i = 1;
    while ($row = mysqli_fetch_array($query)) { //tao mang ket qua vaf in ra
        echo "<tr>";
    ?>
        <form action="update.php" method="POST">
            <td><input type="text" name="id" value="<?Php echo $row['id_danhmuc'] ?>" style="width: 30px;"></td>
            <td><input type="text" name="tendm" value="<?Php echo $row['tendm'] ?>" style="width: 120px;"></td>
            <td><input type="submit" name="updm" value="Sửa"></td>
            <td><a href="?go=delete&table=danhmuc&id=<?php echo $row['id_danhmuc']
                                            ?>">xóa</a></td>
        </form>
    <?php
        $i++;
        echo "</tr>";
    }
    ?>
</table>