<?php 
$connect = mysqli_connect("localhost", "root", "", "penyelewengan-dakam");

if (!$connect) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

?>