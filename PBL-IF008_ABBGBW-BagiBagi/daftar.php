<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar</title>

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
                    <div class="col-md-7 col-md-7">
                        <div class="advanced-search">
                            <form class="input-group" action="barang.php">
                                <input type="text" name="search" placeholder="Cari barang bekas di sini">
                                <button type="submit"><i class="ti-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3 text-right col-lg-1">
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
                            <li><a href="aksesorisbekas.php">Aksesoris Bekas</a></li>
                            <li><a href="bukubekas.php">Buku Bekas</a></li>
                            <li><a href="pakaianbekas.php">Pakaian Bekas</a></li>
                            <li><a href="perabotanbekas.php">Perabotan Bekas</a></li>
                            <li><a href="sepatubekas.php">Sepatu Bekas</a></li>
                        </ul>
                    </div>
                </div>
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li><a href="./beranda.php">Beranda</a></li>
                        <li><a href="./bukubekas.php">Buku Bekas</a></li>
                        <li><a href="./pakaianbekas.php">Pakaian Bekas</a></li>
                        <li><a href="./sepatubekas.php">Sepatu Bekas</a></li>
                    </ul>
                    </li>
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

    <!-- Register Section Begin -->
    <div class="register-login-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="register-form">
                        <h2>Daftar</h2>
                        <form method="POST" action="simpan_data_daftar.php">
                            <div class="group-input">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" required>
                            </div>
                            <div class="group-input">
                                <label for="username">Nama pengguna</label>
                                <input type="text" name="username" id="username" required>
                            </div>
                            <div class="group-input">
                                <label for="password1">Kata sandi</label>
                                <input type="password" name="password1" id="password1" required>
                                <span class="eye pull-right" onclick="function1()">
                                    <i id="hide1" class="fa fa-eye"></i>
                                    <i id="hide2" class="fa fa-eye-slash"></i>
                                </span>
                            </div>
                            <div class="group-input">
                                <label for="password2">Konfirmasi ulang kata sandi</label>
                                <input type="password" name="password2" id="password2" required>
                                <span class="eye pull-right" onclick="function2()">
                                    <i id="hide3" class="fa fa-eye"></i>
                                    <i id="hide4" class="fa fa-eye-slash"></i>
                                </span>
                            </div>
                            <button type="submit" class="site-btn register-btn">Daftar</button>

                            <script>
                                function function1() {
                                    var a = document.getElementById("password1");
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
                                    var b = document.getElementById("password2");
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
                            </script>
                        </form>
                        <div class=" switch-login">
                            <a href="./masuk.php" class="or-login">Telah punya akun? Masuk</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Register Form Section End -->

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
                            <li><a href="bukubekas.php">Buku Bekas</a></li>
                            <li><a href="pakaianbekas.php">Pakaian Bekas</a></li>
                            <li><a href="sepatubekas.php">Sepatu Bekas</a></li>
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