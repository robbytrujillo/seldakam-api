<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Credentials:true");
header("Access-Control-Allow-Methods: POST,GET,PUT,DELETE,OPTIONS");
header("Access-Control-Max-Age:604800");
header("Access-Control-Request-Headers: x-requested-with");
header("Access-Control-Allow-Headers: x-requested-with, x-requested-by");
include("../koneksi/connection.php");

$id = $_POST['id_pengaduan'];
$tgl_pengaduan = $_POST['tgl_pengaduan'];
$nik = $_POST['nik'];
$isi_laporan = $_POST['isi_laporan'];
$foto = $_POST['foto'];
$status = $_POST['status'];

$ubah = mysqli_query($koneksi, "UPDATE pengaduan set tgl_pengaduan='$tgl_pengaduan', nik='$nik', 
isi_laporan='$isi_laporan', foto='$foto', status='$status' WHERE id_pengaduan='$id'") 
or die(mysqli_error()); 