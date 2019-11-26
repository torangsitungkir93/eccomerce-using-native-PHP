<?php

include 'functions.php';
$id = $_GET["id"];

$sql = "SELECT * FROM film 
      INNER JOIN penjualan ON penjualan.id_produk=film.id
      WHERE id_jual='$id'; 
      ";
$query = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($query);
$jumlah = $data['jumlah'];
$id_film = $data['id'];
echo $id_film;
if (hapus_jual($id) > 0) {
    echo "Hapus Berhasil";
    $sql_cek = "SELECT * FROM film WHERE id='$id_film'";
    $query_cek = mysqli_query($conn, $sql_cek);
    $data_cek = mysqli_fetch_assoc($query_cek);

    $jumlah_data = $data_cek['stok_film'] + $jumlah;
    // echo $data_cek['stok_film'];
    echo $jumlah_data;
    $sql_tambah = "UPDATE film SET stok_film='$jumlah_data' WHERE id='$id_film'";
    $query_tambah = mysqli_query($conn, $sql_tambah);

    header("location: index.php?halaman=data_pending&&cek=sudah");
} else {
    echo "Data gagal Dihapus";
    header("'location: index.php?halaman=data_pending&&cek=belum'");
}