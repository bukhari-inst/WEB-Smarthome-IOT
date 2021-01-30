<?php
include "koneksi-sensor.php";
//bacanodemcu
$nilai2 = $_GET["sensor2"];
//update database sensor
mysqli_query($konek, "update sensor set nilaisensor2='$nilai2'");