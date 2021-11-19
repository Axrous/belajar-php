<?php

include 'config.php';


if(isset($_POST['Submit'])) {
    $nama = $_POST['nama'];
    $jenis = $_POST['jenis'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $description = $_POST['description'];


    
    $sql = "INSERT INTO barang(nama, jenis, harga, stok, description)
    VALUES('$nama','$jenis', '$harga', '$stok', '$description')";
    
    if(mysqli_query($conn, $sql)) {
        echo "MENU BERHASIL DITAMBAHKAN. <a href='../index.php'>Kembali ke menu</a>";
    } else {
        echo "GAGAL INPUT MENU";
    }
}

?> 