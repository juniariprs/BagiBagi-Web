<?php
include 'cek_session.php';
$user = $_SESSION['user'];

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
                            <form class="input-group" action="barang_setelah-masuk.php">
                                <input type="text" name="search" placeholder="Cari barang bekas di sini">
                                <button type="submit"><i class="ti-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3 text-right col-lg-3">
                        <div class="nav-right">
                            <div class="depart-btn">
                                <button class="btn mr-sm-1">
                                    <li class="user-icon">
                                        <span><?php echo $user; ?></span>
                                    </li>
                                </button>
                                <ul class="depart-hover">
                                    <li class="user-icon"><a href="profil.php"><i class="fa fa-user"></i><span class="pull-right">Profil &nbsp;</span></a></li>
                                    <hr>
                                    <li class="user-icon"><a href="keluar.php"><i class="fa fa-sign-out"></i><span class="pull-right">Keluar</span></a></li>
                                </ul>
                            </div>
                            <button class="btn mr-sm-1"><a href="bagikan.php">
                                    <li class="plus-icon">
                                        <i class="fa fa-plus-circle"></i>
                                        <span>Bagikan</span>
                                </a>
                                </li>
                            </button>
                        </div>
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
                        <a href="profil.php">Profil</a>
                        <span>Ubah Kata Sandi</span>
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

                <?php
                include 'koneksi.php';
                $user = $_SESSION['user'];
                ?>

                <!--/col-3-->
                <div class="col-sm-9">
                    <div class="tab-content">
                        <div class="tab-pane active" id="home">
                            <hr>

                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="curr_pass">
                                        <h4>Kata sandi saat ini</h4>
                                    </label>
                                    <div class="input-box">
                                        <input type="password" class="form-control" name="curr_pass" id="curr_pass" required>
                                        <span class="eye pull-right" onclick="function1()">
                                            <i id="hide1" class="fa fa-eye"></i>
                                            <i id="hide2" class="fa fa-eye-slash"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="password1">
                                        <h4>Kata sandi baru</h4>
                                    </label>
                                    <div class="input-box">
                                        <input type="password" class="form-control" name="password1" id="password1" required>
                                        <span class="eye pull-right" onclick="function2()">
                                            <i id="hide3" class="fa fa-eye"></i>
                                            <i id="hide4" class="fa fa-eye-slash"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">

                                <div class="col-xs-6">
                                    <label for="password2">
                                        <h4>Konfirmasi ulang kata sandi baru</h4>
                                    </label>
                                    <div class="input-box">
                                        <input type="password" class="form-control" name="password2" id="password2" required>
                                        <span class="eye pull-right" onclick="function3()">
                                            <i id="hide5" class="fa fa-eye"></i>
                                            <i id="hide6" class="fa fa-eye-slash"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="form-group">
                            <div class="col-xs-12">
                                <br>
                                <input type="submit" name="submit" value="Simpan" class="site-btn"></input>
                            </div>
                        </div>

                        <script>
                            function function1() {
                                var a = document.getElementById("curr_pass");
                                var x = document.getElementById("hide1");
                                var y = document.getElementById("hide2");

                                if (a.type === 'password') {
                                    a.type = "text";
                                    x.style.display = "block";
                                    y.style.display = "none";
                                } else if (a.type === 'text') {
                                    a.type = "password";
                                    x.style.display = "none";
                                    y.style.display = "block";
                                }
                            }

                            function function2() {
                                var b = document.getElementById("password1");
                                var x = document.getElementById("hide3");
                                var y = document.getElementById("hide4");

                                if (b.type === 'password') {
                                    b.type = "text";
                                    x.style.display = "block";
                                    y.style.display = "none";
                                } else if (b.type === 'text') {
                                    b.type = "password";
                                    x.style.display = "none";
                                    y.style.display = "block";
                                }
                            }

                            function function3() {
                                var c = document.getElementById("password2");
                                var x = document.getElementById("hide5");
                                var y = document.getElementById("hide6");

                                if (c.type === 'password') {
                                    c.type = "text";
                                    x.style.display = "block";
                                    y.style.display = "none";
                                } else if (c.type === 'text') {
                                    c.type = "password";
                                    x.style.display = "none";
                                    y.style.display = "block";
                                }
                            }
                        </script>

        </form>
        <?php
        if (isset($_POST['submit'])) {
            // get input from the form
            $curr_pass       = $_POST['curr_pass'];
            $password1       = $_POST['password1'];
            $password2       = $_POST['password2'];

            // check if the current password is correct
            $result = mysqli_query($koneksi, "SELECT kata_sandi FROM pengguna WHERE id_pengguna = '" . $user . "' ");
            $row = mysqli_fetch_object($result);

            if (password_verify($curr_pass, $row->kata_sandi)) {
                // check if the password is same
                if ($password1 == $password2) {
                    $encrypt = password_hash($password1, CRYPT_BLOWFISH);
                    $update = mysqli_query($koneksi, "UPDATE pengguna SET
                                                    kata_sandi        = '" . $encrypt . "' 
                                                    WHERE id_pengguna = '" . $user . "'
                                                    ");
                    echo "<p>Kata sandi telah diubah.</p>";
                } else {
                    echo "<p>Kata sandi tidak cocok.<p>";
                }
            } else {
                echo "<p>Kata sandi saat ini salah.<p>";
            }
        }
        ?>


        <hr>

    </div>
    </div>
    </div>
    </div>
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