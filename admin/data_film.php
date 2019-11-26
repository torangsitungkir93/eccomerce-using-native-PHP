<?php


$sql = "SELECT * FROM film ORDER BY id DESC";
$data = query($sql);
?>


<div style="margin-left: 30px; margin-right: 30px; margin-top: 30px;">
    <h1>Data Film</h1> <br>
    <?php
    if (isset($_GET['cek'])) {
        if ($_GET['cek'] == 'sudah') {
            ?>
    <p style="color:green;font-style:italic;"> Data sudah dihapus </p>
    <?php
            } else {
                ?>
    <p style="color:green;font-style:italic;"> Data Belum dihapus </p>
    <?php
        }
    }
    ?>
    <a href="index.php?halaman=tambah_film" class="btn btn-info"> <i class="fa fa-plus-square"></i> Tambah Film</a>
    <p style="font-size: 18px;"> </p>
    <table class="table table-striped">
        <thead>
            <th>No</th>
            <th>Gambar</th>
            <th>Nama Film</th>
            <th>Bahasa</td>
            <th>Genre</td>
            <th>Harga</td>
            <th>Stok</th>
            <th>Aksi</th>
        </thead>
        <tbody>
            <?php
            $i = 1;
            foreach ($data as $row) {
                ?>
            <tr>
                <td><?= $i++ ?></td>
                <td>
                    <img src="../images/<?= $row['gambar_film'] ?>" alt="Gambar" width="50px" height="75px">
                    </<img>
                </td>
                <td><?= $row['judul_film'] ?></td>
                <td><?= $row['bahasa'] ?></td>
                <td><?= $row['genre_film'] ?></td>
                <td><?php
                            echo "Rp ";
                            echo $row['harga_film'];
                            ?></td>
                <td><?= $row['stok_film'] ?></td>
                <td>
                    <a href="index.php?halaman=edit_data_film&&id=<?= $row['id'] ?>">
                        <button class="btn fa fa-edit bg-success" style="color:white"></button>
                    </a>|
                    <a href="hapus.php?hal=data_film&&id=<?= $row['id'] ?>">
                        <button style="color:white" class="btn fa fa-trash bg-danger"
                            onclick="return confirm('Yakin !? Data yang dihapus gabisa  dibalikin lohh ')">
                        </button>
                    </a>|
                    <a href="#">
                        <button class="btn fa fa-clipboard bg-info" style="color:white"></button> <!-- details -->
                    </a>
                </td>
            </tr>
            <?php
            }
            ?>
        </tbody>
</div>