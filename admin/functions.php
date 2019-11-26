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

function tambah_film($data)
{
    global $conn;
    $judul = $data['judul'];
    $bahasa = $data['bahasa'];
    $sub = $data['sub'];
    $genre = $data['genre'];
    $harga = $data['harga'];
    $desk = $data['desk'];
    $stok = $data['stok'];

    $gambar = upload();
    if (!$gambar) {
        return false;
    }

    $sql = "INSERT INTO film VALUES ('','$judul','$bahasa','$sub','$gambar','$genre','$harga','$desk','$stok')";
    mysqli_query($conn, $sql);

    return mysqli_affected_rows($conn);
}

function upload()
{
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error =  $_FILES['gambar']['error'];
    $tempName = $_FILES['gambar']['tmp_name'];

    // Cek apalah tidak ada gambar yang diupload
    if ($error === 4) {
        echo "<script>
                    alert('Pilih Gambar Terlebih Dahulu !');
              </script";
        return false;
    }

    // Cek yang boleh diupload hanyalah gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>
        alert('File yang ada Upload bukan gambar !');
                </script";
    }

    // Cek jika ukurannya terlalu besar
    if ($ukuranFile > 10000000) {
        echo "<script>
                    alert('Ukuran Gambar Terlalu Besar ! ');
                </script>";
        return false;
    }

    // Lolos Pengecekan,gambar siap di upload
    // Generate Mana gmbar baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    move_uploaded_file($tempName, '../images/' . $namaFileBaru);

    return $namaFileBaru;
}

function edit_film($data)
{
    global $conn;

    $id = $data['id'];
    $judul = $data['judul'];
    $bahasa = $data['bahasa'];
    $sub = $data['sub'];
    $genre = $data['genre'];
    $harga = $data['harga'];
    $desk = $data['desk'];
    $stok = $data['stok'];
    $gambarLama = $data['gambarLama'];

    $sql = "UPDATE film SET 
            judul_film='$judul',
            bahasa='$bahasa',
            subtittle='$sub',
            genre_film='$genre',
            harga_film='$harga',
            desk_film='$desk',
            stok_film='$stok'
            WHERE id='$id'
            ";
    mysqli_query($conn, $sql);

    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    global $conn;
    $query = "DELETE FROM film WHERE id=$id";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus_user($id)
{
    global $conn;
    $sql = "DELETE FROM user WHERE username='$id'";

    mysqli_query($conn, $sql);

    return mysqli_affected_rows($conn);
}

function edit_user($data)
{
    global $conn;
    $nama = $data['nama'];
    $email = $data['email'];
    $no_hp = $data['no_hp'];
    $username = $data['username'];

    $sql = "UPDATE user SET
            nama='$nama',
            email='$email',
            no_hp='$no_hp'
            WHERE username='$username'    
        ";

    mysqli_query($conn, $sql);
    return mysqli_affected_rows($conn);
}

function ubah_status($id)
{
    global $conn;
    $isi = 'Success';
    $sql = "UPDATE penjualan  SET status_jual='$isi' WHERE id_jual='$id'";
    mysqli_query($conn, $sql);

    return mysqli_affected_rows($conn);
}

function hapus_jual($id)
{
    global $conn;
    $sql = "DELETE FROM penjualan WHERE id_jual='$id'";

    mysqli_query($conn, $sql);

    return mysqli_affected_rows($conn);
}

//Untuk menghtun jumlah (count) Manual

function cek_jumlah($db)
{
    global $conn;
    $query = "SELECT * FROM $db";
    $result = mysqli_query($conn, $query);
    $data = 0;
    while (mysqli_fetch_assoc($result)) {
        $data = $data + 1;
    }
    return $data;
}

function pendapatan()
{
    global $conn;
    $query = "SELECT * FROM penjualan
              INNER JOIN film ON penjualan.id_produk=film.id
              WHERE penjualan.status_jual='Success'";
    $result = mysqli_query($conn, $query);
    $data = 0;
    while ($row = mysqli_fetch_assoc($result)) {
        $total = $row['harga_film'] * $row['jumlah'];
        $data = $data + $total;
    }
    // die('cek');
    return $data;
}