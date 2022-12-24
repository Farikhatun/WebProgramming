<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <title>📄JavaScript AJAX📄</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">JavaScript AJAX</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="jquery.php">JQuery AJAX</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <div class="container-fluid mt-3">
            <div class="row d-flex justify-content-center">
                <div class="col-sm-9">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">
                                <center>Dependent Dropdown Wilayah Indonesia</center>
                            </h5>
                            <hr>
                            <div class="justify-content-center">
                                <div class="spinner-border text-primary" role="status" id="load" style="position:absolute; top:50%; display:none">
                                </div>
                                <form method="post">
                                    <div class="form-group">
                                        <label class="control-label col-sm-3">Provinsi:</label>
                                        <div class="col-sm-12">
                                            <?php
                                            include("koneksi.php");
                                            $query1 = mysqli_query($koneksi, "SELECT * FROM provinces ORDER BY name ASC");
                                            ?>
                                            <select class="form-control" name="provinsi" id="provinsi" onchange="getProvinsi()">
                                                <option>--Pilih Provinsi--</option>
                                                <?php
                                                while ($provinsi = mysqli_fetch_array($query1)) {
                                                    echo '<option value="' . $provinsi['id'] . '">' . $provinsi['name'] . '</option>';
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-3">Kota/Kabupaten:</label>
                                        <div class="col-sm-12">
                                            <select class="form-control" name="kota" id="kota" onchange="getKota()">
                                                <option>--Pilih Kota/Kabupaten--</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-3">Kecamatan:</label>
                                        <div class="col-sm-12">
                                            <select class="form-control" name="kecamatan" id="kecamatan" onchange="getKecamatan()">
                                                <option>--Pilih Kecamatan--</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-3">Kelurahan:</label>
                                        <div class="col-sm-12">
                                            <select class="form-control" name="kelurahan" id="kelurahan">
                                                <option>--Pilih Kelurahan--</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-3 col-sm-12 mt-3">
                                            <button type="submit" class="btn btn-success" onclick="getAlert()">Simpan</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script type="text/javascript">
        function getAlert() {
            var provJs = document.getElementById("provinsi");
            var prov = provJs.options[provJs.selectedIndex].text;
            var kotaJs = document.getElementById("kota");
            var kot = kotaJs.options[kotaJs.selectedIndex].text;
            var kecJs = document.getElementById("kecamatan");
            var kec = kecJs.options[kecJs.selectedIndex].text;
            var kelJs = document.getElementById("kelurahan");
            var kel = kelJs.options[kelJs.selectedIndex].text;
            alert(prov + ' - ' + kot + ' - ' + kec + ' - ' + kel);
        }

        function getProvinsi() {
            const xhttp = new XMLHttpRequest();
            var spinner = document.getElementById("load");
            spinner.style.display = "inline";
            xhttp.onload = function() {
                document.getElementById("kota").innerHTML = this.responseText;
                spinner.style.display = "none";
                getKota();
            }
            var id = document.getElementById("provinsi").value;
            xhttp.open("POST", "data.php?jenis=kota");
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send("id_provinsi=" + id);
        }

        function getKota() {
            const xhttp = new XMLHttpRequest();
            var spinner = document.getElementById("load");
            spinner.style.display = "inline";
            xhttp.onload = function() {
                document.getElementById("kecamatan").innerHTML = this.responseText;
                spinner.style.display = "none";
                getKecamatan();
            }
            var id = document.getElementById("kota").value;
            xhttp.open("POST", "data.php?jenis=kecamatan");
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send("id_kota=" + id);
        }

        function getKecamatan() {
            const xhttp = new XMLHttpRequest();
            var spinner = document.getElementById("load");
            spinner.style.display = "inline";
            xhttp.onload = function() {
                document.getElementById("kelurahan").innerHTML = this.responseText;
                spinner.style.display = "none";
            }
            var id = document.getElementById("kecamatan").value;
            xhttp.open("POST", "data.php?jenis=kelurahan");
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send("id_kecamatan=" + id);
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>