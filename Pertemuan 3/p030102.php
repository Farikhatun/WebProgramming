<!DOCTYPE html>
<html lang="en">
<head>
    <title>Statement Control</title>
</head>
<body>
    <?php
    for ($i=1; $i < 7; $i++) { 
        if ($i % 2 != 1) {
            $header = "<h$i style='color:red;'>Mahasiswa $i</h$i>"; 
        }else{
            $header = "<h$i>Mahasiswa $i</h$i>";
        }
        echo $header;
    }
    ?>
</body>
</html>