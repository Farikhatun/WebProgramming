<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register PPDB Online</title>
</head>
<body>
    <h1>Register PPDB Online</h1>

    <form action="" method="POST">

        <label for="namaSiswa">Nama Lengkap</label>
        <input type="text" name="namaSiswa" id="namaSiswa" placeholder="Masukkan nama lengkap"><br>

        <label for="nik">NIK</label>
        <input type="number" name="nik" id="nik" placeholder="xxxxxxxxxxxxxxxx"><br>

        <label for="tmptLahir">Tempat Lahir</label>
        <input type="text" name="tmptLahir" id="tmptLahir"><br>

        <label for="tglLahir">Tanggal Lahir</label>
        <input type="date" name="tglLahir" id="tglLahir" max="2021-10-20"><br>

        <label for="kelamin">Jenis Kelamin</label>
        <input type="radio" name="kelamin" id="kelamin" value="Laki-Laki">Laki-Laki<br>
        <input type="radio" name="kelamin" id="kelamin" value="Perempuan">Perempuan<br>

        <label for="alamat">Alamat</label>
        <textarea name="alamat" id="alamat" cols="30" rows="10"></textarea><br>

        <label for="tlp">No Telepon</label>
        <input type="number" name="tlp" id="tlp" placeholder="xxxxxxxxxxxx"><br>

        <label for="hobi">Hobi/Minat</label>
        <input type="checkbox" name="hobi" id="hobi" value="olahraga">Olahraga<br>
        <input type="checkbox" name="hobi" id="hobi" value="teknologi">Teknologi<br>
        <input type="checkbox" name="hobi" id="hobi" value="kesenian">Kesenian<br>
        <input type="checkbox" name="hobi" id="hobi" value="karyaTulis">Karya Tulis<br>
        <hr>

        <label for="username">Username</label>
        <input type="text" name="username" id="username"><br>

        <label for="password">Password</label>
        <input type="text" name="password" id="password"><br>

        <button type="submit" name="submit" id="submit"> Registrasi </button>
    </form>
</body>
</html>