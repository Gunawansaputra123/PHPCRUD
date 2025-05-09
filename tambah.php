<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Mahasiswa</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
</head>
<body>
	<?php
	require "head.html";
	?>
	<div class="container">
		<h2>TAMBAH DATA MAHASISWA</h2>	
		<form method="post" action="simpanTambah.php" enctype="multipart/form-data">
			<div class="form-group">
				<label for="nim">NIM:</label>
				<input class="form-control" type="text" name="nim" id="nim" required>
			</div>
			<div class="form-group">
				<label for="nama">Nama:</label>
				<input class="form-control" type="text" name="nama" id="nama">
			</div>
			<div class="form-group">
				<label for="email">Email:</label>
				<input class="form-control" type="email" name="email" id="email">
			</div>
			<div class="form-group">
				<label for="foto">Foto</label> 
				<input class="form-control" type="file" name="foto" id="foto">
			</div>
			<div>		
				<button class="btn btn-primary" type="submit">Simpan</button>
			</div>
		</form>
	</div>	
</body>
</html>