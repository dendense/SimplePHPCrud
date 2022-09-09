<?php     
    include("config.php");
    session_start();
    if(isset($_SESSION['username'],$_SESSION['img_profile'])) {
        $image      = $_SESSION['img_profile'];
        $username   = $_SESSION['username'];
        echo "Selamat Datang ",$username, "<br/>";
        echo "<img src='",$image,"' width='150px'/><br/>";
        echo "<a class='nav-link' href='logout.php'>Logout</a>";
    } else {
        echo "Lakukan Login Terlebih Dahulu <br>";
        echo "<a class='nav-link' href='login.php'>Login</a>";
    }
?>