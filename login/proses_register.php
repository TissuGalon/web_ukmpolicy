<?php
include '../proses/koneksi.php';

function generateRandomString($length = 8)
{
    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$query = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");
$cek = mysqli_num_rows($query);


if ($cek > 0) {
    header('location:register?message=email_used');
} else {

    $password = password_hash($password, PASSWORD_DEFAULT);
    $datenow = date("Y-m-d H:i:s");
    $role_id = 1;
    $bio = "Hi, I love linux and Open Source.";

    $randomString = generateRandomString(6);
    $randomNumber = rand(10000000, 99999999);
    $username = $randomString . "-" . $randomNumber;

    $kueri = mysqli_query($conn, "INSERT INTO users (name, password, email, email_verified_at, remember_token, created_at, updated_at, role_id, picture, bio, username) VALUES ('$name', '$password', '$email', NULL, NULL, '$datenow', '$datenow', '$role_id', NULL, '$bio', '$username')");
    header('location:login?message=account_created&email=' . $email);
}
?>