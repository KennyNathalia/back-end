<?php
	include "config.php";

	function create(){
		$conn = connection();
		$query = $conn->prepare("INSERT INTO tasks (taskName) VALUES (:taskName)");
        $query->bindParam(":taskName", $_POST['name']);
        $query->execute();
	}

	create();
	header( "Location: index.php" );
?>