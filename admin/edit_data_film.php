<?php

//Query data film
$id = $_GET['id'];

$sql = "SELECT * FROM film WHERE id='$id'";
$query = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($query);

if (isset($_POST['edit_film'])) {
    //Cek apakah data berhasil ditambahkan atau tidak
    // echo "GAMBARR :";
    // echo $_FILES['gambar'];
    // var_dump($_FILES['gambar']);
    if (edit_film($_POST) > 0) {
        echo "
            <script>
                alert('Data berhasil diedit ! ');
                document.location.href = 'index.php?halaman=data_film';
            </script>
        ";
    } else {
        echo "
        <script>
            alert('Data gagal Diedit !');
            document.location.href = 'index.php?halaman=data_film';
        </script>
    ";
    }
}

?>

<h1 style="text-align:center;">Edit Data Film !</h1> <br>
<div class="tambah_film">
    <div class="card-body form_daftar">
        <form action="" method="post">
            <input type="hidden" name="id" value="<?= $data['id'] ?>">
            <input type="hidden" name="gambarLama" value="<?= $data["gambar_film"]; ?>">
            <div class=" form-group">
                <label for="judul" class="text-reset">Judul Film</label>
                <input type="text" class="form-control" name="judul" placeholder="Masukkan Judul Film " required
                    autocomplete="off" value="<?= $data['judul_film'] ?>">
            </div>
            <div class="form-group">
                <label for="genre" class="text-reset">Genre</label>
                <select class="form-control" id="genre" name="genre" required autocomplete="off">
                    <option selected value="<?= $data['genre_film'] ?>"> --- <?= $data['genre_film'] ?> ---
                    </option>
                    <option value="Action">Action</option>
                    <option value="Drama">Drama/TV Series</option>
                    <option value="Romance">Romance</option>
                    <option value="Horror">Horror</option>
                    <option value="Animation">Animation</option>
                    <option value="Adventure">Adventure</option>
                </select>
            </div>
            <div class="form-group">
                <label for="bahasa" class="text-reset">Bahasa Asal</label>
                <input type="text" class="form-control" name="bahasa" placeholder="Masukkan Bahasa Film" required
                    autocomplete="off" value="<?= $data['bahasa'] ?>">
            </div>
            <div class="form-group">
                <label for="sub" class="text-reset">Subtittle</label>
                <input type="text" class="form-control" name="sub" placeholder="Masukkan Subtittle Film" required
                    autocomplete="off" value="<?= $data['subtittle'] ?>">
            </div>

            <div class=" form-group">
                <label for="harga" class="text-reset">Harga</label>
                <input type="number" class="form-control" name="harga" placeholder="Masukkan Harga Film" required
                    autocomplete="off" value="<?= $data['harga_film'] ?>">
            </div>
            <div class="form-group">
                <label for="stok" class="text-reset">Stok</label>
                <input type="number" class="form-control" name="stok" placeholder="Masukkan Stok Film Anda" required
                    autocomplete="off" value="<?= $data['stok_film'] ?>">
            </div>
            <div class="form-group">
                <label for="desk" class="text-reset">Deskripsi Film</label>
                <textarea class="form-control" name="desk" placeholder="Masukkan Deskripsi Film" required
                    autocomplete="off" value=""><?= $data['desk_film'] ?>
            </textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-daftar" name="edit_film">Ubah</button>
            <button type="reset" class="btn btn-warning "
                onclick="return confirm('Yakin !?  Data Akan tereset semua lohh ')">reset</button>
        </form>
    </div>
</div>