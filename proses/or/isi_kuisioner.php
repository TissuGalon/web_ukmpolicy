<?php
include '../koneksi.php';

$id_kuisioner = $_GET['id_kuisioner'];


$kueri = mysqli_query($conn, "SELECT * FROM kuisioner_or WHERE id = $id_kuisioner");
$row = mysqli_fetch_array($kueri);

$json_data_pertanyaan = $row['kuisioner'];
$data = json_decode($json_data_pertanyaan, true);

$count = count($data['pertanyaan']);

$json_jawaban = array();

$i = 1;
while ($i <= $count) {
    $json_jawaban['jawaban'][$i - 1] = $_GET['soal' . $i];
    $i++;
}

$json_jawaban = json_encode($json_jawaban);

$iduser = $_SESSION['id_user'];
$kueri2 = mysqli_query($conn, "SELECT * FROM jawaban_kuisioner_or WHERE user_id = $iduser AND kuisioner_id = $id_kuisioner");
$cek = mysqli_num_rows($kueri2);

if ($cek > 0) {
    $kueri3 = mysqli_query($conn, "UPDATE jawaban_kuisioner_or set jawaban = '$json_jawaban' WHERE user_id = $iduser");
} else {
    $kueri3 = mysqli_query($conn, "INSERT INTO jawaban_kuisioner_or (jawaban, user_id, kuisioner_id) VALUES ('$json_jawaban', $iduser, $id_kuisioner)");
}


header('location:../../kuisioner');

?>