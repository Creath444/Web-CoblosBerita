    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Berita</h1>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <a class="btn btn-dark mb-2" href="admin.php?page=tambah_berita" role="button">Tambah Berita</a>
        <div class="card">
          <div class="card-header bg-primary text-light">
            Daftar Berita
          </div>
          <div class="card-body">
            <table class="table">
              <thead>
                <tr>
                  <th >No</th>
                  <th >Gambar</th>
                  <th >Judul</th>
                  <th >Penulis</th>
                  <th >Kategori Berita</th>
                  <th >Tanggal Berita</th>
                  <th >Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                include '../koneksi.php';
                $no = 1;
                $data = mysqli_query($koneksi,"SELECT * FROM tbl_berita ");
                while($row = mysqli_fetch_array($data)){
                  ?>
                  <tr>
                    <td scope="row"><?php echo $no++; ?></td>
                    <td>
                      <img src="upload/<?php echo $row['gambar_berita'] ?>" width="100" height="100">
                    </td>
                    <td class="col-lg-3"><?php echo $row['judul_berita']; ?></td>
                    <td><?php echo $row['penulis']; ?></td>
                    <td><?php echo $row['kategori_berita']; ?></td>
                    <td><?php echo $row['tgl_berita']; ?></td>
                    <td class="col-lg-3">
                      <a href="admin.php?page=detail_berita&id=<?php echo $row['id_berita']; ?>" title="" class="btn-info btn-sm">Detail</a>
                      <a href="admin.php?page=edit_berita&id=<?php echo $row['id_berita']; ?>" title="" class="btn-success btn-sm">Edit</a>
                      <a href="admin.php?page=hapus_berita&id=<?php echo $row['id_berita']; ?>" title="" class="btn-primary btn-sm">Hapus</a>
                    </td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>    
      </div>

    </div>