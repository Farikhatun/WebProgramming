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
        <?php if (isset($_GET['notif'])) { ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            File dengan nama <strong><?= $_GET['file'] ?></strong>berhasil ditambahkan
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php } ?>
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">Simpan data pada file TXT</h2>
                    <hr>
                    <form action="simpan.php" method="post">

                        <div class="mb-3">
                            <label for="namafile" class="form-label">Nama file</label>
                            <input type="text" name="nama" class="form-control" id="namafile">
                        </div>
                        <div class="mb-3">
                            <label for="isifile" class="form-label">Isi file</label>
                            <textarea class="form-control" name="isi" id="isifile" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Buat file</button>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>