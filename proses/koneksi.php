<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "u1686769_webpolicy");
if (!$conn) {
    die('Koneksi Error');
}

?>