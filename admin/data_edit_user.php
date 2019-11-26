<?php

$id = $_GET['id'];
$sql = "SELECT * FROM user WHERE username='$id'";
$query = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($query);

if (isset($_POST['user_change'])) {
    if (edit_user($_POST) > 0) {
        echo "
            <script>
                alert('Data berhasil diedit ! ');
                document.location.href = 'index.php?halaman=datauser';
            </script>
        ";
    } else {
        echo "
        <script>
            alert('Data gagal Diedit !');
            document.location.href = 'index.php?halaman=datauser';
        </script>
    ";
    }
}

?>


<div class="kotak_data_edit_user">
    <h1><i class="fas fa-user-edit"></i> Form Edit Data User</h1>

    <div>
        <div class="card bg-light mb-3">
            <div class="card-body">
                <form method="POST" action="">
                    <input type="hidden" value="<?= $data['username']; ?>" name="username">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Username</label>
                        <input type="text" class="form-control" name="" value="<?= $data['username']; ?>" disabled>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama</label>
                        <input type="text" class="form-control" name="nama" placeholder="Input Nama"
                            value="<?= $data['nama']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="text" class="form-control" name="email" placeholder="Input Email"
                            value="<?= $data['email']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nomor Handphone</label>
                        <input type="text" class="form-control" name="no_hp" placeholder="Input No Hp"
                            value="<?= $data['no_hp']; ?>">
                    </div>
                    <center>
                        <button type="submit" class="btn btn-primary" name="user_change"><i
                                class="far fa-check-circle"></i>
                            Submit</button>
                        <button type="reset" class="btn btn-danger"><i class="far fa-times-circle"></i> Reset</button>
                    </center>
                </form>
            </div>
        </div>
    </div>
</div>