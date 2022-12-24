<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman 1</title>
</head>
<body>
    <h1>Halaman 2</h1>
    <?php
    echo "Selamat datang ". $_COOKIE['nama'];
    ?>
    <br>
    Menuju ke <a href="index.php">halaman 1</a>
</body>
</html>