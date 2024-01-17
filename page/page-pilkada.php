<div class="container-fluid mt-5 pt-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-12 mb-3">
                        <a href=""><img class="img-fluid w-100" src="img/ads-728x90.png" alt=""></a>
                    </div>
                    <div class="col-12">
                        <div class="section-title">
                            <h4 class="m-0 text-uppercase font-weight-bold">Category:</h4>
                            <h6 class="m-0 text-uppercase font-weight-bold">Pemilihan Kepala Daerah(Pilkada)</h6>
                        </div>
                    </div>
                    <!-- kategori 1 -->
                    <div class="col-lg-12">
                        <?php 
                        $kategori = 'Pilkada';
                        $sql  = "SELECT * FROM tbl_berita WHERE kategori_berita='$kategori'"; 
                        $query = mysqli_query($koneksi, $sql);
                        while ($berita = mysqli_fetch_array($query)) {
                            ?>
                            <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                <img style="max-width: 180px" class="img-fluid" src="admin/upload/<?php echo $berita['gambar_berita'] ?>" alt="">
                                <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" ><?php echo $berita['kategori_berita'] ?></a>
                                        <a class="text-body"><small><?php echo $berita['tgl_berita'] ?></small></a>
                                    </div>
                                    <a class="h6 m-0 text-secondary font-weight-bold" href="?page=berita-detail&id=<?php echo $berita['id_berita'] ?>"><?php echo $berita['judul_berita'] ?></a>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
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
            </div>
            <div class="col-lg-12">
                <a href=""><img class="img-fluid w-100" src="img/ads-728x90.png" alt=""></a>
            </div>
        </div>
    </div>
</div>
    <!-- News With Sidebar End -->