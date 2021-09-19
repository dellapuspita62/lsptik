<?php
 
 include 'config/conn.php';


   $nik=$_GET['nik'];

    $result = mysqli_query($query, "DELETE FROM `pendaftaran` WHERE nik='$nik'");

    if ($result) 
      {
        echo '<script>alert("Data Berhasil Dihapus");
        window.location="pendaftaran_data.php" </script>';
      } 
    else
    {
        echo '<script>alert("Data Gagal Dihapus");
        window.location="pendaftaran_data.php" </script>';
    }
?>
