<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "u1686769_policy_test");
if (!$conn) {
    die('Koneksi Error');
}

date_default_timezone_set('Asia/Jakarta');


/* GET USER DATA */
if (isset($_SESSION['id_user'])) {
    $iduser = $_SESSION['id_user'];
    $kueri_user = mysqli_query($conn, "SELECT * FROM users WHERE id = $iduser");
    $users = mysqli_fetch_array($kueri_user);
}
/* GET USER DATA */


/* GET CURRENT PAGE FILENAME */
$halaman = basename($_SERVER['PHP_SELF']);
/* GET CURRENT PAGE FILENAME */


/* GET PERIODE ID */
$periods_query = mysqli_query($conn, "SELECT * FROM periods WHERE status = 1");
$periods_data = mysqli_fetch_array($periods_query);
$active_period_id = $periods_data['id'];
/* GET PERIODE ID */



/* SETTING OR */
$query_or = mysqli_query($conn, "SELECT * FROM settings");

while ($row = mysqli_fetch_array($query_or)) {
    $or_data[] = $row;
}

$or_setting_status = $or_data[0]['value'];
$or_setting_start = $or_data[1]['value'];
$or_setting_end = $or_data[2]['value'];

$buka_sesuai_jadwal = false;
if ($or_setting_status == '0' && (time() > strtotime($or_setting_start) || time() < strtotime($or_setting_end))) {
    $buka_sesuai_jadwal = true;
}
/* SETTING OR */





/* UPLOAD IMAGE FUNCTION */
function uploadGambar($file, $url)
{
    $targetDirectory = $url;
    $originalFileName = basename($file["name"]);
    $fileExtension = pathinfo($originalFileName, PATHINFO_EXTENSION);

    // Generate a unique identifier (random string)
    $randomString = bin2hex(random_bytes(8));

    // Create a random file name using the unique identifier and original file extension
    $randomFileName = $randomString . '.' . $fileExtension;

    $targetFile = $targetDirectory . $randomFileName;
    $uploadOk = 1;
    $imageFileType = strtolower($fileExtension);

    $pesanerror = "";

    // Check if image file is a actual image or fake image
    $check = getimagesize($file["tmp_name"]);
    if ($check !== false) {
        $pesanerror = "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        $pesanerror = "File is not an image.";
        $uploadOk = 0;
    }

    // Check if file already exists
    if (file_exists($targetFile)) {
        $pesanerror = "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Check file size
    // 15MB MAX
    if ($file["size"] > 15000000) {
        $pesanerror = "Maaf, file Anda terlalu besar.";
        $uploadOk = 0;
    }


    // Allow certain file formats
    $allowedFormats = ["jpg", "jpeg", "png", "gif"];
    if (!in_array($imageFileType, $allowedFormats)) {
        $pesanerror = "Sorry, only JPG, JPEG, PNG, and GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        /* return "Sorry, your file was not uploaded."; */
        return $pesanerror;
    } else {
        // If everything is ok, try to upload file
        if (move_uploaded_file($file["tmp_name"], $targetFile)) {
            $status = ["success", $randomFileName];
            return $status;
        } else {
            $status = ["error", $pesanerror];
            return "error";
        }
    }
}
/* UPLOAD IMAGE FUNCTION */

?>