<?php
include "fungsi.php";
$npp=$_GET['qnpp1'].".".$_GET['qnpp2'].".".$_GET['qnpp3'];
$sql="select namadosen from dosen where npp='$npp'";
$qry=mysqli_query($connection,$sql) or die(mysqli_error($connection));
$hsl=mysqli_fetch_row($qry);
echo $hsl[0];
?>