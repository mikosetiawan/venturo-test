<?php

//ambil data json dari file
$content = file_get_contents("http://tes-web.landa.id/intermediate/menu");
$content = file_get_contents("http://tes-web.landa.id/intermediate/transaksi?tahun=" . $_GET['tahun']);


//mengubah standar encoding
$content = utf8_encode($content);

//mengubah data json menjadi data array asosiatif
$result = json_decode($content, true);

// $ArrContextOptions = array(
//     "Ssl" => array(
//         "Verify_peer" => False,
//         "Verify_peer_name" => False,
//     ),
// );
// $linkAPI = json_decode(file_get_contents("http://tes-web.landa.id/intermediate/menu"));
// $linkAPI = json_decode(file_get_contents("http://tes-web.landa.id/intermediate/transaksi?tahun=" . $_GET['tahun']));
// $Response = file_get_contents($linkAPI, False, stream_context_create($ArrContextOptions));
// // Mendecode Prov.Json
// $Data = Json_decode($Response, True);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- LOGO -->
    <link rel="shortcut icon" href="assets/img/ico.png" type="image/x-icon">
    <title>Dashboard | Laporan ventura</title>

    <!-- BOOSTRAP CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- STYLE CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- CSS OAS ANIMATION -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


    <style>
        td,
        th {
            font-size: 11px;
        }
    </style>

</head>

<body>

    <header class="navbar navbar-expand-lg shadow-sm sticky-top" style="background-color: #fff ;">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <img src="assets/img/ico.png" width="80" height="auto">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto me-5">
                    <li class="nav-item">
                        <a class="nav-link active px-3" aria-current="page" href="#" style="font-weight: 500;">Dashboard</a>
                    </li>
            </div>
        </div>
    </header>
    <section>
        <div class="container-fluid">
            <div class="col-lg-12 py-5">
                <h2>Wellcome ! admin</h2>
                <p>Laporan menu</p>
                <hr>
                <div class="card" style="margin: 2rem 0rem;">
                    <div class="card-header">
                        Venturo - Laporan penjualan tahunan per menu
                    </div>
                    <div class="card-body">
                        <form action="" method="get">
                            <div class="row">
                                <div class="col-2">
                                    <div class="form-group">
                                        <select id="my-select" class="form-control" name="tahun">
                                            <option value="">Pilih Tahun</option>
                                            <option value="2021" selected="">2021</option>
                                            <option value="2022">2022</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <button type="submit" class="btn btn-primary">
                                        Tampilkan
                                    </button>
                                </div>
                            </div>
                        </form>
                        <hr>
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered" style="margin: 0;">
                                <thead>
                                    <tr class="table-dark">
                                        <th rowspan="2" style="text-align:center;vertical-align: middle;width: 250px;">Menu</th>
                                        <th colspan="12" style="text-align: center;">Periode Pada 2021
                                        </th>
                                        <th rowspan="2" style="text-align:center;vertical-align: middle;width:75px">Total</th>
                                    </tr>
                                    <tr class="table-dark">
                                        <th style="text-align: center;width: 75px;">Jan</th>
                                        <th style="text-align: center;width: 75px;">Feb</th>
                                        <th style="text-align: center;width: 75px;">Mar</th>
                                        <th style="text-align: center;width: 75px;">Apr</th>
                                        <th style="text-align: center;width: 75px;">Mei</th>
                                        <th style="text-align: center;width: 75px;">Jun</th>
                                        <th style="text-align: center;width: 75px;">Jul</th>
                                        <th style="text-align: center;width: 75px;">Ags</th>
                                        <th style="text-align: center;width: 75px;">Sep</th>
                                        <th style="text-align: center;width: 75px;">Okt</th>
                                        <th style="text-align: center;width: 75px;">Nov</th>
                                        <th style="text-align: center;width: 75px;">Des</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($result as $value ) {
                                    ?>
                                        <tr>
                                            <td class="table-secondary" colspan="14"><b>Makanan</b></td>
                                        </tr>
                                        <tr>
                                            <td>Nasi Goreng</td>
                                            <td style="text-align: right;">
                                                130,000
                                            </td>
                                            <td style="text-align: right;">
                                                170,000
                                            </td>
                                            <td style="text-align: right;">
                                                50,000
                                            </td>
                                            <td style="text-align: right;">
                                                100,000
                                            </td>
                                            <td style="text-align: right;">
                                            </td>
                                            <td style="text-align: right;">
                                                65,000
                                            </td>
                                            <td style="text-align: right;">
                                                10,000
                                            </td>
                                            <td style="text-align: right;">
                                                10,000
                                            </td>
                                            <td style="text-align: right;">
                                                50,000
                                            </td>
                                            <td style="text-align: right;">
                                                10,000
                                            </td>
                                            <td style="text-align: right;">
                                                40,000
                                            </td>
                                            <td style="text-align: right;">
                                                30,000
                                            </td>
                                            <td style="text-align: right;"><b>665,000</b></td>
                                        </tr>
                                        <tr>
                                            <td><?= $value['menu']; ?></td>
                                            <td><?= $value['total']; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="table-secondary" colspan="14"><b>Minuman</b></td>
                                        </tr>
                                        <tr>
                                            <td>Teh Hijau</td>
                                            <td style="text-align: right;">
                                                60,000
                                            </td>
                                            <td style="text-align: right;">
                                                70,000
                                            </td>
                                            <td style="text-align: right;">
                                                90,000
                                            </td>
                                            <td style="text-align: right;">
                                                190,000
                                            </td>
                                            <td style="text-align: right;">
                                                10,000
                                            </td>
                                            <td style="text-align: right;">
                                                150,000
                                            </td>
                                            <td style="text-align: right;">
                                                40,000
                                            </td>
                                            <td style="text-align: right;">
                                                10,000
                                            </td>
                                            <td style="text-align: right;">
                                                40,000
                                            </td>
                                            <td style="text-align: right;">
                                            </td>
                                            <td style="text-align: right;">
                                                20,000
                                            </td>
                                            <td style="text-align: right;">
                                                30,000
                                            </td>
                                            <td style="text-align: right;"><b>710,000</b></td>
                                        </tr>
                                        <tr class="table-dark">
                                            <td><b>Total</b></td>
                                            <td style="text-align: right;">
                                                <b>469,000</b>
                                            </td>
                                            <td style="text-align: right;">
                                                <b>605,000</b>
                                            </td>
                                            <td style="text-align: right;">
                                                <b>350,000</b>
                                            </td>
                                            <td style="text-align: right;">
                                                <b>604,000</b>
                                            </td>
                                            <td style="text-align: right;">
                                                <b>257,000</b>
                                            </td>
                                            <td style="text-align: right;">
                                                <b>464,000</b>
                                            </td>
                                            <td style="text-align: right;">
                                                <b>228,000</b>
                                            </td>
                                            <td style="text-align: right;">
                                                <b>303,000</b>
                                            </td>
                                            <td style="text-align: right;">
                                                <b>229,000</b>
                                            </td>
                                            <td style="text-align: right;">
                                                <b>169,000</b>
                                            </td>
                                            <td style="text-align: right;">
                                                <b>157,000</b>
                                            </td>
                                            <td style="text-align: right;">
                                                <b>130,000</b>
                                            </td>
                                            <td style="text-align: right;"><b>3,965,000</b></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <?php if (isset($menu)) { ?>

                        <div class="row m-3">
                            <div class="col-6">
                                <h4>Isi Json Menu</h4>
                                <pre style="height: 400px; background:#eaeaea;"><?php var_dump($menu) ?></pre>
                            </div>
                            <div class="col-6">
                                <h4>Isi Json Transaksi</h4>
                                <pre style="height: 400px; background:#eaeaea;"><?php var_dump($transaksi) ?></pre>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>








    <!-- BOOSTRAP JS -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!-- JQUERY -->
    <script src="assets/js/jquery-3.6.1.min.js"></script>
    <!-- JS AOS ANIMATION -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>