<?php

if (isset($_POST['submit'])) {
    //Cek apakah data berhasil ditambahkan atau tidak
    // echo "GAMBARR :";
    // echo $_FILES['gambar'];
    // var_dump($_FILES['gambar']);
    if (tambah_film($_POST) > 0) {
        echo "
            <script>
                alert('Data berhasil ditambahkan ! ');
                document.location.href = 'index.php?halaman=data_film';
            </script>
        ";
    } else {
        echo "
        <script>
            alert('Data gagal ditambahkan ! ukuran File terlalu besar ');
            document.location.href = 'index.php?halaman=tambah_film';
        </script>
    ";
    }
}

?>

<h1 style="text-align:center;">Tambah Data Film !</h1> <br>
<div class="tambah_film">
    <div class="card-body form_daftar">
        <form action="" method="post" enctype="multipart/form-data">
            <div class=" form-group">
                <label for="judul" class="text-reset">Judul Film</label>
                <input type="text" class="form-control" name="judul" placeholder="Masukkan Judul Film " required
                    autocomplete="off">
            </div>
            <div class="form-group">
                <label for="genre" class="text-reset">Genre</label>
                <select class="form-control" id="genre" name="genre" required autocomplete="off">
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
                    autocomplete="off">
            </div>
            <div class="form-group">
                <label for="sub" class="text-reset">Subtittle</label>
                <input type="text" class="form-control" name="sub" placeholder="Masukkan Subtittle Film" required
                    autocomplete="off">
            </div>

            <div class="form-group">
                <label for="harga" class="text-reset">Harga</label>
                <input type="number" class="form-control" name="harga" placeholder="Masukkan Harga Film" required
                    autocomplete="off">
            </div>
            <div class="form-group">
                <label for="stok" class="text-reset">Stok</label>
                <input type="number" class="form-control" name="stok" placeholder="Masukkan Stok Film Anda" required
                    autocomplete="off">
            </div>
            <div class="form-group">
                <label for="desk" class="text-reset">Deskripsi Film</label>
                <textarea class="form-control" name="desk" placeholder="Masukkan Deskripsi Film" required
                    autocomplete="off">
            </textarea>
            </div>
            <div class="form-group">
                <label for="gambar"> Gambar </label>
                <input type="file" name="gambar" id="gambar" required>
            </div>
            <button type="submit" class="btn btn-primary btn-daftar" name="submit">Daftar </button>
            <button type="reset" class="btn btn-warning "
                onclick="return confirm('Yakin !?  Data Akan tereset semua lohh ')">reset</button>
        </form>
    </div>
</div>