<?php

require "fungsi.php";

$npp = $_GET['npp'];

if (empty($npp)) {
    die('NPP tidak boleh kosong');
}

$query = "delete from dosen where npp = '$npp'";

mysqli_query($connection, $query);
header("location:updateDosen.php");