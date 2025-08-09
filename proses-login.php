<?php

include "koneksi.php";
session_start();

if (isset($_POST['login'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $role = $_POST['role'];
  $query = "SELECT * FROM user where username = '$username' AND  password = '$password'";
  $cek = mysqli_query($conn, $query);
  $data = mysqli_fetch_assoc($cek);
  if ($data) {
    $_SESSION['username'] = $data['username'];
    $_SESSION['password'] = $data['password'];
    $_SESSION['role'] = $data['role'];

    if ($_SESSION['role'] === 'admin') {
      header("location:./admin/index.php");
    } else {
      header("location:index.php");
    }
  } else {
    echo "Username atau password salah!";
  }
}
