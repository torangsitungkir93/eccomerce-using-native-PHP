<?php

include 'functions.php';
$id = $_GET["id"];

if (hapus_user($id) > 0) {
    echo "Hapus Berhasil";
    header("location: index.php?halaman=datauser&&cek=sudah");
} else {
    echo "Data gagal Dihapus";
    header("'location: index.php?halaman=datauser&&cek=belum'");
}