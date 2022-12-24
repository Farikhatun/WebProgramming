<!DOCTYPE html>
<html lang="en">
<head>
 
    <?php
    function tanggal($date){
        echo ("$date hari lagi dari ".date("Y-m-d")." adalah ".date("Y-m-d", strtotime("+$date days")));
    }
    ?>

    <title>Menghitung Selisih Hari</title>
</head>
<body>
    <?php
        tanggal(7);
    ?>
</body>
</html>
