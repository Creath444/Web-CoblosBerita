<?php
// hapus_berita.php

// Pastikan bahwa ID berita dikirim melalui metode GET
if (isset($_GET['id']) && !empty($_GET['id'])) {
    // Lakukan sanitasi terhadap ID berita yang diterima
    $id_berita = $_GET['id'];

    // Lakukan koneksi ke database (gunakan koneksi.php atau cara koneksi Anda)
    include '../koneksi.php';

    // Ambil nama file gambar sebelum menghapus berita dari database
    $query_get_image = "SELECT gambar_berita FROM tbl_berita WHERE id_berita = $id_berita";
    $result = mysqli_query($koneksi, $query_get_image);
    $row = mysqli_fetch_assoc($result);
    $gambar_berita = $row['gambar_berita'];

    // Lakukan penghapusan data dari tabel berita
    $query = "DELETE FROM tbl_berita WHERE id_berita = $id_berita";
    if (mysqli_query($koneksi, $query)) {
        // Berhasil menghapus berita dari database

        // Hapus gambar terkait dari direktori
        $file_path = '../img/berita/' . $gambar_berita;
        if (file_exists($file_path)) {
            unlink($file_path);
        }

        echo '<script>';
        echo 'alert("Berita berhasil dihapus ");';
        echo 'window.location.href = "admin.php?page=berita";';
        echo '</script>';
    } else {
        // Gagal menghapus
        echo json_encode(array('status' => 'error', 'message' => 'Gagal menghapus berita'));
    }

    // Tutup koneksi ke database jika diperlukan
    mysqli_close($koneksi);

} else {
    // Jika tidak ada ID yang diterima
    echo json_encode(array('status' => 'error', 'message' => 'ID berita tidak valid'));
}
?>