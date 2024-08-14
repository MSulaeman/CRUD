<?php
include 'koneksi.php';

$id   = $_POST['id'];
$nama = $_POST['nama'];
$umur = $_POST['umur'];

$sql = "UPDATE siswa SET nama='$nama',umur='$umur' WHERE id='$id'";
$query = mysqli_query($conn, $sql);

header("Location: index.php");
