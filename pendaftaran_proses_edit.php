<?php
  include 'config/conn.php';

    if(isset($_POST['simpan'])) // isset memastikan data tidak boleh kosong
    {
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $skema = $_POST['skema'];
    $email = $_POST['email'];
   
      $result = mysqli_query($query, "UPDATE pendaftaran SET nama='$nama', skema='$skema', email='$email' WHERE nik='$nik'");

      if ($result) 
      {
          echo '<script>alert("Data Berhasil Diedit");
                 window.location="pendaftaran_data.php" </script>';
      } 
      else
      {
        echo '<script>alert("Data Gagal diedit");
                 window.location="pendaftaran_data.php" </script>';
      }
    }
 ?>