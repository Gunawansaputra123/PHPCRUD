<!DOCTYPE html>
<html>
<head>
	<title>Sistem Informasi Akademik::Edit Data Dosen</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/styleku.css">
	<script src="bootstrap/jquery/3.3.1/jquery-3.3.1.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
	<?php
	require "fungsi.php";
	require "head.html";
	$npp=$_GET['npp'];
	$sql="select * from dosen where npp='$npp'";
	$qry=mysqli_query($connection,$sql);
	$row=mysqli_fetch_assoc($qry);
	?>
	<div class="utama">
		<h2 class="mb-3 text-center">EDIT DATA DOSEN</h2>	
		<div class="row">
		<div class="col-sm-9">
			<form method="post" action="sv_editDosen.php">
				<div class="form-group">
					<label for="npp">NPP:</label>
					<input class="form-control" type="text" name="npp" id="npp" value="<?php echo $row['npp']?>" readonly>
				</div>
				<div class="form-group">
					<label for="nama">Nama:</label>
					<input class="form-control" type="text" name="nama-dosen" id="nama" value="<?php echo $row['namadosen']?>">
				</div>
				<div class="form-group">
					<label for="homebase">Homebase:</label>
					<input class="form-control" name="homebase" id="homebase" value="<?php echo $row['homebase']?>">
				</div>				
				<div>		
					<button class="btn btn-primary" type="submit" id="submit">Simpan</button>
				</div>
				<input type="hidden" name="id" id="id" value="<?php echo $id?>">
			</form>
		</div>
		</div>
	</div>
</body>
</html>