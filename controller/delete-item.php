<?php

    include 'config.php';

    $id = $_GET['id'];

    $result = mysqli_query($conn, "DELETE FROM barang WHERE id = $id");

    header("location:../index.php");
?>

