<!DOCTYPE html>
<html lang="en">
<head>
    
    <?php
    function luasSegitiga($alas, $tinggi){
        $luas = ($alas * $tinggi)/2;
        return " Luas segitiga dengan alas $alas dan tinggi $tinggi adalah $luas";
    }
    ?>

    <title>Luas luasSegitiga</title>
</head>
<body>
    <?php
       echo luasSegitiga(15,30);
    ?>
</body>
</html>
