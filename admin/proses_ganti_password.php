<?php 
include '../koneksi.php';
session_start();

$id_login = $_SESSION['id_login'];
$password = $_POST['password'];
$konfirmasi = $_POST['konfirmasi'];

if ($password == $konfirmasi ) {
	// code...
	mysqli_query($koneksi,"UPDATE `tbl_login` SET `password`='".md5($password)."' WHERE `id_login`='$id_login'");

	header("location:admin.php?page=ganti_password&&aalert=berhasil");
}else{
	header("location:admin.php?page=ganti_password&&aalert=beda");

}


 ?>