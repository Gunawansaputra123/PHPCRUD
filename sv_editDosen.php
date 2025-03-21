<?php

require "fungsi.php";

$npp = $_POST['npp'];
$nama_dosen = $_POST['nama-dosen'];
$homebase = $_POST['homebase'];

if (empty($nama_dosen) || empty($homebase)) {
    die('Field input tidak boleh kosong');
} else {
    $query = "update dosen set namadosen = '$nama_dosen', homebase = '$homebase' where npp = '$npp'";
    mysqli_query($connection, $query);

    header('location:updateDosen.php');
}

?>