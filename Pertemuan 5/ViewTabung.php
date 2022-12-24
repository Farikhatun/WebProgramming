<!DOCTYPE html>
<html>
<head>
	<title>Kegiatan 3</title>
</head>
<body>
    <center>
        <h1>DATA UKURAN TABUNG</h1>
        <hr>

        <?php
        $dataTabung = [['A', 10, 30], ['B', 15, 34], ['C', 8.5, 27.8], ['D', 12.8, 17.56], ['E', 13.125, 15.7]];
        for ($i=0; $i < count($dataTabung) ; $i++) { 
            $tabung = $dataTabung[$i];
            $nama = $tabung[0];
            $diameter = $tabung[1];
            $tinggi = $tabung[2];
            $dataLuas = "http://localhost/pemweb/Pertemuan%205/HitungLuas.php?n=$nama&d=$diameter&t=$tinggi";
            array_push($dataTabung[$i], $dataLuas);
        }
        ?>
        
        <table border="1" width="50%" style="margin-left: auto; margin-right: auto;">
        <tr>
            <th>NAMA TABUNG</th>
            <th>DIAMETER</th>
            <th>TINGGI</th>
            <th>LUAS</th>
        </tr>
        
        <?php 
        for ($j=0; $j < count($dataTabung) ; $j++) { 
            echo '<tr>';
            for ($k=0; $k < count($dataTabung[$j]) ; $k++) {
                $temp = $dataTabung[$j];
                if ($k == 3) {
                    $table = "<th><a href='$temp[$k]'>view</th>"; 
                    echo $table;
                }
                else{
                    $table = "<th>$temp[$k]</th>";
                    echo $table;
			    }
            }
            echo '</tr>';
        }
        ?>
        </table>
        </center>
</body>
</html>