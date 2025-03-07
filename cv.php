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
	<title>Curriculum Vitae</title>
	<style>
	body {
	  max-width: 80ch;
	  margin: 0 auto;
	  padding: 12px;
	}
	
	h1 {
	  text-align: center;
	  margin-bottom: 50px;
	}
	
	td {
	  padding-right: 24px;
	}
	
	h2 {
	  border-bottom: 3px solid black;
	  margin-top: 50px;
	}
	</style>
</head>
<body>
<h1>Curriculum Vitae</h1>
<table>
	<tr>
		<td>Nama</td>
		<td>: <?= $_POST["nama"] ?></td>
	</tr>
	<tr>
		<td>Tempat, tanggal lahir</td>
		<td>: <?= $_POST["tempat_lahir"] . ", " . date("j F Y", strtotime($_POST["tanggal_lahir"])) ?></td>
	</tr>
	<tr>
		<td>Email</td>
		<td>: <?= $_SESSION["email"] ?></td>
	</tr>
</table>
<h2>Riwayat Pendidikan</h2>
<p><?= nl2br($_POST["riwayat_pendidikan"]) ?></p>
</body>
</html>
