<?php
include 'koneksi.php';
$email = $_POST['email'];
$username = $_POST['username'];
$password1 = $_POST['password1'];
$password2 = $_POST['password2'];
$default_img = "default.jpg";
if (($email != '') && ($username != '') && ($password1 != '') && ($password2 != '')) {
    if ($password1 == $password2) {
        $encrypt = password_hash($password1, CRYPT_BLOWFISH);
        $input = mysqli_query($koneksi, "INSERT INTO pengguna
        VALUES('$username','$default_img','','$email','$encrypt','')");
        echo "<script>alert('Anda telah berhasil mendaftar.');location.href='masuk.php'</script>";
    }
} else {
    echo "<script>alert('Gagal. Terjadi kesalahan.');location.href='daftar.php'</script>";
}
