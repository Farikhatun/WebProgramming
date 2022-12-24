<?php
require_once('koneksi.php');

switch ($_GET['aksi']) {
    case "info":
        $id = $_POST['id'];
        if ($id == "") {
            exit;
        } else {
            $query = mysqli_query($koneksi, "SELECT * FROM tma WHERE id_tma = '$id'") or die("Query Gagal");
            $data = mysqli_fetch_array($query);
            $nilai = $data['nilai'];
            if ($nilai < 8.25) {
                echo "Sungai Aman";
            } else {
                echo "Sungai Limpas";
            }
            exit;
        }
        break;

    case "delete":
        $id = $_POST['id'];
        if ($id == "") {
            exit;
        } else {
            $result = mysqli_query($koneksi, "DELETE FROM tma WHERE id_tma=$id");
            if ($result) {
                echo "Data Berhasil Dihapus";
            } else {
                echo "Terjadi kesalahan ketika menghapus data";
            }
            exit;
        }
        break;
}
