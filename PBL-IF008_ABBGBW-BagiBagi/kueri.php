<?php

function query($sql)
{
    include 'koneksi.php';
    $data = mysqli_query($koneksi, $sql);
    return $data;
}
