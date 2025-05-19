<?php
    $awalan = $_GET['awal'];
    $akhiran = $_GET['akhir'];

    echo "Ayo Berhitung <br>";
    do{
        echo $awalan;
        $awalan++;

    } while($awalan <= $akhiran );

    
?>