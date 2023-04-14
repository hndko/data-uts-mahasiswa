<?php
require_once '../config/koneksi.php';

if (isset($_POST['submit'])) {
    $search = htmlspecialchars($_POST['search']);
    $query = "SELECT * FROM `mhspaw2` WHERE `nbi` LIKE '%$search%'";
    $result = mysqli_query($koneksi, $query);
} else {
    $query = "SELECT * FROM `mhspaw2`";
    $result = mysqli_query($koneksi, $query);
}
?>

<!doctype html>
<html lang="en">

<head>
    <?php require_once '../partikel/head.php' ?>
</head>

<body>
    <?php require_once '../partikel/navbar.php' ?>

    <main>
        <section class="container pt-5">
            <div class="card">
                <div class="card-header d-flex align-middle justify-content-between">
                    <div class="card-title h3">Form Data Mahasiswa</div>
                    <a href="tambah.php" class="btn btn-primary">Tambah Data</a>
                </div>
                <div class="card-body">
                    <div class="col-sm-12">
                        <div class="d-flex justify-content-end">
                            <form class="d-flex" action="" method="post">
                                <input type="text" name="search" id="search" class="form-control" placeholder="Search...">
                                <button type="submit" name="submit" class="btn btn-outline-info">Search</button>
                            </form>
                        </div>
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No </th>
                                <th scope="col">NBI</th>
                                <th scope="col">Nama Mahasiswa</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">No HP</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($result as $row) :
                            ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $row['nbi'] ?></td>
                                    <td><?= $row['nama'] ?></td>
                                    <td><?= $row['alamat'] ?></td>
                                    <td><?= $row['no'] ?></td>
                                    <td>
                                        <a href="<?= $base_url ?>mahasiswa/ubah.php?id=<?= $row['nbi'] ?>" class="btn btn-success btn-sm">Ubah</a>
                                        <a href="<?= $base_url ?>mahasiswa/delete.php?id=<?= $row['nbi'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin?')">Hapus</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </main>

    <?php require_once '../partikel/footer.php' ?>
</body>

</html>