<?php

$conn = mysqli_connect('localhost', 'root', '', 'toko_dvd');

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    global $conn;
    $nama = $data['nama_lengkap'];
    $email = $data['email'];
    $hp = $data['nomor_hp'];
    $username = $data['username'];
    $password = $data['password1'];

    $sql = "INSERT INTO user VALUES ('$nama','$email','$hp','$username','$password')";
    $insert = mysqli_query($conn, $sql);

    return ($insert);
}

function tambah_penjualan($query, $nama, $id_produk, $jumlah)
{
    global $conn;
    $penerima = $query['nama'];
    $kota = $query['kota'];
    $postal = $query['postal'];
    $alamat = $query['alamat'];
    $no_hp = $query['no_hp'];
    $status = $query['status'];

    $sql = "INSERT INTO penjualan VALUES 
            ('','$nama','$id_produk','$jumlah','$penerima','$kota','$postal','$alamat','$no_hp','$status')";
    $insert = mysqli_query($conn, $sql);

    return ($insert);
}

function ubah_jumlah_film($id, $jumlah)
{
    global $conn;
    $sql = "UPDATE film SET stok_film='$jumlah' WHERE id='$id'";

    mysqli_query($conn, $sql);

    return mysqli_affected_rows($conn);
}