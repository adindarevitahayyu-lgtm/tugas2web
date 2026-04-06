<?php
include "../model/koneksi.php";

$nim = $_GET['nim'];

mysqli_query($koneksi,"DELETE FROM mahasiswa WHERE nim='$nim'");

header("location:../view/mahasiswa.php");
?>