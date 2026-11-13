<?php
$koneksi = mysqli_connect(
    "localhost",
    "root",
    "",
    "aplikasi_kasir"
);

if (!$koneksi) {
    die("Koneksi database gagal");
}
?>