
<?php

include '../controller/config.php';

$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM barang WHERE id=$id");

while($data = mysqli_fetch_array($result)) {
    $nama = $data['nama'];
    $harga = $data['harga'];
    $jenis = $data['jenis'];
    $stok = $data['stok'];
    $description = $data['description'];
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3>Mengubah Menu</h3>
    <form action="../controller/update-action.php" method="POST">
    <table>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" value="<?php echo $nama ?>"></td>
        </tr>
        <tr>
            <td>Jenis</td>
            <td><input type="text" name="jenis" value="<?php echo $jenis ?>"></td>
        </tr>
        <tr>
            <td>Harga</td>
            <td><input type="text" name="harga" value="<?php echo $harga ?>"></td>
        </tr>
        <tr>
            <td>Stok</td>
            <td><input type="text" name="stok" value="<?php echo $stok ?>"></td>
        </tr>
        <tr>
            <td>Deskripsi</td>
            <td><input type="text" name="description" value="<?php echo $description ?>"></td>
        </tr>
        <tr>
            <td><input type="hidden" name="id" value="<?php echo $id ?>"></td>
            <td><input type="submit" value="Update" name="update"></td>
        </tr>
    </table>
    </form>
    <button onclick="location.href='../index.php'" type="button">
         Cancel</button>
</body>
</html>


