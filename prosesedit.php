<?php

include "koneksi.php";




$nama_pembeli = $_POST['nama_pembeli'];

$tanggal_pembelian = $_POST['tanggal_pembelian'];

$barang = $_POST['barang'];

$nama_toko = $_POST['nama_toko'];

$tindak_lanjut = $_POST['tindak_lanjut'];




mysqli_query($koneksi, "UPDATE pembelian_barang SET nama_pembeli='$nama_pembeli', tanggal_pembeli='$tanggal_pembeli', barang='$barang', nama_toko='$nama_toko', tindak_lanjut='$tindak_lanjut' WHERE id='$id'") or die(mysqli_error());




header("location:../View/index.php");




?>