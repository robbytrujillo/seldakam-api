<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Credentials:true");
header("Access-Control-Allow-Methods: POST,GET,PUT,DELETE,OPTIONS");
header("Access-Control-Max-Age:604800");
header("Access-Control-Request-Headers: x-requested-with");
header("Access-Control-Allow-Headers: x-requested-with, x-requested-by");
include("../koneksi/connection.php");

$id = $_POST['id_tanggapan'];
$id_pengaduan = $_POST['id_pengaduan'];
$tgl_tanggapan = $_POST['tgl_tanggapan'];
$tanggapan = $_POST['tanggapan'];
$id_petugas = $_POST['id_petugas'];

$ubah = mysqli_query($conncet, "UPDATE tanggapan set id_pengaduan='$id_pengaduan', tgl_tanggapan='$tgl_tanggapan', 
id_petugas='$id_petugas' WHERE id_tanggapan='$id'") 
or die(mysqli_error()); 