<?php

require "fungsi.php";

$npp = $_POST['npp'];
$nama_dosen= $_POST['nama-dosen'];
$homebase =$_POST['homebase'];

if (empty($npp) || empty($nama_dosen) || empty($homebase)) {
    die('Field input tidak boleh kosong');
} else {
    $query = "insert into dosen (npp, namadosen, homebase) values ('$npp', '$nama_dosen', '$homebase')";
    mysqli_query($connection, $query);
    
    header("location:addDosen.php");
}

?>