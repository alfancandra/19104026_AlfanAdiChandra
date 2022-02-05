<?php
    // koneksi database
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "db_php_crud";

    // lakukan koneksi ke database
    $conn = new mysqli($host,$user,$pass,$dbname);

    // Jika error ketika koneksi ke database
    // tampilkan pesan error
    if($conn-> connect_error){
        die('Koneksi Gagal : '. $conn->connect_error);
    }

?>