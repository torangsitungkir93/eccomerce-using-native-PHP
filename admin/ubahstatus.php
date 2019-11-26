<?php

include 'functions.php';
$id = $_GET["id"];

if (ubah_status($id) > 0) {
    echo "Ubah Status Berhasil";
    header("location: index.php?halaman=data_sukses&&cek=sudah");
} else {
    echo "Ubah Status Gagal";
    header("location: index.php?halaman=data_pending&&cek=belum");
}