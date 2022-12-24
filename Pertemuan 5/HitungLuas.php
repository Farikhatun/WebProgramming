<center>
    <h1>DATA UKURAN TABUNG</h1>   
    <hr>
<?php
if ($_GET){
    $namaTabung = $_GET['n'];
    $diameterTabung = $_GET['d'];
    $tinggiTabung = $_GET['t'];
    $jariTabung = $diameterTabung / 2;
    $luas = 2 * 3.14 * $jariTabung * ($jariTabung + $tinggiTabung);
    echo "Luas Tabung $namaTabung dengan diameter $diameterTabung dan tinggi $tinggiTabung adalah $luas satuan luas";
}
?>
</center>