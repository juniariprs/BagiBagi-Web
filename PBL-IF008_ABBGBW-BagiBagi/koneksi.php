<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "dbbagibagi"; //Nama Database

//melakukan koneksi ke db
$koneksi = mysqli_connect($host, $user, $pass, $db);
if (!$koneksi) {
    echo "Koneksi gagal: " . die(mysqli_error($connection));
}
