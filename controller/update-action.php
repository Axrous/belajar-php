<?php

include 'config.php';


    if(isset($_POST['update'])) {

        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $harga = $_POST['harga'];
        $jenis = $_POST['jenis'];
        $stok = $_POST['stok'];
        $description = $_POST['description'];

        $result = mysqli_query($conn, "UPDATE barang SET
        nama = '$nama',
        harga = '$harga',
        jenis = '$jenis',
        stok = '$stok',
        description = '$description'
        WHERE id = $id
        ");

        header("location: ../index.php");
    }
?>