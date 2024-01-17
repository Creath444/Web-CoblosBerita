<?php
session_start();
include '../koneksi.php';
if ($_SESSION['id_login'] =='' && $_SESSION['status'] != 'login' ) {
  header("location:login.php"); 
   // code...
 } 
 $id_login = $_SESSION['id_login'];
 $data = mysqli_query($koneksi,"SELECT *  FROM tbl_login WHERE id_login = '$id_login'");

 $user = mysqli_fetch_array($data);
 ?>
<!doctype html>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="AFL">
    <meta name="generator" content="Hugo 0.101.0">
    <!-- Favicons -->
    <link rel="icon" href="../img/logo.png" sizes="32x32" type="image/png">
    <meta name="theme-color" content="#563d7c">

    <title>Admin</title>

    
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Custom styles for this template -->
    <link href="assets/css/dashboard.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.8.2/tinymce.min.js" integrity="sha512-6JR4bbn8rCKvrkdoTJd/VFyXAN4CE9XMtgykPWgKiHjou56YDJxWsi90hAeMTYxNwUnKSQu9JPc3SQUg+aGCHw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
  </head>
  <body>

    <nav class="navbar navbar-primary sticky-top bg-primary flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3 text-light" href="#" >COBLOS BERITA</a>
      <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link text-light hover bg-dark p-3 text-white" href="#"><?php echo $user['nama_login'] ?></a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse">
          <div class="sidebar-sticky pt-3 bg-light">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link text-dark hover" href="admin.php">
                  <span data-feather="home"></span>
                  Home
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-dark hover" href="admin.php?page=berita">
                  <span data-feather="tv"></span>
                  Berita
                </a>
              </li>
            </ul>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>TOOLS</span>
              <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
                <span data-feather="plus-circle"></span>
              </a>
            </h6>
            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link text-dark hover" href="admin.php?page=profile">
                  <span data-feather="user"></span>
                  Profile
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-dark hover" href="admin.php?page=ganti_password">
                  <span data-feather="lock"></span>
                  Ganti Password
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-dark hover" href="keluar.php">
                  <span data-feather="log-out"></span>
                  Keluar
                </a>
              </li>
            </ul>
          </div>
        </nav>
        
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
          

          <!-- start content -->
          <?php
          // Page Dinamis 
          if(isset($_GET['page'])){
            if($_GET['page']=='berita'){
              include "berita.php";     
            }elseif($_GET['page']=='tambah_berita'){
              include "tambah_berita.php";
            }elseif($_GET['page']=='profile'){
              include "profile.php";
            }elseif($_GET['page']=='detail_profil'){
              include "detail_profil.php";
            }elseif($_GET['page']=='ganti_password'){
              include "ganti_password.php";
            }elseif($_GET['page']=='detail_berita'){
              include "detail_berita.php";
            }elseif($_GET['page']=='edit_berita'){
              include "edit_berita.php";
            }elseif($_GET['page']=='hapus_berita'){
              include "hapus_berita.php";
            }else{
              include "home.php";
            }
          }else{
            include "home.php";
          }
        ?>
          <!-- end content -->

        </main>
      </div>
    </div>
  </body>
  <script>
   feather.replace()

 </script>
 </html>
