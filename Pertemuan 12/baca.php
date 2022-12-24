<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>💥PemWeb💥</title>
</head>

<body>
    <center><h1>✨Pertemuan 12✨</h1></center>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Simpan file</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="baca.php">Baca file</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <div class="container mt-3">
            <div class="row">
                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Daftar file</h5>
                            <hr>
                            <?php
                            $path = "file/";
                            $files = array_diff(scandir($path), array('.', '..'));
                            foreach ($files as $ind => $fileList) {
                                echo "<a class='card-text' href='baca.php?read=file/" . $fileList . "'>" . $fileList . "</a><br><br>";
                            }
                            ?>
                            <p class="card-text"></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-9">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Isi file</h5>
                            <hr>
                            <?php
                            if (isset($_GET['read'])) {
                                $getFile = fopen($_GET['read'], 'r');
                                $contentRead = fgets($getFile);
                                echo $contentRead;
                                fclose($getFile);
                            }
                            ?>
                            <p class="card-text"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>