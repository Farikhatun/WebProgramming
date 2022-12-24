
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Bioskop PTIK</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Bioskop PTIK</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link" href="p0701a.php">Home</a>
                        <a class="nav-link" href="p0701b.php">Ruang 1</a>
                        <a class="nav-link" href="p0701c.php">Ruang 2</a>
                        <a class="nav-link" href="p0701d.php">Ruang 3</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="container">
            <div class="row mt-3">
                <div class="card p-3">
                    <center>
                        <h1>Halaman Lobby</h1>
                        <form method="POST" action="">
                            <?php
                            session_start();
                            if(!isset($_SESSION['nama'])){
                                $_SESSION['nama'] = "";
                            }if(isset($_POST['beli'])){
                                $_SESSION['nama'] = $_POST['nama'];
                                $lobby = $_POST['ruangan'];
                                if($lobby == "ruang1"){
                                    $_SESSION['ruang'] = "Ruang 1";
                                }
                                elseif($lobby == "ruang2"){
                                    $_SESSION['ruang'] = "Ruang 2";
                                }
                                elseif($lobby == "ruang3"){
                                    $_SESSION['ruang'] = "Ruang 3";
                                }
                            }if($_SESSION['nama'] == ""){
                                $status ="Belum membeli tiket";
                            }else{
                                $status ="Sudah membeli tiket atas nama " . $_SESSION['nama']." di ". $_SESSION['ruang'];
                            }
                            echo"Status Pengunjung : $status";
                            if(isset($_POST['disable'])){
                                $_SESSION['nama'] = "";
                                $_SESSION['ruang'] = "";
                            }
                            ?>
                            <hr>
                            Nama :  <input type="text" value="" name="nama" placeholder="Nama" autocomplete="off" required>
                            <br>
                            Ruang : 
                                <input type="radio" name="ruangan" required value="ruang1"><label for="Ruang 1">Ruang 1</label>  
                                <input type="radio" name="ruangan" value="ruang2"><label for="Ruang 2">Ruang 2</label> 
                                <input type="radio" name="ruangan" value="ruang3"><label for="Ruang 3">Ruang 3</label> 
                                <br>
                                <input type="submit" name="beli" id="btn" value="Beli Tiket" class="btn btn-success" <? if($_SESSION['nama'] != "") echo'disabled'; ?>  >
                                <br>                      
                        </form>
                    </center>
                </div>
            </div>
        </div>
    </main>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>