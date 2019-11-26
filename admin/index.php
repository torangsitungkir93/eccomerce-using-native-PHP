<?php
include 'header.php';


if (!isset($_GET['halaman'])) {
    include "home.php";
} elseif ($_GET['halaman'] == 'data_film') {
    include "data_film.php";
} elseif ($_GET['halaman'] == 'tambah_film') {
    include "tambah_film.php";
} elseif ($_GET['halaman'] == 'edit_data_film') {
    include "edit_data_film.php";
} elseif ($_GET['halaman'] == 'data_edit_user') {
    include "data_edit_user.php";
} elseif ($_GET['halaman'] == 'data_pending') {
    include "data_pending.php";
} elseif ($_GET['halaman'] == 'data_sukses') {
    include "data_sukses.php";
} elseif ($_GET['halaman'] == 'datauser') {
    include "datauser.php";
}

include 'footer.php';