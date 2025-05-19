<?php
    $loginuser = $_POST['user'];
    $pass = $_POST['password'];

    if($loginuser && $pass == "admin" ){
        //sintak kondisi 1
        echo "Anda Adalah Admin";

    }else{
        echo "Gagal Login";
    }
    

    if($pass && $loginuser  == "user"){
        //sintak kondisi 2
        echo "Selamat Datang User";
    }else{
        echo "Gagal Login";
    }
?>