<?php
    
    $nilai_aktif = $_GET['aktif'] * 0.10;
    $nilai_quis = $_GET['quis'] * 0.15; 
    $nilai_uts = $_GET['uts'] * 0.25;
    $nilai_uas = $_GET['uas'] * 0.50;

    $nilai_akhir = $nilai_aktif + $nilai_quis + $nilai_uts + $nilai_uas;

    echo "Nilai Aktif: " . $nilai_aktif . "<br>";
    echo "Quis: " . $nilai_quis . "<br>";
    echo "UTS: " . $nilai_uts . "<br>";
    echo "UAS: " . $nilai_uas . "<br>";
    echo "Nilai Akhir: " . $nilai_akhir;


?>