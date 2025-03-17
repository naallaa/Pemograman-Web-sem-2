<?php

$alas = $_GET["alas"]; //mengambil alas dari URL
$tinggi = $_GET["tinggi"]; //mengambil tinggi dari URL

$hasilluas = 0.5 * $alas * $tinggi; //menghitung luas
echo "Alas : ", $alas;
echo "<br>";
echo "Tinggi : ", $tinggi;
echo "<br>";
echo "Luas Segitiga : ", $hasilluas;

?>
