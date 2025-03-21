<?php
//memanggil file pustaka fungsi
require "fungsi.php";

//memindahkan data kiriman dari form ke var biasa
$id=$_GET["kode"];

//membuat query hapus data
$sql="delete from mhs where id=$id";
mysqli_query($connection,$sql);
header("location:updateMhs.php");
?>