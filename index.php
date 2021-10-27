<?php
	include "config.php";
	require "filterTask.php";
	
	if ($_SERVER['REQUEST_METHOD'] == "POST"){
		echo "gepost";
		$result = lists();
		//$list = sortDuration($_POST['sort']);
	}else{
		//echo "geget";
		$result = lists();
	}
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
	 <div id="lists" class="container">
	 	<div class="">
	 		<div class="list col">
		 	 <?php foreach ($result as $list) { ?>

		 	 	
		 	 	<a class="" href="update.php?id=<?php echo $list['id'] ?>"><?php echo $list['list_name'] ?></a>

		 	 	<div class="row ml-1">

				<button type="button" class="btn btn-secondary btn-lg">
						<a href="addTask.php?id=<?php echo $list['id'] ?>" class="text-white" style="text-decoration: none;">Add Task +</a>
				</button>


				<button type="button" class="btn btn-danger btn-lg">
						<a href="deleteList.php?id=<?php echo $list['id'] ?>" class="text-white" style="text-decoration: none;">Delete</a>
				</button>

				<div class="dropdown ml-auto">

					<form action="index.php" method="POST">
	                  <label><b>Filter:</b></label>
	                    <select name="sort">
	                        <option value="ASC">Duration Ascending</option> 
	                  		<option value="DESC">Duration Descending</option>
	                  		<option value="COLOR ASC">Color Ascending</option> 
	                  		<option value="COLOR DESC">Color Descending</option>
	                    </select>
	                  <input type="submit" value="update">
               		</form>

				</div>

			</div>

			<div class="row">

				<?php
				$test = taskByListId($list['id']);
					if ($_SERVER['REQUEST_METHOD'] == "POST"){
						$test = sortDuration($list['id']);
					}
					foreach ($test as $task) { ?>  
				
                <div class="task col-4">
                	<a class="" href="updateT.php?id=<?php echo $task['id'] ?>"><?php echo $task['taskName'] ?></a>

                    <p><?php echo $task['description'] ?></p>
                    <p>Tijd: <?php echo $task['duration'] ?> minuten</p>
                    

                   

                <button type="button" class="btn btn-danger btn-lg">
					<a href="deleteTask.php?id=<?php echo $task['id'] ?>" class="text-white" style="text-decoration: none;">Delete</a>
			    </button>

				<p>
				<?php 
                    if($task["status"] == "green"){

						echo '<section class="green">';
										
	        		} else if ($task["status"] == "orange"){
						echo '<section class="orange">';
										
	        		} else if ($task["status"] == "red"){
						echo '<section class="red">';
					}
				?>
                </p>

                <p class="btn invisible"></p>

                </div>


                <?php } ?>
            </div>

		 	 <?php } ?>
		 	</div>
	 	</div>
	 </div>




	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>