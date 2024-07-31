<?php
include "koneksi.php";
$nama = $_GET['nama'];
$sql = "DELETE FROM siswa WHERE nama ='$nama'";
$query = mysqli_query($conn, $sql);

header("Location: index.php");