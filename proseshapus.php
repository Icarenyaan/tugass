<?php
include "koneksi.php";

$id = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM pembelian_barang WHERE id = '$id'") or die(mysqli_error());

header("location:../View/index.php");

?>