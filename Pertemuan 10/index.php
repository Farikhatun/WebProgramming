<?php
require_once('config.php');

$result = mysqli_query($koneksi, "SELECT * FROM mahasiswa ORDER BY id_mahasiswa DESC")
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Homepage Mahasiswa</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #8d78ca;">
		<div class="container">
			<a class="navbar-brand" href="#">CRUD</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item">
						<a class="nav-link active" href="index.php">Mahasiswa</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" href="index_dosen.php">Dosen</a>
					</li>
                    <li class="nav-item">
						<a class="nav-link active" href="index_kelas.php">Kelas</a>
					</li>
                    <li class="nav-item">
						<a class="nav-link active" href="index_jadwal.php">Jadwal</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

    <div class="container" style="margin-top:20px">
        <center><h2>Daftar Mahasiswa</h2></center>

        <a href="add.php" class="btn btn-success">Add Mahasiswa</a>
        <br><br>
        <table width="100%" border="2" class="table table-striped table-hover table-sm table-bordered">
            <tr class="table-success" style="color: #20124d;">
                <th>Nama</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Aksi</th>
            </tr>
            <?php
            while ($item = mysqli_fetch_array($result)){
            ?>
                <tr>
                    <td><?= $item['nama']; ?></td>
                    <td><?= $item['email']; ?></td>
                    <td><?= $item['mobile']; ?></td>
                    <td>
                        <a href="edit.php?id=<?= $item['id_mahasiswa']; ?>" class="btn btn-info btn-sm">Edit</a>
                        <a href="delete.php?id=<?= $item['id_mahasiswa']; ?>" onclick="return confirm ('Apakah Anda yakin akan menghapus data?')" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>