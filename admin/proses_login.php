<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include '../koneksi.php';
 
// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = md5($_POST['password']);
 
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi,"select * from tbl_login where username='$username' and password='$password'");
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
 
 echo $cek;
if($cek > 0){
	$user = mysqli_fetch_array($data);
	$_SESSION['id_login'] = $user['id_login'];
	$_SESSION['status'] = "login";
	header("location:admin.php");
}else{
	header("location:login.php?pesan=gagal");
}
?>