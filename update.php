<?php
	include "config.php";

	$result = lists();
	$id = $_GET['id'];
	$list = listById($id);


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Update List</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
	<?php include "header.php";?>

	<a class="btn btn-info" href="index.php" role="button">
		<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
  			<path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
		</svg>
	</a>

		<form name="update" method="post" action="updateList.php">
			<div class="form-group text-center">
				<input type="hidden" name="id" value="<?php echo $list['id'] ?>"/>
				<label for="">Edit list name</label>
			</div>

			<div class="form-group text-center">
				<input class="form-control w-50 mx-auto" type="text" name="list_name" placeholder="Vul naam in" value="<?php echo $list['list_name'] ?>" required>
			</div>

			<input type="submit" class="btn btn-info">
		</form>

</body>
</html>