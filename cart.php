<?php
if (isset($_POST['beli'])) {
    if (!isset($_SESSION['nama_user'])) {
        echo "
        <script>
            document.location.href = 'index.php?halaman=cart&&error=login';
        </script>
    ";
    } else if ($_SESSION['jml_keranjang'] == 0) {
        echo "
        <script>
            document.location.href = 'index.php?halaman=cart&&error=belanja';
        </script>
    ";
    } else {
        echo "
        <script>
            document.location.href = 'index.php?halaman=data_penerima';
        </script>
        ";
    }
}

if (isset($_POST['cancel'])) {
    echo "
    <script>
        document.location.href = 'index.php';
    </script>
";
}
?>


<div class="tulisan_cart">
    <h2><i class="fas fa-cart-plus"></i> Keranjang Belanja Anda</h2>
</div>
<div class="kotak_cart">
    <div class="card">
        <div class="card-body">
            Tempat melihat keranjang belanja anda. Silakan tekan CANCEL ORDER untuk membatalkan pesanan dan SUBMIT ORDER
            untuk membeli.
        </div>
    </div>
</div>
<div class="tabel_keranjang">
    <form method="POST" action="index.php?halaman=cart">
        <?php
        if (isset($_GET['error'])) : ?>
        <?php if (($_GET['error']) == 'belanja') { ?>
        <p style="color:red;font-style:italic;"> Keranjang Pesanan Anda masih Kosong </p>
        <?php } elseif (($_GET['error']) == 'login') { ?>
        <p style="color:red;font-style:italic;"> Anda harus Login dulu baru bisa Memesan </p>
        <?php }
                if (($_GET['error']) == 'stok') { ?>
        <p style="color:red;font-style:italic;"> Maaf,Stok tidak mencukupi </p>
        <?php }
        endif; ?>
        <table class="table table-hover table_cart" border="1">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Sub Total</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $total = 0;
                $nomor = 1;
                if (isset($_SESSION['keranjang'])) :
                    foreach ($_SESSION['keranjang'] as $id_produk => $jumlah) :
                        // Menampilkan Produk yang sedang diperulangan berdasarkan id_produk
                        $sql = "SELECT * FROM film WHERE id='$id_produk'";
                        $query = mysqli_query($conn, $sql);
                        $data = mysqli_fetch_assoc($query);
                        ?>
                <tr>
                    <td>
                        <?= $nomor++ ?>
                    </td>
                    <th scope="row">
                        <div class="gambar_cart">
                            <?= $data['judul_film']; ?> <br>
                            <a href=""><img src="images/<?= $data['gambar_film']; ?>" width="100px" height="150px"></a>
                        </div>
                    </th>
                    <td>
                        <?php echo $jumlah; ?>
                        <br>
                        <a href="index.php?halaman=cart&&id=<?= $data['id'] ?>" button
                            class="btn btn-success">TAMBAH</a> |
                        <?php if ($jumlah <= 1) { ?>
                        <a href="index.php?halaman=cart&&id_hapus=<?= $data['id'] ?>" button
                            class="btn btn-danger">HAPUS</a>
                        <?php } else { ?>
                        <a href="index.php?halaman=cart&&id_hapus=<?= $data['id'] ?>" button
                            class="btn btn-warning">KURANGI</a>
                        <?php } ?>
                    </td>
                    <td><?php echo 'Rp ';
                                        echo $data['harga_film'] ?>
                    </td>
                    <?php $sub_total = $data['harga_film'] * $jumlah; ?>
                    <td><?php echo 'Rp ';
                                        echo $sub_total ?>
                    </td>
                    <?php $total = $total + $sub_total; ?>
                </tr>
                <?php
                    endforeach;
                endif; ?>
                <?php
                if ($_SESSION['jml_keranjang'] <= 0) {
                    ?>
                <tr style="background-color:#aeff78;text-align:center;">
                    <th colspan="5"> Keranjang pesanan anda masih kosong ,silahkan memesan !! </th>
                </tr>
                <?php
                }
                ?>
                <tr style="background-color: #aeff78">
                    <th colspan="4" style="text-align: right;"> Total </th>
                    <?php
                    $harga_diskon1 = $total - ($total * 0.1);
                    $harga_diskon2 = $total - ($total * 0.25);
                    if ($total < 200000) {
                        ?>
                    <td><?php echo 'Rp ';
                                echo $total ?></td>
                    <?php
                    } else if (($total >= 200000) && ($total < 1000000)) {
                        ?>
                    <td>
                        <strike class="text-danger"><?php echo 'Rp ';
                                                            echo $total ?><br>
                        </strike>
                        <?php echo 'Rp ';
                                echo  $harga_diskon1 ?></td>
                    <?php
                    } else if ($total >= 1000000) {
                        ?>
                    <td>
                        <strike class="text-danger"><?php echo 'Rp ';
                                                            echo $total ?><br>
                        </strike>
                        <?php echo 'Rp ';
                                echo  $harga_diskon2 ?></td>
                    <?php
                    }
                    ?>
                </tr>

                <tr>
                    <th colspan="5"> Note: Harga yang diberikan belum termasuk dengan ongkos kirim, Silakan hubungi
                        kontak kami untuk memesan. <br>
                        <p class="text-danger">Promo Akhir Tahun !! <i class="fa fa-smile-beam"></i> Pembelian > Rp
                            200000 Disc 10 % &&
                            Pembelian >Rp 1000000 Disc 25 %
                            >1
                            Jt
                            Disc 25 % !!!</p>
                    </th>
                </tr>
            </tbody>
        </table>
        <center>
            <button type="submit" class="btn btn-info" name="beli"> <i class="far fa-check-circle"></i> SUBMIT
                ORDER</button>
            <button type="submit" class="btn btn-warning" name="cancel"> <i class="far fa-times-circle"></i>
                CANCEL ORDER</button>
        </center>
    </form>
</div>