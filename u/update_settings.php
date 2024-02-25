<?php
include '../proses/koneksi.php';


$iduser = $_SESSION['id_user'];

$picture = $_FILES['picture'];
$name = $_POST['name'];
$username = $_POST['username'];
$bio = $_POST['bio'];

$query = mysqli_query($conn, "UPDATE users SET name='$name', username='$username', bio='$bio' WHERE id='$iduser'");

$message = '';

if (isset($_FILES['picture']) && $_FILES['picture'] != NULL) {

    /* UPLOAD GAMBAR */
    $targetDirectory = "../uploads/";
    $hasil = uploadGambar($picture, $targetDirectory);
    if ($hasil[0] == "success") {
        $namafile = $hasil[1];
        $message = 'file_uploaded';

        /* HAPUS FOTO YANG LAMA */
        $kueri1 = mysqli_query($conn, "SELECT * FROM users WHERE id='$iduser'");
        $row1 = mysqli_fetch_array($kueri1);
        $hapus = '../uploads/' . $row1['picture'];
        if (file_exists($hapus)) {
            unlink($hapus);
        }
        /* HAPUS FOTO YANG LAMA */

        /* SET FOTO BARU */
        $kueri2 = mysqli_query($conn, "UPDATE users SET picture = '$namafile' WHERE id='$iduser'");
        /* SET FOTO BARU */

    } elseif ($hasil[0] == "error") {
        $message = 'upload_error';
    } else {
        $message = 'error';
    }
    /* UPLOAD GAMBAR */

}


header('location:settings');

?>