    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Berita</h1>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
              <div class="card-header bg-primary text-light">
                Tambah Berita
            </div>
            <div class="card-body">
               <form action="proses_tambah_berita.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleInputEmail1">Judul Berita</label>
                    <input type="text" name="judul"class="form-control" placeholder="Masukkan Judul Berita">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Penulis</label>
                    <input type="text" name="penulis"class="form-control" placeholder="Masukkan Penulis">
                </div>
                <div class="form-group">
                    <select class="form-control" id="exampleFormControlSelect1" name="kategori">
                        <option>Pilpres</option>
                        <option>Pileg</option>
                        <option>Pilkada</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Isi</label>
                    <textarea name="isi" id= mytextarea class="form-control" placeholder="Masukkan Isi Berita"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal</label>
                    <input type="date" name="tgl"class="form-control">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Gambar Berita</label>
                    <input type="file" name="gambar"class="form-control">
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>    
</div>

</div>
<script type="text/javascript">
    tinyMCE.init({
      selector : '#mytextarea'
  });
</script>