
<!-- Footer Start -->
<div class="container-fluid bg-dark pt-5 px-sm-3 px-md-5 mt-5">
    <div class="row py-4">
        <div class="col-lg-3 col-md-6 mb-5">
            <h5 class="mb-4 text-white text-uppercase font-weight-bold">Kontak</h5>
            <p class="font-weight-medium"><i class="fa fa-map-marker-alt mr-2"></i>Muara Bungo</p>
            <p class="font-weight-medium"><i class="fa fa-phone-alt mr-2"></i>+012 ******</p>
            <p class="font-weight-medium"><i class="fa fa-envelope mr-2"></i>coblosBerita@gmail.com</p>
            <h6 class="mt-4 mb-3 text-white text-uppercase font-weight-bold">Follow Us</h6>
            <div class="d-flex justify-content-start">
                <a class="btn btn-lg btn-secondary btn-lg-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-lg btn-secondary btn-lg-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-lg btn-secondary btn-lg-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-lg btn-secondary btn-lg-square mr-2" href="#"><i class="fab fa-instagram"></i></a>
                <a class="btn btn-lg btn-secondary btn-lg-square" href="#"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <h5 class="mb-4 text-white text-uppercase font-weight-bold">Kategori Berita</h5>
            <div class="m-n1">
                <?php 
                $sql = "SELECT * FROM tbl_berita";
                $query = mysqli_query($koneksi, $sql);
                while ($berita = mysqli_fetch_array($query)) {
                    ?>
                    <a href="?page=<?php echo $berita['kategori_berita'] ?>" class="btn btn-sm btn-secondary m-1"><?php echo $berita['kategori_berita'] ?></a>
                <?php } ?>
                
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <h5 class="mb-4 text-white text-uppercase font-weight-bold">Coblos Foto</h5>
            <div class="row">
                <div class="col-4 mb-3">
                    <?php 
                    $sql = "SELECT * FROM tbl_berita";
                    $query = mysqli_query($koneksi, $sql);
                    while ($berita = mysqli_fetch_array($query)) {
                        ?>
                        <a href="?page=<?php echo $berita['kategori_berita'] ?>"><img style="max-width: 100%" src="admin/upload/<?php echo $berita['gambar_berita'] ?>" alt=""></a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-primary btn-square back-to-top"><i class="fa fa-arrow-up"></i></a>


<!-- JavaScript Libraries -->
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>
</body>

</html>