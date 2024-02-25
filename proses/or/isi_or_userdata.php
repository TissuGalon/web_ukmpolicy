<?php
include '../koneksi.php';

$user_id = $_SESSION['id_user'];
$nim = $_GET['nim'];
$nama = $_GET['nama'];
$jurusan = $_GET['jurusan'];
$prodi = $_GET['prodi'];
$alamat = $_GET['alamat'];
$tgl_lahir = $_GET['tgl_lahir'];
$tempat_lahir = $_GET['tempat_lahir'];
$softskills = $_GET['softskills'];
$no_wa = $_GET['no_wa'];


$kueri = mysqli_query($conn, "SELECT * FROM or_userdata_2024 WHERE user_id = $user_id");
$cek = mysqli_num_rows($kueri);

if ($cek > 0) {
    $kueri2 = mysqli_query($conn, "UPDATE or_userdata_2024 SET nim='$nim', nama='$nama', jurusan='$jurusan', prodi='$prodi', alamat='$alamat', tgl_lahir='$tgl_lahir', tempat_lahir='$tempat_lahir', softskills='$softskills', no_wa='$no_wa' WHERE user_id = $user_id");
} else {
    $kueri2 = mysqli_query($conn, "INSERT INTO or_userdata_2024 (user_id, nim, nama, jurusan, prodi, alamat, tgl_lahir, tempat_lahir, softskills, no_wa) VALUES ('$user_id', '$nim', '$nama', '$jurusan', '$prodi', '$alamat', '$tgl_lahir', '$tempat_lahir', '$softskills', '$no_wa')");
}

header('location:../../open-recruitment');


?>