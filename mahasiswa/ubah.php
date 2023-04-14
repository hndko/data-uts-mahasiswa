<?php
require_once '../config/koneksi.php';

$query = "SELECT * FROM `mhspaw2`";
$result = mysqli_query($koneksi, $query);

$id = $_GET['id'];
$show = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT * FROM `mhspaw2` WHERE `nbi` = '$id'"));

if (isset($_POST['submit'])) {
    $nama = htmlspecialchars($_POST['nama']);
    $alamat = htmlspecialchars($_POST['alamat']);
    $no_telpon = htmlspecialchars($_POST['no_telpon']);

    $query = "UPDATE `mhspaw2` SET `nama`='$nama',`alamat`='$alamat',`no`='$no_telpon' WHERE `nbi`='$id'";
    $result = mysqli_query($koneksi, $query);
    if ($result) {
        echo "
            <script>
                alert('Data Berhasil Diupdate');
                window.location.href = './';
            </script>
        ";
    } else {
        echo "Data Gagal Diupdate";
    }
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
                    <div class="card-title h3">Form Tambah Data</div>
                    <a href="<?= $base_url ?>mahasiswa" class="btn btn-warning">Kembali</a>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="row mb-3">
                            <label for="nbi" class="col-sm-2 col-form-label">NBI</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nbi" id="nbi" value="<?= $show['nbi'] ?>" autocomplete="off" required readonly>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama" id="nama" value="<?= $show['nama'] ?>" autocomplete="off" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-10">
                                <textarea name="alamat" id="alamat" class="form-control" rows="3" autocomplete="off" required><?= $show['alamat'] ?></textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="no_telpon" class="col-sm-2 col-form-label">Nomor Telpon</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="no_telpon" id="no_telpon" value="<?= $show['no'] ?>" autocomplete="off" maxlength="20" required>
                            </div>
                        </div>
                        <div class="text-end">
                            <button type="submit" name="submit" class="btn btn-success">Ubah</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <?php require_once '../partikel/footer.php' ?>
</body>

</html>