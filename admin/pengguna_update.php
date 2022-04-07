<?php
include '../koneksi.php';
$id = $_POST['id'];
$nama = $_POST['username'];
$hp = $_POST['password'];
$alamat = $_POST['level'];
mysqli_query($koneksi,"update user set username='$nama', password='$hp', level='$alamat' where id='$id'");
header("location:pengguna.php");
?>
