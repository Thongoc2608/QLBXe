<table>
    <tr>
        <th style="width:50px">Avata</th>
        <th>ID</th>
        <th style="width: 100px;">User</th>
        <th>Pass</th>
        <th>Name</th>
        <th>Gmail</th>
        <th style="width: 50px;">Level</th>
        <th>----</th>
    </tr>
    <tr>
        <form action="insert.php" method="POST" enctype="multipart/form-data">
            <td><input type="file" name="uploadFile"></td>
            <td><input type="text" name="id" style="width:30px"></td>
            <td><input type="text" name="username" style="width: 100px;"></td>
            <td><input type="text" name="pass"></td>
            <td><input type="text" name="name"></td>
            <td><input type="text" name="gmail"></td>
            <td><input type="text" name="level" style="width: 50px;"></td>
            <td><input type="submit" name="isuser" value="Thêm"></td>
        </form>
    </tr>
    <?php
    $sql = "SELECT * FROM user";
    $query = mysqli_query($conn, $sql); //lay result trong database dk ket noi

    $i = 1;
    while ($row = mysqli_fetch_array($query)) { //tao mang ket qua vaf in ra
        echo "<tr>";
    ?>
        <form action="update.php" method="POST">
            <td><img src="../<?php echo $row['img'] ?>" alt="Avata" width="20px" height="20px" style="border-radius: 50%;"></td>
            <td><input type="text" name="id" style="width:30px" value="<?Php echo $row['id_user'] ?>"></td>
            <td><input type="text" name="user" value="<?Php echo $row['username'] ?>" style="width: 100px;"></td>
            <td><input type="text" name="pass" value="<?Php echo $row['pass'] ?>"></td>
            <td><input type="text" name="name" value="<?Php echo $row['name'] ?>"></td>
            <td><input type="text" name="gmail" value="<?Php echo $row['gmail'] ?>"></td>
            <td><input type="text" name="level" value="<?Php echo $row['level'] ?>" style="width: 50px;"></td>
            <td><input type="submit" name="upuser" value="Sửa"></td>
            <td><a href="?go=delete&table=user&id=<?php echo $row['id_user']
                                                    ?>">xóa</a></td>
        </form>
    <?php
        $i++;
        echo "</tr>";
    }
    ?>
</table>