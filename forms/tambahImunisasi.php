<?php
include("koneksi.php");

// Ambil data dari form
$idAnak = $_POST['id_anak'];
$tanggalImunisasi = $_POST['tgl_imunisasi'];
$jenisImunisasi = $_POST['jenis_imunisasi'];

// Query SQL untuk menambahkan data imunisasi
$sql = "INSERT INTO imunisasi (id_anak, tanggal_imunisasi, jenis_imunisasi)
        VALUES ('$idAnak', '$tanggalImunisasi', '$jenisImunisasi')";

if ($koneksi->query($sql) === TRUE) {
    echo "<script type='text/javascript'>alert('Data Imunisasi Berhasil Ditambah!');</script>";
    echo "<script type='text/javascript'>window.location.href = document.referrer;</script>";
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}

$koneksi->close();
?>
