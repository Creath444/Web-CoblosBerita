<?php 
$DB_HOST = 'localhost';
$DB_USER = 'nama_pengguna';
$DB_PASS = 'kata_sandi';
$DB_NAME = 'nama_database';

$koneksi = mysqli_connect($DB_HOST,$DB_USER,$DB_PASS,$DB_NAME);
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>
