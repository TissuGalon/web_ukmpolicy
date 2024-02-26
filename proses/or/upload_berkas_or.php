<?php
include '../koneksi.php';

$user_id = $_SESSION['id_user'];
$pas_foto = $_FILES['pas_foto'];
$sertifikat_pkkmb = $_FILES['sertifikat_pkkmb'];
$follow_instagram = $_FILES['follow_instagram'];
$follow_tiktok = $_FILES['follow_tiktok'];
$subscribe_youtube = $_FILES['subscribe_youtube'];

$targetDirectory = "../../uploads/berkas_or/";

/* CEK DATA IS EXIST */
$kuerii1 = mysqli_query($conn, "SELECT * FROM or_berkas WHERE user_id = $user_id");
$roww = mysqli_fetch_array($kuerii1);
$cek = mysqli_num_rows($kuerii1);
if ($cek < 1) {
    $kuerii2 = mysqli_query($conn, "INSERT INTO or_berkas (user_id, pas_foto, sertifikat_pkkmb, follow_instagram, follow_tiktok, subscribe_youtube) VALUES ($user_id, '','','','','')");
}
/* CEK DATA IS EXIST */


/* PAS_FOTO */
if (isset($_FILES['pas_foto']) && $_FILES['pas_foto']['name'] != '') {
    $hasil = uploadGambar($_FILES['pas_foto'], $targetDirectory);
    if ($hasil[0] == "success") {
        $namafile = $hasil[1];
        /* HAPUS FILE LAMA */
        if ($roww['pas_foto'] != '' || $roww['pas_foto'] != NULL) {
            $hapus = '' . $targetDirectory . '' . $roww['pas_foto'];
            if (file_exists($hapus)) {
                unlink($hapus);
            }
        }
        /* HAPUS FILE LAMA */

        /* UPDATE BARU */
        $kueri_update = mysqli_query($conn, "UPDATE or_berkas SET pas_foto = '$namafile' WHERE user_id = $user_id");
        /* UPDATE BARU */
    }
}
/* PAS_FOTO */


/* SERTIFIKAT_PKKMB */
if (isset($_FILES['sertifikat_pkkmb']) && $_FILES['sertifikat_pkkmb']['name'] != '') {
    $hasil = uploadGambar($_FILES['sertifikat_pkkmb'], $targetDirectory);
    if ($hasil[0] == "success") {
        $namafile = $hasil[1];
        /* HAPUS FILE LAMA */
        if ($roww['sertifikat_pkkmb'] != '' || $roww['sertifikat_pkkmb'] != NULL) {
            $hapus = '' . $targetDirectory . '' . $roww['sertifikat_pkkmb'];
            if (file_exists($hapus)) {
                unlink($hapus);
            }
        }
        /* HAPUS FILE LAMA */

        /* UPDATE BARU */
        $kueri_update = mysqli_query($conn, "UPDATE or_berkas SET sertifikat_pkkmb = '$namafile' WHERE user_id = $user_id");
        /* UPDATE BARU */
    }
}
/* SERTIFIKAT_PKKMB */


/* follow_instagram */
if (isset($_FILES['follow_instagram']) && $_FILES['follow_instagram']['name'] != '') {
    $hasil = uploadGambar($_FILES['follow_instagram'], $targetDirectory);
    if ($hasil[0] == "success") {
        $namafile = $hasil[1];
        /* HAPUS FILE LAMA */
        if ($roww['follow_instagram'] != '' || $roww['follow_instagram'] != NULL) {
            $hapus = '' . $targetDirectory . '' . $roww['follow_instagram'];
            if (file_exists($hapus)) {
                unlink($hapus);
            }
        }
        /* HAPUS FILE LAMA */

        /* UPDATE BARU */
        $kueri_update = mysqli_query($conn, "UPDATE or_berkas SET follow_instagram = '$namafile' WHERE user_id = $user_id");
        /* UPDATE BARU */
    }
}
/* follow_instagram */


/* follow_tiktok */
if (isset($_FILES['follow_tiktok']) && $_FILES['follow_tiktok']['name'] != '') {
    $hasil = uploadGambar($_FILES['follow_tiktok'], $targetDirectory);
    if ($hasil[0] == "success") {
        $namafile = $hasil[1];
        /* HAPUS FILE LAMA */
        if ($roww['follow_tiktok'] != '' || $roww['follow_tiktok'] != NULL) {
            $hapus = '' . $targetDirectory . '' . $roww['follow_tiktok'];
            if (file_exists($hapus)) {
                unlink($hapus);
            }
        }
        /* HAPUS FILE LAMA */

        /* UPDATE BARU */
        $kueri_update = mysqli_query($conn, "UPDATE or_berkas SET follow_tiktok = '$namafile' WHERE user_id = $user_id");
        /* UPDATE BARU */
    }
}
/* follow_tiktok */


/* subscribe_youtube */
if (isset($_FILES['subscribe_youtube']) && $_FILES['subscribe_youtube']['name'] != '') {
    $hasil = uploadGambar($_FILES['subscribe_youtube'], $targetDirectory);
    if ($hasil[0] == "success") {
        $namafile = $hasil[1];
        /* HAPUS FILE LAMA */
        if ($roww['subscribe_youtube'] != '' || $roww['subscribe_youtube'] != NULL) {
            $hapus = '' . $targetDirectory . '' . $roww['subscribe_youtube'];
            if (file_exists($hapus)) {
                unlink($hapus);
            }
        }
        /* HAPUS FILE LAMA */

        /* UPDATE BARU */
        $kueri_update = mysqli_query($conn, "UPDATE or_berkas SET subscribe_youtube = '$namafile' WHERE user_id = $user_id");
        /* UPDATE BARU */
    }
}
/* subscribe_youtube */


header('location:../../open-recruitment');


?>