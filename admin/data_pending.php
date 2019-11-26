<?php
$sql_tunda = " SELECT * FROM penjualan 
INNER JOIN film ON film.id=penjualan.id_produk
INNER JOIN user ON user.username=penjualan.username
WHERE penjualan.status_jual='Pending'";
$data = query($sql_tunda);
?>

<div class="kotak_data_pending">
    <h1><i class="fas fa-spinner"></i> Data Pending Pembelian</h1>
    <?php
    if (isset($_GET['cek'])) {
        if ($_GET['cek'] == 'sudah') {
            ?>
    <p style="color:green;font-style:italic;"> Data Sukses Dihapus </p>
    <?php
            } else {
                ?>
    <p style="color:green;font-style:italic;"> Data Masih Pending </p>
    <?php
        }
    }
    ?>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">User Pembeli</th>
                <th scope="col">Nama Barang</th>
                <th scope="col">ID</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Harga @ 1 Buah</th>
                <th scope="col">Sub Total</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($data as $row) {
                ?>
            <tr>
                <th scope="col"><?php echo $no++ ?> </th>
                <td><?= $row['username']; ?> </td>
                <td><?= $row['judul_film']; ?> </td>
                <td><?= $row['id_jual']; ?> </td>
                <td><?= $row['jumlah']; ?></td>
                <td><?= $row['harga_film']; ?></td>
                <td><?php $sub1 = $row['jumlah'] * $row['harga_film'];
                            echo $sub1; ?></td>
                <td>
                    <button type="button" class="btn btn-warning"><i class="fas fa-spinner"></i>
                        Pending</button> |
                    <a href="ubahstatus.php?id=<?= $row['id_jual']; ?>">
                        <button type="button" class="btn btn-primary"
                            onclick="return confirm('Yakin !? Mengubah data data dari pending ke Sukses ')">
                            <i class="fab fa-steam "></i> Change</button>
                    </a>
                    <a href="hapus_jual.php?id=<?= $row['id_jual']; ?>">
                        <button type="button" class="btn btn-danger"
                            onclick="return confirm('Yakin !? Data yang dihapus tidak bisa dibalikin loh ')">
                            <i class="fa fa-trash "></i> Hapus!?</button>
                    </a>
                </td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>