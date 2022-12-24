<?php
$filename = 'file/baru.txt';
if (file_exists($filename)) {
    //membaca file dilanjutkan menulis file
    $book_content = file_get_contents($filename);
    file_put_contents('coba.txt', $book_content, LOCK_EX);
} else {
    echo "file tidak ditemukan";
}
$filename = 'file/coba.txt';
if (file_exists($filename)) {
    //membaca file dilanjutkan menampilkan isinya
    $txt_content = file_get_contents($filename);
    $txt_content_lowercase = strtolower($txt_content);
    $individual_words = explode(' ', $txt_content_lowercase);
    echo "Ada sejumlah " . count($individual_words) . " Kata dalam 
file " . substr($filename, 0, -4) . ".\n";
    echo "<br> Isinya : $txt_content_lowercase";
} else {
    echo "file tidak ditemukan";
}
