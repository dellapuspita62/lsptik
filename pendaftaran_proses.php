<?php
include 'config/conn.php';

$nik  = $_POST['nik'];
$nama  = $_POST['nama'];
$skema  = $_POST['skema'];
$email  = $_POST['email'];

$result = mysqli_query($query, "INSERT INTO pendaftaran (nik, nama, skema, email) 
      VALUES ('$nik', '$nama','$skema','$email')");
if ($result) {
    echo '<script>alert("Data Berhasil DiTambahkan");
              window.location="pendaftaran.php" </script>';
} else {
    echo '<script>alert("Data Gagal DiTambahkan");
              window.location="pendaftaran_proses.php" </script>';
}
