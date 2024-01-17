<div class="container-fluid mt-5 pt-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-12 mb-3">
                        <img class="img-fluid w-100" src="img/ads-728x90.png" alt="">
                    </div>
                    <div class="col-12">
                        <div class="section-title">
                            <h4 class="m-0 text-uppercase font-weight-bold">Kategori Berita: Pemilihan Umum</h4>
                        </div>
                    </div>
                    <!-- kategori 1 -->
                    <div class="col-lg-4">
                        <?php 
                        $kategori = 'Pilpres';
                        $sql  = "SELECT * FROM tbl_berita WHERE kategori_berita='$kategori'"; 
                        $query = mysqli_query($koneksi, $sql);
                        $kategori = mysqli_fetch_array($query);
                        ?>
                        <a class="col-lg-12 badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2" href="?page=<?php echo $kategori['kategori_berita'] ?>"><?php echo $kategori['kategori_berita'] ?></a>   
                        <div class="position-relative mb-3">
                            <img class="img-fluid w-100" src="admin/upload/<?php echo $kategori['gambar_berita'] ?>" style="object-fit: cover;">
                            <div class="bg-white border border-top-0 p-4">
                                <div class="mb-2">
                                    <a class="text-body" href=""><small><?php echo $kategori['penulis'] ?></small></a>
                                </div>
                                <a class="h4 d-block mb-0 text-secondary text-uppercase font-weight-bold" href="?page=berita-detail&id=<?php echo $kategori['id_berita'] ?>"><?php echo $kategori['judul_berita'] ?></a>
                            </div>
                        </div>
                        <?php 
                        $query = mysqli_query($koneksi, $sql);
                        while ($berita = mysqli_fetch_array($query)) {
                           ?>
                           <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                            <img style="width: 100px" class="img-fluid" src="admin/upload/<?php echo $berita['gambar_berita'] ?>" alt="">
                            <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                <div class="mb-2">
                                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="?page=<?php echo $berita['kategori_berita'] ?>" ><?php echo $berita['kategori_berita'] ?></a>
                                    <a class="text-body" href=""><small><?php echo $berita['penulis'] ?></small></a>
                                </div>
                                <a class="h6 m-0 text-secondary font-weight-bold" href="?page=berita-detail&id=<?php echo $berita['id_berita'] ?>"><?php echo $berita['judul_berita'] ?></a>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <!-- kategori 2 -->
                <div class="col-lg-4">
                    <?php 
                    $kategori = 'Pileg';
                    $sql  = "SELECT * FROM tbl_berita WHERE kategori_berita='$kategori'"; 
                    $query = mysqli_query($koneksi, $sql);
                    $kategori = mysqli_fetch_array($query);
                    ?>
                    <a class="col-lg-12 badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2" href="?page=<?php echo $kategori['kategori_berita'] ?>"><?php echo $kategori['kategori_berita'] ?></a>   
                    <div class="position-relative mb-3">
                        <img class="img-fluid w-100" src="admin/upload/<?php echo $kategori['gambar_berita'] ?>" style="object-fit: cover;">
                        <div class="bg-white border border-top-0 p-4">
                            <div class="mb-2">
                                <a class="text-body" href=""><small><?php echo $kategori['penulis'] ?></small></a>
                            </div>
                            <a class="h4 d-block mb-0 text-secondary text-uppercase font-weight-bold" href="?page=berita-detail&id=<?php echo $kategori['id_berita'] ?>"><?php echo $kategori['judul_berita'] ?></a>
                        </div>
                    </div>
                    <?php 
                    $query = mysqli_query($koneksi, $sql);
                    while ($berita = mysqli_fetch_array($query)) {
                       ?>
                       <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                        <img style="width: 100px" class="img-fluid" src="admin/upload/<?php echo $berita['gambar_berita'] ?>" alt="">
                        <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                            <div class="mb-2">
                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="?page=<?php echo $berita['kategori_berita'] ?>" ><?php echo $berita['kategori_berita'] ?></a>
                                <a class="text-body" href=""><small><?php echo $berita['penulis'] ?></small></a>
                            </div>
                            <a class="h6 m-0 text-secondary font-weight-bold" href="?page=berita-detail&id=<?php echo $berita['id_berita'] ?>"><?php echo $berita['judul_berita'] ?></a>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <!-- KATEGORI 3 -->
            <div class="col-lg-4">
                <?php 
                $kategori = 'Pilkada';
                $sql  = "SELECT * FROM tbl_berita WHERE kategori_berita='$kategori'"; 
                $query = mysqli_query($koneksi, $sql);
                $kategori = mysqli_fetch_array($query);
                ?>
                <a class="col-lg-12 badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2" href="?page=<?php echo $kategori['kategori_berita'] ?>"><?php echo $kategori['kategori_berita'] ?></a>   
                <div class="position-relative mb-3">
                    <img class="img-fluid w-100" src="admin/upload/<?php echo $kategori['gambar_berita'] ?>" style="object-fit: cover;">
                    <div class="bg-white border border-top-0 p-4">
                        <div class="mb-2">
                            <a class="text-body" href=""><small><?php echo $kategori['penulis'] ?></small></a>
                        </div>
                        <a class="h4 d-block mb-0 text-secondary text-uppercase font-weight-bold" href="?page=berita-detail&id=<?php echo $kategori['id_berita'] ?>"><?php echo $kategori['judul_berita'] ?></a>
                    </div>
                </div>
                <?php 
                $query = mysqli_query($koneksi, $sql);
                while ($berita = mysqli_fetch_array($query)) {
                   ?>
                   <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                    <img style="width: 100px" class="img-fluid" src="admin/upload/<?php echo $berita['gambar_berita'] ?>" alt="">
                    <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                        <div class="mb-2">
                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="?page=<?php echo $berita['kategori_berita'] ?>" ><?php echo $berita['kategori_berita'] ?></a>
                            <a class="text-body" href=""><small><?php echo $berita['penulis'] ?></small></a>
                        </div>
                        <a class="h6 m-0 text-secondary font-weight-bold" href="?page=berita-detail&id=<?php echo $berita['id_berita'] ?>"><?php echo $berita['judul_berita'] ?></a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<div class="col-lg-12">
    <a href=""><img class="img-fluid w-100" src="img/ads-728x90.png" alt=""></a>
</div>
</div>
</div>
</div>
    <!-- News With Sidebar End -->