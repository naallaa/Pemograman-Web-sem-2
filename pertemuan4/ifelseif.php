<?php
//latihan if elseif
$lampu = "kuning";

if($lampu == "merah"){
    //sintak kondisi 1
    echo "Silakan Berhenti Di Tempat";
}elseif($lampu == "hijau"){
    //sintak kondisi 2
    echo "Silakan Jalan";
}elseif($lampu == "kuning"){
    //sintak kondisi 3
    echo "Hati-Hati ";
}else{
    echo "Lampu Mati";
}


?>