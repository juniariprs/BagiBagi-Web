<?php
session_start();

if (!isset($_SESSION['user'])) {
    echo "<script>alert('Masuk ke dalam akun terlebih dahulu.');location.href='masuk.php'</script>";
}
