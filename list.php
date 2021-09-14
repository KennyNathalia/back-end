<?php
	include "config.php";
	connection();

    $result = lists();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>List</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
	<?php include "header.php";?>
	<a class="btn btn-info" href="index.php" role="button">
		<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
  			<path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
		</svg>
	</a>

	<button type="button" class="btn btn-warning">
		<h2>
			<a href="update.php?id=<?php echo $result['id'] ?>" class="text-white" style="text-decoration: none;">Update</a>
		</h2>
	</button>

	<button type="button" class="btn btn-danger">
		<h2>
			<a href="deleteList.php?<?php echo $result['id'] ?>" class="text-white" style="text-decoration: none;">Delete</a>
		</h2>
	</button>

	<?php include "footer.php";?>
</body>
</html>