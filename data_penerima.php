<?php

if (isset($_POST['jual'])) {
    if (isset($_SESSION['jml_keranjang'])) {
        $no = 0;
        foreach ($_SESSION['keranjang'] as $id_produk => $jumlah) {
            // Menampilkan Produk yang sedang diperulangan berdasarkan id_produk
            $sql = "SELECT * FROM film WHERE id='$id_produk'";
            $query = mysqli_query($conn, $sql);
            $data = mysqli_fetch_assoc($query);

            $username = $_SESSION['username'];
            $no = $data['stok_film'] - $jumlah;
            tambah_penjualan($_POST, $username, $id_produk, $jumlah);
            ubah_jumlah_film($id_produk, $no);
            echo "jumlah film : $no";
            unset($_SESSION['keranjang'][$id_produk]);
        }
        $_SESSION['jml_keranjang'] = 0;
    }


    echo "
        <script>
            alert('Yakin Membeli ? ! ');
            document.location.href = 'index.php?halaman=riwayat';
        </script>
    ";
}
?>


<div class="form_belanja">

    <h2> <i class="fas fa-cart-plus"></i> Form Belanja,isi data-data berikut </h2>

    <div class="kotak_form">
        <div class="card">
            <div class="card-body">

                <form method="post" action="">
                    <input type="hidden" name="status" value="Pending">
                    <div class="form-group">
                        <label>Nama Penerima</label>
                        <input type="text" name="nama" class="form-control" id="nama_penerima" placeholder="Input Nama"
                            required>
                    </div>
                    <div class="form-group">
                        <label>Nomor HP</label>
                        <input type="text" name="no_hp" class="form-control" id="no_hp"
                            placeholder="Input Nomor Handphone" required>
                    </div>
                    <div class="form-group">
                        <label>Kota</label>
                        <input type="text" name="kota" class="form-control" id="kota" placeholder="Input Kota" required>
                    </div>
                    <div class="form-group">
                        <label>Kode Pos</label>
                        <input type="text" name="postal" class="form-control" id="kode_pos" placeholder="Input Kode Pos"
                            required>
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea class="form-control" name="alamat" id="alamat" rows="4" placeholder="Input Alamat"
                            required></textarea>
                    </div>

                    <button type="submit" class="btn btn-info btn-data-penerima" name="jual"><i
                            class="far fa-check-circle"></i>
                        Submit Order
                    </button>
                </form>


                <!-- rincian -->
            </div>
        </div>
    </div>

</div>