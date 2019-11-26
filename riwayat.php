<?php
if (!isset($_SESSION['username'])) {
    echo "
            <script>
                alert('Anda harus LOGIN terlebih dahulu ! ');
                document.location.href = 'index.php';
            </script>
        ";
}

$my_username = $_SESSION['username'];

$sql_tertunda = " SELECT * FROM penjualan 
        INNER JOIN film ON film.id=penjualan.id_produk
        INNER JOIN user ON user.username=penjualan.username
        WHERE penjualan.status_jual='Pending' AND user.username='$my_username'";
$data_tertunda = query($sql_tertunda);

$sql_berhasil = " SELECT * FROM penjualan 
        INNER JOIN film ON film.id=penjualan.id_produk
        INNER JOIN user ON user.username=penjualan.username
        WHERE penjualan.status_jual='Success' AND user.username='$my_username'";
$data_berhasil = query($sql_berhasil);

// var_dump($data_berhasil);
// var_dump($data_tertunda);

?>

<div class="daftar-terbaru">
    <div class="riwayat">
        <h2> <i class="fas fa-history"></i> Riwayat Pembelian</h2>
    </div>
</div>


<div class="tabel_tertunda">
    <div class="card bg-light mb-3">
        <div class="card-body">
            <h4><i class="fas fa-spinner btn btn-warning"></i> Barang Tertunda</h4>
            <div class="overflow-auto">
                <div style="height:300px">
                    <table class="table" border="1">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Barang</th>
                                <th scope="col">Kode</th>
                                <th scope="col">Jumlah</th>
                                <th scope="col">Harga @ 1 buah</th>
                                <th scope="col">Sub Total</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $data_tunda = 1;
                            $total_sub2 = 0;
                            foreach ($data_tertunda as $row_tunda) {
                                ?>
                            <tr>
                                <th><?php echo $data_tunda++; ?></th>
                                <th scope="row">
                                    <div class="gambar_cart">
                                        <?= $row_tunda['judul_film']; ?> <br>
                                        <a href=""><img src="images/<?= $row_tunda['gambar_film']; ?>" width="100px"
                                                height="150px"></a>
                                    </div>
                                </th>
                                <th><?= $row_tunda['id_jual']; ?> </th>
                                <td><?= $row_tunda['jumlah']; ?></td>
                                <td><?= $row_tunda['harga_film']; ?></td>
                                <td><?php $sub2 = $row_tunda['jumlah'] * $row_tunda['harga_film'];
                                            echo $sub2; ?></td>
                                <th><button class="btn btn-warning"><i class="fas fa-clock"></i> Pending</button>
                                </th>
                                </th>
                            </tr>
                            <?php
                                $total_sub2 = $total_sub2 + $sub2;
                            }
                            ?>
                            <tr style="background-color: #aeff78">
                                <th colspan="4" style="text-align: right;"> Total </th>
                                <td><?php echo $total_sub2; ?> </td>
                            </tr>
                            <tr style="background-color: #aeff78">
                                <th colspan="5" style="text-align: right;"> Lakukan Pembayaran melalui Transfer bank
                                    BNI : 788837 /BRI : 9874738 (A/N Mimin Website) <br>
                                    Kirim Bukti Pembayaran Ke WA admin 081397752892
                                </th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="tabel_tertunda">
    <div class="card bg-light mb-3">
        <div class="card-body">
            <h4><i class="fas fa-check-square btn btn-success"></i> Barang Terbeli</h4>
            <div class="overflow-auto">
                <div style="height:300px">
                    <table class="table" border="1">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Barang</th>
                                <th scope="col">Kode</th>
                                <th scope="col">Jumlah</th>
                                <th scope="col">Harga @ 1 buah</th>
                                <th scope="col">Sub Total</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $data_hasil = 1;
                            $total_sub2 = 0;
                            foreach ($data_berhasil as $row_berhasil) {
                                ?>
                            <tr>
                                <th><?php echo $data_hasil++; ?></th>
                                <th scope="row">
                                    <div class="gambar_cart">
                                        <?= $row_berhasil['judul_film']; ?> <br>
                                        <a href=""><img src="images/<?= $row_berhasil['gambar_film']; ?>" width="100px"
                                                height="150px"></a>
                                    </div>
                                </th>
                                <th><?= $row_berhasil['id_jual']; ?> </th>
                                <td><?= $row_berhasil['jumlah']; ?></td>
                                <td><?= $row_berhasil['harga_film']; ?></td>
                                <td><?php $sub2 = $row_berhasil['jumlah'] * $row_berhasil['harga_film'];
                                            echo $sub2; ?></td>
                                <th><button class="btn btn-success"><i class="fas fa-check-square"></i> Berhasil
                                    </button>
                                </th>
                                </th>
                            </tr>
                            <?php
                                $total_sub2 = $total_sub2 + $sub2;
                            }
                            ?>
                            <tr style="background-color: #aeff78">
                                <th colspan="4" style="text-align: right;"> Total </th>
                                <td><?php echo $total_sub2; ?> </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>