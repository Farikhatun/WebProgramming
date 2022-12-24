<?php
include 'koneksi.php';
if (isset($_POST) && !empty($_POST) ) {
	$nama_usaha = $_POST['nama_usaha'];
	$alamat_usaha = $_POST['alamat_usaha'];
	$gol_usaha = $_POST['gol_usaha'];
	$modal_usaha = $_POST['modal_usaha'];
    $nama_pemilik = $_POST['nama_pemilik'];
	$tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
	$telepon = $_POST['telepon'];
    $email = $_POST['email'];
	$scan_ktp = $_POST['scan_ktp'];
    $scan_npwp = $_POST['scan_npwp'];

	$query = "insert into user set nama_usaha='$nama_usaha', alamat_usaha='$alamat_usaha', gol_usaha='$gol_usaha', 
        modal_usaha='$modal_usaha', nama_pemilik='$nama_pemilik', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', 
        telepon='$telepon', email='$email', scan_ktp='$scan_ktp', scan_npwp='$scan_npwp'";
	mysqli_query($koneksi, $query);
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <form action="" method="post">
        <center>
            <h2>Registrasi</h2>
            <hr>
            <table>
                <tr>
                    <td>Nama Usaha</td>
                    <td><input type="text" name="nama_usaha"></td>
                </tr>
                <tr>
                    <td>Alamat Tempat Usaha</td>
                    <td><input type="text" name="alamat_usaha"></td>
                </tr>
                <tr>
                    <td>Golongan Usaha</td>
                    <td><select name="gol_usaha" id="golongan usaha">
                            <option value="mikro">Mikro</option>
                            <option value="kecil">Kecil</option>
                            <option value="menengah">Menengah</option>
                        </select></td>
                </tr>
                <tr>
                    <td>Modal Usaha</td>
                    <td><select name="modal_usaha" id="modal usaha">
                            <option value="bank">Bank</option>
                            <option value="koperasi">Koperasi</option>
                            <option value="bansos">Bantuan Sosial</option>
                            <option value="lain">Lainnya</option>
                        </select></td>
                </tr>
                <tr>
                    <td>Nama Pemilik</td>
                    <td><input type="text" name="nama_pemilik"></td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <td><input type="text" name="tempat_lahir"></td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td><input type="date" name="tanggal_lahir"></td>
                </tr>
                <tr>
                    <td>Telepon</td>
                    <td><input type="number" name="telepon"></td>
                </tr>
                <tr>
                    <td>E-mail</td>
                    <td><input type="text" name="email"></td>
                </tr>
                <tr>
                    <td>Scan KTP</td>
                    <td><input type="file" name="scan_ktp"></td>
                </tr>
                <tr>
                    <td>Scan NPWP</td>
                    <td><input type="file" name="scan_npwp"></td>
                </tr>
            </table>
            <button type="submit" class="btn btn-primary">Submit</button>
        </center>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>