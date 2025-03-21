
<?php
//memanggil file pustaka fungsi
require "fungsi.php";

//memindahkan data kiriman dari form ke var biasa
$username=$_POST["username"];
$status=$_POST["status"];
$password=$_POST["password"];
$uploadOk=1;

//membuat query
$sql="insert mhs values('','$username','$password','$status')";
mysqli_query($connection, $sql);
header("location:addMhs.php");
echo "Data gagal tersimpan";
?>