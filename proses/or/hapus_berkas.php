<?php
include '../koneksi.php';

$user_id = $_SESSION['id_user'];
$filename = $_GET['filename'];
$title = $_GET['title'];

$targetDirectory = "../../uploads/berkas_or/";

$kueri = mysqli_query($conn, "SELECT * FROM or_berkas WHERE user_id = $user_id");
$row = mysqli_fetch_array($kueri);

$nama_file_lama = $row[$title];

/* HAPUS FILE LAMA */
if ($nama_file_lama != '' || $nama_file_lama != NULL) {
    $hapus = '' . $targetDirectory . '' . $nama_file_lama;
    if (file_exists($hapus)) {
        unlink($hapus);
    }
}
/* HAPUS FILE LAMA */

$kueri2 = mysqli_query($conn, "UPDATE or_berkas SET " . $title . "='' WHERE user_id = $user_id");

header('location:../../open-recruitment');

?>