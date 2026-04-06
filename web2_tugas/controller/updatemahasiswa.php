<?php
include "../model/koneksi.php";

$nim = $_POST['nim'];
$nim_baru = $_POST['nim_baru'];
$nama = $_POST['nama'];
$email = $_POST['email'];

mysqli_query($koneksi,"UPDATE mahasiswa 
SET nim='$nim_baru', nama='$nama', email='$email'
WHERE nim='$nim'");

header("location:../view/mahasiswa.php");
?>