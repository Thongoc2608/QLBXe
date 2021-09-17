<table>
    <tr>
        <th>IMG</th>
        <th>-----</th>
    </tr>
    <tr>
        <form action="insert.php" method="POST" enctype="multipart/form-data">
            <td><input type="file" name="uploadFile"></td>
            <td><input type="submit" name="issl" value="Thêm">
            </td>
        </form>
    </tr>
    <?php
    $sql = "SELECT * FROM slide";
    $query = mysqli_query($conn, $sql); //lay result trong database dk ket noi

    $i = 1;
    while ($row = mysqli_fetch_array($query)) { //tao mang ket qua vaf in ra
        echo "<tr>";
    ?>
        <form action="update_slide.php" method="POST">
            <td><img src="../<?php echo $row['link'] ?>" width="100px" style="border-radius: 10px;"></td>
            <td><a href="?go=delete&table=slide&id=<?php echo $row['id_slide'] ?>">xóa</a></td>
        </form>
    <?php
        $i++;
        echo "</tr>";
    }
    ?>
</table>