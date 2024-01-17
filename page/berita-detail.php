<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <!-- News Detail Start -->
                <?php 
                $id = $_GET['id'];
                $sql = "SELECT * FROM tbl_berita WHERE id_berita='$id'";
                $query = mysqli_query($koneksi, $sql);
                $berita = mysqli_fetch_array($query);
                ?>
                <div class="position-relative mb-3">
                    <img class="img-fluid w-100" src="admin/upload/<?php echo $berita['gambar_berita'] ?>" style="object-fit: cover;">
                    <div class="bg-white border border-top-0 p-4">
                        <div class="mb-3">
                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                            href="?page=<?php echo $berita['kategori_berita'] ?>"><?php echo $berita['kategori_berita'] ?></a>
                            <a class="text-body" href="">Jan 01, 2045</a>
                        </div>
                        <h1 class="mb-3 text-secondary text-uppercase font-weight-bold"><?php echo $berita['judul_berita'] ?></h1>
                        <p><?php echo $berita['isi_berita'] ?></p>
                    </div>
                    <div class="d-flex justify-content-between bg-white border border-top-0 p-4">
                        <div class="d-flex align-items-center">
                            <img class="rounded-circle mr-2" src="img/user.jpg" width="25" height="25" alt="">
                            <span><?php echo $berita['penulis'] ?></span>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="ml-3"><i class="far fa-eye mr-2"></i>12345</span>
                            <span class="ml-3"><i class="far fa-comment mr-2"></i>123</span>
                        </div>
                    </div>
                </div>
                <!-- News Detail End -->

                <!-- Comment List Start -->
                <div class="mb-3">
                    <div class="section-title mb-0">
                        <h4 class="m-0 text-uppercase font-weight-bold">3 Comments</h4>
                    </div>
                    <div class="bg-white border border-top-0 p-4">
                        <div class="media">
                            <img src="img/user.jpg" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                            <div class="media-body">
                                <h6><a class="text-secondary font-weight-bold" href="">Deni</a> <small><i>01 Jan 2045</i></small></h6>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima aliquam accusamus fuga consequuntur iste perspiciatis hic, eum, tempora quasi quia. Error facilis suscipit officiis perferendis blanditiis accusamus dignissimos facere nam!</p>
                                <button class="btn btn-sm btn-outline-secondary">Reply</button>
                                <div class="media mt-4">
                                    <img src="img/user.jpg" alt="Image" class="img-fluid mr-3 mt-1"
                                    style="width: 45px;">
                                    <div class="media-body">
                                        <h6><a class="text-secondary font-weight-bold" href="">Andi</a> <small><i>01 Jan 2045</i></small></h6>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, eligendi asperiores hic nesciunt magni officia rerum autem quo vel odio fugit velit alias sequi soluta odit, recusandae, placeat, amet ut.</p>
                                        <button class="btn btn-sm btn-outline-secondary">Reply</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Comment List End -->

                <!-- Comment Form Start -->
                <div class="mb-3">
                    <div class="section-title mb-0">
                        <h4 class="m-0 text-uppercase font-weight-bold">Leave a comment</h4>
                    </div>
                    <div class="bg-white border border-top-0 p-4">
                        <form>
                            <div class="form-row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="name">Name *</label>
                                        <input type="text" class="form-control" id="name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="email">Email *</label>
                                        <input type="email" class="form-control" id="email">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="website">Website</label>
                                <input type="url" class="form-control" id="website">
                            </div>

                            <div class="form-group">
                                <label for="message">Message *</label>
                                <textarea id="message" cols="30" rows="5" class="form-control"></textarea>
                            </div>
                            <div class="form-group mb-0">
                                <input type="submit" value="Leave a comment"
                                class="btn btn-primary font-weight-semi-bold py-2 px-3">
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Comment Form End -->
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
                            $sql = "SELECT * FROM tbl_berita";
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