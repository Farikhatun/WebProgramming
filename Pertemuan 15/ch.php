<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>📊Highchart📊</title>
</head>

<body>
    <h1>
        <center>📈Highchart📉</center>
    </h1>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Tinggi Muka Air</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="ch.php">Curah Hujan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="kekeruhan.php">Kekeruhan Air</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="kombinasi.php">Kombinasi</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="container-fluid mt-3">
            <div class="row d-flex justify-content-center">
                <div class="col-sm-9">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Grafik Curah Hujan</h5>
                            <hr>
                            <div id="grafik"></div>
                            <?php
                            include 'koneksi.php';
                            $ch = mysqli_query($koneksi, 'select * from ch');
                            while ($row = mysqli_fetch_array($ch)) {
                                $data[] = array(
                                    $row['waktu'],
                                    floatval($row['nilai'])
                                );
                            }
                            $json = json_encode($data);
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script type="text/javascript">
        Highcharts.chart('grafik', {
            chart: {
                type: 'column',
                zoomType: 'x'
            },
            title: {
                text: 'Curah Hujan'
            },
            subtitle: {
                text: 'Latihan Highcharts'
            },
            yAxis: {
                reversed: true,
                title: {
                    text: 'Curah hujan per menit'
                }
            },
            xAxis: {
                type: 'category',
                accessibility: {
                    rangeDescription: 'Waktu'
                }
            },
            tooltip: {
                pointFormat: '{point.y} mm'
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle'
            },
            plotOptions: {
                series: {
                    label: {
                        connectorAllowed: false
                    }
                }
            },
            series: [{
                color: 'green',
                name: 'Curah Hujan',
                lineWidth: 2,
                data: <?= $json ?>
            }],
            responsive: {
                rules: [{
                    condition: {
                        maxWidth: 500
                    },
                    chartOptions: {
                        legend: {
                            layout: 'horizontal',
                            align: 'center',
                            verticalAlign: 'bottom'
                        }
                    }
                }]
            }
        });
    </script>
</body>

</html>