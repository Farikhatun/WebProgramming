<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coba session</title>
</head>
<body>
    <h1>Halaman 1</h1>
    <?php
        setcookie('nama','Wagiman',time() + (60 * 60 * 24 * 30),'/');
        echo "Hai ".$_COOKIE['nama'];
    ?>
    <br>
    Menuju ke <a href="halaman2.php">Halaman 2</a>
    Menuju ke <a href="logout.php">Logout</a>
</body>
</html>