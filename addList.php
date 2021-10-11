<?php
	include "config.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Add list</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
	<h1 class="text-center bg-info pb-2">Voeg een lijst toe</h1>
	<a class="btn btn-info" href="index.php" role="button">
		<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
  			<path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
		</svg>
	</a>
		<form name="create" method="post" action="createList.php">
			<div class="form-group d-flex justify-content-center">
				<label for="">List name</label>
				<input class="form-control w-50 " type="text" name="name" placeholder="Vul naam in" required><br>
			</div>
			<input type="submit" class="btn btn-info">
		</form>
</body>
</html>