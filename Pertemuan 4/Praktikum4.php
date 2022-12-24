<!DOCTYPE html>
<html lang="en">
<head>
 
    <?php
    function tanggal($date){
        echo ("$date hari yang lalu dari ".date("Y-m-d")." adalah ".date("Y-m-d", strtotime("-$date days")));
    }
    ?>

    <title>Menghitung Selisih Hari</title>
</head>
<body>
    <?php
        tanggal(3);
    ?>
</body>
</html>
