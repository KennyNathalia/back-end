<?php
	include "config.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Add task</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1 class="text-center bg-info pb-2">Add a task</h1>
	<a class="btn btn-info" href="index.php" role="button">
		<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
  			<path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
		</svg>
	</a>

	<!-- form om een list te maken -->
		<form name="create" method="post" action="createTask.php">
			<input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
			<div class="form-group text-center">
				<label for="">Task name</label>
				<input class="ml-auto mr-auto form-control w-50 " type="text" name="name" placeholder="Task name" required><br>
			</div>

			<div class="form-group text-center">
				<label for="">Description</label>
				<input class="ml-auto mr-auto form-control w-50 " type="text" name="description" placeholder="Description"><br>
			</div>

			<div class="form-group mb-1 text-center">
			    	<label for="duration">Duration</label>
			    	<input type="number" class="ml-auto mr-auto form-control w-25" name="duration" placeholder="Duration" min="0" max="1000000" required>
			</div>

			<div class="form-group mb-1 text-center">
		      <label class="" for="status">Status</label>
		      <select class="ml-auto mr-auto form-control w-25" name="color" id="status">
		        <option selected>Choose a color</option>
		        <option value="None">None</option>
		        <option value="green">Green</option>
		        <option value="orange">Orange</option>
		        <option value="red">Red</option>
		      </select>
		    </div>



			<input type="submit" class="btn btn-info">
		</form>

	</body>
</html>