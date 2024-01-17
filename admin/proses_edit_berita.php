<?php
// proses_edit_berita.php

include '../koneksi.php';

if (isset($_POST['submit'])) {
    $id         = $_POST['id'];
    $judul      = $_POST['judul'];
    $penulis    = $_POST['penulis'];
    $isi        = $_POST['isi'];
    $tgl        = $_POST['tgl'];
    $kategori   = $_POST['kategori'];

    $rand = rand();
    $ekstensi = array('png', 'jpg', 'jpeg', 'PNG');
    $filename = $_FILES['gambar']['name'];
    $ukuran = $_FILES['gambar']['size'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);

    if (!empty($_FILES['gambar']['name'])) {
        if (!in_array($ext, $ekstensi)) {
            header("location:admin.php?page=tambah_berita&&alert=gagal_ekstensi");
            exit();
        } else {
            if ($ukuran < 1044070) {
                $gambar_baru = $rand . '_' . $filename;
                $update = mysqli_query($koneksi, "UPDATE tbl_berita SET judul_berita='$judul',penulis='$penulis',isi_berita='$isi',tgl_berita='$tgl',kategori_berita='$kategori',gambar_berita='$gambar_baru' WHERE id_berita='$id'");
                if ($update) {
                    $gambar_lama = $_POST['gambar_lama'];
                    $path = 'upload/'.$gambar_lama;
                    if(file_exists($path)){
                        $unlink  = unlink($path);
                        if ($unlink) {
                            move_uploaded_file($_FILES['gambar']['tmp_name'], 'upload/'.$rand .'_'.$filename);
                        }
                        header("location:admin.php?page=berita&alert=berhasil-update");
                        exit();
                    }
                }else {
                    header("location:admin.php?page=edit_berita&alert=gagal-update&id=$id");
                    exit();
                }
            }else {
                header("location:admin.php?page=edit-berita&alert=gagal_ukuran&id=$id");
                exit();
            }
        } else {
            $gambar_lama = $_POST['gambar_lama'];
            $update = mysqli_query($koneksi, "UPDATE tbl_berita SET judul_berita='$judul',penulis='$penulis',isi_berita='$isi',tgl_berita='$tgl',kategori_berita='$kategori',gambar_berita='$gambar_lama' WHERE id_berita='$id'");
            if ($update) {
                header("location:admin.php?page=berita&alert=berhasil-melakukan");
                exit();
            }else {
                header("location:admin.php?page=edit_berita&alert=gagal_melakukan&id=$id");
                exit();
            }
        }
    }
}

