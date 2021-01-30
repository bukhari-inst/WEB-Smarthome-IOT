<?php
include 'config.php';
include "koneksi-sensor.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="style.css" />
    <link rel="shortcut icon" href="img/smart-home.png" type="image/x-icon" />
    <script type="text/javascript" src="jquery/jquery.min.js"></script>
    <title>Smarthome</title>

    <script type="text/javascript">
    $(document).ready(function() {
        setInterval(function() {
            $("#ceksensor").load('ceksensor.php');
        }, 500);
    })

    $(document).ready(function() {
        setInterval(function() {
            $("#ceksensor2").load('ceksensor2.php');
        }, 500);
    })
    </script>
</head>

<body>

    <!-- <img src="images/kodingperangkat.png" alt="img"> -->
    </div>
    <!-- NAVBAR -->
    <nav class="navbar navbar-light bg-light p-3 shadow">
        <div class="container">
            <div class="container-fluid">
                <span class="navbar-brand mb-0 h1 text-uppercase">
                    <b>Smarthome</b>
                </span>
            </div>
        </div>
    </nav>
    <!--END NAVBAR -->

    <!-- LIGHT -->
    <section class="page-sections mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5 six">
                    <h3 class="text-uppercase nits"><b> LIGHT</b></h3>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-auto col d-flex justify-content-center">
                    <div class="card shadow p-3 mb-3 bg-white rounded border-0" style="width: 15rem">
                        <div class="card-body">
                            <div class="form-check form-switch" style="margin-bottom: 17px;">
                                <!-- <input class="form-check-input p-2" type="checkbox" data-onstyle="danger"
                                    id="flexSwitchCheckChecked" onclick="emit()" value="On" /> -->

                                <button type="button" class="btn btn-primary px-4" style="margin-right: 6px;"
                                    id="flexSwitchCheckChecked"
                                    onclick="window.location.href='control.php?id=1&nilai=0'">ON</button>
                                <button type="button" class="btn btn-outline-dark px-3"
                                    onclick="window.location.href='control.php?id=1&nilai=1'">OFF</button>

                                <?php
                                $data = mysqli_query($mysqli, "SELECT nilai FROM led WHERE id='1'");
                                if ($val = mysqli_fetch_array($data)) {
                                    $hasil = $val['nilai'];
                                    if ($hasil == 0) {
                                        $status = "ON";
                                    } else {
                                        $status = "OFF";
                                    }
                                    echo "LAMP 1 ";
                                    echo $status;
                                }
                                ?>

                                <!-- <label class="form-check-label" for="flexSwitchCheckChecked"><img
                                        src="img/pic_bulboff.gif" id="myImage" width="15" alt="kt" />&nbsp; <span>Kamar
                                        Tidur</span></label> -->
                            </div>
                            <div class="form-check form-switch">

                                <button type="button" class="btn btn-primary px-4" style="margin-right: 6px;"
                                    onclick="window.location.href='control.php?id=2&nilai=0'">ON</button>
                                <button type="button" class="btn btn-outline-dark px-3"
                                    onclick="window.location.href='control.php?id=2&nilai=1'">OFF</button>

                                <?php
                                $data = mysqli_query($mysqli, "SELECT nilai FROM led WHERE id='2'");
                                if ($val = mysqli_fetch_array($data)) {
                                    $hasil = $val['nilai'];
                                    if ($hasil == 0) {
                                        $status = "ON";
                                    } else {
                                        $status = "OFF";
                                    }
                                    echo "LAMP 2 ";
                                    echo $status;
                                }
                                ?>
                                <!-- <input class="form-check-input p-2" type="checkbox" id="flexSwitchCheckCheckeds"
                                    onclick="emits()" value="On" />
                                <label class="form-check-label" for="flexSwitchCheckCheckeds"><img
                                        src="img/pic_bulboff.gif" id="myImg" width="15" alt="km" />&nbsp; <span>Kamar
                                        Mandi</span></label> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-auto col d-flex justify-content-center">
                    <div class="card shadow p-3 mb-3 bg-white rounded border-0" style="width: 15rem">
                        <div class="card-body">
                            <div class="form-check form-switch" style="margin-bottom: 17px;">

                                <button type="button" class="btn btn-primary px-4" style="margin-right: 6px;"
                                    onclick="window.location.href='control.php?id=3&nilai=0'">ON</button>
                                <button type="button" class="btn btn-outline-dark px-3"
                                    onclick="window.location.href='control.php?id=3&nilai=1'">OFF</button>

                                <?php
                                $data = mysqli_query($mysqli, "SELECT nilai FROM led WHERE id='3'");
                                if ($val = mysqli_fetch_array($data)) {
                                    $hasil = $val['nilai'];
                                    if ($hasil == 0) {
                                        $status = "ON";
                                    } else {
                                        $status = "OFF";
                                    }
                                    echo "LAMP 3 ";
                                    echo $status;
                                }
                                ?>

                                <!-- <input class="form-check-input p-2" type="checkbox" id="flexSwitchCheckCheckeda"
                                    onclick="eve().window.location.href='control.php?id=1&nilai=0'" value="On" />
                                <label class="form-check-label" for="flexSwitchCheckCheckeda"><img
                                        src="img/pic_bulboff.gif" id="myBtn" width="15" alt="dp" />&nbsp;
                                    <span>Dapur</span></label> -->
                            </div>
                            <div class="form-check form-switch">

                                <button type="button" class="btn btn-primary px-4" style="margin-right: 6px;"
                                    onclick="window.location.href='control.php?id=4&nilai=0'">ON</button>
                                <button type="button" class="btn btn-outline-dark px-3"
                                    onclick="window.location.href='control.php?id=4&nilai=1'">OFF</button>

                                <?php
                                $data = mysqli_query($mysqli, "SELECT nilai FROM led WHERE id='4'");
                                if ($val = mysqli_fetch_array($data)) {
                                    $hasil = $val['nilai'];
                                    if ($hasil == 0) {
                                        $status = "ON";
                                    } else {
                                        $status = "OFF";
                                    }
                                    echo "LAMP 4 ";
                                    echo $status;
                                }
                                ?>

                                <!-- <input class="form-check-input p-2" type="checkbox" id="flexSwitchCheckCheckedt"
                                    onclick="goods()" value="On" />
                                <label class="form-check-label" for="flexSwitchCheckCheckedt"><img
                                        src="img/pic_bulboff.gif" id="myClass" width="15" alt="rt" />&nbsp; <span>Ruang
                                        Tamu</span></label> -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-md-auto col d-flex justify-content-center">
                    <div class="card shadow p-3 mb-5 bg-white rounded border-0" style="width: 15rem">
                        <div class="card-body">
                            <div class="form-check form-switch">
                                <input class="form-check-input p-2" type="checkbox" id="flexSwitchCheckCheckedd"
                                    onclick="good()" value="On" />
                                <label class="form-check-label" for="flexSwitchCheckCheckedd"><img
                                        src="img/pic_bulboff.gif" id="myClas" width="15" alt="teras" />&nbsp;
                                    <span>Teras</span></label>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
    <!--END LIGHT -->

    <!-- SENSOR SUHU -->
    <section class="page-sections mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5 six">
                    <h3 class="text-uppercase nits"><b>SENSOR</b></h3>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-auto col d-flex justify-content-center">
                    <div class="card shadow p-3 mb-3 bg-white rounded border-0" style="width: 15rem">
                        <h6 class="text-uppercase nits"><b>Intensitas Cahaya</b></h6>
                        <div class="card-body">
                            <?php $sql = mysqli_query($konek, "select * from sensor");
                            $data = mysqli_fetch_array($sql);
                            ?>
                            <div class="progress blue" data-percentage="100">
                                <span class="progress-left">
                                    <span class="progress-bar"></span>
                                </span>
                                <span class="progress-right">
                                    <span class="progress-bar"></span>
                                </span>
                                <div class="progress-value">
                                    <div>
                                        <h1><span style="font-size: 50px;" id="ceksensor"></span><span
                                                style="font-size: 20px;"> cd</span>
                                        </h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-auto col d-flex justify-content-center">
                    <div class="card shadow p-3 mb-3 bg-white rounded border-0" style="width: 15rem">
                        <b>SUHU RUANGAN</b>
                        <div class="card-body">
                            <div class="progress yellow" data-percentage="100">
                                <span class="progress-left">
                                    <span class="progress-bar"></span>
                                </span>
                                <span class="progress-right">
                                    <span class="progress-bar"></span>
                                </span>
                                <div class="progress-value">
                                    <div>
                                        <h1><span style="font-size: 50px;" id="ceksensor2"></span><span
                                                style="font-size: 20px;"> &#8451;</span>
                                        </h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--END SENSOR SUHU -->

    <!-- FOOTER -->
    <footer class="pt-4 my-md-3 pt-md-5 border-top mt-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md">
                    <img class="mb-2" src="img/smart-home.png" alt="" width="24" height="19" />
                    <small class="d-block mb-3 text-muted">&copy; 2020-2021</small>
                </div>
                <div class="col-6 col-md">
                    <ul class="list-unstyled text-small">
                        <li>Citra Mirna Wati - 1855201005</li>
                        <li>Dhiazmi A.N - 1855201027</li>
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <ul class="list-unstyled text-small">
                        <li>M. Bukhori - 1855201033</li>
                        <li>Safrinadi Ilham - 1855201047</li>
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <ul class="list-unstyled text-small">
                        <li>M. Yusuf Ashari - 1855201007</li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!--END FOOTER -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>
    <script src="index.js"></script>
</body>

</html>