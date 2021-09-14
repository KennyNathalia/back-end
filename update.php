<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Update List</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
	<?php include "header.php";?>

		<form name="update" method="post" action="updateList.php">
			<div class="form-group d-flex justify-content-center">
				<input type="hidden" name="id" value="<?=$employee["id"] ?>"/>
				<label for="">Edit list name</label>
				<input class="form-control w-50 " type="text" name="name" placeholder="Vul naam in" required><br>
			</div>
			<input type="submit" class="btn btn-info">
		</form>

	<?php include "footer.php";?>
</body>
</html>