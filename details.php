<?php

$id = $_GET['id_details'];
$sql = "SELECT * FROM film WHERE id='$id'";
$query = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($query);

?>


<div class="tulisan_detail">
    <h2>Detail Film <?= $data['judul_film']; ?></h2>
</div>
<div class="kotak_detail">
    <div class="card">
        <div class="card-body">

            <div class="clearfix">
                <div class="kotak_detail_kiri">
                    <div class="gambar_detail">
                        <a href=""><img src="images/<?= $data['gambar_film']; ?>" width="200px" height="300px"></a>
                    </div>
                </div>

                <div class="kotak_detail_kanan">
                    <h2 class="judul_detail"> <?= $data['judul_film']; ?> </h2>

                    <table cellpadding="5px">
                        <tr>
                            <td> Genre </td>
                            <td> : </td>
                            <td> <?= $data['genre_film']; ?> </td>
                        </tr>
                        <tr>
                            <td> Bahasa </td>
                            <td> : </td>
                            <td> <?= $data['bahasa']; ?> </td>
                        </tr>
                        <tr>
                            <td> Subtitle </td>
                            <td> : </td>
                            <td> <?= $data['subtittle']; ?> </td>
                        </tr>
                        <tr>
                            <td> Stok </td>
                            <td> : </td>
                            <td> <?= $data['stok_film']; ?> </td>
                        </tr>
                        <tr>
                            <td> Deskripsi </td>
                            <td> : </td>
                            <td>
                                <div class="overflow-auto">
                                    <div style="height:200px">
                                        &nbsp&nbsp&nbsp&nbsp&nbsp <?= $data['desk_film']; ?>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td> Harga @ 1 Buah </td>
                            <td> : </td>
                            <td> <?= $data['harga_film']; ?> </td>
                        </tr>
                    </table>
                </div>
            </div>

            <br>
            <center>
                <?php
                if ($data['stok_film'] != 0) {
                    ?>
                <a href="index.php?id=<?= $data['id'] ?>"><button class="btn btn-success"> <i
                            class="fa fa-cart-arrow-down"></i> Add to
                        Cart</button></a>
                <?php
                } else {
                    ?>
                <a href="#"><button class="btn btn-danger" disabled> <i class="fa fa-cart-arrow-down"></i> Barang
                        Sold
                    </button></a>
                <?php
                }
                ?>
                <a href="index.php">
                    <button type="submit" class="btn btn-danger"> <i class="fas fa-backward"></i> Kembali </button>
                </a>
            </center>
        </div>
    </div>
</div>