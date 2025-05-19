<?php
    require 'koneksi.php';

    $query = "select * from tbl_mahasiswa";
    $result = mysqli_query($link, $query);
    $row = mysqli_fetch_assoc($result);

    echo $row['nim'];
    echo "<br>";
    echo $row['nama'];
?>