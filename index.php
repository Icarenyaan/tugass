<?php

require ("koneksi.php");

$pembelian = query("SELECT * FROM tugass8"); ?>




<!-- MVC atau Model View Controller adalah sebuah pola desain arsitektur dalam sistem pengembangan website yang terdiri dari tiga bagian, yaitu: 1. Model, bagian yang mengelola dan berhubungan langsung dengan database; 2. View, bagian yang akan menyajikan tampilan informasi kepada pengguna; dan 3. Controller, bagian yang menghubungkan model dan view dalam setiap proses request dari user. -->




<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Pemrograman CRUD</title>

</head>

<body>

    <h1>Aplikasi Pembelian barang</h1>

    <br>

    <a href="../Model/formtambahan.php">Tambah Data</a>

    <table border="1">

        <tr>

            <th>No.</th>

            <th>Nama pembeli</th>

            <th>Tanggal Pembelian</th>

            <th>Barang</th>

            <th>Nama Toko</th>

            <th>Opsi</th>

        </tr>

        <?php $number = 1;?>

        <?php foreach ($pembelian as $u) : ?>

        <tr>

            <td align="center"><?=$number;?></td>

            <td><?= $u['nama_pembeli'];?></td>

            <td><?= $u['tanggal_pembeli'];?></td>

            <td><?= $u['barang'];?></td>

            <td><?= $u['nama_toko'];?></td>

            <td>

                <a href="../Model/formedit.php?id=<?=$u['id'];?>">Edit</a>

                <a href="../proseshapus.php?id=<?=$u['id'];?>" onclick="return confirm('Apakah anda yakin ingin menghapus data ini')">Hapus</a>

            </td>

        </tr>

        <?php $number++;?>

        <?php endforeach;?>

    </table>

</body>

</html>