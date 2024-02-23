<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "u1686769_policy_test");
if (!$conn) {
    die('Koneksi Error');
}

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


?>