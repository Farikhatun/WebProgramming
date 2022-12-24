<?php
require_once("config.php");
$kelas  = $_GET['id_kelas'];
$mahasiswa = $_GET['id_mahasiswa'];

$result = mysqli_query($koneksi, "DELETE FROM jadwal WHERE id_kelas=$kelas AND id_mahasiswa=$mahasiswa");
if($result){
    header("Location:index_jadwal.php");
}
?>