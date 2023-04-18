<?php

include "koneksi.php";




$nama_pembeli = $_POST['nama_pembeli'];

$tanggal_pembelian = $_POST['tanggal_pembelian'];

$barang = $_POST['barang'];

$nama_toko = $_POST['nama_toko'];

$tindak_lanjut = $_POST['tindak_lanjut'];




mysqli_query($koneksi, "INSERT INTO pembelian_barang (nama_pembeli, tanggal_pembelian, barang, pembelian, tindak_lanjut) VALUES ('$nama_pembeli', '$tanggal_pembelian', '$barang', '$pembelian', '$tindak_lanjut')") or die(mysqli_error());




header("location:../View/index.php");




?>