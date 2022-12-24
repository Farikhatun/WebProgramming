<?php
include 'koneksi.php';
session_start();
if (isset($_POST) && !empty($_POST)) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "select * from user where email='$email' and password='$password' order by id_user DESC limit 1 ";
    $user = mysqli_query($koneksi, $query);
    $dataUser = mysqli_fetch_array($user);

    if (is_null($dataUser)) {
        $_SESSION['message'] = '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Failed!</strong> Email / Password salah!.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    } else {
        $_SESSION['message'] = '';
        $_SESSION['id_user'] = $dataUser['id_user'];
        $_SESSION['fullname'] = $dataUser['fullname'];
        $_SESSION['email'] = $dataUser['email'];
        $_SESSION['role'] = $dataUser['role'];
        $_SESSION['isLogin'] = true;
    }

    header('location: index.php');
    // var_dump($dataUser);
    // die;
}
