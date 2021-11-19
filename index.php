<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="judul">
        <h1>Warung Pak Malik</h1>
    </div>
    
<h3>Menu Makanan & Minuman </h3>
<a href="views/add-item.php">Tambah menu</a>
<table border="1" class="table">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Harga</th>
    </tr>
    <h4>MAKANAN</h4>
    <?php
    include 'controller/config.php';
    $mysqli_query = mysqli_query($conn, "SELECT * FROM barang WHERE jenis = 'makanan' ");
    $no= 1;
    while($data = mysqli_fetch_array($mysqli_query)){
    ?>

    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $data['nama']; ?></td>
        <td><?php echo $data['harga'] ?></td>
    </tr>

<?php } ?>
</table>

<table border="1" class="table">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Harga</th>
    </tr>
    <h4>MINUMAN</h4>
    <?php
    $mysqli_query = mysqli_query($conn, "SELECT * FROM barang WHERE jenis = 'minuman' ");
    $no= 1;
    while($data = mysqli_fetch_array($mysqli_query)){
    ?>

    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $data['nama']; ?></td>
        <td><?php echo $data['harga'] ?></td>
    </tr>

<?php } ?>
</table>


</body>
</html>