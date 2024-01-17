    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Berita</h1>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
              <div class="card-header bg-primary text-light">
                Detail Berita
            </div>
            <div class="card-body">
             <?php
             // include '../koneksi.php';

// Pastikan ID berita telah diterima
             if (isset($_GET['id'])) {
    // Sanitasi ID
                $id_berita = mysqli_real_escape_string($koneksi, $_GET['id']);

    // Query untuk mengambil detail berita berdasarkan ID
                $query = "SELECT * FROM tbl_berita WHERE id_berita = '$id_berita'";
                $result = mysqli_query($koneksi, $query);

                if ($result) {
                    $berita = mysqli_fetch_assoc($result);

        // Tampilkan informasi berita di sini
                    echo "<h2 class='text-center'>{$berita['judul_berita']}</h2>";

                    echo '<img src="../img/berita/' . $berita['gambar_berita'] . '" width="100%">';
                     echo '<p>Tanggal: ' . $berita['tgl_berita'] . '</p>';
                      echo '<p> ' . $berita['isi_berita'] . '</p>';
        // ... tampilkan informasi lainnya
                } else {
                    echo 'Gagal mengambil data berita.';
                }
            } else {
                echo 'ID Berita tidak ditemukan.';
            }
            ?>

        </div>
    </div>    
</div>

</div>