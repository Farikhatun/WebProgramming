<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>

    <?php
    $nama = "Budi";
    $umur = "21";
    $kelas = "X IPA 3"
    ?>

    <h1>Ini Biodata Budi</h1>
    <hr>
    <table border="1" width="100%">
        <tr>
            <td>Nama</td>
            <td><?php echo $nama ?></td>
        </tr>
        <tr>
            <td>Umur</td>
            <td><?php echo $umur ?></td>
        </tr>
        <tr>
            <td>Kelas</td>
            <td><?php echo $kelas ?></td>
        </tr>
    </table>
</body>
</html>