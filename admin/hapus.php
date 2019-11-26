<?php

include 'functions.php';
$id = $_GET["id"];

if (hapus($id) > 0) {
    echo "Hapus Berhasil";
    header("location: index.php?halaman=data_film&&cek=sudah");
} else {
    echo "Data gagal Dihapus";
    header("'location: index.php?halaman=data_film&&cek=belum'");
}