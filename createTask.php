<?php
	include "config.php";

	function create(){
		$conn = connection();
		$query = $conn->prepare("INSERT INTO tasks (taskName, description, list_id) VALUES (:taskName, :description, :list_id)");
        $query->bindParam(":taskName", $_POST['name']);
        $query->bindParam(":description", $_POST['description']);
        $query->bindParam(":list_id", $_POST['id']);
        $query->execute();
	}

	create();
	header( "Location: index.php" );
?>