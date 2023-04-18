<?php 
require "../koneksi.php";
$pembelian = query("SELECT * FROM pembelian"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemograman CRUD</title>
</head>
<body>
    <h1>Mengedit data pembelian </h1>
    <br>
    <a href="../View/index.php" class="back-button">Lihat semua data</a>
    <form action="../prosesedit.php" method="post">
        <?php foreach ($pembelian as $u) : ?>
        <table border="1">
            <tr>
                <td>Nama pembeli</td>
                <td><input type="text" name="nama_pembeli" value="<?= $u['nama_pembeli'];?>" required></td>
            </tr>
            <tr>
                <td>Tempat pembelian</td>
                <td><input type="text" name="tempat_pembelian" value="<?= $u['tempat_pembelian'];?>" required></td>
            </tr>
            <tr>
                <td>barang</td>
                <td><input type="text" name="barang" value="<?= $u['barang'];?>" required></td>
            </tr>
            <tr>
                <td>nama toko</td>
                <td><input type="text" name="nama_toko" value="<?= $u['nama_toko'];?>" required></td>
            </tr>
            <tr>
                <td>Tindak Lanjut</td>
                <td><input type="text" name="tindak_lanjut" value="<?= $u['tindak_lanjut'];?>" required></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="save data"></td>
            </tr>
        </table>
        <?php endforeach;?>
    </form>
</body>
</html>