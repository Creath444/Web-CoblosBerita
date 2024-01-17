<!-- <-- Main News Slider Start --> -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 px-0">
            <div class="owl-carousel main-carousel position-relative">
                <?php 
                $sql = 'SELECT * FROM tbl_berita';
                $query = mysqli_query($koneksi, $sql);
                while ($berita = mysqli_fetch_array($query)) {
                 ?>
                 <div class="position-relative overflow-hidden" style="height: 500px;">
                    <img class="img-fluid h-100" src="admin/upload/<?php echo $berita['gambar_berita'] ?>" style="object-fit: cover;">
                    <div class="overlay">
                        <div class="mb-2">
                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                            href="?page=<?php echo $berita['kategori_berita'] ?>"><?php echo $berita['kategori_berita'] ?></a>
                            <a class="text-white" ><?php echo $berita['tgl_berita'] ?></a>
                        </div>
                        <a class="h2 m-0 text-white text-uppercase font-weight-bold" href="?page=berita-detail&id=<?php echo $berita['id_berita'] ?>"><?php echo $berita['judul_berita'] ?></a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
</div>
<div class="container-fluid bg-dark py-3 mb-3">
    <div class="container">
        <div class="row align-items-center bg-dark">
         <div class="col-12">
            <div class="d-flex justify-content-between">
             <div class="bg-primary text-dark text-center font-weight-medium py-2" style="width: 170px;">Breaking News</div>
             <div class="owl-carousel tranding-carousel position-relative d-inline-flex align-items-center ml-3"
             style="width: calc(100% - 170px); padding-right: 90px;">
             <?php 
             $sql = 'SELECT * FROM tbl_berita';
             $query = mysqli_query($koneksi, $sql);
             while ($berita = mysqli_fetch_array($query)) {
                 ?>
                 <div class="text-truncate"><a class="text-white text-uppercase font-weight-semi-bold" href="?page=berita-detail&id=<?php echo $berita['id_berita'] ?>"><?php echo $berita['judul_berita'] ?></a></div>
             <?php } ?>
         </div>
     </div>
 </div>
</div>
</div>
</div>
<!-- Slider -->

<!-- Featured News Slider Start -->
<div class="container-fluid pt-5 mb-3">
    <div class="container">
        <div class="section-title">
            <h4 class="m-0 text-uppercase font-weight-bold">Coblos <span class="text-danger">News</span></h4>
        </div>
        <div class="owl-carousel news-carousel carousel-item-4 position-relative">
         <?php 
         $sql = 'SELECT * FROM tbl_berita';
         $query = mysqli_query($koneksi, $sql);
         while ($berita = mysqli_fetch_array($query)) {
             ?>
             <div class="position-relative overflow-hidden" style="height: 300px;">
                <img class="img-fluid h-100" src="admin/upload/<?php echo $berita['gambar_berita'] ?>" style="object-fit: cover;">
                <div class="overlay">
                    <div class="mb-2">
                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                        href="?page=<?php echo $berita['kategori_berita'] ?>"><?php echo $berita['kategori_berita'] ?></a>
                        <a class="text-white"><small><?php echo $berita['tgl_berita'] ?></small></a>
                    </div>
                    <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="?page=berita-detail&id=<?php echo $berita['id_berita'] ?>"><?php echo $berita['judul_berita'] ?></a>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
</div>
<!-- Featured News Slider End -->


<!-- News With Sidebar Start -->
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title">
                            <h4 class="m-0 text-uppercase font-weight-bold">Berita <span class="text-danger">Coblos</span></h4>
                            <a class="text-secondary font-weight-medium text-decoration-none" href="">View All</a>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <?php 
                        $kategori = 'Pilpres';
                        $sql  = "SELECT * FROM tbl_berita WHERE kategori_berita='$kategori'"; 
                        $query = mysqli_query($koneksi, $sql);
                        while ($berita = mysqli_fetch_array($query)) {
                            ?>
                            <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                <img style="width: 100px" class="img-fluid" src="admin/upload/<?php echo $berita['gambar_berita'] ?>" alt="">
                                <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="?page=<?php echo $berita['kategori_berita'] ?>"><?php echo $berita['kategori_berita'] ?></a>
                                        <a class="text-body" ><small><?php echo $berita['tgl_berita'] ?></small></a>
                                    </div>
                                    <a class="h6 m-0 text-secondary font-weight-bold" href="?page=berita-detail&id=<?php echo $berita['id_berita'] ?>"><?php echo $berita['judul_berita'] ?></a>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <!-- kategori 2 -->
                    <div class="col-lg-12">
                        <?php 
                        $kategori = 'Pileg';
                        $sql  = "SELECT * FROM tbl_berita WHERE kategori_berita='$kategori'"; 
                        $query = mysqli_query($koneksi, $sql);
                        while ($berita = mysqli_fetch_array($query)) {
                            ?>
                            <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                <img style="width: 100px" class="img-fluid" src="admin/upload/<?php echo $berita['gambar_berita'] ?>" alt="">
                                <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="?page=<?php echo $berita['kategori_berita'] ?>"><?php echo $berita['kategori_berita'] ?></a>
                                        <a class="text-body" ><small><?php echo $berita['tgl_berita'] ?></small></a>
                                    </div>
                                    <a class="h6 m-0 text-secondary font-weight-bold" href="?page=berita-detail&id=<?php echo $berita['id_berita'] ?>"><?php echo $berita['judul_berita'] ?></a>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <!-- KATEGORI 3 -->
                    <div class="col-lg-12">
                        <?php 
                        $kategori = 'Pilkada';
                        $sql  = "SELECT * FROM tbl_berita WHERE kategori_berita='$kategori'"; 
                        $query = mysqli_query($koneksi, $sql);
                        while ($berita = mysqli_fetch_array($query)) {
                            ?>
                            <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                <img style="width: 100px" class="img-fluid" src="admin/upload/<?php echo $berita['gambar_berita'] ?>" alt="">
                                <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="?page=<?php echo $berita['kategori_berita'] ?>"><?php echo $berita['kategori_berita'] ?></a>
                                        <a class="text-body" ><small><?php echo $berita['tgl_berita'] ?></small></a>
                                    </div>
                                    <a class="h6 m-0 text-secondary font-weight-bold" href="?page=berita-detail&id=<?php echo $berita['id_berita'] ?>"><?php echo $berita['judul_berita'] ?></a>
                                </div>
                            </div>
                        <?php } ?>
                    </div>

                    <!-- Banner -->
                    <div class="col-lg-12 mb-3">
                        <img class="img-fluid w-100" src="img/ads-728x90.png" alt="">
                    </div>
                    

                    <?php 
                    $sql  = "SELECT * FROM tbl_berita"; 
                    $query = mysqli_query($koneksi, $sql);
                    while ($berita = mysqli_fetch_array($query)) {
                     ?>
                     <div class="col-lg-6 d-flex align-items-center bg-white mb-3" style="height: 200px;">
                        <img class="img-fluid" style="width: 150px" src="admin/upload/<?php echo $berita['gambar_berita'] ?>" alt="">
                        <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                            <div class="mb-2">
                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="?page=<?php echo $berita['kategori_berita'] ?>"><?php echo $berita['kategori_berita'] ?></a>
                                <a class="text-body" ><small><?php echo $berita['tgl_berita'] ?></small></a>
                            </div>
                            <a href="?page=berita-detail&id=<?php echo $berita['id_berita'] ?>"><p class="m-0 text-secondary font-weight-bold"><?php echo $berita['judul_berita'] ?></p></a>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>

        <div class="col-lg-4">
            <!-- Social Follow Start -->
            <div class="mb-3">
                <div class="section-title mb-0">
                    <h4 class="m-0 text-uppercase font-weight-bold">Follow Us</h4>
                </div>
                <div class="bg-white border border-top-0 p-3">
                    <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #39569E;">
                        <i class="fab fa-facebook-f text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                        <span class="font-weight-medium">12,345 Fans</span>
                    </a>
                    <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #52AAF4;">
                        <i class="fab fa-twitter text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                        <span class="font-weight-medium">12,345 Followers</span>
                    </a>
                    <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #0185AE;">
                        <i class="fab fa-linkedin-in text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                        <span class="font-weight-medium">12,345 Connects</span>
                    </a>
                    <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #C8359D;">
                        <i class="fab fa-instagram text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                        <span class="font-weight-medium">12,345 Followers</span>
                    </a>
                    <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #DC472E;">
                        <i class="fab fa-youtube text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                        <span class="font-weight-medium">12,345 Subscribers</span>
                    </a>
                    <a href="" class="d-block w-100 text-white text-decoration-none" style="background: #055570;">
                        <i class="fab fa-vimeo-v text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                        <span class="font-weight-medium">12,345 Followers</span>
                    </a>
                </div>
            </div>
            <!-- Social Follow End -->

            <!-- Ads Start -->
            <div class="mb-3">
                <div class="section-title mb-0">
                    <h4 class="m-0 text-uppercase font-weight-bold">Advertisement</h4>
                </div>
                <div class="bg-white text-center border border-top-0 p-3">
                    <a href=""><img class="img-fluid" src="img/news-800x500-2.jpg" alt=""></a>
                </div>
            </div>
            <!-- Ads End -->

            <!-- Newsletter Start -->
            <div class="mb-3">
                <div class="section-title mb-0">
                    <h4 class="m-0 text-uppercase font-weight-bold">Newsletter</h4>
                </div>
                <div class="bg-white text-center border border-top-0 p-3">
                    <div class="input-group mb-2" style="width: 100%;">
                        <input type="text" class="form-control form-control-lg" placeholder="Your Email">
                        <div class="input-group-append">
                            <button class="btn btn-primary font-weight-bold px-3">Sign Up</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Newsletter End -->

            <!-- Tags Start -->
            <div class="mb-3">
                <div class="section-title mb-0">
                    <h4 class="m-0 text-uppercase font-weight-bold">Tags</h4>
                </div>
                <div class="bg-white border border-top-0 p-3">
                    <div class="d-flex flex-wrap m-n1">
                        <?php 
                        $sql  = "SELECT * FROM tbl_berita"; 
                        $query = mysqli_query($koneksi, $sql);
                        while ($berita = mysqli_fetch_array($query)) {
                         ?>
                         <a href="?page=<?php echo $berita['kategori_berita'] ?>" class="btn btn-sm btn-outline-secondary m-1"><?php echo $berita['kategori_berita'] ?></a>
                     <?php } ?>
                 </div>
             </div>
         </div>
         <!-- Tags End -->
     </div>
 </div>
</div>
</div>
<!-- News With Sidebar End