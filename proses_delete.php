<?php
    $id = $_GET['id'];
    include('config.php');
    mysqli_query($koneksi,"DELETE FROM `tb_login` WHERE id='$id'");
    header('location:index.php');
?>