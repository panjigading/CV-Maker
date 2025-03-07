<!-- Nama : Panji Sunaring Gading -->
<!-- NIM  : 245150400111007       -->

<?php
session_start();

if ($_GET["logout"] == 't') {
	session_unset();
	session_destroy();
}

if($_SERVER["REQUEST_METHOD"] == "POST") {
	check_password();
}

function check_password() {
	$parsed_email = explode("@", $_POST["email"]);

	if ($parsed_email[1] == $_POST["password"]) {
		$_SESSION["logged_in"] = true;
		$_SESSION["email"] = $_POST["email"];
		header('Location: ' . "/form.php", true, 303);
		die();
	} else {
		$_SESSION["logged_in"] = false;
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<title>CV Maker</title>
	<style>
		body {
			max-width: 80ch;
			padding: 1rem;
			margin: 0 auto;
		}
	</style>
</head>
<body>
	<h1 class="mt-5 mb-3">Selamat Datang di CV Maker</h1>
	<p class="mb-5">Silahkan login</p>
	<form action="" method="post">
		<div class="mb-3">
			<label for="email" class="form-label">Email: </label>
			<input type="email" class="form-control" name="email" id="email">
		</div>
		<div class="mb-3">
			<label for="password" class="form-label">Password: </label>
			<input type="password"  class="form-control" name="password" id="password">
		</div>
		<button type="submit" class="btn btn-primary">Log In</button>
	</form>
	<?php
	if ($_SESSION["logged_in"] === false) {
		echo("<p class=\"mt-3 alert alert-info\">Login tidak berhasil</p>");
	}
	?>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
