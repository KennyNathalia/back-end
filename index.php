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
	<link rel="stylesheet" type="text/css" href="style.css">
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
	 	<div class="" >
	 		<div class="list">
		 	 <?php foreach ($result as $list) { ?>
		 	 	
		 	 	<a class="" href="update.php?id=<?php echo $list['id'] ?>"><?php echo $list['list_name'] ?></a>

				<button type="button" class="btn btn-secondary btn-lg">
						<a href="addTask.php?id=<?php echo $list['id'] ?>" class="text-white" style="text-decoration: none;">Add Task +</a>
				</button>


				<button type="button" class="btn btn-danger btn-lg">
						<a href="deleteList.php?id=<?php echo $list['id'] ?>" class="text-white" style="text-decoration: none;">Delete</a>
				</button>

				<?php foreach (taskByListId($list['id']) as $task) { ?>
                <div class="task">
                	<a class="" href="updateT.php?id=<?php echo $task['id'] ?>"><?php echo $task['taskName'] ?></a>

                    <p><?php echo $task['description'] ?></p>
                    <p>Tijd: <?php echo $task['duration'] ?> minuten</p>
                    <p><?php echo $task['status'] ?></p>

                    <button type="button" class="btn btn-danger btn-lg">
						<a href="deleteTask.php?id=<?php echo $task['id'] ?>" class="text-white" style="text-decoration: none;">Delete</a>
					</button>

                </div>
                <?php } ?>

		 	 <?php } ?>
		 	</div>
	 	</div>
	 </div>

	 
</body>
</html>