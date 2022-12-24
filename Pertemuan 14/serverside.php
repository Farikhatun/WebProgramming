<?php
require_once('koneksi.php')
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">

    <script type="text/javascript">
        const showInfo = (value) => {
            const xhttp = new XMLHttpRequest();
            xhttp.onload = function() {
                alert(this.responseText)
            }
            var id = value
            xhttp.open("POST", "action.php?aksi=info");
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send("id=" + id)
        }

        const deleteData = (value) => {
            const xhttp = new XMLHttpRequest();
            xhttp.onload = function() {
                alert(this.responseText)
            }
            var id = value
            xhttp.open("POST", "action.php?aksi=delete");
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            let con = confirm("Apakah anda yakin ingin menghapus data?")
            if (con) {
                xhttp.send("id=" + id)
            }
        }
    </script>

    <title>DataTables</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Client Side</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="serverside.php">Server Side</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="container mt-3">
            <div class="row d-flex justify-content-center">
                <div class="col sm-9">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Tabel Tinggi Permukaan Air - Server Side</h5>
                            <hr>
                            <table style="width: 100%;" class="display" id="tabel-data">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nilai</th>
                                        <th>Waktu</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#tabel-data').DataTable({
                processing: true,
                serverSide: true,
                ajax: 'data.php',
                order: [
                    [2, 'desc']
                ],
                info: false,
                searching: false
            });
        })
    </script>
</body>

</html>