<?php
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi,"DELETE FROM checkout WHERE id='$id'")or
die(mysql_error());
header("location:checkout.php?pesan=hapus");
?>