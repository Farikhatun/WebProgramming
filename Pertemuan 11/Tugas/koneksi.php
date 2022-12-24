<?php
class koneksiDB{
    function getKoneksi(){
        $host = "localhost";
        $username = "root";
        $password = "";
        $db = "kantor";
        $konek= mysqli_connect($host, $username, $password, $db) or die("Koneksi gagal ". mysqli_connect_error());

        if(mysqli_connect_errno()){
            exit();
        }
        return $konek;
    }
}