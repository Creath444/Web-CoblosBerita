<?php 
include '../koneksi.php';
$judul = $_POST['judul'];
$isi = $_POST['isi'];
$tgl = $_POST['tgl'];
 

 

        mysqli_query($koneksi, "INSERT INTO tbl_berita2 VALUES(NULL,'$judul','$isi','$tgl','$xx')");

        header("location:admin.php?page=edit_berita&&alert=berhasil");
    