<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Credentials:true");
header("Access-Control-Allow-Methods: POST,GET,PUT,DELETE,OPTIONS");
header("Access-Control-Max-Age:604800");
header("Access-Control-Request-Headers: x-requested-with");
header("Access-Control-Allow-Headers: x-requested-with, x-requested-by");
include("../koneksi/connection.php");

$id = $_POST['id_petugas'];
$nama_petugas = $_POST['nama_petugas'];
$username = $_POST['username'];
$password = $_POST['password'];
$telp = $_POST['telp'];
$level = $_POST['level'];
$foto_profile = $_POST['foto_profile'];

$ubah = mysqli_query($koneksi, "UPDATE petugas set nama_petugas='$nama_petugas', username='$username', 
password='$password', telp='$telp', level='$level', foto_profile='$foto_profile' WHERE id_petugas='$id'") 
or die(mysqli_error()); 