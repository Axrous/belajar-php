<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Menambah menu</h3>
    <form action="../controller/add-action.php" method="POST">
    <table>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>Jenis</td>
            <td><input type="text" name="jenis"></td>
        </tr>
        <tr>
            <td>Harga</td>
            <td><input type="text" name="harga"></td>
        </tr>
        <tr>
            <td>Stok</td>
            <td><input type="text" name="stok"></td>
        </tr>
        <tr>
            <td>Deskripsi</td>
            <td><input type="text" name="description"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Simpan" name="Submit"></td>
        </tr>
    </table>
    </form>
    <button onclick="location.href='index.php'" type="button">
         Cancel</button>


</body>
</html>