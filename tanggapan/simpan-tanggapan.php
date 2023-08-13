<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Credentials:true");
header("Access-Control-Allow-Methods: POST,GET,PUT,DELETE,OPTIONS");
header("Access-Control-Max-Age:604800");
header("Access-Control-Request-Headers: x-requested-with");
header("Access-Control-Allow-Headers: x-requested-with, x-requested-by");
include("../koneksi/connection.php");

$id_tanggapan = $_POST['id_tanggapan'];
$id_pengaduan = $_POST['id_pengaduan'];
$tgl_tanggapan = $_POST['tgl_tanggapan'];
$tanggapan = $_POST['tanggapan'];
$id_petugas = $_POST['id_petugas'];

$simpan = mysqli_query($connect, "INSERT INTO tanggapan values ('$id_tanggapan','$id_pengaduan', '$tgl_tanggapan', '$tanggapan', '$id_petugas')") 
or die(mysqli_error()); 