<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Halaman mahasiswa</title>
</head>

<body>
    <?php
    $namaPage = $_SERVER['PHP_SELF'];
    $namaArray = explode('/', $namaPage);
    $jumlah = count($namaArray);
    $namaPage = $namaArray[$jumlah-1];
    ?>

    <?php
    $thisPage = "index";
    ?>

    <nav class="navbar navbar-expand-lg navbar-light bg-light" >
        <a class="navbar-brand" href="#">Pertemuan06</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" 
            data-target="#navbarCollapse" aria-controls="navbarCollapse"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item <?php if($thisPage == "index") echo "active"; ?>">
                    <a class="nav-link" href="index.php"><span class="sr-only">Mahasiswa</span></a>
                </li>
                <li class="nav-item <?php if($thisPage == "akun") echo "active"; ?>">
                    <a class="nav-link" href="akun.php"><span class="sr-only">Akun</span></a>
                </li>
                <li class="nav-item <?php if($thisPage == "user") echo "active"; ?>">
                    <a class="nav-link" href="user.php"><span class="sr-only">User</span></a>
                </li>
                </ul>
            </div>
        </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>