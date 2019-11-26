<?php
session_start();
include 'functions.php';
// Untuk Keranjang Belanja
if (!isset($_SESSION['keranjang'])) {
    $_SESSION['jml_keranjang'] = 0;
}

//Untuk Mengurangi barang yang di keranjang
if (isset($_GET['id_hapus'])) {
    $id = $_GET['id_hapus'];
    if ($_SESSION['keranjang'][$id] >= 2) {
        $_SESSION['keranjang'][$id] -= 1;
    } else {
        unset($_SESSION['keranjang'][$id]);
    }
    $_SESSION['jml_keranjang'] -= 1;
}

//Untuk Menambah barang yang di keranjang
if (isset($_GET['id'])) {
    // Query untuk mengecek jumlah stok
    $id_produk = $_GET['id'];
    $sql = "SELECT stok_film FROM film WHERE id='$id_produk'";
    $query = mysqli_query($conn, $sql);
    $data_cart = mysqli_fetch_assoc($query);
    $stok = $data_cart['stok_film'];
    // var_dump($stok);
    // die('cek');
    // Jika sudah ada produk didalamnya maka produk itu jumlah+1
    if (isset($_SESSION['keranjang'][$id_produk])) {
        if ($stok > $_SESSION['keranjang'][$id_produk]) {
            $_SESSION['keranjang'][$id_produk] += 1;
            $_SESSION['jml_keranjang'] += 1;
        } else {
            echo "
            <script>
                alert('Stok tidak mencukupi ! ');
                document.location.href = 'index.php?halaman=cart&&error=stok';
            </script>
        ";
        }
    } else {
        $_SESSION['keranjang'][$id_produk] = 1;
        $_SESSION['jml_keranjang'] += 1;
    }
}
include "header.php";
?>
<div class="main-content">
    <?php

    if (!isset($_GET['halaman'])) {
        include 'home.php';
    } else if ($_GET['halaman'] == 'shop') {
        include 'shop.php';
    } else if ($_GET['halaman'] == 'cart') {
        include 'cart.php';
    } else if ($_GET['halaman'] == 'register') {
        include 'register.php';
    } else if ($_GET['halaman'] == 'details') {
        include 'details.php';
    } else if ($_GET['halaman'] == 'data_penerima') {
        include 'data_penerima.php';
    } else if ($_GET['halaman'] == 'riwayat') {
        include 'riwayat.php';
    }
    ?>
</div>

<?php
include "footer.php";
?>