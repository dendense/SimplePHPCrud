<?php
include 'config.php';
$username   = $_POST["username"];
$password   = md5($_POST["pass"]);
$email      = $_POST["email"];

$query_sql = "INSERT INTO tb_login (username, pass, email) VALUES ('$username', '$password', '$email')";

if (mysqli_query($koneksi, $query_sql)) {
      echo "<script>alert('Username ",$username," berhasil ditambahkan didaftarkan')</script>";
      echo "<script>location='index.php';</script>";
} else {
      echo "Pendaftaran Gagal : " . mysqli_error($koneksi);
}
?>