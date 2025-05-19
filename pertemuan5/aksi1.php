<?php
    $angka = $_GET['angka'];

    echo "Mulai Berhitung <br>";
    while($angka <= 10){
        echo $angka;
        echo "<br>";
        $angka++; //counter
    }
?>