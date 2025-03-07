<!-- Nama : Panji Sunaring Gading -->
<!-- NIM  : 245150400111007       -->


<?php
session_start();
if (!$_SESSION["logged_in"]) {
	$_SESSION["logged_in"] = false;
	header('Location: ' . "/", true, 303);
	die();
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<title>Form - CV Maker</title>
	<style>
		body {
			max-width: 80ch;
			padding: 1rem;
			margin: 0 auto;
		}
		textarea {
			height: 200px;
		}
	</style>
	
</head>
<body>
	<p><a href="/?logout=t">Log Out</a></p>
	<h1>Pengisian form</h1>
	<p>Data-data yang anda input akan kami gunakan saat membuat CV anda</p>
	<form action="cv.php" method="post" target="_blank">
		<div class="mb-3">
			<label for="nama" class="form-label">Nama Panjang: </label>
			<input type="text" name="nama" id="nama" class="form-control" required>
		</div>
		<div class="mb-3">
			<label for="tempat_lahir" class="form-label">Tempat lahir: </label>
			<input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control" required>
		</div>
		<div class="mb-3">
			<label for="tanggal_lahir" class="form-label">Tanggal lahir: </label>
			<input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control" required>
		</div>
		<div class="mb-3">
			<label for="riwayat_pendidikan" class="form-label">Riwayat Pendidikan: </label>
			<textarea name="riwayat_pendidikan" height="20" id="riwayat_pendidikan" class="form-control" required></textarea>
		</div>
		<button type="submit" class="btn btn-primary">Buat CV</button>
	</form>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
