<?php
if (isset($_GET['idblog'])) {
    $id = $_GET['idblog'];
}
$sql = "SELECT * FROM blog WHERE id_blog=$id";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($query);
?>
<div class="product">
    <div>
        <h3>-<?php echo $row['title'] ?></h3>
    </div>
    <div align="center"><img src="<?php echo $row['img'] ?>" alt="" width="60%" height="auto"></div>
    <div style="font-size: 16px;" align="center">
        <?php
        $filename = $row['content'];
        $fp = fopen($filename, "r");

        $contents = fread($fp, filesize($filename));

        echo "<pre>$contents</pre>";
        fclose($fp);
        ?>

    </div>

</div>