<?php
include('config.php');

$result = mysqli_query($koneksi, "
		SELECT kelas.nama_kelas AS 'matkul', mahasiswa.nama AS 'mahasiswa', kelas.id_kelas AS 'id_kelas', mahasiswa.id_mahasiswa AS 'id_mahasiswa', dosen.nama_dosen AS 'dosen'
		FROM mahasiswa,kelas,dosen
		WHERE kelas.id_kelas=dosen.id_dosen
        ")
?>

<!DOCTYPE html>
<html>
<head>
	<title>Homepage Jadwal</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	
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
		<center><h2>Kelas - Mahasiswa</h2></center>
		<a href="add_jadwal.php" class="btn btn-success">Add Jadwal</a>
        <br><br>

		 <table width="100%" border="2" class="table table-striped table-hover table-sm table-bordered">
            <tr class="table-success" style="color: #20124d;">
				<th>No</th>
				<th>Mata Kuliah</th>
                <th>Dosen</th>
				<th>Mahasiswa</th>
				<th>Aksi</th>
			</tr>
			<tbody>
				<?php
				$no = 1;
                while($data = mysqli_fetch_array($result)){ ?>
					<tr>
						<td><?= $no++; ?></td>
						<td><?= $data['matkul']?></td>
                        <td><?=$data['dosen']; ?></td>
						<td><?= $data['mahasiswa']; ?></td>
						<td>
						<a href="delete_dosen.php?id=<?= $item['id_dosen']; ?>" onclick="return 
                        confirm ('Apakah Anda yakin akan menghapus data?')" class="btn btn-danger btn-sm">Delete</a>
						</td>
					</tr>
					<?php } ?>

			<tbody>
		</table>
		
	</div>
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	
</body>
</html>