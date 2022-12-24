<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>

    <?php
    $nama = "Farikhatun Khoirur Rosyidah";
    $ttl = "Klaten, 09 Desember 2002";
    $alamat = "Blanceran Rt.09/Rw.05, Blanceran, Karanganom, Klaten, 57475, Jawa Tengah";
    $agama = "Islam";
    $jnskelamin = "Perempuan";
    $gambar = "Farikhatun.png"
    ?>

    <h1><center>Curiculum Vitae</center></h1>
    <hr>
    <table border="1" width="100%">
        <tr>
            <td>Nama</td>
            <td><?php echo $nama ?></td>
        </tr>
        <tr>
            <td>Tempat, Tanggal Lahir</td>
            <td><?php echo $ttl ?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td><?php echo $jnskelamin ?></td>
        </tr>
        <tr>
            <td>Agama</td>
            <td><?php echo $agama ?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><?php echo $alamat ?></td>
        </tr>
        <tr>
            <td>Gambar</td>
            <td> <img src="<?php echo $gambar ?>" width="100" height="130"> </td>
        </tr>
    </table>
</body>
</html>