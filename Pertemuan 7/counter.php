<?php
session_start(); //start session

//Check if session is set
if(isset($_POST['tambah'])){
    $_SESSION['counter'] += 1;
}

if(isset($_POST['hapus'])){
    unset($_SESSION['counter']);
}

?>