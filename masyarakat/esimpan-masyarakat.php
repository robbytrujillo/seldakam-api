<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Credentials:true");
header("Access-Control-Allow-Methods: POST,GET,PUT,DELETE,OPTIONS");
header("Access-Control-Max-Age:604800");
header("Access-Control-Request-Headers: x-requested-with");
header("Access-Control-Allow-Headers: x-requested-with, x-requested-by");
include("../koneksi/connection.php");

$id = $_POST['nik'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$telp = $_POST['telp'];
$foto_profile = $_POST['foto_profile'];

$ubah = mysqli_query($koneksi, "UPDATE masyarakat set nama='$nama', username='$username', 
password='$password', telp='$telp', foto_profile='$foto_profile' WHERE nik='$id'") 
or die(mysqli_error()); 