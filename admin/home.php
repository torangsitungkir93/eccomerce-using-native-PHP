<?php

$user = cek_jumlah('user');
$penjualan = cek_jumlah('penjualan');
$film = cek_jumlah('film');
$pendapatan = pendapatan();
?>


<div class="kotak_home">
    <h3>Welcome Admin ! :) </h3>
    <br>

    <div class="card bg-light mb-3">
        <div class="card-body">
            <div class="clearfix">

                <div class="card text-white bg-success mb-3" style="width: 30%; float: left">
                    <div class="card-header">
                        <b>
                            Jumlah User
                        </b>
                    </div>
                    <div class="card-body">
                        <div class="clearfix">
                            <div style="float: left">
                                <div style="font-size: 36px;"><?php echo $user ?></div>
                                <div style="font-size: 14px;">Jumlah User yang Terdata</div>
                            </div>
                            <i class="fas fa-user-circle fa-5x" style="float: right"></i>
                        </div>
                    </div>
                </div>

                <div class="card text-white bg-info mb-3" style="width: 30%; float: right">
                    <div class="card-header">
                        <b>
                            Jumlah Barang
                        </b>
                    </div>
                    <div class="card-body">
                        <div class="clearfix">
                            <div style="float: left">
                                <div style="font-size: 36px;"><?php echo $film ?></div>
                                <div style="font-size: 14px;">Jumlah Judul DVD yang Dijual</div>
                            </div>
                            <i class="fas fa-dolly-flatbed fa-5x" style="float: right"></i>
                        </div>
                    </div>
                </div>

                <div class="card text-white bg-warning mb-3" style="width: 30%; float: right; margin-right: 60px">
                    <div class="card-header">
                        <b>
                            Jumlah Transaksi
                        </b>
                    </div>
                    <div class="card-body">
                        <div class="clearfix">
                            <div style="float: left">
                                <div style="font-size: 36px;"><?php echo $penjualan ?></div>
                                <div style="font-size: 14px;">Jumlah Transaksi yang Dilakukan</div>
                            </div>
                            <i class="fas fa-cash-register fa-5x" style="float: right"></i>
                        </div>
                    </div>
                </div>

                <div class="card text-white bg-primary mb-3" style="width: 30%; margin:auto;">
                    <div class="card-header">
                        <b>
                            Jumlah Pendapatan
                        </b>
                    </div>
                    <div class="card-body">
                        <div class="clearfix">
                            <div style="float: left">
                                <div style="font-size: 36px;">Rp <?php echo $pendapatan ?>,00 </div>
                                <div style="font-size: 14px;">Jumlah Pendapatan dari DVD yang Dijual</div>
                            </div>
                            <i class="fas fa-money-bill-wave fa-5x"></i>
                            <i class="fas fa-coins fa-5x" style="float: left"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>