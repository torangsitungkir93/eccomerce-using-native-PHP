<?php
$sql_berhasil = " SELECT * FROM penjualan 
INNER JOIN film ON film.id=penjualan.id_produk
INNER JOIN user ON user.username=penjualan.username
WHERE penjualan.status_jual='Success'";
$data = query($sql_berhasil);
?>

<div class="kotak_data_sukses">
    <h1><i class="far fa-check-circle"></i> Data Semua Pembelian Sukses</h1>

    <?php
    if (isset($_GET['cek'])) {
        if ($_GET['cek'] == 'sudah') {
            ?>
    <p style="color:green;font-style:italic;"> Data Sukses </p>
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
                <td><?= $row['jumlah']; ?></td>
                <td><?= $row['harga_film']; ?></td>
                <td><?php $sub1 = $row['jumlah'] * $row['harga_film'];
                            echo $sub1; ?></td>
                <td>
                    <button type="button" class="btn btn-success"><i class="far fa-check-circle"></i> Sukses</button>
                </td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>