<?php
	require "config.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Add list</title>
</head>
<body>
	<h1>Voeg een lijst toe</h1>
		<form name="create" method="post" action="createList.php">
			<label for="">List name</label>
			<input type="text" name="name" placeholder="Vul naam in"><br>
			<input type="submit">
		</form>
</body>
</html>