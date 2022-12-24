<?php
include 'koneksi.php';
session_start();
if (isset($_POST) && !empty($_POST)) {
    $checkIn = $_POST['checkIn'];
    $checkOut = $_POST['checkOut'];
    $villaId = $_POST['villaId'];
    $userId = $_SESSION['id_user'];

    if ($_SESSION['isLogin']) {
        $messageBooking = '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!!</strong> Berhasil booking.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" ></button>
        </div>';
        $query = "insert into booking set checkIn='$checkIn', checkOut='$checkOut', villaId='$villaId', userId='$userId'";

        /*      mysqli_query($koneksi, $query);
        $lastId = mysqli_insert_id($koneksi);
        $_SESSION['message'] = $messageBooking;
        header("location: confirmation.php?bookId=" . $lastId); */

        if (mysqli_query($koneksi, $query)) {
            $lastId = mysqli_insert_id($koneksi);
            $_SESSION['message'] = $messageBooking;
            header("location: confirmation.php?bookId=" . $lastId);
        }
    } else {
        $messageBooking = '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Failed!!</strong> Please, Login first.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" ></button>
        </div>';
        $_SESSION['message'] = $messageBooking;
        header("location: index.php");
    }

    exit();
}
