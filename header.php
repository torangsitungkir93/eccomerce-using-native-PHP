<?php
$sql_user = "SELECT * FROM user ";
$data = query($sql_user);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Toko DVD</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fontawesome/css/all.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" type="image/png" href="assets/images/logo2.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style>
    /* Make the image fully responsive */
    .carousel-inner img {
        width: 100%;
        height: 100%;
    }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark navbar-fixed-top" id="headerku">
        <a href="index.php" class="navbar-brand"><img src="assets/images/logo2.png" alt="" width="40px"
                height="40px"></a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav">
                <a href="index.php"
                    class="nav-item nav-link <?php if (!isset($_GET['halaman'])) echo "active" ?>">Home</a>
                <a href="index.php?halaman=shop"
                    class="nav-item nav-link <?php if (($_GET['halaman'] == 'shop')) echo "active" ?>">Shop</a>
                <a href="index.php?halaman=riwayat"
                    class="nav-item nav-link <?php if (($_GET['halaman'] == 'riwayat')) echo "active" ?>">Riwayat
                    Belanja</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">About US</a>
                    <div class="dropdown-menu">
                        <a href="#" class="dropdown-item">FAQS</a>
                        <a href="#" class="dropdown-item">ABOUT US</a>
                        <a href="#" class="dropdown-item">Fedback</a>
                    </div>
                </div>
            </div>
            <form class="form-inline" method="get" action="">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search" name="cari_nama">
                    <div class="input-group-append">
                        <button type="button" class="btn btn-secondary" name="cari"><i
                                class="fa fa-search"></i></button>
                    </div>
                </div>
                <div class="input-group myCart" style="margin-left:10px;">
                    <a href="index.php?halaman=cart" class="btn btn-outline-success text-light"><i
                            class="fa fa-cart-plus fa-lg "></i>&nbsp;&nbsp;&nbsp;<?php echo $_SESSION['jml_keranjang']; ?>
                        Barang
                        di keranjang
                        saya
                    </a>
                </div>
            </form>
            <div class="navbar-nav ">
                <a class=""><button class="btn btn-success"><i class="fas fa-smile fa-lg"></i> Hai
                        <?php if (!isset($_SESSION['nama_user'])) {
                            echo "GUEST";
                            echo "</button></a>";
                        } else {
                            echo $_SESSION['nama_user'];
                            echo "</button></a>";
                        } ?>
            </div>
            <div class="navbar-nav">
                <?php if (!isset($_SESSION['nama_user'])) { ?>
                <a href="login.php" class="nav-item nav-link">Login</a> |
                <a href="index.php?halaman=register" class="nav-item nav-link">Register</a>
                <?php } else { ?>
                <a href="logout.php" class="nav-item nav-link" <?php if ($_SESSION['jml_keranjang'] >= 1) : ?>
                    onclick="return confirm('Yakin !?  Data Dikeranjang tereset semua lohh ')"
                    <?php endif; ?>>Logout</a>
                <?php } ?>
            </div>
        </div>
    </nav>

    <div class="content">