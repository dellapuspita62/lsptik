<?php

    $server = "localhost";
    $user = "root";
    $password = "";
    $db = "ujikom";

    $query = mysqli_connect($server, $user, $password, $db);

    if (!$query) {
        die("Gagal terhubung ke database: " . mysqli_connect_error());
    }
