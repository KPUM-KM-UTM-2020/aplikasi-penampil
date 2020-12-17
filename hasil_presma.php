<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-4.4.1-dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="shortcut icon" href="img/logo kpum km utm.png">
    <title>Hasil Pemungutan Suara Pemilu Raya 2020</title>
</head>
<?php

try {
    $myPDO = new PDO ("pgsql:host=localhost; dbname=sosialisasi2","pemilu_admin","kpumkm2020");
    #echo "Berhasil masuk Database <br>";
    $tes = $myPDO->query("SELECT suara, jumlah FROM tahap1.vw_hasil_presma;");
    $tes2 = $myPDO->query("SELECT persentase_dari_suara_sah FROM tahap1.vw_hasil_presma;");
    $persentase=array();
    $jumlah=array();
    $keterangan=array();
    while ($obj = $tes -> fetch(PDO::FETCH_OBJ)) {
        $jumlah[] = $obj->jumlah;
        $keterangan[] = $obj->suara;
    }
    while ($obj = $tes2 -> fetch(PDO::FETCH_OBJ)) {
        $persentase[] = floatval(number_format(floatval($obj->persentase_dari_suara_sah),2));
    }
    /*echo var_dump($persentase);
    echo "<br>";
    echo var_dump($jumlah);
    echo "<br>";
    print_r(json_encode($jumlah));
    echo "<br>";
    echo var_dump($keterangan);
    echo "<br>";
    echo var_dump($persentase);*/
} catch (PDOException $e) {

    echo $e->getMessage();
}
?>
<body class="bg-light">
    <div style="margin-left: auto; margin-right: auto;">
        <img src="img/logo kpum km utm.png" alt="Logo KPUM-KM UTM" style="display: block; margin-left: auto; margin-right: auto; width: 7%; padding: 10px">
        <h1 style="text-align: center;">Hasil Pemungutan Suara Pemilu Raya 2020</h1>
        <h4 style="text-align: center;">Pemilihan Presiden Mahasiswa dan Wakil Presiden Mahasiswa Universitas Trunojoyo Madura tahun 2020-2021</h4>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-danger">
        <a class="navbar-brand text-light" href="index.php">Hasil Pemungutan Suara Pemilu E-Vote 2020</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link text-light" href="index.php">Home </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="hasil_presma.php">Pemilihan Presiden dan Wakil Presiden Mahasiswa</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="hasil_presma_dpm.php">Hasil Pemilihan DPM-KM</a>
            </li>
            </ul>
        </div>
    </nav>
    <script src="asset/charts.js"></script>
    <script src="asset/data.js"></script>
    <script src="asset/drilldown.js"></script>
        <figure class="highcharts-figure">
    <div id="container"></div>
    <p class="highcharts-description" style="text-align: center;">
        Diagram ini dibuat atas persetujuan KPUM-KM UTM 2020
    </p>
    </figure>
    <div>
    <script>
    // Create the chart
        Highcharts.chart('container', {
            chart: {
                type: 'column'
            },
            title: {
                text: ''
            },
            accessibility: {
                announceNewData: {
                    enabled: true
                }
            },
            xAxis: {
                type: 'category'
            },
            yAxis: {
                title: {
                    text: 'Persentase Perolehan Suara'
                }

            },
            legend: {
                enabled: false
            },
            plotOptions: {
                series: {
                    borderWidth: 0,
                    dataLabels: {
                        enabled: true,
                        format: '{point.y:.1f}%'
                    }
                }
            },

            tooltip: {
                headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> dari total<br/>'
            },

            series: [
                {
                    name: "Hasil Perhitungan Presiden dan Wakil Presiden Mahasiswa",
                    colorByPoint: true,
                    data: [
                        {
                            name: <?=json_encode($keterangan[0]);?>,
                            y: <?=json_encode($persentase[0]);?>
                        }
                    ]
                }
            ],
            drilldown: {
                series: [
                    {
                        name: "Suara Tidak Sah",
                        id: "Suara Tidak Sah",
                        data: [
                            [
                                "Verifikasi tidak Valid",
                                27.07,
                            ],
                            [
                                "Salah input Fakultas",
                                51.87,
                            ],
                            [
                                "Dll",
                                21.06,
                            ]
                        ]
                    }
                ]
            }
        });
    </script>
    </div>
    <?php
    echo"
    <div>
        <table class=\"table table-hover table-bordered rounded border-dark\" style=\"border-width: 2px;\">
            <thead>
                <tr>
                <th class=\"border-dark\" scope=\"col\">Keterangan</th>
                <th scope=\"col\" class=\"border-dark\">Persentase dari suara sah</th>
                <th scope=\"col\" class=\"border-dark\">Jumlah</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td>$keterangan[0]</td>
                <td>$persentase[0]</td>
                <td>$jumlah[0]</td>
                </tr>
                <tr>
                <td>$keterangan[1]</td>
                <td></td>
                <td>$jumlah[1]</td>
                </tr>
                <tr>
                <td>$keterangan[2]</td>
                <td></td>
                <td>$jumlah[2]</td>
                </tr>
            </tbody>
        </table>
    </div>"
    ?>
</body>
</html>