<?php
require_once '../config/koneksi.php';

$id = $_GET['id'];
$query = "DELETE FROM `mhspaw2` WHERE `nbi` = '$id'";
$result = mysqli_query($koneksi, $query);
if ($result) {
    echo "
            <script>
                alert('Data Berhasil Dihapuskan');
                window.location.href = './';
            </script>
        ";
} else {
    echo "Data Gagal Dihapuskan";
}
