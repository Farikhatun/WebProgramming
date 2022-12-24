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

    <div class="card text-center">
        <?php include "header.php"; ?>
        <div class="card-body">
            <h3 class="card-title"><center>Data Mahasiswa</center></h3>
            <div class="row">
                <div class="col-lg-6 offset-lg-3 mt-3">
                    <div class="card">
                        <table class="table table-striped table-bordered">
                            <tr>
                                <th>ID Mahasiswa</th>
                                <th>Nama</th>
                                <th>NIM</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Waktu Pembuatan</th>
                            </tr>

                            <?php
                            include 'koneksi.php';
                            $query = mysqli_query($koneksi, "select user.id_mahasiswa, mahasiswa.nama, mahasiswa.nim, user.username, user.password, user.created_at FROM (user INNER JOIN mahasiswa ON user.id_mahasiswa = mahasiswa.id_mahasiswa) order by id_mahasiswa desc");
                            while ($item = mysqli_fetch_array($query)) { ?>
                            <tr>
                                <td><?= $item['id_mahasiswa']; ?></td>
                                <td><?= $item['nama']; ?></td>
                                <td><?= $item['nim']; ?></td>
                                <td><?= $item['username']; ?></td>
                                <td><?= $item['password']; ?></td>
                                <td><?= $item['created_at']; ?></td>
                            </tr>
                            <?php } ?>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include"footer.php"; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>