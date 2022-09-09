<!DOCTYPE HTML>
<html>

<head>
    <title>Register</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="mt-5 rounded" style="width: 300px">
            <h1>Register Account</h1>
            <form method="post" action="proses_regis.php">
                <label>Username</label>
                <input class="mb-2 w-100" type="text" name="username" />
                <label>Password</label>
                <input class="mb-2 w-100" type="password" name="pass" />
                <label>Email</label>
                <input class="w-100" type="email" name="email" />
                <input class="btn btn-primary mt-2 w-100" type="submit" value="DAFTAR">
                <p class="mt-2"> Sudah punya akun?
                    <a href="/login.php">Login di sini</a>
                </p>
            </form>
        </div>
    </div>

</body>

</html>