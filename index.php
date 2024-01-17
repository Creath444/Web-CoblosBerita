<?php include 'page/header.php' ?>


<?php 
include 'koneksi.php';
if (isset($_GET['page'])) {
    if ($_GET['page'] == 'home') {
        include 'page/home.php';
    }elseif ($_GET['page'] == 'kategori') {
        include 'page/kategori.php';
    }elseif ($_GET['page'] == 'Pilpres') {
        include 'page/page-pilpres.php';
    }elseif ($_GET['page'] == 'Pileg') {
        include 'page/page-pileg.php';
    }elseif ($_GET['page'] == 'Pilkada') {
        include 'page/page-pilkada.php';
    }elseif ($_GET['page'] == 'berita-detail') {
        include 'page/berita-detail.php';
    }elseif ($_GET['page'] == 'kontak') {
        include 'page/kontak.php';
    }else{
        include 'page/home.php';
    }
}else{
    include 'page/home.php';
}

?>

<?php include 'page/footer.php' ?>