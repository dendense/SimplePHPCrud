<?php
include 'config.php';
error_reporting(0);
$username   = $_POST['username'];
$password   = md5($_POST['pass']);

$login  = mysqli_query($koneksi, "SELECT * FROM tb_login WHERE username='$username' AND pass='$password'");
$row    = mysqli_fetch_array($login);

if ($row['username'] == $username AND $row['pass'] == $password)
{
    session_start();
    $_SESSION['username']       = $row['username'];
    $_SESSION['pass']           = $row['pass'];
    $_SESSION['img_profile']    = $row['img_profile'];
    $_SESSION['name']           = $row['name'];
    $_SESSION['id']             = $row['id'];
    
    header('location:index.php'); //jika login berhasil, maka ganti/letakkan halaman utama disini
}else{
    echo "<script>alert('Username atau Password Admin tidak benar !!!');</script>";
    echo "<script>location='login.php';</script>";
}

?>