<?php
include "koneksi-sensor.php";

$sql = mysqli_query($konek, "select * from sensor");
$data = mysqli_fetch_array($sql);
$nilai = $data["nilaisensor2"];

echo $nilai;

if ($konek) {
    mysqli_select_db($konek, $database);
    // echo "koneksi berhasil ";
} else {
    echo "koneksi gagal";
}