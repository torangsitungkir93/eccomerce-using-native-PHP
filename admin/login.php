<?php
session_start();
include 'functions.php';

if (isset($_POST['login'])) {
    $username   = $_POST['username'];
    $pass       = $_POST['password'];

    $user = mysqli_query($conn, "select * from admin where username='$username' and password='$pass'");
    $chek = mysqli_num_rows($user);
    if ($chek > 0) {
        $row = mysqli_fetch_array($user);
        $_SESSION['nama_user'] = $row['nama'];
        header("location:index.php");
    } else {
        $error = true;
    }
}
?>

<!DOCTYPE HTML>
<html>

<head>
    <title>Login Aplikasi</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../assets/css/style_login.css">
    <link rel="stylesheet" href="../assets/fontawesome/css/all.css">
    <link rel="icon" type="image/png" href="../assets/images/logo.png">
</head>

<body>
    <div class="container">
        <section class="login-box">
            <h2>Login Admin</h2>
            <?php if (isset($error)) : ?>
            <p style="color:red;font-style:italic;"> Username / Password Salah </p>
            <?php endif; ?>
            <form method="post" action="">
                <input type="text" placeholder="Username" name="username">
                <input type="password" placeholder="Password" name="password">
                <input type="submit" value="Login" name="login">
            </form>
            <div class="tombol-pilihan">
                <a href="../index.php" class="tombol"><i class="fa fa-home"></i> Kembali ke Toko</a>
                <a href="../login.php" class="tombol"><i class="fas fa-user"></i> Anda User?</a>
            </div>
        </section>
    </div>
    </div>
</body>

</html>