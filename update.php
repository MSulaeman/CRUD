<?php
include 'koneksi.php';
$nama = $_POST['nama'];
$umur = $_POST['umur'];

$sql = "UPDATE siswa set umur='$umur' where nama='$nama'";
$query = mysqli_query($conn, $sql);
if (!$query) {
die(mysqli_error($conn));
}
header("Location: index.php");