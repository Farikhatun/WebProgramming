<!DOCTYPE html>
<html lang="en">
<head>
    <title>Statement Control</title>
</head>
<body>
    <?php
    for ($i=1; $i<=6; $i++){
        $header = "<h$i>Mahasiswa $i</h$i>";
        echo $header;
    }
    ?>
</body>
</html>