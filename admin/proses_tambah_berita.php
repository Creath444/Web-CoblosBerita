<?php 
include '../koneksi.php';

if (isset($_POST['submit'])) {
	$judul 		= $_POST['judul'];
	$penulis 	= $_POST['penulis'];
	$isi 		= $_POST['isi'];
	$tgl 		= $_POST['tgl'];
	$kategori	= $_POST['kategori'];

	$rand = rand();
	$ekstensi =  array('png','jpg','jpeg','PNG');
	$filename = $_FILES['gambar']['name'];
	$ukuran = $_FILES['gambar']['size'];
	$ext = pathinfo($filename, PATHINFO_EXTENSION);

	if(!in_array($ext,$ekstensi) ) {
		header("location:admin.php?page=tambah_berita&&alert=gagal_ekstensi");
	}else{
		if($ukuran < 1044070){		
			$gambar = $rand.'_'.$filename;
			$insert = mysqli_query($koneksi, "INSERT INTO tbl_berita VALUES('','$judul','$penulis','$isi','$tgl','$kategori','$gambar')");
			if($insert){
				move_uploaded_file($_FILES['gambar']['tmp_name'], 'upload/'.$rand.'_'.$filename);
				header("location:admin.php?page=berita&&aalert=berhasil");
			}else{
				die ("Query gagal dijalankan: ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
			}
		}else{
			header("location:admin.php?page=tambah_berita&&alert=gagal_ukuran");
		}
	}
}
