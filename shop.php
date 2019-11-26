<?php
if (!isset($_GET['kategori'])) {
    $kat = 'action';
} elseif (($_GET['kategori'] == 'action') || ($_GET['kategori'] == '')) {
    $kat = 'action';
} elseif ($_GET['kategori'] == 'drama') {
    $kat = 'drama';
} elseif ($_GET['kategori'] == 'romance') {
    $kat = 'romance';
} elseif ($_GET['kategori'] == 'horror') {
    $kat = 'horror';
} elseif ($_GET['kategori'] == 'animation') {
    $kat = 'animation';
} elseif ($_GET['kategori'] == 'adventure') {
    $kat = 'adventure';
}


$sql = "SELECT * FROM film WHERE genre_film= '$kat' ORDER BY id DESC";
$data = query($sql);

?>

<div class="kategori_film">
    <a href='index.php?halaman=shop'><button class="btn btn-warning" style="margin-right: 50px;">Kategori Film <i
                class="fa fa-arrow-alt-circle-right"></i></button></a>
    <a href="index.php?halaman=shop">
        <button class="btn btn-dark 
        <?php if ($kat == 'action') {
            echo "active";
        } ?>">Action
        </button>
    </a>
    <a href="index.php?halaman=shop&&kategori=drama">
        <button class="btn btn-dark 
        <?php if ($kat == 'drama') {
            echo "active";
        } ?>">Drama/TV Series
        </button>
    </a>
    <a href="index.php?halaman=shop&&kategori=romance">
        <button class="btn btn-dark 
        <?php if ($kat == 'romance') {
            echo "active";
        } ?>">Romance
        </button>
    </a>
    <a href="index.php?halaman=shop&&kategori=horror">
        <button class="btn btn-dark 
        <?php if ($kat == 'horror') {
            echo "active";
        } ?>">Horror
        </button>
    </a>
    <a href="index.php?halaman=shop&&kategori=animation">
        <button class="btn btn-dark 
        <?php if ($kat == 'animation') {
            echo "active";
        } ?>">Animation
        </button>
    </a>
    <a href="index.php?halaman=shop&&kategori=adventure">
        <button class="btn btn-dark 
        <?php if ($kat == 'adventure') {
            echo "active";
        } ?>">Adventure
        </button>
    </a>
</div>

<div class="daftar_film">
    <div class="tulisan_kategori">
        <div class="tulisan_kategori2">
            <h2>
                <?php echo ucwords($kat); ?>
            </h2>
        </div>
    </div>
    <div class="back_daftar_film overflow-auto">
        <div class="back_daftar_film2">
            <?php
            foreach ($data as $row) {
                ?>
            <div class="kotak_film_berada">
                <div class="gambar">
                    <a href="index.php?halaman=details&&id_details=<?= $row['id']; ?>"><img
                            src="images/<?= $row['gambar_film']; ?>" width="200px" height="300px"></a>
                </div>
                <p class="teks_harga">
                    <?= $row['judul_film'] ?> <br>
                    Harga : Rp <?= $row['harga_film']; ?>
                </p>
                <div class="kotak_pilihan_user">
                    <a href="index.php?halaman=details&&id_details=<?= $row['id']; ?>"><button class="btn btn-info"><i
                                class="fas fa-info-circle"></i> Lihat Detail</button></a> |
                    <?php
                            if ($row['stok_film'] != 0) {
                                ?>
                    <a href="index.php?halaman=shop&&kategori=<?php echo $kat ?>&&id=<?= $row['id'] ?>"><button
                            class="btn btn-success"> <i class="fa fa-cart-arrow-down"></i> Add to
                            Cart</button></a>
                    <?php } else {    ?>
                    <a href="#"><button class="btn btn-danger" disabled> <i class="fa fa-cart-arrow-down"></i> Barang
                            Sold
                        </button></a>
                    <?php
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