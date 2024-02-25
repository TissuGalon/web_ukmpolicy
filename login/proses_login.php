<?php
include '../proses/koneksi.php';

$email = $_POST['email'];
$password = $_POST['password'];

$query = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");
$row = mysqli_fetch_array($query);

if ($row) {
    if (password_verify($password, $row['password'])) {
        $_SESSION['id_user'] = $row['id'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['picture'] = $row['picture'];
        header('location:../index?login=berhasil');
    } else {
        header('location:login?message=login_failed');
    }
} else {
    header('location:login?message=login_failed');
}
?>