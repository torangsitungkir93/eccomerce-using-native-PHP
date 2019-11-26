<?php
// Cek Apakah tombol Submit sudah ditekan atau belu,
if (isset($_POST["submit"])) {

    // Cek apakah password yang anda masukkan sama atau tidak
    if ($_POST['password1'] != $_POST['password2']) {
        echo "
        <script>
            document.location.href = 'index.php?halaman=register&&error=password';
        </script>
    ";
    } else {
        //Cek apakah data berhasil ditambahkan atau tidak
        if (tambah($_POST) > 0) {
            echo "
                <script>
                    alert('Data berhasil ditambahkan ! ');
                    document.location.href = 'login.php';
                </script>
            ";
        } else {
            echo "
            <script>
                document.location.href = 'index.php?halaman=register&&error=username';
            </script>
        ";
        }
    }
}
?>

<div class="tulisan_awal">
    <h2>Registration Form</h2>
</div>
<div class="kotak_register">
    <div class="card">
        <div class="card-body">
            <?php if (!isset($_GET['error'])) { ?>
            <?php } else if (($_GET['error'] == 'password')) { ?>
            <p style="color:red;font-style:italic;"> Password Anda Harus sama ! </p>
            <?php } else if (($_GET['error'] == 'username')) { ?>
            <p style="color:red;font-style:italic;"> Username Tersebut Sudah Terdaftar ! </p>
            <?php } ?>
            <form method="post" action="">
                <div class="form-group">
                    <label for="exampleInputUsername1">Username</label>
                    <input type="text" class="form-control" id="exampleInputusername1" placeholder="Enter username "
                        name="username" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter password"
                        name="password1" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1"
                        placeholder="Re-Enter password" name="password2" required>
                </div>
                <div class="garis"> </div>

                <div class="form-group">
                    <label for="exampleInputName1">Name</label>
                    <input type="text" class="form-control" id="exampleInputname1" placeholder="Enter name"
                        name="nama_lengkap" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputBirthDate1">No HP</label>
                    <input type="number" class="form-control" placeholder="Enter Phone Number" id="exampleInputdate1"
                        name="nomor_hp" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Enter email" name="email" required>
                </div>
                <center>
                    <button type="submit" class="btn btn-info" name="submit"> <i class="far fa-check-circle"></i>
                        Submit</button>
                </center>
            </form>

        </div>
    </div>
</div>