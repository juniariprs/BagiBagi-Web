<?php
include 'kueri.php';
$sql = "SELECT * FROM pengguna WHERE id_pengguna = '" . $_GET['id_pengguna'] . "'";
$data = query($sql);
$p = mysqli_fetch_object($data);

?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profil</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section">

        <div class="container">
            <div class="inner-header">
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                        <div class="logo">
                            <img src="img/logo_website.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <div class="advanced-search">
                            <form class="input-group" action="barang.php">
                                <input type="text" name="search" placeholder="Cari barang bekas di sini">
                                <button type="submit"><i class="ti-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3 text-right col-lg-3">
                        <ul class="nav-right">
                            <button class="btn mr-sm-1"><a href="masuk.php">
                                    <li class="user-icon">
                                        <i class="fa fa-sign-in"></i>
                                        <span>Masuk</span>
                                </a>
                                </li>
                            </button>
                            <button class="btn mr-sm-1"><a href="bagikan.php">
                                    <li class="plus-icon">
                                        <i class="fa fa-plus-circle"></i>
                                        <span>Bagikan</span>
                                </a>
                                </li>
                            </button>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav-item">
            <div class="container">
                <div class="nav-depart">
                    <div class="depart-btn">
                        <i class="ti-menu"></i>
                        <span>Semua Kategori</span>
                        <ul class="depart-hover">
                            <li><a href="aksesorisbekas_setelah-masuk.php">Aksesoris Bekas</a></li>
                            <li><a href="bukubekas_setelah-masuk.php">Buku Bekas</a></li>
                            <li><a href="pakaianbekas_setelah-masuk.php">Pakaian Bekas</a></li>
                            <li><a href="perabotanbekas_setelah-masuk.php">Perabotan Bekas</a></li>
                            <li><a href="sepatubekas_setelah-masuk.php">Sepatu Bekas</a></li>
                        </ul>
                    </div>
                </div>
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li><a href="./beranda_setelah-masuk.php">Beranda</a></li>
                        <li><a href="./bukubekas_setelah-masuk.php">Buku Bekas</a></li>
                        <li><a href="./pakaianbekas_setelah-masuk.php">Pakaian Bekas</a></li>
                        <li><a href="./sepatubekas_setelah-masuk.php">Sepatu Bekas</a></li>
                    </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Hero Section Begin -->
    <section class="hero-section">
        <div class="hero-items owl-carousel">
            <div class="single-hero-items set-bg" data-setbg="img/jam_dinding.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3">
                            <h1>Bagikan Barang Bekas</h1>
                            <p>Bagikan barang bekasmu kepada orang lain agar lebih bermanfaat</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-hero-items set-bg" data-setbg="img/bukuku.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3">
                            <h1>Bagikan Barang Bekas</h1>
                            <p>Bagikan barang bekasmu kepada orang lain agar lebih bermanfaat</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="beranda_setelah-masuk.php"><i class="fa fa-home"></i>Beranda</a>
                        <span>Profil</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Form Section Begin -->

    <br>
    <div class="container bootstrap snippet">
        <div class="row">
            <div class="col-sm-10">
            </div>
        </div>

        <form class="form" method="post">
            <div class="row">
                <div class="col-sm-3">

                    <!--left col-->
                    <div class="form-group">
                        <div class="text-left">
                            <?php ?>
                            <img src="img/pengguna/<?php echo $p->foto_profil ?>" width="192px" height="192px" class="avatar img-circle img-thumbnail" alt=" ">
                        </div>
                    </div>

                    </hr>
                    <br>

                    <ul class="list-group">
                        <a href="postingan_mode-lain.php?id_pengguna=<?php echo $p->id_pengguna ?>">
                            <li class="list-group-item text-right"><span class="pull-left"><strong>Postingan Saya</strong></span><i class="fa fa-share-alt fa-1x"></i></li>
                        </a>
                    </ul>

                    <br>

                </div>
                <!--/col-3-->
                <div class="col-sm-9">
                    <div class="tab-content">
                        <div class="tab-pane active" id="home">
                            <hr>
                            <div class="form-group">
                                <div class="col-lg-8">
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <label for="profile_name">
                                                <h4>Nama profil</h4>
                                            </label>
                                    </ul>
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <label for="profile_name">
                                                <h5><?php echo $p->nama_profil ?></h5>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-8">
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <label for="user_name">
                                                <h4>Nama pengguna</h4>
                                            </label>
                                        </li>
                                    </ul>
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <label for="user_name">
                                                <h5><?php echo $p->id_pengguna ?></h5>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-8">
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <label for="email">
                                                <h4>Email</h4>
                                            </label>
                                        </li>
                                    </ul>
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <label for="email">
                                                <h5><?php echo $p->email ?></h5>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-8">
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <label for="address">
                                                <h4>Alamat</h4>
                                            </label>
                                        </li>
                                    </ul>
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <label for="address">
                                                <h5><?php echo $p->alamat ?></h5>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <hr>
        <br>

    </div>

    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer-left">
                        <div class="footer-logo">
                            <a href="#"><img src="img/footer_logo.jpg" alt=""></a>
                        </div>
                        <ul>
                            <li>Email: bagibagipbl@gmail.com</li>
                        </ul>
                        <div class="footer-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1">
                    <div class="footer-widget">
                        <h5>Kategori Favorit</h5>
                        <ul>
                            <li><a href="bukubekas_setelah-masuk.php">Buku Bekas</a></li>
                            <li><a href="pakaianbekas_setelah-masuk.php">Pakaian Bekas</a></li>
                            <li><a href="sepatubekas_setelah-masuk.php">Sepatu Bekas</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="footer-widget">
                        <h5>Tentang BagiBagi</h5>
                        <div class="w-body-a">
                            <p class="w-text-a color-text-a">
                                BagiBagi merupakan situs berbagi barang bekas secara gratis. Bagikan dan temukan barang bekas di sekitar Anda.
                            </p>
                        </div>
                        <div class="col-lg-4">
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-reserved">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="copyright-text">
                                Copyright &copy;
                                <script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.zoom.min.js"></script>
    <script src="js/jquery.dd.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>