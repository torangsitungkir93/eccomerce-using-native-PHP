<?php
include "functions.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/fontawesome/css/all.css">
    <link rel="stylesheet" href="style_admin.css">
    <link rel="icon" type="image/png" href="../assets/images/logo2.png">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php">
            <img src="../assets/images/logo2.png" width="125" height="125" alt="logo">
        </a>
        <div>
            <div style="font-size: 48px;">Dashboard Admin </div>
            <div style="font-size: 24px;">Attala DVD Store
            </div>
        </div>
        <!-- <button type="button" class="btn btn-dark" style="margin-left: 770px">Logout</button> -->
    </nav>
    <nav style="background-color: #4f4f4f; height: 5px;"></nav>
    <div>
        <div class="clearfix">

            <div class="float-left"
                style="background-color: white; width: 15.7%; height: 800px; line-height: 35px; font-weight: bold; border-right:3px solid black;">
                <br>

                <ul class="navigasi">
                    <a style="color: black" href="index.php">
                        <li class="fa fa-home fa-4x" style="color: coral"></li>
                    </a>
                    <li><a href="index.php?halaman=data_film" button class="
                            <?php if ($_GET['halaman'] == 'data_film') {
                                echo "active_line";
                            } ?>" style="color: black;">
                            Data FILM </a></li>
                    <li><a href="index.php?halaman=datauser" button class="t
                    <?php if ($_GET['halaman'] == 'datauser') {
                        echo "active_line";
                    } ?>" style=" color: black;"> Data
                            User </a></li>
                    <li><a href="index.php?halaman=data_pending" button class="
                    <?php if ($_GET['halaman'] == 'data_pending') {
                        echo "active_line";
                    } ?>" style="color: black;"> Data
                            Pending</a></li>
                    <li><a href="index.php?halaman=data_sukses" button class="
                    <?php if ($_GET['halaman'] == 'data_sukses') {
                        echo "active_line";
                    } ?>" style="color: black;">
                            Data Success </a></li>
                    <li><a href="login.php">Logout</a></li>
                </ul>
            </div>

            <div class="float-right overflow-auto" style=" width: 84%; height: 800px;">