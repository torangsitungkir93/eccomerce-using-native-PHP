<?php

if (isset($_GET['cari_nama'])) {
    $cari_nama = $_GET['cari_nama'];
    $sql = "SELECT * FROM film WHERE judul_film LIKE '%" . $cari_nama . "%' ";
    $data = query($sql);
} else {
    $sql = "SELECT * FROM film ORDER BY id DESC";
    $data = query($sql);
}
?>

<div id="mycarousel">
    <div id="demo" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
            <li data-target="#demo" data-slide-to="3"></li>
            <li data-target="#demo" data-slide-to="4"></li>
            <li data-target="#demo" data-slide-to="5"></li>
            <li data-target="#demo" data-slide-to="6"></li>
            <li data-target="#demo" data-slide-to="7"></li>
            <li data-target="#demo" data-slide-to="8"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active" height="400px">
                <a href="index.php?halaman=details&&id_details=32">
                    <img src="assets/images/slide1.jpg " alt="">
                </a>
            </div>
            <div class="carousel-item" height="400px">
                <a href="index.php?halaman=details&&id_details=70">
                    <img src="assets/images/slide2.jpg" alt="">
                </a>
            </div>
            <div class="carousel-item" height="400px">
                <a href="index.php?halaman=details&&id_details=34">
                    <img src="assets/images/slide3.jpg" alt="">
                </a>
            </div>
            <div class="carousel-item" height="400px">
                <a href="index.php?halaman=details&&id_details=85">
                    <img src="assets/images/slide4.jpg" alt="">
                </a>
            </div>
            <div class="carousel-item" height="400px">
                <a href="index.php?halaman=details&&id_details=33">
                    <img src="assets/images/slide5.jpg " alt="">
                </a>
            </div>
            <div class="carousel-item" height="400px">
                <a href="index.php?halaman=details&&id_details=55">
                    <img src="assets/images/slide6.jpg" alt="">
                </a>
            </div>
            <div class="carousel-item" height="400px">
                <img src="assets/images/slide7.jpg" alt="">
            </div>
            <div class="carousel-item" height="400px">
                <img src="assets/images/slide8.jpg" alt="">
            </div>
            <div class="carousel-item" height="400px">
                <img src="assets/images/slide9.jpg" alt="">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>

    </div>
</div>
<div class="daftar-film-baru">
    <div class="daftar-terbaru">
        <div class="daftar-terbaru2">
            <h2>Our Latest Products</h2>
        </div>
    </div>
    <div class="daftar-film1">
        <div class="daftar-film2">
            <?php
            $cek = 0;

            foreach ($data as $row) {
                $cek++;
                if ($cek <= 9) {
                    ?>
            <div class="kotak-film">
                <a href="index.php?halaman=details&&id_details=<?= $row['id']; ?>"><img
                        src="images/<?= $row['gambar_film'] ?>" width="200px" height="280px"></a>
                <p>Judul : <?= $row['judul_film'] ?>
                    <br>
                    Harga : <?= $row['harga_film'] ?>
                </p>
                <div class="kotak-film-pilihan">
                    <a href="index.php?halaman=details&&id_details=<?= $row['id']; ?>"><button class="btn btn-info"> <i
                                class="fas fa-info-circle"></i>
                            Lihat Detail</button></a> |
                    <?php
                                    if ($row['stok_film'] > 0) {
                                        ?>
                    <a href="index.php?id=<?= $row['id'] ?>"><button class="btn btn-success"> <i
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
                            }
                            ?>
                </div>
            </div>
            <?php
                }
                ?>
        </div>
    </div>
</div>
<div class="spasi_div">
</div>