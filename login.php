<?php
include 'config.php';
?>

<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="mt-5 rounded" style="width: 300px">
            <div class="mb-3 h4">Selamat Datang</div>

            <form action="proses_login.php" method="post">
                <label>Username</label>
                <input class="mb-2 w-100" type="text" name="username" />
                <label>Password</label>
                <input class="w-100" type="password" name="pass" />
                <input class="btn btn-primary mt-3 w-100" type="submit" value="LOGIN">
                <a href="register.php" class="btn btn-warning mt-1 w-100">REGISTER</a>
            </form>

        </div>
    </div>
</body>

</html>