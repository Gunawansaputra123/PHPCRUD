<!DOCTYPE html>
<html>
<head>
	<title>Sistem Informasi Akademik::Tambah Data Mahasiswa</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/styleku.css">
	<script src="bootstrap/jquery/3.3.1/jquery-3.3.1.js"></script>
	<script src="bootstrap/js/bootstrap"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	<?php
	require "head.html";
	?>
	<div class="utama">		
		<br><br><br>		
		<h3>TAMBAH DATA MAHASISWA</h3>
		<div class="alert alert-success alert-dismissible" id="success" style="display:none;">
	  		<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
		</div>	
		<form method="post" action="sv_addMhs.php" enctype="multipart/form-data">
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
				<button type="submit" class="btn btn-primary" value="Simpan">Simpan</button>
			</div>
		</form>
	</div>
	<!--
	<script>
		$(document).ready(function(){
			$('#butsave').on('click',function(){			
				$('#butsave').attr('disabled', 'disabled');
				var nim 	= $('#nim').val();
				var nama	= $('#nama').val();
				var email 	= $('#email').val();
				
				$.ajax({
					type	: "POST",
					url		: "sv_addMhs.php",
					data	: {
								nim:nim,
								nama:nama,
								email:email
							  },
					contentType	:"undefined",					
					success : function(dataResult){						
						alert('success');
						$("#butsave").removeAttr("disabled");
						$('#fupForm').find('input:text').val('');
						$("#success").show();
						$('#success').html(dataResult);	
					}	   
				});
			});
		});
	</script>
	-->	

	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>