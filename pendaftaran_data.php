<?php
include 'config/conn.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Lembaga Sertifikasi Profesi</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-5">
                <a class="navbar-brand" href="index.html">LSP Teknologi Digital</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="index.php">Beranda</a></li>
                        <li class="nav-item"><a class="nav-link" href="pendaftaran.php">Pendaftaran</a></li>

                        <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <nav class="container">
            <div class="text-center mb-5">
                <div class="col-md-9 col-sm-12 content">
                    <div class="col-12">
                        <section class="content-header">
                            <div class="container-fluid">
                                <div class="row mb-2">
                                    <div class="sidebar-sticky pt-3">
                                        <div class="d-sm-flex align-items-center justify-content-between mb-2">
                                            <h1 class="h1 mb-4 text-gray-800">Data Pendaftaran Uji Kompetensi</h1>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                    </div>
                                </div>
                        </section>

                        <div class="row">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <span style="float:left;">
                                                    <a class="btn btn-primary" href="pendaftaran.php">Kembali</a>
                                                    <a class="btn btn-success" onclick="printPDF()"> PDF </a>


                                                </span>
                                                <br><br><br>
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">No</th>
                                                            <th scope="col">NIK</th>
                                                            <th scope="col">Nama</th>
                                                            <th scope="col">Skema</th>
                                                            <th scope="col">Email</th>

                                                            <th scope="col">Aksi</th>


                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        <?php

                                                        $ambil = "SELECT * FROM pendaftaran ORDER BY nik";
                                                        $hasil = mysqli_query($query, $ambil) or die(mysqli_error($query));
                                                        $no = 1;

                                                        while ($data = mysqli_fetch_assoc($hasil)) {

                                                            echo "<tr>";
                                                            echo "<td>" . $no++ . "</td>";
                                                            echo "<td>" . $data['nik'] . "</td>";
                                                            echo "<td>" . $data['nama'] . "</td>";
                                                            echo "<td>" . $data['skema'] . "</td>";
                                                            echo "<td>" . $data['email'] . "</td>";


                                                            echo "<td>";
                                                            echo "<a class='btn btn-primary' href='pendaftaran_edit.php?nik=" . $data['nik'] . "'>Edit</a>";
                                                            echo "<a class='btn btn-danger' href='pendaftaran_proses_hapus.php?nik=" . $data['nik'] . "'>Hapus</a>";

                                                            echo "</td>";

                                                            echo "</tr>";
                                                        }
                                                        ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>


        <!-- Testimonial section-->



    </main>
    <!-- Footer-->
    <footer class="bg-dark py-4 mt-auto">
        <div class="container px-5">
            <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                <div class="col-auto">

                </div>
                <div class="col-auto">
                    <div class="small m-0 text-white">Copyright &copy; LSP 2021</div>

                </div>
            </div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

<script>
    function printPDF() {
        location.href = "print_pendaftaran.php";
    }
   
    
</script>

</html>