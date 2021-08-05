<?php
include 'koneksi.php';

if (isset($_GET['id_barang'])) {
    $barang = mysqli_query($koneksi, "SELECT gambar_barang FROM barang WHERE id_barang = '" . $_GET['id_barang'] . "'");
    $b = mysqli_fetch_object($barang);

    unlink('img/barang/' . $b->gambar_barang);

    $delete = mysqli_query($koneksi, "DELETE FROM barang WHERE id_barang = '" . $_GET['id_barang'] . "'");
    echo "<script>alert('Berhasil menghapus.');location.href='postingan.php'</script>";
}
