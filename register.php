<?php
include "koneksi.php";

if (isset($_POST['register'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $role = $_POST['role'];
  $query = mysqli_query(
    $conn,
    "INSERT INTO user set username = '$username', password = '$password', role = '$role'"
  );
  if ($query) {
    # code...
    echo "<script>
    alert('berhasil register')
    window.location.assign('index.php');
    
    </script>";
  }
}
