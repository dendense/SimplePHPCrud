<?php
    $server     = "localhost";
    $user       = "root";
    $password   = "";
    $database   = "pde38";

    $koneksi    = mysqli_connect($server, $user, $password, $database);

    if(!$koneksi){
        die("<script>alert('Gagal Tersambung Dengan Database')</script>");
    }
?>