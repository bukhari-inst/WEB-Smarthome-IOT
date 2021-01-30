<?php
include "koneksi-sensor.php";
//bacanodemcu
$nilai = $_GET["sensor"];
//update database sensor
mysqli_query($konek, "update sensor set nilaisensor='$nilai'");