<?php
    // menyimpan data ke dalam database

    // import file koneksi database
    include "koneksi.php";

    // Tangkap data dari form
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $alamat = $_POST['alamat'];

    // query insert data
    $sql = "INSERT into data(nama, kelas, alamat) VALUES ('$nama', '$kelas', '$alamat')";

    // eksekusi query
    $add = $conn -> query($sql);

    // Jika proses berhasil
    if($add){
        $conn -> close();

        // Kembali ke file index.php
        header("location:index.php");
        exit();
    }else{

        // Jika error tampilkan pesan error
        echo "Error : ".$conn->error;
        $conn->close();
        exit();
    }
    
?>