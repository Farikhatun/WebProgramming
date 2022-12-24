<?php
    $nama = $_POST['nama'];
    $jabatan = $_POST['jabatan'];
    $kinerja = $_POST['kinerja'];

    function perolehanGaji($nama, $jabatan, $kinerja) {
        if ($kinerja < 50) {
            $perolehanGaji = 0.5;
        } else if ($kinerja > 51 and $kinerja < 60 ) {
            $perolehanGaji = 0.6;
        } else if ($kinerja > 61 and $kinerja < 70 ) {
            $perolehanGaji = 0.7;
        } else if ($kinerja > 71 and $kinerja < 80 ) {
            $perolehanGaji = 0.8;
        } else if ($kinerja > 81 and $kinerja < 90 ) {
            $perolehanGaji = 0.9;
        } else {
            $perolehanGaji = 1;
        }

        if($jabatan == "Pilih jabatan") {
            $gaji = 0;
        } if ($jabatan == "Junior Programmer") {
            $gaji = 4000000;
        } else if ($jabatan == "Senior Programmer") {
            $gaji = 6000000;
        } else if ($jabatan == "Chief Technology Officer") {
            $gaji = 8000000;
        } else {
            $jabatan = "Manager";
            $gaji = 10000000;
        }

        $gajiAkhir = $perolehanGaji * $gaji;
        // return "$nama dengan jabatan $jabatan dan kinerja $kinerja maka gajinya adalah Rp. $gajiAkhir";
        echo '
        <center>
            <h1>Menghitung Gaji</h1>
            <hr>
            <form method="POST" action="Hitung2.php">
                <table border="1">
                    <tr>
                        <th>Nama Pegawai</th>
                        <th>Jabatan</th>
                        <th>Gaji Awal</th>
                        <th>Skor Kinerja</th>
                        <th>Gaji Akhir</th>
                    </tr>
                    <tr>
                        <td>'.$nama.'</td>
                        <td>'.$jabatan.'</td>
                        <td>'.$gaji.'</td>
                        <td>'.$kinerja.'</td>
                        <td>'.$gajiAkhir.'</td>
                    </tr>                
                </table>
            </form>
        </center>
        ';
    }

    echo perolehanGaji($nama, $jabatan, $kinerja);
   
?>