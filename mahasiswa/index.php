<?php
require_once '../config/koneksi.php';

$query = "SELECT * FROM `mhspaw2`";
$result = mysqli_query($koneksi, $query);
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
                <div class="card-header d-flex align-middle">
                    <div class="card-title h3">Form Data Mahasiswa</div>
                </div>
                <div class="card-body">
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
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
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