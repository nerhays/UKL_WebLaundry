<?php
include '../koneksi.php';
$nama = $_POST['nama'];
$ubah = md5($_POST['password']);
$level = $_POST['level'];
mysqli_query($koneksi,"insert into user values('','$nama','$ubah','$level')");
header("location:pengguna.php");
?>
