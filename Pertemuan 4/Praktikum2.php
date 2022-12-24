<!DOCTYPE html>
<html lang="en">
<head>
    
    <?php
    function volumeBalok($panjang, $lebar, $tinggi){
        $volume = $panjang * $lebar * $tinggi;
        return " Volume balok dengan panjang $panjang, lebar $lebar, dan tinggi $tinggi adalah $volume";
    }
    ?>

    <title>Volume Balok</title>
</head>
<body>
    <?php
       echo volumeBalok(15,20,10);
    ?>
</body>
</html>
