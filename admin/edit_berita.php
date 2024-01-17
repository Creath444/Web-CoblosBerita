<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Berita</h1>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header bg-primary text-light">
                Form Edit Berita
            </div>
            <div class="card-body">
                <?php

                if (isset($_GET['id']) && !empty($_GET['id'])) {
                    $id_berita = $_GET['id'];

                    include '../koneksi.php';


                    $query = "SELECT * FROM tbl_berita WHERE id_berita = $id_berita";
                    $result = mysqli_query($koneksi, $query);

                    if ($result && mysqli_num_rows($result) > 0) {

                        $berita = mysqli_fetch_assoc($result);


                        ?>
                        <form action="proses_edit_berita.php" method="post" enctype="multipart/form-data">

                            <input type="hidden" name="id" value="<?php echo $id_berita?>">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Judul Berita</label>
                                <input type="text" name="judul" value="<?php echo $berita['judul_berita']; ?>" class="form-control" placeholder="Masukkan Judul Berita">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Penulis</label>
                                <input type="text" name="penulis" value="<?php echo $berita['penulis']; ?>" class="form-control" placeholder="Masukkan Penulis">
                            </div>
                            <div class="form-group">
                                <select class="form-control" id="exampleFormControlSelect1" name="kategori">
                                    <option hidden="true" ><?php echo $berita['kategori_berita'];?></option>
                                    <option>Pilpres</option>
                                    <option>Pileg</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Isi Berita</label>
                                <textarea name="isi" id= mytextarea class="form-control" placeholder="Masukkan Isi Berita" ><?php echo $berita['isi_berita']; ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tanggal Berita</label>
                                <input type="date" name="tgl" value="<?php echo $berita['tgl_berita']; ?>" class="form-control">
                            </div>
                            <img src="upload/<?php echo $berita['gambar_berita']?>">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Gambar Berita</label>
                                <input type="file" name="gambar"  class="form-control">
                                <input type="hidden" name="gambar_lama" value="<?php echo $berita['gambar_berita']; ?>">
                                <small>Ukuran gambar sebaiknya tidak lebih dari [ukuran maksimum yang diinginkan] dan format file yang diizinkan adalah [format yang diinginkan].</small>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                        </form>
                        <?php
                    } else {

                        echo "Berita tidak ditemukan.";
                    }

                    mysqli_close($koneksi);
                } else {
                        // Jika tidak ada ID yang diterima
                    echo "ID berita tidak valid";
                }
                ?>
            </div>
        </div>
    </div>
    </div>
<script type="text/javascript">
    tinyMCE.init({
      selector : '#mytextarea'
  });
</script>