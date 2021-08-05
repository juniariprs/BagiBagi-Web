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
    <title>Bagikan</title>

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
                        <span>Bagikan</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Form Section Begin -->

    <!-- Register Section Begin -->
    <div class="register-login-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="login-form">
                        <h2>Bagikan Barang</h2>
                        <?php
                        include 'koneksi.php';
                        $barang = mysqli_query($koneksi, "SELECT * FROM barang WHERE id_barang = '" . $_GET['id_barang'] . "'");
                        $b = mysqli_fetch_object($barang);
                        ?>

                        <form method="post" enctype="multipart/form-data">
                            <div class="row">
                                <label class="col-4">Kategori</label>
                                <div class="col-8">
                                    <select name="category" required>
                                        <option selected hidden value="">- Pilih -</option>
                                        <?php
                                        $category = mysqli_query($koneksi, "SELECT * FROM kategori ORDER BY id_kategori DESC");
                                        while ($row = mysqli_fetch_array($category)) {
                                        ?>
                                            <option value="<?php echo $row['id_kategori'] ?>" <?php echo ($row['id_kategori'] == $b->id_kategori) ? 'selected' : ''; ?>><?php echo $row['nama_kategori'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-4">Nama</label>
                                <div class="col-8">
                                    <input type="text" name="item_name" class="input-control" value="<?php echo $b->nama_barang ?>" required>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-4">Stok</label>
                                <div class="col-8">
                                    <input type="number" name="item_stock" class="input-control" value="<?php echo $b->stok_barang ?>" required>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-4">Deskripsi</label>
                                <div class="col-8">
                                    <textarea name="item_description" rows="10" style="width:100%;" class="input-control" required><?php echo $b->deskripsi_barang ?></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-4">Unggah Gambar</label>
                                <div class="col-8">
                                    <img src="img/barang/<?php echo $b->gambar_barang ?>" width="150" height="150">
                                    <input type="hidden" name="this_pic" value="<?php echo $b->gambar_barang ?>">
                                    <input type="file" name="picture_name" class="input-control">
                                    <p style="color: red">Ekstensi file yang diperbolehkan adalah .jpg dan/atau .jpeg</p>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <label class="col-4"></label>
                                <div class="col-lg-12 text-center">
                                    <input type="submit" name="submit" value="Simpan" class="site-btn"></input>
                                </div>
                            </div>
                        </form>
                        <?php
                        if (isset($_POST['submit'])) {
                            // get input from the form
                            $user = $_SESSION['user'];
                            $category         = $_POST['category'];
                            $item_name        = $_POST['item_name'];
                            $item_stock       = $_POST['item_stock'];
                            $item_description = $_POST['item_description'];
                            $this_pic         = $_POST['this_pic'];

                            // get the uploaded picture file data
                            $picture_name = $_FILES['picture_name']['name'];

                            //get the file type
                            $picture_type = $_FILES['picture_name']['type'];

                            // set a place for saving pictures
                            $tmp_name = $_FILES['picture_name']['tmp_name'];

                            // the allowed file type
                            $allowed_type = array('jpg', 'jpeg');

                            // if the picture is changed
                            if ($picture_name != '') {
                                //get the extension
                                $type1 = explode('.', $picture_name);
                                $type2 = $type1[1];

                                if (in_array($type2, $allowed_type)) {
                                    // delete the old file in the saving directory
                                    unlink('img/barang/' . $this_pic);

                                    // set the new name of just uploaded picture
                                    $new_name = 'barang' . time() . '.' . $type2;

                                    // the process of uploading the file
                                    // if the file type that will be uploaded is suitable
                                    move_uploaded_file($tmp_name, 'img/barang/' . $new_name);
                                    $photo_name = $new_name;
                                } else if (!in_array($type2, $allowed_type)) {
                                    $photo_name = $this_pic;
                                    echo "<script>alert('Ekstensi file unggahan tidak diperbolehkan.');location.href='postingan.php'</script>";
                                }
                            }
                            // if the picture is not changed
                            else {
                                $photo_name = $this_pic;
                            }

                            // the process of updating database
                            $update = mysqli_query($koneksi, "UPDATE barang SET 
                                    id_pengguna = '" . $user . "', 
                                    id_kategori = '" . $category . "', 
                                    nama_barang = '" . $item_name . "', 
                                    stok_barang = '" . $item_stock . "', 
                                    deskripsi_barang = '" . $item_description . "',
                                    gambar_barang = '" . $photo_name . "' 
                                    WHERE id_barang = '" . $_GET['id_barang'] . "'
                                    ");

                            if ($update) {
                                echo "<script>alert('Berhasil mengubah data barang.');location.href='postingan.php'</script>";
                            } else {
                                echo "<script>alert('Gagal mengubah data barang.');location.href='edit_barang.php'</script>";
                            }
                        }
                        ?>
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