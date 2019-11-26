<?php
$sql = "SELECT * FROM user";
$data = query($sql);
?>


<div class="kotak_data_user">
    <h1><i class="fas fa-user-circle" style="color: green"></i> Data User</h1>
    <?php
    if (isset($_GET['cek'])) {
        if ($_GET['cek'] == 'sudah') {
            ?>
    <p style="color:green;font-style:italic;"> Data sudah dihapus </p>
    <?php
            } else {
                ?>
    <p style="color:green;font-style:italic;"> Data Belum dihapus </p>
    <?php
        }
    }
    ?>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Username</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">No Hp</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($data as $row) {
                ?>
            <tr>
                <th scope="row"><?php echo $no++ ?></th>
                <td><?= $row['username'] ?></td>
                <td><?= $row['nama'] ?></td>
                <td><?= $row['email'] ?></td>
                <td><?= $row['no_hp'] ?></td>
                <td>
                    <a href="index.php?halaman=data_edit_user&&id=<?= $row['username'] ?>">
                        <button class="btn fa fa-edit bg-success" style="color:white"></button>
                    </a>
                    <a href="hapus_user.php?id=<?= $row['username'] ?>">
                        <button style="color:white" class="btn fa fa-trash bg-danger"
                            onclick="return confirm('Yakin !? Data yang dihapus gabisa  dibalikin lohh ')">
                        </button>
                    </a>
                </td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

</div>