<?php
// Sisipkan file koneksi.php
include('koneksi.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update'])) {
    $id_kader = $_POST['nik'];
    $nama_kader = $_POST['nama'];
    $tgl_lahir = $_POST['tanggal-lahir'];
    $alamat = $_POST['alamat'];
    $jabatan = $_POST['jabatan'];
    $tugas_pokok = $_POST['tugas-pokok']; // Modified field name
    $no_telp = $_POST['no-telp']; // Modified field name

    // Siapkan pernyataan SQL untuk memperbarui data di dalam tabel
    $sql = "UPDATE tbl_kader
            SET nama_kader = '$nama_kader', 
                tgl_lahir = '$tgl_lahir', 
                alamat = '$alamat', 
                jabatan = '$jabatan', 
                tugas_pokok = '$tugas_pokok',
                no_telp = '$no_telp'
            WHERE id_kader = '$id_kader'";

    // Eksekusi pernyataan SQL
    if ($koneksi->query($sql) === TRUE) {
        echo "<script type='text/javascript'>
            alert('Data Kader Berhasil Diperbarui!');
        </script>";
        echo '<script>window.location.href = "kader.php";</script>';
        exit();
    } else {
        echo "Terjadi kesalahan: " . $koneksi->error;
    }
}

// Tutup koneksi basis data
$koneksi->close();
?>
