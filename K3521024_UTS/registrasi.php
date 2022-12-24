<?php
include 'koneksi.php';
if (isset($_POST) && !empty($_POST)) {
    $nama = $_POST['nama'];
    $nik = $_POST['nik'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $kelamin = $_POST['kelamin'];
    $alamat = $_POST['alamat'];
    $telepon = $_POST['telepon'];
    $sekolah_asal = $_POST['sekolah_asal'];
    $peminatan = $_POST['peminatan'];
    $foto_profil = $_POST['foto_profil'];
    $scan_ijazah = $_POST['scan_ijazah'];

    $query = "insert into registrasi set nama='$nama', nik='$nik', tempat_lahir='$tempat_lahir', 
        tanggal_lahir='$tanggal_lahir', kelamin='$kelamin', alamat='$alamat', telepon='$telepon', 
        sekolah_asal='$sekolah_asal', peminatan='$peminatan', foto_profil='$foto_profil', scan_ijazah='$scan_ijazah'";
    mysqli_query($koneksi, $query);
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <form action="" method="post">
        <center>
            <?php include "header.php"; ?>
            <h2>Halaman Registrasi</h2>
            <hr>
            <table>
                <tr>
                    <td>Nama Lengkap</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>NIK</td>
                    <td><input type="text" name="nik"></td>
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
                    <td>Jenis Kelamin</td>
                    <td><label><input type="radio" name="kelamin" value="Perempuan">Perempuan</label>
                        <label><input type="radio" name="kelamin" value="Laki-Laki">Laki-Laki</label>
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat"></td>
                </tr>
                <tr>
                    <td>Telepon</td>
                    <td><input type="number" name="telepon"></td>
                </tr>
                <tr>
                    <td>Sekolah Asal</td>
                    <td><input type="text" name="sekolah_asal"></td>
                </tr>
                <tr>
                    <td>Peminatan</td>
                    <td><label><input type="checkbox" name="peminatan" value="IPA">IPA</label>
                        <input type="checkbox" name="peminatan" value="IPS">IPS</label>
                        <input type="checkbox" name="peminatan" value="Sastra">Sastra</label>
                    </td>
                </tr>
                <tr>
                    <td>Foto Profil</td>
                    <td><input type="file" name="foto_profil"></td>
                </tr>
                <tr>
                    <td>Scan Ijazah</td>
                    <td><input type="file" name="scan_ijazah"></td>
                </tr>
            </table>
            <br>
            <button type="submit" class="btn btn-primary">Registrasi
            </button>
        </center>
    </form>

    <?php include "footer.php"; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" 
        crossorigin="anonymous"></script>
</body>

</html>