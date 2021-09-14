<?php
	include "config.php";

	$result = lists();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>to do list</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
	<?php include "header.php";?>
	<nav>
		<div class="text-center">
			<button type="button" class="btn btn-dark">
				<h2><a href="addList.php" class="text-white" style="text-decoration: none;">New list</a></h2>
			</button>
		</div>

	</nav>
	 <h2 class="text-center">Your lists</h2>
	 <div id="lists">
	 	 <?php foreach ($result as $list) { ?>
	 	 	<a class="" href="update.php?id=<?php echo $list['id'] ?>"><?php echo $list['list_name'] ?></a>

	 	 	<button type="button" class="btn btn-danger">
		<h2>
			<a href="deleteList.php?id=<?php echo $list['id'] ?>" class="text-white" style="text-decoration: none;">Delete</a>
		</h2>
	</button>
	 	 <?php } ?>
	 </div>

	 <?php include "footer.php";?>
</body>
</html>