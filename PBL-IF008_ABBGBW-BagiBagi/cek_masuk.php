<?php
//mengaktifkan session php
session_start();
//menghubungkan dengan koneksi
include 'koneksi.php';
//menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];

//menyeleksi data pengguna dengan username dan password yang sesuai
$data = mysqli_query($koneksi, "SELECT id_pengguna, kata_sandi FROM pengguna WHERE id_pengguna='$username'");
if (mysqli_num_rows($data) > 0) {
    $row = mysqli_fetch_array($data);
    $verify = password_verify($password, $row['kata_sandi']);
    if ($verify) {
        //membuat session
        $_SESSION['user'] = $row['id_pengguna'];
        echo "<script>alert('Selamat datang di situs BagiBagi!');location.href='beranda_setelah-masuk.php'</script>";
    }
}
echo "<script>alert('Maaf, nama pengguna atau kata sandi Anda salah.');location.href='masuk.php'</script>";
