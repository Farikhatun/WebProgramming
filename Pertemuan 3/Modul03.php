<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Karyawan</title>
</head>
<body>
    <?php
    $karyawan = ['ando','budi','chika','doni'];
    ?>

    <table width="100%" border="1">
        <tr>
            <td>No</td>
            <td>Nama</td>
        </tr>
        
        <?php
        foreach($karyawan as $key=>$item){
        ?>

        <tr>
            <td><?php echo $key+1 ?></td>
            <td><?=$item; ?></td>
        </tr>

        <?php
        }
        ?>
    </table>
    
</body>
</html>
