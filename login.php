<?
header("Access-Control-Allow-Origin: *");
header("Access-Control-Credentials:true");
header("Access-Control-Allow-Methods: POST,GET,PUT,DELETE,OPTIONS");
header("Access-Control-Max-Age:604800");
header("Access-Control-Request-Headers: x-requested-with");
header("Access-Control-Allow-Headers: x-requested-with, x-requested-by");
include("koneksi/connection.php");

$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($connect,"SELECT * FROM username='$username' AND password='$password'")
or die(mysqli_error());
$data = mysqli_fetch_array($query);
$banyak = mysqli_num_rows($query);
if ($banyak >= 1) {
    $output['pesan']="Login Berhasil!";
    $output['id_admin']=$data['id_admin'];
    $output['username']=$data['username'];
} else {
    $output['error']=true;
    $output['pesan']="Gagal masuk";
}
echo json_encode($output);