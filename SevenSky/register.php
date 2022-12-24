<?php
include 'koneksi.php';
session_start();
if (isset($_POST) && !empty($_POST)) {
  $fullname = $_POST['fullname'];
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  $cekAvailableUser = "select * from user where email='$email'";
  $queryCekAvailableUser = mysqli_query($koneksi, $cekAvailableUser);
  $isUserAvailable = mysqli_fetch_array($queryCekAvailableUser);

  $messageRegister = '<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Failed!!</strong> Email sudah terdaftar.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" ></button>
    </div>';
  $_SESSION['message'] = $messageRegister;

  if (is_null($isUserAvailable)) {
    $messageRegister = '<div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Success!</strong> Berhasil terdaftar.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    $query = "insert into user set fullname='$fullname', username='$username', email='$email', password='$password', role='user'";
    mysqli_query($koneksi, $query);
    $_SESSION['message'] = $messageRegister;
    header('location: index.php');
  }
  header('location: index.php');
  exit();
}
