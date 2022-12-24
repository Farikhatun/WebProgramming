<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>UTS PemWeb</title>
</head>

<body>

    <div class="card text-center">
        <?php include "header.php"; ?>
        <div class="card-body">
            <h3 class="card-title"><center>SBMPTN</center></h3>
            <div class="row">
                <div class="col-lg-6 offset-lg-3 mt-3">
                    <div class="card">
                        <table class="table table-striped table-bordered">
                            

                            <?php
                            include 'koneksi.php';
                            $query = mysqli_query($koneksi, "SELECT * from registrasi order by id_register asc;");
                            while ($item = mysqli_fetch_array($query)) { ?>
                            <tr>
                                <td><th>ID Mahasiswa</th></td>
                                <td><?= $item['id_register']; ?></td>
                            </tr>

                            <tr>
                                <td><th>Nama</th></td>
                                <td><?= $item['nama']; ?></td>
                            </tr>
                            
                            <tr>
                                <td><th>NIK</th></td>
                                <td><?= $item['nik']; ?></td>
                            </tr>

                            <tr>
                                <td><th>Tempat Lahir</th></td>
                                <td><?= $item['tempat_lahir']; ?></td>
                            </tr>

                            <tr>
                                <td><th>Tanggal Lahir</th></td>
                                <td><?= $item['tanggal_lahir']; ?></td>
                            </tr>

                            <tr>
                                <td><th>Jenis Kelamin</th></td>
                                <td><?= $item['kelamin']; ?></td>
                            </tr>

                            <tr>
                                <td><th>Alamat</th></td>
                                <td><?= $item['alamat']; ?></td>
                            </tr>
                            
                            <tr>
                                <td><th>Telepon</th></td>
                                <td><?= $item['telepon']; ?></td>
                            </tr>

                            <tr>
                                <td><th>Asal Sekolah</th></td>
                                <td><?= $item['sekolah_asal']; ?></td>
                            </tr>
                            
                            <tr>
                                <td><th>Peminatan</th></td>
                                <td><?= $item['peminatan']; ?></td>
                            </tr>

                            <tr>
                                <td><th>Foto Profil</th></td>
                                <td><?= $item['foto_profil']; ?></td>
                            </tr>
                            
                            <tr>
                                <td><th>Ijazah</th></td>
                                <td><?= $item['scan_ijazah']; ?></td>
                            </tr>
                            
                            <tr>
                                <td><th>Waktu Registrasi</th></td>
                                <td><?= $item['insert_at']; ?></td>
                            </tr>
                            <?php } ?>
                        </table>
                    </div>
                </div>
            </div>
            <br>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>